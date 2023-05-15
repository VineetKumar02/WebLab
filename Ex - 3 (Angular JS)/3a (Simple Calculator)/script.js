// Code goes here
function CalculatorCtrl($scope) {

    $scope.a = 0;
    $scope.b = 0;
    $scope.operation = '+';

    $scope.inca = function () {
        $scope.a = $scope.a + 1;
    }

    $scope.incb = function () {
        $scope.b = $scope.b + 1;
    }

    $scope.deca = function () {
        $scope.a = $scope.a - 1;
    }

    $scope.decb = function () {
        $scope.b = $scope.b - 1;
    }

    $scope.calculate = function () {
        if ($scope.operation == '+') {
            return $scope.a + $scope.b;
        }
        if ($scope.operation == '-') {
            return $scope.a - $scope.b;
        }
        if ($scope.operation == '*') {
            return $scope.a * $scope.b;
        }
        if ($scope.operation == '/') {
            return $scope.a / $scope.b;
        }
        return "undef";
    }
}
