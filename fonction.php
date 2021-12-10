<?php
session_start();
function  creation() {
  if ( ! isset($_SESSION['panier']))
    {
        $_SESSION['panier']= array();
        $_SESSION['panier']['id']= array();
        $_SESSION['panier']['nom']= array();
        $_SESSION['panier']['quantite']= array();
        $_SESSION['panier']['prix']= array();
    }
}
function  ajout($id,$nom,$quantite,$prix){
    creation();
   $kk = -1 ;
     foreach ( $_SESSION['panier']['id'] as $key=>$value ){
            if ($value == $id ){
                $kk = $key;
                
            }            
     }  
    if ( $kk == -1 ){
           array_push($_SESSION['panier']['id'],$id);
          array_push($_SESSION['panier']['nom'],$nom);
           array_push($_SESSION['panier']['quantite'],$quantite);
           array_push($_SESSION['panier']['prix'],$prix);
                     }
    else {
        $_SESSION['panier']['quantite'][$kk]+= $quantite;
         }
}
function affichage(){ 
  
       $cnt =  count($_SESSION['panier']['nom']) ;
        for ($int = 0; $int< $cnt ;$int++ ){

       ?><li id="left0" > <?php       echo  $_SESSION['panier']['nom'][$int]; ?></li><?php  
       ?><li id="left"><?php     echo $_SESSION['panier']['quantite'][$int]; ?></li><?php  
       ?><li id="left2"><?php     echo $_SESSION['panier']['prix'][$int]; ?></li><?php  
       ?><li><form action="panier.php" method="POST"><input name="hid" type="hidden"  value='<?php echo $int ?>' >
        <button name="sub" type="submit" >supprimmer </button> </form></li><?php
        
     }  

}

function vider(){
    unset($_SESSION['panier']);
}

function total(){
    creation();
    $montant=0;
    if  (isset($_SESSION['panier'])){
 ?>
 <?php
    $cnt = count($_SESSION['panier']['quantite']);
    for ($int= 0 ;$int< $cnt; $int++ ){
 $montant += (int)$_SESSION['panier']['quantite'][$int]*(int)$_SESSION['panier']['prix'][$int];
    }
    echo $montant;}
}



