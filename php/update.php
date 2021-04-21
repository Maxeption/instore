<?php

include('../php/config.php');
  
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}



$id1=$_POST['id1'];
$Nom1=$_POST['Nom1'];
$brand1=$_POST['brand1'];
$Unite1=$_POST['Unite1'];
$Quantite1=$_POST['Quantite1'];
$Seriale1=$_POST['Seriale1'];
$Categorie1=$_POST['Categorie1'];
$image1 = $_FILES['image1']['name']; 
$traget1="../image/".basename($_FILES['image1']['name']);



$sql = "UPDATE article set Nom_article='$Nom1',brand='$brand1',PU='$Unite1',Unite='$Quantite1',serial_num='$Seriale1',files_name='$traget1',nomCategorie='$Categorie1' WHERE idarticle ='$id1'";



if(mysqli_query($link, $sql) || (move_uploaded_file($_FILES['image1']['tmp_name'], $traget1))  ){
    echo '<div style="position: fixed;z-index:1;left: 0;top: 0;height: 100%;width: 100%;overflow: auto;background: rgba(0,0,0,0.5);">
    <div style="background: #3fff00;margin: 20% auto;padding: 20px;width: 70%;">
    <a href="../View/products.php"  style="::hover {background: yellow};font-size:40px;float:right;text-decoration:none;font-weight:bold;"> &times; </a>
      <h1>le produit à été modifiée avec succès </h1>
    </div>
  </div>';
} else{
    echo '<div style="position: fixed;z-index:1;left: 0;top: 0;height: 100%;width: 100%;overflow: auto;background: rgba(0,0,0,0.5);">
    <div style="background: #f44336;margin: 20% auto;padding: 20px;width: 70%;">
    <a href="../View/products.php"  style="::hover {background: yellow};font-size:40px;float:right;text-decoration:none;font-weight:bold;"> &times; </a>
      <h1>Errour de modification de ce produit  </h1>
    </div>
  </div>';
}


 



// Close connection
mysqli_close($link);



?>