'use strict';

var zanatlija = angular.module('myApp', []);
Parse.initialize("a4AoXutQ2mf95haI5DU3dJKTYZKX7YXxtzQOsXAS", "pQooKRQFxVeiHGi7iJnbtCdOfvHER8wDQ3RXK6wl");
zanatlija.config(function($routeProvider) {
    $routeProvider.when(
        '/dodaj-podkategoriju',
        {
        templateUrl: 'templates/dodaj-podkategoriju.html',
        controller: 'DodajPodkategorijuCtrl'
    });
    $routeProvider.when(
        '/dodaj-oglas',
        {
        templateUrl: 'templates/dodaj-oglas.html',
        controller: 'DodajOglasCtrl'
    });
    $routeProvider.when(
        '/dodaj-opstinu',
        {
        templateUrl: 'templates/dodaj-opstinu.html',
        controller: 'DodajOpstinuCtrl'
    });
    $routeProvider.when(
        '/login',
        {
        templateUrl: 'templates/login.html',
        controller: 'LoginController'
    });
    $routeProvider.when(
        '/signup',
        {
        templateUrl: 'templates/signup.html',
        controller: 'SignupController'
    });

    $routeProvider.when(
        '/lista-podkategorija',
        {
        templateUrl: 'templates/lista-podkategorija.html',
        controller: 'ListaPodkategorijaCtrl'
    });
    $routeProvider.when(
        '/lista-oglasa',
        {
        templateUrl: 'templates/lista-oglasa.html',
        controller: 'ListaOglasaCtrl'
    });
    $routeProvider.when(
        '/lista-opstina',
        {
        templateUrl: 'templates/lista-opstina.html',
        controller: 'ListaOpstinaCtrl'
    });
        // Parse user check
    if(Parse.User.current()) {
      $routeProvider.otherwise(
          {
              redirectTo: '/lista-podkategorija'
          });
  } else {
    $("#logout").hide();
    $("#notLoggedHome").hide();
    $("#notLoggedJobs").hide();
    $("#notLoggedAccommodation").hide();
    $("#notLoggedTransport").hide();
    $('#notLoggedLogo').show();
      $routeProvider.otherwise(
          {
              redirectTo: '/login'
          });
  }

});
