<?php
$test = "Testing PHP";
$fonts = "verdana";
?>

<!DOCTYPE html>
<html lang="en">
<head> 
    
    <title>PHP Syntax</title>
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
            <h2><?php echo "PHP Fundamental Tutorials (1-5)";?></h2>
        </section>

        <section class="maincontent">
        <?php 
        echo "I love PHP <br> <br>"; 
        echo $test;       
        ?>
        <?php
        $a = 5;
        $b = 5;
        $c = $a + $b;

        echo "<br> <br> Summation =  ".$c.", It is correct.";
        
        ?>
        </section>

    <section class="footeroption">
            <h3><?php echo "www.shapedplugin.com";?></h3>
    </section>
    <div>
</body>
</html>