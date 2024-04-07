<?php 
session_start();
if(isset($_SESSION['name'])){

    if($_SESSION['usertype']=="user"){
        header("location:user.php");

    }
    else{
        header("location:admin.php");
    }
}
?>
 <?php

include("Connection.php");

?> 


<html>
    <head>

        <link href = "style.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>    
        <script type ="text/javascript" src="script.js"></script>

    </head>
<body>
    <title>Status Aplicatii</title>
    <div class = "bkiamge"></div>
        <div class = "bardirection">
            <img src = "images/logo.png" class = "LogoBar">
            <div class = "TextLogo">TrioTech</div>
            <hr class="HrLog">
            <div class = "LogIn">Log In</div>
            <div class = "SignUp">Sign Up</div>
            <div class = "Feedback">Feedback</div>
            <div class = "About">About</div>
        </div>
        <div class = "VerificareStatus">Verificare Status</div>
        <p class = "ParagrafHomePage">
            Statusul aplicației poate fi de ajutor utilizatorilor în mai multe moduri. În primul rând, utilizatorii pot obține o imagine de ansamblu asupra sănătății și funcționării aplicației pe care o utilizează, având acces la informații în timp real despre starea endpoint-urilor. Acest lucru le permite să fie la curent cu orice probleme sau instabilități care ar putea afecta experiența lor în timp real și să evite frustrarea cauzată de indisponibilitatea serviciilor. De asemenea, utilizatorii pot raporta orice probleme pe care le întâlnesc, permițându-le echipelor de dezvoltare să reacționeze rapid și să remedieze problemele, asigurând astfel un nivel ridicat de calitate și fiabilitate a aplicației. Prin urmare, având acces la statusul aplicației, utilizatorii pot lua decizii informate și pot avea încredere că vor beneficia de o experiență optimă în utilizarea aplicației.
        </p>
        <div class = "TabelLogin">
            <img src = "images/image1.png" class = "Image1Login">
            <img src = "images/logo.png" class = "Image2Login">
            <div class="LogInText">Log In</div>
            <form name="form" action="login.php" method="POST">
                <label for="user" class="usernamemail">Username/Email:</label>
                <input type = "text" id ="account" name = "account" class="InputMailUSr" placeholder="Email@gmail.com" required>
                <label for ="password" class = "Password">Password:</label>
                <input type ="password" id="pass" name="pass" class = "InputPassword" placeholder = "******" required>
                <input type="submit" id="btn" value="Login" name="login" class = "ButtonLogin">
            </form>
            <hr class="HRsau1">
            <div class="TxTSau">SAU</div>
            <hr class="HRsau2">
            <div class="LoginGoogle">Sign with Google</div>
            <img src="images/google.png" class = "GoogleLogIn">
            <img src="images/x.png" class = "closeLogIn">
        </div>

        <div class = "TabelSignUp">
            <img src = "images/image1.png" class = "Image1Login">
            <img src = "images/logo.png" class = "Image2Login">
            <div class="SignUpText">Sign Up</div>

            <form name="form" action="signup.php" method="POST">
            <label for="user" class="usernameSignUp">Username:</label><br>
            <input type="text" id="user" name="user" class="inputusername" required><br>
                <label for="email" class="usernamemailSignUp" >Email:</label>
                <input type = "email" id ="email" name = "email" class="InputMailUSrSignUp" placeholder="Email@gmail.com" required>
                <label for ="password" class = "PasswordSignUp">Password:</label>
                <input type ="password" id="pass" name="pass" class = "InputPasswordSignUp" placeholder = "******" required>
                <label for ="cpassword" class = "PasswordRepeatSignUp">Repeat Password:</label>
                <input type ="password" id="cpass" name="cpass" class = "InputRepeatPasswordSignUp" placeholder = "******" required>
                <input type="submit" id="btn" value="Sign Up" name="submit" class = "ButtonSignUp">
            </form>

            
            <hr class="HRsau1">
            <div class="TxTSau">SAU</div>
            <hr class="HRsau2">
            <div class="LoginGoogle">Sign Up with Google</div>
            <img src="images/google.png" class = "GoogleLogIn">
            <img src="images/x.png" class = "closeSignUp">
            <div class="HaveAccount">Already have an account?</div>
        </div>
        <div class="AddAplication">
            <form name="form" >
                <hr class="HrAddNameApp">
                <label for="appname" class="NameAplicationText">Numele aplicatiei</label>
                <input type = "text" id ="NameApplication" name = "NameApplication" class="InoutNameApplicaiton" placeholder="Aplication Name" required>
             
                <hr class="HraddUrlApp">
                <label for="appname" class="AddTextUrlApp">Logo Aplicatie</label>
                <input type = "text" id ="UrlImageApp" name = "UrlImageApp" class="InoutUrlImage" placeholder=".png/.jpg" required>
             
                <hr class="HrEndPoint1">
                <label for="endpoint1" class="AddTextEndpointApp1">Endpoint 1</label>
                <input type = "text" id ="enpoint1set" name = "enpoint1set" class="AddEndPoint1" placeholder="127.0.0.0:30120" required>
             

                <hr class="HrEndPoint2">
                <label for="endpoint2" class="AddTextEndpointApp2">Endpoint 2 (optional)</label>
                <input type = "text" id ="enpoint2set" name = "enpoint2set" class="AddEndPoint2" placeholder="127.0.0.0:30120" required>
   
                <hr class="HrEndPoint3">
                <label for="endpoint3" class="AddTextEndpointApp3">Endpoint 3 (optional)</label>
                <input type = "text" id ="enpoint3set" name = "enpoint3set" class="AddEndPoint3" placeholder="127.0.0.0:30120" required>
   
                <hr class="HrEndPoint4">
                <label for="endpoint4" class="AddTextEndpointApp4">Endpoint 4 (optional)</label>
                <input type = "text" id ="enpoint4set" name = "enpoint4set" class="AddEndPoint4" placeholder="127.0.0.0:30120" required>
             
                <hr class="HrEndPoint5">
                <label for="endpoint5" class="AddTextEndpointApp5">Endpoint 5 (optional)</label>
                <input type = "text" id ="enpoint5set" name = "enpoint5set" class="AddEndPoint5" placeholder="127.0.0.0:30120" required>
             
                <hr class="HrEndPoint6">
                <label for="endpoint6" class="AddTextEndpointApp6">Endpoint 6 (optional)</label>
                <input type = "text" id ="enpoint6set" name = "enpoint6set" class="AddEndPoint6" placeholder="127.0.0.0:30120" required>
             
                <hr class="HrEndPoint7">
                <label for="endpoint7" class="AddTextEndpointApp7">Endpoint 7 (optional)</label>
                <input type = "text" id ="enpoint7set" name = "enpoint7set" class="AddEndPoint7" placeholder="127.0.0.0:30120" required>

                <input type="submit" id="loadapp" value="Load App" name="loadapp" class = "ButtonAddAplication">
            </form>
            <img src="images/LipsaLogo.jpeg" class ="LipsaLogoAddApp">
            <div class="AdaugaAplicatiaText">Adauga Aplicatia</div>
    </div>
        </body>
</body>
</html>
