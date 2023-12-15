<?php
$test = "Testing PHP";
$fonts = "verdana";
?>

<!DOCTYPE html>
<html lang="en">
<head> 
   <title>PHP Operators</title>
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
            <h2><?php echo "PHP Fundamental Tutorials (part-9)";?></h2>
        </section>

        <section class="maincontent">

        1. Arithmetic Operators <br>
        2. Assignment Operators <br>
        3. Comparison Operators <br>
        4. Increment/Decrement Operators <br>
        5. Logical Operators <br>
        6. String Operators <br>
        7. Array Operators <br> <br>

        <hr>Logical Operators: </hr>

        <?php 
            echo "and (&&), or(||), xor, not true (!==)";
            echo "<br> <br>";
        ?>

        <?php 
        //  Example of and(&&)

            $a = 40;
            $b = 20;

            if ($a == 40 and $b == 20){
                echo "This is correct.";
            } else{
                echo "This is wrong.";
            }
            echo "<br> <br>";
        ?>
            
            <?php 
        //  Example of or(||)

            $o = 30;
            $r = 20;

            if($o == 30 or $r == 10){
                echo "OR operating is working.";
            }else{
                echo "It's not working.";
                
            }
        ?>
            <?php 
        //  Example of xor
        echo "<br> <br>";
            $r = 15;
            $s = 25;

            if($r == 15 xor $s == 10){
                echo "XOR operating is working.";
            }else{
                echo "It's not working.";
            }
        ?>
            <?php 
        //  Example of not true (!==)
        echo "<br> <br>";
            $a = 15;
            $b = 25;

            if($a !== 10){
                echo "Example of not true";
            }else{
                echo "It's not working.";
            }
        ?>

        </section>

    <section class="footeroption">
            <h3><?php echo "www.shapedplugin.com";?></h3>
    </section>
    <div>
</body>
</html>