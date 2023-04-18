<?php 
declare(strict_types=1);
include_once("includes/myautoload.include.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator page</title>
</head>
<body>

    <form action="includes/calc.include.php" method="post">
        <p> Calculator !!</p>
        <input type="number" name ="num1" placeholder="First Number" >
        <select name="oper">
            <option value="add">addition</option>
            <option value="sub">subtraction</option>
            <option value="div">division</option>
            <option value="mul">multiplication</option>
        </select>
        <input type="number" name ="num2" placeholder="Secound Number">
        <button type="submit" name= "submit">Calculate</button>


    </form>
    
</body>
</html>