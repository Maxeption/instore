<?php

include('../php/config.php');
if (isset(($_POST['submit']))){
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$id2=$_POST['id2'];
$sql = "DELETE FROM article  WHERE idarticle ='$id2'";
if(mysqli_query($link, $sql)){
    echo '<div style="position: fixed;z-index:1;left: 0;top: 0;height: 100%;width: 100%;overflow: auto;background: rgba(0,0,0,0.5);">
    <div style="background: #3fff00;margin: 20% auto;padding: 20px;width: 70%;">
    <a href="../View/products.php"  style="::hover {background: yellow};font-size:40px;float:right;text-decoration:none;font-weight:bold;"> &times; </a>
      <h1>le produit à été supprimer avec succès </h1>
    </div>
  </div>';
} else{
    echo '<div style="position: fixed;z-index:1;left: 0;top: 0;height: 100%;width: 100%;overflow: auto;background: rgba(0,0,0,0.5);">
        <div style="background: #f44336;margin: 20% auto;padding: 20px;width: 70%;">
        <a href="../View/products.php"  style="::hover {background: yellow};font-size:40px;float:right;text-decoration:none;font-weight:bold;"> &times; </a>
          <h1>Errour de suprrission de ce produit </h1>
        </div>
      </div>';
}


 



// Close connection
mysqli_close($link);

}
else{
    header('Location: ../View/products.php');
}

?>