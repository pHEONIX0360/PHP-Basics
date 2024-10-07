<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PLease log in</h1>
    
    <form method="post">
        <label for="number" >User Name</label>
        <input type="text" id="name" name="name">
        <br>
        <label for="number" >Password</label>
        <input type="text" id="pass" name="pass">
        <br>
         <button type="login" name="login">Login</button>
         <button type="cancel" name="cancel">Cancel</button>
    </form>
    <?php
     if(isset($_POST{'cancel'})){

           header("Location:prime.php");
        }
     $failure =false;
     if(isset($_GET['name'])&& isset($_GET['pass'])){
           if (sstrlen($_GET['who'])<1|| strlen($_GET['pass'])<1)
           {
             $failure="User name and passcode are required";
            }else
           {
            $check=$_GET['pass'];
           }
           
     }
     

    ?>
    <?php
          if ($failure!==false){
          echo("$failure");
            }   
      

         ?>

</body>
</html>  
