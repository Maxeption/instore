<?php

include('../php/config.php');



if (isset($_POST['submit'])) {


    $CIN = $_POST['CIN'];
    $Nom = $_POST['Nom'];
    $Prenom = $_POST['Prenom'];
    $Password = $_POST['Password'];
    $image = $_FILES['image']['name'];
    $tmp_img_path = $_FILES['image']['tmp_name'];
    $traget = "../image/".basename($_FILES['image']['name']);
 


    $sql = "INSERT INTO usere (CIN,Nom,Prenom,Pass,files_name)
    VALUES ('$CIN', '$Nom','$Prenom','$Password','$traget')";

    if (mysqli_query($link, $sql) && (move_uploaded_file($_FILES['image']['tmp_name'],$traget)) ) {
       
      echo '<div style="position: fixed;z-index:1;left: 0;top: 0;height: 100%;width: 100%;overflow: auto;background: rgba(0,0,0,0.5);">
        <div style="background: #3fff00;margin: 20% auto;padding: 20px;width: 70%;">
        <a href="../View/employe.php"  style="::hover {background: yellow};font-size:40px;float:right;text-decoration:none;font-weight:bold;"> &times; </a>
          <h1>l&acute;employée à été ajouté avec succès </h1>
        </div>
      </div>';
      
    } else {
        echo '<div style="position: fixed;z-index:1;left: 0;top: 0;height: 100%;width: 100%;overflow: auto;background: rgba(0,0,0,0.5);">
        <div style="background: #f44336;margin: 20% auto;padding: 20px;width: 70%;">
        <a href="../View/employe.php"  style="::hover {background: yellow};font-size:40px;float:right;text-decoration:none;font-weight:bold;"> &times; </a>
          <h1>Errour d&acute;ajoue d&acute;employée ou d&acute;image </h1>
        </div>
      </div>';
    }

    /*if (move_uploaded_file($_FILES['image']['tmp_name'], $traget)) {
        echo "inserted successfully.";
    } else {
        echo "ERROR: Could not able to execute";
    }*/









    // Close connection
    mysqli_close($link);
}