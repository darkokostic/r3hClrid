'use strict';

zanatlija.controller("IndexController" ,function ($scope, $http, $window) {
	$("#logout").click(function(){
	    Parse.User.logOut();
	    alert("You have logged out!");
		$window.location.href = "";
	});
});

zanatlija.controller("LoginController",function ($scope, $http, $window) {
	$scope.getLoginData = function($event) {
		$event.preventDefault();
		var username = '';
		var password = '';

		username = $scope.user.username;
		password = $scope.user.password;
		$event.preventDefault();
		$scope.user = [];
		Parse.User.logIn(username, password, {
		    success: function(user) {
			  $window.location.href = "";
		    },
		    error: function(user, error) {
		    	console.log(error.message);
		    }
		 });
	}
});

zanatlija.controller("SignupController" ,function ($scope, $http, $window, UtilSrvc) {
	$scope.user = [];

	$scope.register = function() {
		var user = new Parse.User();
		user.set("username", $scope.user.username);
		user.set("password", $scope.user.password);
		user.set("email", $scope.user.email);

		user.signUp(null, {
		  success: function(user) {
		    alert("You are registered!");
			$window.location.href = "";
		  },
		  error: function(user, error) {
		    // Show the error message somewhere and let the user try again.
		    alert("Error: " + error.code + " " + error.message);
		  }
		});
	}
});

zanatlija.controller("ListaPodkategorijaCtrl" ,function ($scope, $http, $window, UtilSrvc) {
	$scope.goTo = function() {
		$window.location.href="#/dodaj-podkategoriju";
	}
	var podkategorije = [];
	UtilSrvc.getObject('Podkategorije')
	.then(function (data) {
		podkategorije = data;
		angular.forEach(podkategorije, function(obj){
			UtilSrvc.getObject('Kategorije')
			.then(function (data1) {
				for(var i = 0; i < data1.length; i++) {
					if(obj.kategorijeID.objectId == data1[i].objectId) {
						obj.kategorijaName = data1[i].name;
					}
				}
			});
		});
		$scope.podkategorije = podkategorije;
	});

	$scope.delete = function(objectId) {
		var Podkategorije = Parse.Object.extend("Podkategorije");
		var podkategorija = new Parse.Query(Podkategorije);
		podkategorija.get(objectId, {
		  success: function(myObj) {
		    // The object was retrieved successfully.
		    myObj.destroy({});
			alert("Uspesno ste izbrisali podkategoriju");
			window.location.reload();
		  },
		  error: function(object, error) {
		    // The object was not retrieved successfully.
		    // error is a Parse.Error with an error code and description.
		  }
		});
	}

});

zanatlija.controller("ListaOglasaCtrl" ,function ($scope, $http, $window, UtilSrvc) {
	$scope.goTo = function() {
		$window.location.href="#/dodaj-oglas";
	}
	var oglasi = [];
	UtilSrvc.getObject('Oglasi')
	.then(function (data) {
		oglasi = data;
		angular.forEach(oglasi, function(obj){
			UtilSrvc.getObject('Podkategorije')
			.then(function (data1) {
				for(var i = 0; i < data1.length; i++) {
					if(obj.podkategorijaID.objectId == data1[i].objectId) {
						obj.podkategorijaName = data1[i].name;
					}
				}
			});
		});
		$scope.oglasi = oglasi;
	});

	$scope.delete = function(objectId) {
		var Oglasi = Parse.Object.extend("Oglasi");
		var oglasi = new Parse.Query(Oglasi);
		oglasi.get(objectId, {
		  success: function(myObj) {
		    // The object was retrieved successfully.
		    myObj.destroy({});
			alert("Uspesno ste izbrisali oglas");
			window.location.reload();
		  },
		  error: function(object, error) {
		    // The object was not retrieved successfully.
		    // error is a Parse.Error with an error code and description.
		  }
		});
	}

});

zanatlija.controller("ListaOpstinaCtrl" ,function ($scope, $http, $window, UtilSrvc) {
	$scope.goTo = function() {
		$window.location.href="#/dodaj-opstinu";
	}
	var opstine = [];
	UtilSrvc.getObject('Opstina')
	.then(function (data) {
		opstine = data;
		$scope.opstine = opstine;
	});

	$scope.delete = function(objectId) {
		var Opstine = Parse.Object.extend("Opstina");
		var opstine = new Parse.Query(Opstine);
		opstine.get(objectId, {
		  success: function(myObj) {
		    // The object was retrieved successfully.
		    myObj.destroy({});
			alert("Uspesno ste izbrisali opštinu");
			window.location.reload();
		  },
		  error: function(object, error) {
		    // The object was not retrieved successfully.
		    // error is a Parse.Error with an error code and description.
		  }
		});
	}

});

zanatlija.controller("DodajPodkategorijuCtrl" ,function ($scope, $window, UtilSrvc, $http) {
	$scope.name = '';

	UtilSrvc.getObject('Kategorije')
	.then(function (data) {
		$scope.kategorije = data;
	});

	$scope.add = function() {
		var name = '';
		if($scope.name !== ' ') {
			name = $scope.name;
		}
		var Podkategorije = Parse.Object.extend("Podkategorije");
		var podkategorije = new Podkategorije();
		var currentUser = Parse.User.current();
		podkategorije.set("name", name);
		podkategorije.set("kategorijeID", {"__type":"Pointer","className":"Kategorije","objectId":""+ $scope.selectedCategory.objectId +""});

		var fileElement = $("#post-file")[0];
	    var filePath = $("#post-file").val();
      	var fileName = filePath.split("\\").pop();

		var file = fileElement.files[0];
		var newFile = new Parse.File(fileName, file);


		newFile.save({
		  success: function() {

		  },
		  error: function(file, error) {
			alert("Error: " + error.message);
		  }
		}).then(function(theFile) {
		  podkategorije.set("image", theFile);
		  podkategorije.save(null,{
			success:function(podkategorije) {
			},
			error:function(podkategorije, error) {
				alert("Error:" + error.message);
			}
		  });
		});

		podkategorije.save(null, {
		  success: function(podkategorije) {
		    alert('Dodali ste podkategoriju');
			$window.location.href="#/lista-podkategorija";
		  },
		  error: function(podkategorije, error) {
		    alert('Failed to post pomoc: ' + error.message);
		  }
		});
	}
});

zanatlija.controller("DodajOglasCtrl" ,function ($scope, $window, UtilSrvc, $http) {
	$scope.name = '';
	$scope.address = '';
	$scope.workingTime = '';
	$scope.phone = '';
	$scope.description = '';
	$scope.showMe = false;
	UtilSrvc.getObject('Kategorije')
	.then(function (data) {
		$scope.kategorije = data;
	});

	UtilSrvc.getObject('Opstina')
	.then(function (data) {
		$scope.opstine = data;
	});

	$scope.getSubCategory = function() {
	  var podkategorije = [];
	  UtilSrvc.getObject('Podkategorije')
		.then(function (data) {
		  for(var i = 0; i < data.length; i++) {
			if($scope.selectedCategory.objectId == data[i].kategorijeID.objectId) {
			  podkategorije.push(data[i]);
			}
		  }
		  $scope.podkategorije = podkategorije;
	  });
	  $scope.showMe = true;
	}


	$scope.add = function() {
		var name = '';
		var address = '';
		var workingTime = '';
		var phone = '';
		var description = '';
		if($scope.name !== ' ') {
			name = $scope.name;
		}

		address = $scope.address;
		workingTime = $scope.workingTime;
		phone = $scope.phone;
		description = $scope.description;

		var Oglasi = Parse.Object.extend("Oglasi");
		var oglasi = new Oglasi();
		var currentUser = Parse.User.current();
		var emptyArray = [0];
		oglasi.set("name", $scope.name);
		oglasi.set("podkategorijaID", {"__type":"Pointer","className":"Podkategorije","objectId":""+ $scope.selectedSubCategory.objectId +""});
		oglasi.set("OpstinaID", {"__type":"Pointer","className":"Opstina","objectId":""+ $scope.selectedOpstina.objectId +""});

		oglasi.set("address", $scope.address);
		oglasi.set("workingTime", $scope.workingTime);
		oglasi.set("tel", $scope.phone);
		oglasi.set("opis", $scope.description);
		//oglasi.set("cena", emptyArray);
		//oglasi.set("kvalitet", emptyArray);
		//oglasi.set("usluga", emptyArray);

		var fileElement = $("#post-file")[0];
	    var filePath = $("#post-file").val();
      	var fileName = filePath.split("\\").pop();

		var file = fileElement.files[0];
		var newFile = new Parse.File(fileName, file);


		newFile.save({
		  success: function() {

		  },
		  error: function(file, error) {
			alert("Error: " + error.message);
		  }
		}).then(function(theFile) {
		  oglasi.set("image", theFile);
		  oglasi.save(null,{
			success:function(oglasi) {
			},
			error:function(oglasi, error) {
				alert("Error:" + error.message);
			}
		  });
		});

		oglasi.save(null, {
		  success: function(oglasi) {
		    alert('Dodali ste oglas');
			$window.location.href="#/lista-oglasa";
		  },
		  error: function(oglasi, error) {
		    alert('Failed to post: ' + error.message);
		  }
		});
	}
});

zanatlija.controller("DodajOpstinuCtrl" ,function ($scope, $window, UtilSrvc, $http) {
	$scope.name = '';

	$scope.add = function() {
		var name = $scope.name;
		var Opstine = Parse.Object.extend("Opstina");
		var opstine = new Opstine();
		var currentUser = Parse.User.current();
		opstine.set("opstinaName", name);
		opstine.save(null, {
		  success: function(opstine) {
		    alert('Dodali ste opštinu');
			$window.location.href="#/lista-opstina";
		  },
		  error: function(opstine, error) {
		    alert('Failed to post: ' + error.message);
		  }
		});
	}
});
