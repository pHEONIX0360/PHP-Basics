<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>STRING CHECKER</h1>
    <form method="post">
        <label for="number" >Enter the string</label>
        <input type="text" id="inputString" name="inputString">
         <button typr="submit" name="submit">Submit</button>
    </form>
 <?php
 if(isset($_POST["submit"])) {
    $inputString=$_POST['inputString'];
    $wordCount=str_word_count($inputString);
    echo "<h2> Total Word Count $wordCount</h2>";
 }
 ?>  
 </body>
 </html>