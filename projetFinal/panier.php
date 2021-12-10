<?php
include "fonction.php";
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
    float:left;
    background-color:grey;
    margin-left:170px;
    height:50px;
    width:800px;
    border:6px;
    border-radius:3px;

}
#d3 p {
    font-family: "Times New Roman", Times, serif;
    margin-left:180px ;
    margin-right:10px; 
    font-size:15px;
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
#d5{
    height:400px;
    width:330px;
    float:right;
    background-color:white;
    margin-right:190px;
}
#d5 h4{
    margin-left:25px;
}
#d5 p{
    margin-left:25px;
    color:grey;
    font-size:12px;
}
#d5 #total{
    height:70px;
    width:80%;
    border:1px grey  solid;
    border-radius:3px;
}
#d5 b{
    color:black;
    font-size:50px;
    margin-left:70px;
}
#d5 button{
    border:solid 1px #fe0000;
    color:white;
    font-size:15px;
    border-radius:5px;
    margin-left:25px;
    height:50px;
    width:80%;
    background-color:#fe0000;
}
#d6{
    height:500px;
    margin-left:170px;
    margin-top:40px;
    background-color:white;
    float:left;
    width:600px;
}
#d6 h1{
    margin-left:100px;
    
}
#d6 th{
    font-size:18px;
    margin-bottom:20px;

}
#l1{
font-size:18px;
margin-bottom:20px;

}
#l2{
    font-size:18px;
margin-bottom:20px;
margin-left:270px;
}
#l3{
    font-size:18px;
}
#d6 ul{
margin-left:20px;
border: solid 1px grey;
width:560px;
}
#left0{
    margin-right:25px
}
#left{
    margin-right:10px;
}
#left2{
    margin-right:10px;
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
  <li id='li1'><a class="active" href="depa.php">DEPARTEMENTS</a></li>
  <li><a href="">LE CONTE</a></li>
  <li><a href="#ep">EPICERIE EN LIGNE</a></li>
  <li><a href="#circu">CIRCULAIRE</a></li>
  <li><a href="#promo">PROMOTIONS</a></li>
</ul>
<HR>
<img id='imfb' src='fb.jpg'>
<div id="d1">
    
<br>
<img id="rab" src="paniers.jpg">
<br><br>
<br><br>
<div id="d2">
<br>

    <h1 id="pr1">PANIER D'ACHAT</h1></div>
    <br> <br> 
<div id="d3"><br> <p>Prix en vigueur du jeudi 3 décembre 2020 au mercredi 9 décembre 2020.</p> </div>
<div id="d5"> <h4>SOMMAIRE DU PANIER </h4>
           <br><br>   <p>TOTAL ESTIMÉ </p>
              <p id='total'><b> <?php total()?> $<b> </p><br>

<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
<input name="amount" type="hidden" value="<?php total()?>" />
<input name="currency_code" type="hidden" value="CAD" />
<input name="shipping" type="hidden" value="transport" />
<input name="tax" type="hidden" value="5" />
<input name="return" type="hidden" value="http://localhost:10080/dashboard/COMERCE_ELECTRONIQUE/projetfinal/panier.php" />
<input name="cancel_return" type="hidden" value="http://localhost:10080/dashboard/COMERCE_ELECTRONIQUE/projetfinal/panier.php" />
<input name="notify_url" type="hidden" value="http://localhost:10080/dashboard/COMERCE_ELECTRONIQUE/projetfinal/panier.php" />
<input name="cmd" type="hidden" value="_xclick" />
<input name="business" type="hidden" value="sb-nv9um3769942@personal.example.com" />
<input name="item_name" type="hidden" value="Le texte que vous voulez" />
<input name="no_note" type="hidden" value="1" />
<input name="lc" type="hidden" value="FR" />
<input name="bn" type="hidden" value="PP-BuyNowBF" />
<input name="custom" type="hidden" value="12542A" />
<input type="hidden" name="rm" value="2">
  <button type="submit" class="bouton"> COMMANDER </button></form>
</div>
<div id="d6">
<h1>LISTE DES ACHATS </h1>
<br>
<ul>
<li  id='l1'> Nom</li>
<li  id='l2'> Quantite</li>
<li  id='l3'> Prix </li>
<?php affichage()?>
</div>




