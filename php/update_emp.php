<?php

include('../php/config.php');
  
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());//retourne le message d'erreur de connexion mysql
}



$id1=$_POST['id1'];
$CIN = $_POST['CIN1'];
$Nom = $_POST['Nom1'];
$Prenom = $_POST['Prenom1'];
$Password = $_POST['Password1'];
$image = $_FILES['image1']['name'];
$tmp_img_path = $_FILES['image1']['tmp_name'];
$traget = "../image/".basename($_FILES['image1']['name']);



$sql = "UPDATE usere set CIN='$CIN',Pass='$Password',Nom='$Nom',Prenom='$Prenom',files_name='$traget' WHERE Id ='$id1'";



if(mysqli_query($link, $sql) || (move_uploaded_file($_FILES['image1']['tmp_name'], $traget1))  ){
    echo '<div style="position: fixed;z-index:1;left: 0;top: 0;height: 100%;width: 100%;overflow: auto;background: rgba(0,0,0,0.5);">
    <div style="background: #3fff00;margin: 20% auto;padding: 20px;width: 70%;">
    <a href="../View/employe.php"  style="::hover {background: yellow};font-size:40px;float:right;text-decoration:none;font-weight:bold;"> &times; </a>
      <h1>le produit à été modifiée avec succès </h1>
    </div>
  </div>';
} else{
    echo '<div style="position: fixed;z-index:1;left: 0;top: 0;height: 100%;width: 100%;overflow: auto;background: rgba(0,0,0,0.5);">
    <div style="background: #f44336;margin: 20% auto;padding: 20px;width: 70%;">
    <a href="../View/employe.php" style="::hover {background: yellow};font-size:40px;float:right;text-decoration:none;font-weight:bold;"> &times; </a>
      <h1>Errour de modification de ce produit  </h1>
    </div>
  </div>';
}


 



// Close connection
mysqli_close($link);



?>