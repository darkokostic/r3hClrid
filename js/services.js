"use strict";

zanatlija.value('version', '0.1');
//Parse.initialize("a4AoXutQ2mf95haI5DU3dJKTYZKX7YXxtzQOsXAS", "pQooKRQFxVeiHGi7iJnbtCdOfvHER8wDQ3RXK6wl");

zanatlija.service("UtilSrvc", function ($http) {
    return {
        getObject: function(className) {
            return $http.get('https://api.parse.com/1/classes/' + className + '/', {
            headers: {
            'X-Parse-Application-Id':'a4AoXutQ2mf95haI5DU3dJKTYZKX7YXxtzQOsXAS',
            'X-Parse-REST-API-Key':'RIMyGtbhV4qkw1q9oG3GboQYMUMOspXQIk2QFtLh'}
            })
            .then(function(response) {
            return response.data.results;
            });
        },
        helloWorld : function(name) {
        	var result = "Hum, Hello you, but your name is too weird...";
        	if (this.isAString(name)) {
        		result = "Hello, " + name;
        	}
        	return result;
        }
    }
});
