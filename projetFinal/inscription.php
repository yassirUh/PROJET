<?php
session_start();
if ( isset($_POST["sub"]) ){
if ($_POST["nom"] != "" && $_POST["prenom"] != "" ){

$host="localhost";
$user="root";
$pass="";
$data="panier";

$prenom= $_POST["prenom"];
$nom= $_POST["nom"];
$couriel = $_POST["couri"];
$codePos = $_POST["postal"];
$code= $_POST["pass"];
$conn = new mysqli($host,$user,$pass,$data);

if ($conn -> connect_error){

    die ("failed to connect ".$conn-> connect_error);
}

$sql = "INSERT INTO users VALUES ('$prenom' ,'$nom' , '$couriel', '$codePos', '$code' )";
$sql2 = mysqli_query($conn,$sql);
if ($sql2){
      
    header("location:connexion.php");
}
}   }
?>
<!DOCTYPE html>
<html>
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
       #h3{
           font-size:23px;
        color:grey;
          margin-left:155px;
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
        .p2{
            width:1200px;
            margin-left:85px;
        }
        .p3{
            margin-left:85px;
           color:black
        }
        .input{
            
            border:grey solid 1px;
            border-radius:8px;
            height:40px;
            width:280px;
            margin-left:85px;
        }
        .input:focus{
            outline:none;
            border:  red solid 1px;
        }
        .btn{
            margin-left:85px;
        }
        .btn:hover     {
            background-color: #bfbfbf;
        }
        #left{
            margin-top:50px;
            margin-left:150px;
            float:left;
        }
        #right p {
            font-weight: bold;
            font-size:10px
            color:black;
        }
        #left p {
            font-weight: bold;
            font-size:10px

            color:black;
        }
        #right{
            margin-top:50px;

            margin-right:150px;
            float:right;
        }
        #left input{
         border-radius:8px;
         border:black solid 1px;
            height:40px;
            width:600px;
        }
        #right input{
            border-radius:8px;
            border:black solid 1px;
            height:40px;
            width:600px;
        }
        #left input:focus{
            outline:none;
            border-color:red;
        }
        #right input:focus{
            outline:none;
            border-color:red;
        }
        #d55{
         font-size:10px;
              margin-left:100px;
        }
        #d55 label{
            width:680px;
        }
        #d55 u{
            color:red;
        }
        #p44{
            font-size:9px;
            margin-left:190px;
        }
        #p44 u{
            color:red;
        }
    .btn{
        margin-left:260px;
    }
          </style>
  <head><title>Departement</title></head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
<div id="dv1"><div id='u1'><span class="glyphicon glyphicon-th"> | EN  </div>                <i id='i1' class="fa fa-home"></i>              Choisissez un magasin    |   <span class="glyphicon glyphicon-list-alt"></span>  selectionner une liste d'epicerie |  <span class="glyphicon glyphicon-user"></span> Mon compte <p></div></div>
<img id='iga' src='iga.jpg'><button id="btn1" type="button" >        <i class="fa fa-shopping-cart"></i>  </button> </h1>  <br > <HR>
    <ul>
        <li id='li1'><a class="active" href="depa.html">DEPARTEMENTS</a></li>
        <li><a href="">LE CONTE</a></li>
        <li><a href="#ep">EPICERIE EN LIGNE</a></li>
        <li><a href="#circu">CIRCULAIRE</a></li>
        <li><a href="#promo">PROMOTIONS</a></li>
      </ul>
      <HR>
      <img id='imfb' src='fb.jpg'>
    <HR>

    <h3 id="h3">---------------------------------------------------------------------CRÉER UN COMPTE----------------------------------------------------------- </h3>
<form action="inscription.php" method="POST"> 
    <div id="left">
 <p >Prénom </p>
 <input name="prenom" type="text">
 <br><br>
 <p>Courriel</p>
 <input name="couri" type="text">
 <br><br>
<p>Mot de passe </p>
<input name="pass" type="text">
    </div> 
    <div id="right">
 <p>Nom</p>
 <input name="nom" type="text">
 <br><br>
 <p>Code Postal (optionnel)</p>
 <input name="postal"t type="text">
 <br><br>
<p>Confirmation du mot de passe </p>
<input name="pass2" type="text">
    </div> <br><br>
<p id="p44">cliquant sur Valider J'accepte les Conditions générales relatives <u>aux sites Web et aux comptes utilisateurs de Sobeys ainsi que l'Engagement de confidentialité de Sobeys auquel elles renvoient.<u></p>
   
  <br> 
     <button name="sub" class="btn btn-secondary btn-lg"  type="submit">VALIDER</button> 
</form>