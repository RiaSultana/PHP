<?php
$test = "Testing PHP";
$fonts = "verdana";
?>

<!DOCTYPE html>
<html lang="en">
<head> 
   <title>PHP For Loops</title>
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

        For Loop 

      <hr> <hr/>
        <?php 
        //Structure of For Loop
        // for(init counter; test condition; increment/decrement){
         //   code execution..
        //}

            for($i=1; $i<=10; $i++){
                echo "The number is: $i <br/>";
            }

        ?>
         <?php 
         echo "<br><br>";
        ?> 

        </section>

    <section class="footeroption">
            <h3><?php echo "www.shapedplugin.com";?></h3>
    </section>
    <div>
</body>
</html>