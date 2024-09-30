<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ODD or even</h1>
    <form method="post">
        <label for="number" >Enter the number</label>
        <input type="text" id="num" name="num">
         <button typr="submit" name="submit">Submit</button>
    </form>
 <?php
 if(isset($_POST["submit"])) {
    $num=$_POST['num'];
    if($num%2==0)
    {
        echo "Number is even";

    }
    else
    {
        echo "number is Odd";
    }
}
  ?>
  
    
</body>
</html>  
