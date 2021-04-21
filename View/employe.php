<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../scss/employe.css" />

    <title>Employée</title>
</head>

<body>
    <?php  
    include('../php/config.php');
    session_start();
 
    ?>
    <div id="blurfilter">
        <div class="container">
            <div class="s_t-bar">
                <div class="top-bar"></div>

                <div class="side-bar">
                    <div class="profil">
                        <div class="pfp">
                            <?php echo "<img src='".$_SESSION['sess_url']."' alt='profil' class='u_pfp' > " ?> </div>
                        <span><?php echo $_SESSION['sess_Nom'] ?></span>
                        <span class="online"><?php echo $_SESSION['sess_Prenom'] ?></span>
                    </div>
                    <div class="page_li">
                        <ul>
                            <li>
                                <a href="../View/Menu.php"><img src="../image/menu.png" alt="icone" class="icone" />
                                    <span>Menu</span>
                                </a>
                            </li>
                            <li>
                                <a href="../View/products.php"><img src="../image/icon-produit.ico" alt="icone"
                                        class="icone" />
                                    <span>Products</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="../image/icon-employé.png" alt="icone"
                                        class="icone" /><span>Employees</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="bodyum">
            <div class="contente">
                <h1>Employee</h1>
                <a href="#" id="icone_ajouter"><img src="../image/icone-d'ajouter.png" alt="icone" class="icone1" />
                </a>
            </div>

            <div class="table-users">


                <table cellspacing="0">
                    <tr>
                        <th>Picture</th>
                        <th>id</th>
                        <th>CIN</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th></th>

                    </tr>
                    <?php


$sql = "SELECT * From usere";
if ($result = mysqli_query($link, $sql)) {
    while ($row = mysqli_fetch_row($result)) {

?>
                    <tr>
                        <td> <img src='<?php printf($row[5]); ?>' /></td>
                        <td><?php printf($row[0]); ?></td>
                        <td><?php printf($row[1]); ?></td>
                        <td><?php printf($row[3]); ?></td>
                        <td><?php printf($row[4]); ?></td>
                        <td>
                            <a class="editBtnaemp" id="icone_update"> <img src="../image/updated.png" alt="update"
                                    class="update-remove" /> </a>

                            <a class="supptBtna" id="icone_supp"> <img src="../image/remove.png" alt="remove"
                                    class="update-remove" /> </a>
                        </td>
                    </tr>
                    <?php
                        }
                        mysqli_free_result($result);
                    }

                    ?>
                </table>
            </div>
        </div>
    </div>
    <!-- insert -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close" onclick="close_insert()">&times;</span>
            <h1>insert</h1>
            <form class="form-inline" method="post" enctype="multipart/form-data" action="../php/insert_emp.php">
                <label> CIN : </label>
                <input type="text" id="CIN" name="CIN" placeholder="CIN" />
                <label> Nom : </label>
                <input type="text" id="Nom" name="Nom" placeholder="Nom" />

                <label> Prenom : </label>
                <input type="text" id="Prenom" name="Prenom" placeholder="Prenom" />

                <label> Password : </label>
                <input type="password" id="Password" name="Password" placeholder="Password" />

                <label> confirmer password : </label>
                <input type="password" id="confirmer_password" name="confirmer_password"
                    placeholder="confirmer_password" />

                <label> upload : </label>
                <input type="file" id="image" name="image" placeholder="Upload" />

                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
    </div>

    <!-- Update -->
    <div id="myUpdate" class="Update">
        <!-- Modal content -->
        <div class="Update-content">
            <span class="close" onclick="close_Update()">&times;</span>
            <h1>Update</h1>
            <form class="form-inline" method="post" enctype="multipart/form-data" action="../php/update_emp.php">
            <input type="text" id="id1" name="id1" />
                <label> CIN : </label>
                <input type="text" id="CIN1" name="CIN1" placeholder="CIN" />
                <label> Nom : </label>
                <input type="text" id="Nom1" name="Nom1" placeholder="Nom" />

                <label> Prenom : </label>
                <input type="text" id="Prenom1" name="Prenom1" placeholder="Prenom" />

                <label> Password : </label>
                <input type="text" id="Password1" name="Password1" placeholder="Password" />

                <label> confirmer password : </label>
                <input type="text" id="confirmer_password1" name="confirmer_password1" placeholder="confirmer_password" />

                <label> upload : </label>
                <input type="file" id="image1" name="image1" placeholder="Upload" />

                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
    </div>


    <!-- Supprimer -->
    <div id="mySupp" class="Supprimer">
        <!-- Modal content -->
        <div class="Supprimer-content">
            <span class="close" onclick="close_supp()">&times;</span>
            <h1>Supprimer</h1>
            <form class="form-inline" action="../php/delete_emp.php" method="post">
                <h3>Voulez-vous vraiment le supprimer ?</h3>
                <input type="text" id="id2" name="id2" />
                <button onclick="close_supp()">Cancel</button>
                <button type="submit" name="submit">Supprimer</button>
            </form>

        </div>
    </div>


    <script type="text/javascript" src="../js/javascript.js"></script>
</body>

</html>