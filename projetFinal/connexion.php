<?php 
 
if (isset($_POST["connect"])){
  session_start();

$host="localhost";
$name="root";
$pass="";
$database="panier";

$conn = new mysqli($host,$name,$pass,$database);

if ($conn-> connect_error){
  die("failed to connect ".$conn-> connect_error);
}
$sql = "SELECT * FROM users WHERE  Courriel='".$_POST["email"]."' AND password='".$_POST["password"]."'";
$sql2 = mysqli_query($conn,$sql);
$sql3= mysqli_num_rows($sql2);

if ($sql3> 0 ){
  $_SESSION["courriel"]= $_POST['email'];
     header("location:depa.php");
}
else {
     ?>
     <style>
     input{
      border:  red solid 1px;
            }
      input:focus {
        outline:none;
            border:  red solid 1px;
      }
     </style>
     <?php

}
}

?>
<!DOCTYPE html>
<html>
<head><title>fete</title>  </head>
<style>
img{
  height:200px;
  width:200px;
  margin-left:80px;
  margin-top:20px;
}
#dv{
  background-color:white;
  margin-top:50px;
   width:40% ;
   margin-left :20%;

}
#p1{
  margin-top:10px;
  margin-left:15px;
    font-family: Impact, fantasy	;
 font-size: 15px;
  color:red;
}
#btn1{
  font-size:15px;
  height:40px;
  width:60px;
 color:white;
 border:white  solid 1px;
 border-radius:6px;
  width:200px;
  margin-left:850px;
  background-color:#fe0000;
}
#cls{
  color:black;
}
#dv1{
  height:50px;
  font-family: "Times New Roman", Times, serif; 
  font-size: 19px;
  background-color:black;
  color:white;
}

#u1{

  float:left;
  margin-right:458px;
  margin-left:70px;
}
#i1{
  margin-top:15px;

     margin-right:15px;  
}
#iga{
  height:100px;
  width:200px;
}
span{
  margin-top:15px;

  margin-left:35px;
  margin-right:15px;  

}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
}
#li1 {
  margin-left:120px;
}
li {
  margin-left:50px;
  float: left;
}

li a {
  font-size: 20px;
  color:black;
  display: block;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  
}

li a:hover {
  background-color: #fe0000;
  color:white;
  text-decoration: none;

}
#imfb{
  margin-left:1200px;
  height:55px;
  width:160px;
}
#slct{
  background-color:#efefef;
}
h3{
  margin-left:25px;
}
#lint{
  border-radius:5px;
  margin-top:40px;
  background-color:white;
  height:400px;
  width:350px;
  margin-left:80px;
}
#int{
  
  font-size:13px;
  border: solid 1px  #5b5955;
  background-color:#333333;
  width:160px;
  margin-left:80px;
}
#desc{
  margin-left:30px;
  font-family: Arial, Helvetica, sans-serif;
  color: grey;
}
#slc{
  margin-left:40px;
  margin-bottom:35px;
}
#d1{
    height:1300px;
    width:1516px;
    background-color:#efefef;
}
#d2{
    height:100px;
    width:1150px;
    text-align:center;
    background-color:rgb(52, 44, 44);
    color:white;
    margin-left:170px;
}

#rab{
    margin-left:200px;
    width:1070px;
    height:250px;
}
#d3{
    margin-left:320px;
    height:200px;
    width:1000px;
    background-color:#e53134;
    border:6px;
    border-radius:9px;

}
#d3 p {
    font-family: "Times New Roman", Times, serif;
    margin-left:10px ;
    margin-right:10px; 
    font-size:large;
    color:white;
}
#d4{
    margin-left:315px;

}
#d4 h3{
    color:#a0a0a0;
    font-size:large;

}
#d4 p {
    margin-right:180px;
    margin-left:40px;
}
#left{
    float:left;
    width:450px;
    border-right:solid 1px black;
    margin-left:100px;
}
#left .pin {
    color:black;
    font-weight: bolder;
}
input {
    border:black solid 1px;
        border-radius:4px;
    height:40px;
    width:300px;
}

#left button{
    width:300px;
    background-color:#333333;
    color:white;
} 
#right{
  margin-top:90px;
  margin-right:190px;
    float:right;

}

#right p {
  width:240px;
    margin-top:30px;
    text-align:left;
    border-radius:10px;
    background-color:white;
}
#right p:hover{
    background-color:#efefef;

}
.fa {

  padding: 10px;
  font-size: x-large;
  width: 40px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 10%;

}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}
  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
<div id="dv1"><div id='u1'><span class="glyphicon glyphicon-th"> | EN  </div>                <i id='i1' class="fa fa-home"></i>              Choisissez un magasin    |   <span class="glyphicon glyphicon-list-alt"></span>  sélectionner une liste d'epicerie |  <span class="glyphicon glyphicon-user"></span> Mon compte <p></div></div>
<img id='iga' src='iga.jpg'><button id="btn1" type="button" >      <i class="fa fa-shopping-cart"></i>  </button> </h1>  <br > <HR>
<ul>
  <li id='li1'><a class="active" href="depa.html">DEPARTEMENTS</a></li>
  <li><a href="">LE CONTE</a></li>
  <li><a href="#ep">EPICERIE EN LIGNE</a></li>
  <li><a href="#circu">CIRCULAIRE</a></li>
  <li><a href="#promo">PROMOTIONS</a></li>
</ul>
<HR>
<img id='imfb' src='fb.jpg'>
<div id="d1">
    
<br>
<img id="rab" src="rabais.jpg">
<br><br>
<br><br>
<div id="d2">
<br>

    <h1 id="pr1">ÉPICERIE EN LIGNE</h1></div>
    <br> <br> 
<div id="d3"><br> <p>Pour déterminer si l’offre de plages horaires actuelle vous convient, nous vous recommandons de choisir une plage horaire dès l’ouverture de votre session, avant de commencer à remplir votre panier. De nouvelles plages horaires sont disponibles tous les lundis.</p><p>
Vous souhaitez laisser un pourboire à votre livreur ? Mentionnez-le en commentaire. Le montant sera ajouté à votre transaction.
Merci de vous serrer les coudes avec nous!</p> </div>
<br>
<div id="d4">
    <h3>--------------------------------------------------- BIENVENUE SUR L'ÉPICERIE EN LIGNE ! ----------------------------------------------------</h3>
    <p>Pour débuter votre commande, nous vous recommandons d'être connecté : La connexion à votre compte via les réseaux sociaux est indisponible pour le moment. En attendant que nous réglions le problème, merci de bien vouloir vous connecter à l’aide de votre adresse email. Merci de votre compréhension.</p>

    <div id="left">
    <br><br>
    <form action="connexion.php" method="POST" >    
    <p class="pin">Courriel </p>
     <input name="email" type="text">
<br><br>
     <p class="pin">Mot de passe</p>  <input name="password" type="text" ><br><br><br>

      <p><a href="forget.php">Mot de passe oublié?</a></p>

      <button  name="connect" type="submit" class="btn btn-dark btn-lg">SE CONNECTER</button>
      </form>
     <br><br> <p>Vous n'avez pas de compte ? <br><a href="inscription.php"> Créer un compte</a></p>



</div>
<div  id="right"> 
<p> <a  class="fa fa-facebook"></a> Connexion avec Facebook</p>
<p> <a  class="fa fa-twitter"></a>Connexion avec Twitter</p>
<p> <a class="fa fa-google"></a> Connexion avec Google</p>    

</div>
</div>   
</div>

