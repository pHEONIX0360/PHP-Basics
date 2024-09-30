<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pattern Checker</h1>
    <form method="post">
        <label for="number" >Enter a String</label>
        <input type="text" id="string" name="string">
        <br>
        <label for="number" >Enter a Pattern</label>
        <input type="text" id="pat" name="pat">
         <button type="submit" name="submit">Submit my pattern in MySTRING </button>
    </form>
 <?php
      if(isset($_POST["submit"])) {
       $string=$_POST['string'];
       $pattern=$_POST['pat'];
        $pattern='/' .$pattern .'/';
        if(preg_match($pattern,$string)){

           echo "pattern $pattern found in $string /n";

        }   
     else{
                 echo "pattern $pattern not found in $string \n";
      }
    }
    ?>
</body>
</html>
