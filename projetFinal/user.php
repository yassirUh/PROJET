<?php
session_start();
if ( isset($_POST["submit"])){
    session_destroy();
  header("location:connexion.php");
}
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
           font-family:sans-serif, serif;
        font-weight: bold;
        color:black;
          margin-left:85px;
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
        .mi{

        }
        #forma{
            margin-left:350px;
        }
        #forma th{
            width:500px;
            height:80px;
        }
        #forma b{
                color:red;
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
        <li id='li1'><a class="active" href="depa.php">DEPARTEMENTS</a></li>
        <li><a href="">LE CONTE</a></li>
        <li><a href="#ep">EPICERIE EN LIGNE</a></li>
        <li><a href="#circu">CIRCULAIRE</a></li>
        <li><a href="#promo">PROMOTIONS</a></li>
      </ul>
      <HR>
      <img id='imfb' src='fb.jpg'>
    <HR>

    <h3 id="h3"> MON COMPTE </h3>
       <p class="p2">Chez IGA.Net, nous r??visons et am??liorons sans cesse nos mesures de s??curit?? afin de prot??ger les renseignements personnels de nos clients. Par exc??s de prudence, nous avons r??cemment renforc?? la s??curit?? sur notre site. Nos clients devrons donc modifier leur mot de passe afin d???acc??der ?? leur compte.</p>

  <?php 
$host = "localhost";
$user = "root";
$pass="";
$database="panier";

$conn= new mysqli($host,$user,$pass,$database);

if ($conn-> connect_error){
    die('failed to connect'.$conn-> connect_error);
}
$sql = "SELECT * FROM users where Courriel='".$_SESSION["courriel"]."'";
$sql2 = mysqli_query($conn, $sql);

while ( $row = mysqli_fetch_array($sql2) ){
?><table id="forma"><?php
echo "<tr class='mi'><th><b> Nom :</b> ". $row[0]."</th>";
echo "<th><b>Prenom : </b>". $row[1]."</th>";
echo "</tr><tr><th class='mi'><b> Gmail : </b>". $row[2]."</th>";
echo "<th class='mi'><b> CodePostal : </b>". $row[3]."</th></tr></table>";

}
?>
     
        <form action="user.php" method="POST">
       <button  name='submit' class="btn btn-secondary btn-lg" type="submit"> DECONNEXION </button>
    </form>