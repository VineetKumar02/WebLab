var app = angular.module('myApp', []);
app.controller('myCtrl', function ($scope) {
    $scope.students = [
        { name: 'John', age: 18, gender: 'Male', grade: 'A' },
        { name: 'Jane', age: 17, gender: 'Female', grade: 'B' },
        { name: 'Bob', age: 19, gender: 'Male', grade: 'C' },
        { name: 'Alice', age: 16, gender: 'Female', grade: 'A' },
        { name: 'Charlie', age: 18, gender: 'Male', grade: 'B' },
        { name: 'David', age: 17, gender: 'Male', grade: 'A' },
        { name: 'Emily', age: 19, gender: 'Female', grade: 'C' },
        { name: 'Frank', age: 16, gender: 'Male', grade: 'B' }
    ];

});
