var app = angular.module("myApp", ["ngRoute"]);

app.config(function ($routeProvider) {
    $routeProvider
        .when("/hom", {
            templateUrl: "home.html",
            controller: "homeController"
        })
        .when("/about", {
            templateUrl: "about.html",
            controller: "aboutController"
        })
        .when("/contact", {
            templateUrl: "contact.html",
            controller: "contactController"
        })
        .otherwise({
            redirectTo: "/home"
        });
});

app.controller("mainController", function ($scope) {
    $scope.menuItems = [
        { name: "Home", link: "#!/home" },
        { name: "About", link: "#!/about" },
        { name: "Contact", link: "#!/contact" }
    ];
});

app.controller("homeController", function ($scope) {
    $scope.message = "Welcome to the Home Page!";
});

app.controller("aboutController", function ($scope) {
    $scope.message = "Learn more about us on the About Page!";
});

app.controller("contactController", function ($scope) {
    $scope.message = "Contact us by filling out the form on the Contact Page!";
});
