<?php 
include "fonction.php"?>
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
  
        #a4{
          background-color:#efefef;
          float:left;
          width:33.33%;
        }
        #a5{
          background-color:#efefef;
          float:left;
          width:33.33%;

        }
        #a6{
          background-color:#efefef;
          float:right;
          width:33.33%;

        }
        #a3 {
          background-color:#efefef;
        }
        #a4 p{
          border-radius:38px;
          background-color:white;
          height:280px;
          margin-left:85px;
          margin-top:40px;
          width:300px;       
           }

          #a5 p{
            border-radius:38px;

            margin-top:40px;
            background-color:white;
            margin-left:15px;
            height:280px;
            width:300px;      
            }
          #a6 p{
            border-radius:38px;
            margin-top:40px;
            margin-top:40px;
            background-color:white;
            height:280px;
            width:300px;       
             }
            #a6 p img {
              margin-left:35px;
            }#a4 p img {
              margin-left:35px;
            }#a5 p img {
              margin-left:35px;
            }
            #a5 p b{
              
              margin-left:90px;
            }
            #a4 p b{
              
              margin-left:90px;
            }
            #a6 p b{
              
              margin-left:90px;
            }
            #a3 p:hover{
              border: red solid 1px;
            }
            #a9{
              
              width:100%;
            }
            #a9 img{
              margin-left:270px;
              width:940px;
              height:240px;
            }
            #ah{
              color:white;
              text-decoration:none;
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
<div id="dv1"><div id='u1'><span class="glyphicon glyphicon-th"> | EN  </div>                <i id='i1' class="fa fa-home"></i>              Choisissez un magasin    |   <span class="glyphicon glyphicon-list-alt"></span>  selectionner une liste d'epicerie |  <span class="glyphicon glyphicon-user"></span> <a href="user.php"> Mon compte </a><p></div></div>
<img id='iga' src='iga.jpg'><button id="btn1" type="button" >  <a id="ah" href="panier.php">     <i class="fa fa-shopping-cart"> </i>  <?php total() ?></a> </button> </h1>  <br > <HR>
    <ul>
        <li id='li1'><a class="active" href="depa.php">DEPARTEMENTS</a></li>
        <li><a href="">LE CONTE</a></li>
        <li><a href="#ep">EPICERIE EN LIGNE</a></li>
        <li><a href="#circu">CIRCULAIRE</a></li>
        <li><a href="#promo">PROMOTIONS</a></li>
      </ul>
      <HR>
      <img id='imfb' src='fb.jpg'>
    
       
       <div id="a3">
         <br><br>
          <div id="a9"> <img src="pub.jpg"></div>
            <div id="a4">
            <p>         <a href="fetes.php" ><img src="1.JPG"></a><br><br><b>Temps de fetes</b></th>
            <p>        <a href="menage.php"> <img src="2.JPG"></a><br><br><b>Produits menagers </b></p>
            <p>    <a href="bureau.php">   <img src="3.JPG"></a><br><br><b>Fournitures de bureau</b></p>

      </div>
      <div id="a5">
             <p>  <a href="cuisine.php" >  <img src="5.JPG"></a><br><br><b>Cuisine</b></p>
             <p>   <a href="alimentation.php">   <img src="6.JPG"></a><br><br><b>Alimentation</b></p>
             <p>       <a href="beaute.php"> <img src="7.JPG"></a><br><br><b>Sante et beaute</b></p>
      </div>           
                
        <div id="a6">
          <p><a href="celebration.php"><img src="9.JPG"></a><br><br><b>Celebrations</b></p>
        <p>    <a href="electro.php">   <th><img src="10.JPG"></a><br><br><b>Electronique</b> </p>
        <p>             <th><a href="jeu.php"><img src="11.JPG"></a><br><br><b>Jouets</b></p>
                    
      </div>

       </div>
    
    </body>
</html>