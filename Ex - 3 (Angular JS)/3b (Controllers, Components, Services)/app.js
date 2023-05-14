app = angular.module('myApp', []);


app.component('myComponent', {
    templateUrl: 'my-component.html',
    controller: function () {
        var vm = this;
        vm.name = 'Vineet Kumar';
    }
});

app.service('myService', function () {
    this.getMessage = function () {
        return "This is a message from the service.";
    };
})

app.controller('myController', function ($scope, myService) {
    $scope.title = "My AngularJS App";
    $scope.message = myService.getMessage();
});
