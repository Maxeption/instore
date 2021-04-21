<?php  
    session_start();
    include('config.php');  
    if (isset($_POST['CIN'])&& isset($_POST['Pass'])) {
        $username = $_POST['CIN'];
        $password = $_POST['Pass'];
    
        $query = "SELECT * FROM usere WHERE CIN='$username' and Pass='$password'";
        $result = mysqli_query($link, $query) or die(mysqli_error($link));
        $count = mysqli_num_rows($result);
        $login_variables = mysqli_fetch_array($result);
        $_SESSION['sess_CIN'] = $login_variables['CIN'];
        $_SESSION['sess_Pass'] = $login_variables['Pass'];
        $_SESSION['sess_Nom'] = $login_variables['Nom'];
        $_SESSION['sess_Prenom'] = $login_variables['Prenom'];
        $_SESSION['sess_url'] = $login_variables['files_name'];
      
        if(isset($_SESSION['sess_CIN']) && isset($_SESSION['sess_Pass']))
        {
            header('location:../View/Menu.php');
           

           
            
        } 
        else
        {
      
      echo "<script type='text/javascript'>alert ('Sorry! Cannot login.'); document.location.href='javascript: history.go(-1)'</script>";
      
      }



        
       /* if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        } */
    }

    
?> 