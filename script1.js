(function(angular) {
  'use strict';
angular.module('bindHtmlExample1', ['ngSanitize'])
  .controller('ExampleController1', ['$scope', function($scope) {
    $scope.myHTML2 =
       '<a href="signup.php">Add Patients</a>';
	$scope.myHTML3=
	    '<a href="doctors.php">ADD Doctor</a>';
	$scope.myHTML4=
	'<a href="appointment.php">Create Appointment</a>';
  }]);
})(window.angular);