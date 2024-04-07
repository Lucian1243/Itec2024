// Button Menu users
var openButtonMenu = false;
$(document).on('click', '.ButtonMenu', function(event) {
  var ButtonMenu = document.querySelector('.ShowMenuUser')
  if(!openButtonMenu){
    openButtonMenu = true;
  ButtonMenu.style.display = "block"
  }else if(openButtonMenu){
    openButtonMenu = false;
    ButtonMenu.style.display = "none"

  }
});
$(document).on('click', '.About', function(event) {
    CloseAbout(false)
    });
$(document).on('click', '.Feedback', function(event) {
    CloseAbout(true)
  });
  $(document).on('click', '.AdaugaAplicatii', function(event) {
    CloseAbout(true)
    var AddAplication = document.querySelector('.AddAplication')
    var SignUp = document.querySelector('.TabelSignUp');
    var Login = document.querySelector('.TabelLogin');
    AddAplication.style.display = "block";
    Login.style.display = "none";
    SignUp.style.display = "none";
  });

  function CloseAbout(solution){
    var paragrafAbout = document.querySelector('.ParagrafHomePage');
    var verifystats = document.querySelector('.VerificareStatus');
    console.log(solution)
    if(solution){
    paragrafAbout.style.display = "none";
    verifystats.style.display =  "none";
    }else if(!solution){
      // var AddAplication = document.querySelector('.AddAplication')
      // AddAplication.style.display = "none";
      paragrafAbout.style.display = "block";
      verifystats.style.display =  "block";
    }
  }
  
    // VeziAplicatiile
    $(document).on('click', '.VeziAplicatiile', function(event) {
      CloseAbout(true)
      openButtonMenu = false;
      var ButtonMenu = document.querySelector('.ShowMenuUser')
      ButtonMenu.style.display = "none";
      var FrameAplicatiiCreate = document.querySelector('.FrameAplicatiiCreate')
      var AplicatieStabila = document.querySelector('.AplicatieStabila')
      FrameAplicatiiCreate.style.display = "block";
      AplicatieStabila.style.display = "block";
      // openButtonMenu = false;
      });
  
      function CloseAbout(solution){
        var paragrafAbout = document.querySelector('.ParagrafHomePage');
        var verifystats = document.querySelector('.VerificareStatus');
        if(solution){
        paragrafAbout.style.display = "none";
        verifystats.style.display =  "none";
        }else if(!solution){
    
          var FrameAplicatiiCreate = document.querySelector('.FrameAplicatiiCreate')
          FrameAplicatiiCreate.style.display = "none"
          paragrafAbout.style.display = "block";
          verifystats.style.display =  "block";
        }
      }
      
      
    var opensatsapp = false;
    $(document).on('click', '.ButtonStatsApp', function(event) {
      CloseAbout(true)
      var statusframe = document.querySelector('.FrameStatsAplication')
      if(!opensatsapp){
        opensatsapp = true;
    
      statusframe.style.display = "block";
      }else if(opensatsapp){
        opensatsapp=false;
        statusframe.style.display = "none";
    
      }
    });