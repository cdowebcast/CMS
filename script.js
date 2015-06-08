(function(angular) {
  'use strict';
angular.module('bindHtmlExample', ['ngSanitize'])
  .controller('ExampleController', ['$scope', function($scope) {
    $scope.myHTML =
       '<a href="check_Prescriptions.php">View Prescriptions</a>';
	$scope.myHTML1=
	    '<a href="appointment.php">Take Appointment</a>';
  }]);
})(window.angular);