
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <label for="number">Enter the number:</label>
        <input type="numer" id="number" name="number" required><br><br>
        <button type='submit' name="submit">Check</button>
    </form>
<?php
  function prime($number){
  if($number < 2)
      return false;
     for ($i=2;$i<=sqrt($number); $i++){
        if($number%$i==0){
            return false;
        }
     }
     return true;
 }

 if(isset($_POST["submit"]))
 {
    $number =(int )$_POST["number"];
     if (isPrime($number))
     {
        print("<p> $number is a prime number ");

     } else
     {
        print("$number is not a prime");
     }
 }
?>
</body>
</html>