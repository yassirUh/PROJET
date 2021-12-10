<?php 
include('fonction.php');
if (isset($_POST['go'])){
  
    ajout($_POST['id'],$_POST['nom'],$_POST['quantite'],$_POST['prix']);
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
  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
<div id="dv1"><div id='u1'><span class="glyphicon glyphicon-th"> | EN  </div>                <i id='i1' class="fa fa-home"></i>              Choisissez un magasin    |   <span class="glyphicon glyphicon-list-alt"></span>  sélectionner une liste d'epicerie |  <span class="glyphicon glyphicon-user"></span><a href="user.php"> Mon compte </a><p></div></div>
<img id='iga' src='iga.jpg'><a href="panier.php"><button id="btn1" type="button" >  <?php total() ?>      <i class="fa fa-shopping-cart"></i>  </button></a> </h1>  <br > <HR>
<ul>
  <li id='li1'><a class="active" href="depa.php">DEPARTEMENTS</a></li>
  <li><a href="">LE CONTE</a></li>
  <li><a href="#ep">EPICERIE EN LIGNE</a></li>
  <li><a href="#circu">CIRCULAIRE</a></li>
  <li><a href="#promo">PROMOTIONS</a></li>
</ul>
<HR>
<img id='imfb' src='fb.jpg'>
<div id="slct"><br>
<?php
$host='localhost';
$user="root";
$pass="";
$data="departements";
$conn = new mysqli($host,$user,$pass,$data);

if ($conn -> connect_error  ){
    die ('failed to connect'. $conn -> connect_error );
}

$Req = "SELECT * FROM cuisine";

$Req1 =  mysqli_query($conn,$Req);
?> 
<ul>
<?php
$int=0;
while ($tab = mysqli_fetch_array($Req1 )){
    ?>
     <br>
      <li id='lint'> 
   <form action='cuisine.php' method='POST'> 
   <img src="<?php echo $tab[2] ?>">  <br>
   
      <input type='hidden' name='id' value=' <?php echo $tab[0] ?>'>
         <input type='hidden' name='nom' value=' <?php echo $tab[1] ?>'>
         <input type='hidden' name='prix' value=' <?php echo $tab[3] ?>'>
         <p id='p1'>  <?php echo $tab[3] ?> /UNITÉ    </p>   
        <p id='desc'>   <?php echo $tab[1] ?></p> 
   <select id='slc' name='quantite' >
                                 <option>1</option>
                                 <option>2</option>
                                 <option>3</option>
                                 <option>4</option>
                                 <option>5</option>
                                 <option>6</option>
                                 <option>7</option>
                                 <option>8</option>
                                 <option>9</option>
</select>
      <th><button name='go' type='submit' id='int' class="btn btn-danger btn-lg btn-block">AJOUTER AU PANIER</button>
</li></form>
     <?php        

}?>
    </table>
</div>
