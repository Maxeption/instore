<?php

include('../php/config.php');



if (isset($_POST['submit'])) {


    $Nom = $_POST['Nom'];
    $brand = $_POST['brand'];
    $Unite = $_POST['Unite'];
    $Quantite = $_POST['Quantite'];
    $Seriale = $_POST['Seriale'];
    $Categorie = $_POST['Categorie'];
    $image = $_FILES['image']['name'];
    $tmp_img_path = $_FILES['image']['tmp_name'];
    $traget = "../image/" . basename($_FILES['image']['name']);
    //$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    // print_r ($file."<br>");
    //print_r($tmp_img_path . "<br>");
    //print_r($image . "<br>");
    //print($traget . "<br>");


    $sql = "INSERT INTO article (Nom_article,brand,PU,Unite,serial_num,files_name,nomCategorie)
VALUES ('$Nom', '$brand','$Unite','$Quantite','$Seriale','$traget','$Categorie')";

    if (mysqli_query($link, $sql) || (move_uploaded_file($_FILES['image']['tmp_name'], $traget)) ) {
       
      echo '<div style="position: fixed;z-index:1;left: 0;top: 0;height: 100%;width: 100%;overflow: auto;background: rgba(0,0,0,0.5);">
        <div style="background: #3fff00;margin: 20% auto;padding: 20px;width: 70%;">
        <a href="../View/products.php"  style="::hover {background: yellow};font-size:40px;float:right;text-decoration:none;font-weight:bold;"> &times; </a>
          <h1>le produit à été ajouté avec succès </h1>
        </div>
      </div>';
      
    } else {
        echo '<div style="position: fixed;z-index:1;left: 0;top: 0;height: 100%;width: 100%;overflow: auto;background: rgba(0,0,0,0.5);">
        <div style="background: #f44336;margin: 20% auto;padding: 20px;width: 70%;">
        <a href="../View/products.php"  style="::hover {background: yellow};font-size:40px;float:right;text-decoration:none;font-weight:bold;"> &times; </a>
          <h1>Errour d&acute;ajoue de produit ou d&acute;image </h1>
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