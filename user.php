<?php
include('connection.php');

session_start();
if(!isset($_SESSION['name'])){

    header("location:login.php");


}
if($_SESSION['usertype']=="developer"){
    header("location:admin.php");
}





?>
<html>
    <head>

        <link href = "style2.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>    
        <script type ="text/javascript" src="script2.js"></script>

    </head>
<body>
    <title>Status Aplicatii</title>
    <div class = "bkiamge"></div>
        <div class = "bardirection2">
            <img src = "images/ImgAvatar.png" class = "AvatarLogo">
   
            <img src = "images/buttonmenu.png" class = "ButtonMenu">
            <img src = "images/logo.png" class = "LogoBar">
            <div class = "TextUsername"></div>

            <div class = "usernameTextLogin"><?php echo $_SESSION['name'] ?></div>
            <div class = "TextLogo">TrioTech</div>
            <div class = "About">About</div>

            <!-- <h1>Welcome, <?php echo $_SESSION['name'] ?>!</h1> -->
            <!-- <div class = "AddApplicationText">Add Application</div> -->
        </div>

        <div class = "FrameAplicatiiCreate">
        <div class="AplicatieStabila">
        <Div class="OvalAplicatii">
           <img src="images/youtube.png"class="LogoAplicationView"> 
        </div>
        <div class="NameAplicationVrf">Royal Food</div>
        <div class="ButtonStatsApp">Verifica Statusul Aplicatiei</div>
        <div class="FrameStatsAplication">
            <div class="StatsAppText">Statusul aplicatiei</div>
            <div class="StatusAplicatie"></div> 
            <div class="StatusAplicatie2"></div> 
            <div class="StatusAplicatie3"></div> 
            <div class="StatusAplicatie4"></div> 
            <div class="StatusAplicatie5"></div> 
            <div class="StatusAplicatie6"></div> 
            <div class="StatusAplicatie7"></div>
            <div class="StatusAplicatie8"></div>
            <div class="StatusAplicatie9"></div>
            <div class="StatusAplicatie10"></div>
            <div class="StatusAplicatie11"></div>    
            <div class="StatusAplicatie12"></div>  
            <div class="SetButtonDeleteAplication" id="reportBug">Raporteaza Bug</div>
            <script>
        document.getElementById('reportBug').addEventListener('click', function() {
        document.querySelector('.StatusAplicatie12').style.backgroundColor = 'yellow';
        });
        </script>
        </div>
     </div>
    </div>

        <div class = "VerificareStatus">Verificare Status</div>
        <p class = "ParagrafHomePage">
            Statusul aplicației poate fi de ajutor utilizatorilor în mai multe moduri. În primul rând, utilizatorii pot obține o imagine de ansamblu asupra sănătății și funcționării aplicației pe care o utilizează, având acces la informații în timp real despre starea endpoint-urilor. Acest lucru le permite să fie la curent cu orice probleme sau instabilități care ar putea afecta experiența lor în timp real și să evite frustrarea cauzată de indisponibilitatea serviciilor. De asemenea, utilizatorii pot raporta orice probleme pe care le întâlnesc, permițându-le echipelor de dezvoltare să reacționeze rapid și să remedieze problemele, asigurând astfel un nivel ridicat de calitate și fiabilitate a aplicației. Prin urmare, având acces la statusul aplicației, utilizatorii pot lua decizii informate și pot avea încredere că vor beneficia de o experiență optimă în utilizarea aplicației.
        </p>

    <div class = "ShowMenuUser" id="ShowMenuUser">
        <a  href="logout.php" action="login.php"  class="SignOut">LogOut</a>
        <div class="VeziAplicatiile">Vezi Aplicatiile</div>
    </div>
        </body>
</body>
</html>