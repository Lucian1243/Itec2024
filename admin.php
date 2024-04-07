<?php
include('connection.php');

session_start();
if(!isset($_SESSION['name'])){

    header("location:login.php");


}
// if($_SESSION['usertype']=="user"){
//     header("location:denied.php");
// }

$sql = "SELECT * FROM apps";
$result = mysqli_query($conn, $sql);


$r = mysqli_fetch_array(mysqli_query($conn, $sql));
if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $endpoint1_data = json_decode($row['endpoint1'], true);
    $endpoint2_data = json_decode($row['endpoint2'], true);
    $endpoint3_data = json_decode($row['endpoint3'], true);
    $endpoint4_data = json_decode($row['endpoint4'], true);
    $endpoint5_data = json_decode($row['endpoint5'], true);
    $endpoint6_data = json_decode($row['endpoint6'], true);
    $endpoint7_data = json_decode($row['endpoint7'], true);
    
}

$endpoints = array(
    
    $app = $r['AppUrl'],
    $end1= $endpoint1_data['URL'],
    $end2= $endpoint2_data['URL'],
    $end3= $endpoint3_data['URL'],
    $end4= $endpoint4_data['URL'],
    $end5= $endpoint5_data['URL'],
    $end6= $endpoint6_data['URL'],
    $end7= $endpoint7_data['URL'],
);
if (!$result) {
        echo "Error: " . mysqli_error($conn);
        exit;
    }

?>
<html>
    <head>

        <link href = "style2.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>    
        <script type ="text/javascript" src="script3.js"></script>

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
        <div class = "VerificareStatus">Verificare Status</div>
        <p class = "ParagrafHomePage">
            Statusul aplicației poate fi de ajutor utilizatorilor în mai multe moduri. În primul rând, utilizatorii pot obține o imagine de ansamblu asupra sănătății și funcționării aplicației pe care o utilizează, având acces la informații în timp real despre starea endpoint-urilor. Acest lucru le permite să fie la curent cu orice probleme sau instabilități care ar putea afecta experiența lor în timp real și să evite frustrarea cauzată de indisponibilitatea serviciilor. De asemenea, utilizatorii pot raporta orice probleme pe care le întâlnesc, permițându-le echipelor de dezvoltare să reacționeze rapid și să remedieze problemele, asigurând astfel un nivel ridicat de calitate și fiabilitate a aplicației. Prin urmare, având acces la statusul aplicației, utilizatorii pot lua decizii informate și pot avea încredere că vor beneficia de o experiență optimă în utilizarea aplicației.
        </p>
        <div class="AddAplication">
        <img src="images/x.png" class = "closeAddAplication">
        <form name="form" id="Form" action="endpoints.php" method="POST">
                <hr class="HrAddNameApp">
                <label for="app" class="NameAplicationText">Numele aplicatiei</label>
                <input type="text" id="app" name="app" class="InoutNameApplicaiton" placeholder="Aplication Name" required>
             
                <hr class="HraddUrlApp">
                <label for="UrlImageApp" class="AddTextUrlApp" >Logo Aplicatie</label>
                <input type = "text" id ="UrlImageApp" name = "UrlImageApp" class="InoutUrlImage" onkeyup="SetLogoAplicationAdd(this.value);" placeholder=".png/.jpg">
             
                <hr class="HrEndPoint1">
                <label for="end1" class="AddTextEndpointApp1">Endpoint 1</label>
                <input type = "text" id ="end1" name = "end1" class="AddEndPoint1" placeholder="127.0.0.0:30120" required>
             

                <hr class="HrEndPoint2">
                <label for="end2" class="AddTextEndpointApp2">Endpoint 2 (optional)</label>
                <input type = "text" id ="end2" name = "end2" class="AddEndPoint2" placeholder="127.0.0.0:30120">
   
                <hr class="HrEndPoint3">
                <label for="end3" class="AddTextEndpointApp3">Endpoint 3 (optional)</label>
                <input type = "text" id ="end3" name = "end3" class="AddEndPoint3" placeholder="127.0.0.0:30120">
   
                <hr class="HrEndPoint4">
                <label for="end4" class="AddTextEndpointApp4">Endpoint 4 (optional)</label>
                <input type = "text" id ="end4" name = "end4" class="AddEndPoint4" placeholder="127.0.0.0:30120">
             
                <hr class="HrEndPoint5">
                <label for="end5" class="AddTextEndpointApp5">Endpoint 5 (optional)</label>
                <input type = "text" id ="end5" name = "end5" class="AddEndPoint5" placeholder="127.0.0.0:30120">
             
                <hr class="HrEndPoint6">
                <label for="end6" class="AddTextEndpointApp6">Endpoint 6 (optional)</label>
                <input type = "text" id ="end6" name = "end6" class="AddEndPoint6" placeholder="127.0.0.0:30120">
             
                <hr class="HrEndPoint7">
                <label for="end7" class="AddTextEndpointApp7">Endpoint 7 (optional)</label>
                <input type = "text" id ="end7" name = "end7" class="AddEndPoint7" placeholder="127.0.0.0:30120">

                <input type="submit" value="Insert" id="insert" name="insert" value="Load App"  class = "ButtonAddAplication">
            </form>
            <img id="LipsaLogo" src="images/LipsaLogo.jpeg" class ="LipsaLogoAddApp">
            <div class="AdaugaAplicatiaText">Adauga Aplicatia</div>
    </div>

<!-- asdas -->
  
    <div class = "FrameAplicatiiCreate">
        <div class="AplicatieStabila">
        <Div class="OvalAplicatii">
           <img src="images/youtube.png"class="LogoAplicationView"> 
        </div>
        <div class="NameAplicationVrf">YouTube</div>
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
            <div class="StatusAplicatie12" style="background-color:yellow;"></div>  
            <div class="SetButtonDeleteAplication" id="reportBug">Rezolva Bug</div>
            <script>
        document.getElementById('reportBug').addEventListener('click', function() {
        document.querySelector('.StatusAplicatie12').style.backgroundColor = 'lime';
        });
        </script>

            
            

        </div>
     </div>




     <div class="AplicatieStabila" style="position:absolute;display:blocks">
        <Div class="OvalAplicatii">
           <img src="images/youtube.png"class="LogoAplicationView"> 
        </div>
        <div class="NameAplicationVrf">YouTube</div>
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
            <div class="StatusAplicatie12" style="background-color:yellow;"></div>  
            <div class="SetButtonDeleteAplication" id="reportBug">Rezolva Bug</div>
            <script>
        document.getElementById('reportBug').addEventListener('click', function() {
        document.querySelector('.StatusAplicatie12').style.backgroundColor = 'lime';
        });
        </script>

            
            

        </div>
     </div>
     
     

     
     
    </div>


    
    <div class = "ShowMenuUser" id="ShowMenuUser">
        <a  href="logout.php" action="login.php"  class="SignOut">LogOut</a>
        <div class="VeziAplicatiile" action="statususer.php">Vezi Aplicatiile</div>
        <div class="AdaugaAplicatii" >Adauga Aplicatii</div>
    </div>
    
</body>
</html>