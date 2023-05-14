const app = angular.module("myApp", ["ngRoute"]);

app.config(function ($routeProvider) {
    $routeProvider
        .when("/search", {
            templateUrl: "search.html",
            controller: "appcontroller"
        })
        .when("/contact", {
            templateUrl: "contact.html"
        })
        .otherwise({ redirectTo: "/" });
});
