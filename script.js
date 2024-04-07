// Button about
$(document).on('click', '.About', function(event) {
  CloseAbout(false)
  });
// Button Add Aplication
  $(document).on('click', '.AddApplication', function(event) {
    CloseAbout(true)
  });
// Button Feedback
  $(document).on('click', '.Feedback', function(event) {
    CloseAbout(true)
  });
  // Button  Login
$(document).on('click', '.LogIn', function(event) {
  CloseAbout(true)
    var Login = document.querySelector('.TabelLogin');
    var AddAplication = document.querySelector('.AddAplication')
    var SignUp = document.querySelector('.TabelSignUp');
    AddAplication.style.display = "none";
    SignUp.style.display = "none"
    Login.style.display = "block"
  });


// Button Close Login
$(document).on('click', '.closeLogIn', function(event) {
  CloseAbout(false)
    var Login = document.querySelector('.TabelLogin');
    Login.style.display = "none"
  });

    // Button  SignUp
$(document).on('click', '.SignUp', function(event) {
  CloseAbout(true)
    var SignUp = document.querySelector('.TabelSignUp');
    var AddAplication = document.querySelector('.AddAplication')
    AddAplication.style.display = "none";
    SignUp.style.display = "block"
  });

  // Button Close SignUp
$(document).on('click', '.closeSignUp', function(event) {
  CloseAbout(false)
    var SignUp = document.querySelector('.TabelSignUp');
    SignUp.style.display = "none"
  });
  // Button Have Account?
  $(document).on('click', '.HaveAccount', function(event) {
    CloseAbout(true)
    var SignUp = document.querySelector('.TabelSignUp');
    var Login = document.querySelector('.TabelLogin');
    Login.style.display = "block";
    SignUp.style.display = "none";
  });
    // Button Add Aplication Page
    // $(document).on('click', '.AddApplicationText', function(event) {
    //   CloseAbout(true)
    //   var AddAplication = document.querySelector('.AddAplication')
    //   var SignUp = document.querySelector('.TabelSignUp');
    //   var Login = document.querySelector('.TabelLogin');
    //   AddAplication.style.display = "block";
    //   Login.style.display = "none";
    //   SignUp.style.display = "none";
    // });

function CloseAbout(solution){
  var paragrafAbout = document.querySelector('.ParagrafHomePage');
  var verifystats = document.querySelector('.VerificareStatus');
  if(solution){
  paragrafAbout.style.display = "none";
  verifystats.style.display =  "none";
  }else if(!solution){
    paragrafAbout.style.display = "block";
    verifystats.style.display =  "block";
  }
}
