<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../scss/dashbord.css">
    <title>Menu</title>
</head>

<body>
<?php  
    include('../php/config.php');
    session_start();
 
    ?>
    <div class="container">
        <div class="s_t-bar">
            <div class="top-bar">
            </div>

            <div class="side-bar">
                <div class="profil">
                <div class="pfp"> <?php echo "<img src='".$_SESSION['sess_url']."' alt='profil' class='u_pfp' > " ?>   </div>
                    <span><?php echo $_SESSION['sess_Nom'] ?></span>
                    <span class="online"><?php echo $_SESSION['sess_Prenom'] ?></span>
                </div>
                <div class="page_li">
                    <ul>
                        <li>
                            <a href="#"><img src="../image/menu.png" alt="icone" class="icone"> <span>Menu</span> </a>
                        </li>
                        <li>
                            <a href="../View/products.php"><img src="../image/icon-produit.ico" alt="icone" class="icone"> <span>Products</span> </a>
                        </li>
                        <li>
                            <a href="../View/employe.php"><img src="../image/icon-employé.png" alt="icone" class="icone"><span>Employees</span> </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </div>

    <div class="bodyum">
        <div>
            <h1>Menu</h1>
        </div>

        <div class="contenu">
            <div class="col_left"><a href="employe.php">Employé</a></div>
            <div class="col_right"><a href="products.php">Produit</a></div>
        </div>
        <hr class="linez">
        

    </div>
</body>

</html>