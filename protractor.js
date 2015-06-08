it('should check ng-bind-html', function() {
  expect(element(by.binding('myHTML')).getText()).toBe(
      'View Prescriptions');
});
it('should check ng-bind-html', function() {
  expect(element(by.binding('myHTML1')).getText()).toBe(
      'Take Appointment');
});
it('should check ng-bind-html', function() {
  expect(element(by.binding('myHTML2')).getText()).toBe(
      'Add Patient');
});
it('should check ng-bind-html', function() {
  expect(element(by.binding('myHTML3')).getText()).toBe(
      'Add Doctor');
});
it('should check ng-bind-html', function() {
  expect(element(by.binding('myHTML4')).getText()).toBe(
      'Create Appointment');
});