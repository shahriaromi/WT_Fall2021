function validateForm() {
  var firstName = document.getElementById('firstName').value;
  var lastName = document.getElementById('lastName').value;
  var age = document.getElementById('age').value;
  var email = document.getElementById('email').value;
  var email = document.getElementById('designation').value;
  var email = document.getElementById('language').value;
  var email = document.getElementById('file').value;

  if (
    firstName == '' ||
    lastName == '' ||
    age == '' ||
    email == '' ||
    designation == '' ||
    language == '' ||
    file == ''
  ) {
    document.getElementById('show').innerHTML = 'please enter all the fields';
    return false;
  }
  return true;
}
