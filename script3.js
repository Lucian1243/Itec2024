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
    var ButtonMenu = document.querySelector('.ShowMenuUser')
    AddAplication.style.display = "block";
    ButtonMenu.style.display = "none";
    openButtonMenu = false;
    var FrameAplicatiiCreate = document.querySelector('.FrameAplicatiiCreate')
    var AplicatieStabila = document.querySelector('.AplicatieStabila')
    FrameAplicatiiCreate.style.display = "none";
    AplicatieStabila.style.display = "none";
  });
  $(document).on('click', '.closeAddAplication', function(event) {
    CloseAbout(false)
    var AddAplication = document.querySelector('.AddAplication')
    AddAplication.style.display = "none"
    });


  
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
  
        var AddAplication = document.querySelector('.AddAplication')
        var FrameAplicatiiCreate = document.querySelector('.FrameAplicatiiCreate')
        FrameAplicatiiCreate.style.display = "none"
        AddAplication.style.display = "none";
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

    function SetLogoAplicationAdd(value){
      console.log(value)
      if(value == null || value == ""){
      }else{
        var logoApp = document.getElementById("LipsaLogo");
        logoApp.src = value;
      }    
    }

    document.getElementByClass('reportBug').addEventListener('click', function() {
      document.querySelector('.StatusAplicatie12').style.backgroundColor = 'yellow';
      window.alert('Hello');
      
  });
    