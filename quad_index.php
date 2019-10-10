<?php
    include 'quadatic.php';
    if(isset($_POST['submit'])){
        $quadatic = new Quadatic;
        $test=$quadatic->mult_ac($_POST['a'], $_POST['c']);
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quadrativ Equation</title>
</head>
    <body>
        <form action="quad_index.php" method="post">
            Find solution for ax^2 + bx + c<br>
            <p>Insert the coeffiecient of x^2, x and the constant in the boxes a, b & c respectively</p>
            a: <input type="text" name="a"><br>
            b: <input type="text" name="b"><br>
            c: <input type="text" name="c"><br><br><br>
            <input type="submit" value="Find x!" name="submit">
            <h1>
            The result is <?php echo $test; ?>
            </h1>
        </form>  
    </body>
</html>