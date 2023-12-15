<?php
$test = "Testing PHP";
$fonts = "verdana";
?>

<!DOCTYPE html>
<html lang="en">
<head> 
   <title>PHP While Loop</title>
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

        While Loop 

      <hr> <hr/>
        <?php 
           //While loop

           $x = 1;
            while ($x<=5){
                echo "The number is: $x </br>";
                $x++;
            }
        ?>
         <?php 
         echo "<br><br>";
        ?> 

        <?php 
          // Do While Loop

          $x = 5;

          do{
            echo "The do number is: $x </br>";
            $x++;
          } while ($x<=4);
        ?>

        </section>

    <section class="footeroption">
            <h3><?php echo "www.shapedplugin.com";?></h3>
    </section>
    <div>
</body>
</html>