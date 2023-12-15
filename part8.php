<?php
$test = "Testing PHP";
$fonts = "verdana";
?>

<!DOCTYPE html>
<html lang="en">
<head> 
   <title>PHP Operators (Conditional Statements)</title>
    <style>
        body {font-family: <?php echo $fonts;?>}
        .phpcoding {width: 900px; background:#ddd; margin: 0 auto;  }
        .headeroption, .footeroption {background:#444; color:#fff; text-align: center;}
        .maincontent {min-height: 400px; padding: 20px;}
        .headeroption h2, .footeroption h3 {margin: 0px; padding: 20px;}
    </style>
</head>
<body>
    <div class="phpcoding">
        <section class="headeroption">
            <h2><?php echo "PHP Fundamental Tutorials (part-9-String)";?></h2>
        </section>

        <section class="maincontent">

        1. Arithmetic Operators <br>
        2. Assignment Operators <br>
        3. Comparison Operators <br>
        4. Increment/Decrement Operators <br>
        5. Logical Operators <br>
        6. String Operators <br>
        7. Array Operators <br> <br>

        <hr>Conditional Statements </hr>

        <?php 
         echo "<br><br>";
        ?> 

        <?php 
          $x = 25;

          if ($x == 10){
            echo "x is greater than 10";
          } elseif($x>5){
            echo "The above information are wrong";
          }
        ?>


        </section>

    <section class="footeroption">
            <h3><?php echo "www.shapedplugin.com";?></h3>
    </section>
    <div>
</body>
</html>