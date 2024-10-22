<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <br>
        <form action="index.php" method="post">
            <label>quantity: </label>
            <input type="number"  name="quantity">
            <button type="submit" >total</button>
        </form>
        
    
</body>
</html>

<?php

    /* $GET, $_POST = special variable used to collect data from an HTML
                      from data is sent to the file in the action attribute
                      of <form>
                      <form action="some_file.php" method="get">

        $GET = Data is appended to the url
               -Not secure
               -char limit
               -Bookmark is possible w/ values
               -Better for a search page

        $_POST = Data is packaged inside the body of HTTP request
                 -MORE SECURE
                 -No data limit 
                 -Cannot bookmark
                 -GET requests are not cached
                 -Better for submitting credentials

    */

    $price = 5.99;
    $quantity = $_POST["quantity"];

    $total = $price * $quantity;

    echo "Your ordered {$quantity} x pizzas <br>";
    echo "Total amount is: \${$total}";
   
?>
