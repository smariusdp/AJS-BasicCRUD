var app = angular.module('onload', [
									'ngRoute'
								]);




app.config(function($routeProvider){
    $routeProvider
    .when('/',
    {
        controller: 'BookController',
        templateUrl: 'templates/home.html'
    })
    .when('/edit/:pk',
    {   
        controller: 'EditBookController',
        templateUrl: 'templates/edit.html'
    })
    .otherwise(
    {
        redirectTo: '/'
    })
})