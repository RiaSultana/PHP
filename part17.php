<?php
$test = "Testing PHP";
$fonts = "verdana";
?>

<!DOCTYPE html>
<html lang="en">
<head> 
   <title>PHP Arrays</title>
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

        PHP Variable Scope (Local variable)
        <hr> <hr/>
        Using of global variable:
        <br></br>

        <?php
                $a = "'Global Test'.";
                $b = "'Variable test'.";

            function test1(){
                global $a;
                $x = 10;
                echo $x;
                echo "<br>";
                echo "The data is showing from the global variable: " . $a;
                echo "<br>";
            }
                test1();

            function test2(){
                global $b;
                $y = 15;
                echo $y;
                echo "<br>";
                echo "The data is showing from the global variable: " . $b;
                echo "<br>";
                echo "<br>";

            }
                test2();
          ?>
        
        <?php
        // PHP SUPER GLOBAL VARIABLES ($GLOBALS, $_SERVER, $_REQUEST, $_POST, $_GET, $_FILE, $_ENV, $_COOKIE, $_SESSION)

        // Practice:

            $x = 10;
            $y = 15;

            function sum(){
                $GLOBALS ['z'] = $GLOBALS ['x'] + $GLOBALS ['y'];       
            }
                sum();
                echo $z;
                echo "<br>";
                echo "<br>";

                echo $_SERVER['PHP_SELF'];
                echo "<br>";              
                echo $_SERVER['SERVER_NAME'];
                echo "<br>";  
                echo $_SERVER['SCRIPT_NAME']; 
                echo "<br>";  
                echo "<br>"; 
                echo $_SERVER['HTTP_USER_AGENT'];
                echo "<br>"; 
                echo $_SERVER['SERVER_ADDR'];
          ?>

        </section>

    <section class="footeroption">
            <h3><?php echo "www.shapedplugin.com";?></h3>
    </section>
    <div>
</body>
</html>