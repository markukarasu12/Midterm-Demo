<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css">
    <title>Document</title>
</head>
<body>
<?php
session_start();
    if(isset($_POST['signinBtn']) && isset($_POST['UserType'])){
        $arrUtype = $_POST['UserType'];

        foreach ($arrUtype as $key => $Utypevalue){
            if(($Utypevalue == "admin")){
                
                $admin1 ="admin";
                $Padmin1 ="password";
                $admin2 = "markraven";
                $Padmin2 = "pass123";
                
    
                if(($_POST['Username'] == $admin1 && $_POST['Password']==$Padmin1))
                {
                    $_SESSION['Username'] = $admin1;


                    echo '<div class="alert alert-success w-50 p-3 mx-auto">
                    welcome to the system ',$admin1,
                   '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>';
                }
                elseif(($_POST['Username'] == $admin2 && $_POST['Password']==$Padmin2)){
                        $_SESSION['Username'] = $admin2;
                        echo '<div class="alert alert-success w-50 p-3 mx-auto">
                        welcome to the system ',$admin2,
                       '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>'; 
                    }
                    else
                    {
                    echo '<div class="alert alert-danger w-50 p-3 mx-auto">
                    You Entered the wrong password
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>';
                    }         
                }


                if(($Utypevalue == "ContMan")){
                
                    $ContMan1 ="pepito";
                    $PcontMan1 ="manaloto";
                    $ContMan2 = "juan";
                    $PcontMan2 = "delacruz";
                    
        
                    if(($_POST['Username'] == $ContMan1 && $_POST['Password']==$PcontMan1))
                    {
                        $_SESSION['Username'] = $ContMan1;
    
    
                        echo '<div class="alert alert-success w-50 p-3 mx-auto">
                        welcome to the system ',$ContMan1,
                       '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>';
                    }
                    elseif(($_POST['Username'] == $ContMan2 && $_POST['Password']==$PcontMan2)){
                            $_SESSION['Username'] = $ContMan2;
                            echo '<div class="alert alert-success w-50 p-3 mx-auto">
                            welcome to the system ',$ContMan2,
                           '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>'; 
                        }
                        else
                        {
                        echo '<div class="alert alert-danger w-50 p-3 mx-auto">
                        You Entered the wrong password
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>';
                        }         
                    }

                    if(($Utypevalue == "SystemUs")){
                
                        $SystemUs1 ="pedro";
                        $PSystemUs1 ="penduko";
                        
                        
            
                        if(($_POST['Username'] == $SystemUs1 && $_POST['Password']==$PSystemUs1))
                        {
                            $_SESSION['Username'] = $SystemUs1;
        
        
                            echo '<div class="alert alert-success w-50 p-3 mx-auto">
                            welcome to the system ',$SystemUs1,
                           '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>';
                        }
                            else
                            {
                            echo '<div class="alert alert-danger w-50 p-3 mx-auto">
                            You Entered the wrong password
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>';
                            }         
                        }
    

            }
        }
    ?>


<div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="post">
            <div class="form-row align-items-center">
            <div class="col-auto my-1 ">
            <select class="form-control" id="UType" name ="UserType[]">
                <option value="admin">Admin</option>
                <option value="ContMan">Content Manager</option>
                <option value="SystemUs">System User</option>
            </select>
            </div>
                <br>
                <input type="text" name="Username" id="username" class="form-control" placeholder="User" required autofocus>
                <input type="password" name="Password"  id="password" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="signinBtn">Sign in</button>
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>



</body>
</html>