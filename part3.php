<?php
$test = "Testing PHP";
$fonts = "verdana";
?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <title>PHP Data Types (Object)</title>
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
            <h2><?php echo "PHP Fundamental Tutorials (7-object)";?></h2>
        </section>

        <section class="maincontent">
            1. String
            2. Integer
            3. Float
            4. Boolean
            5. Array
            6. Object
            7. Null
            8. Resource
            </br>
            <hr/>
            Array
            <hr/>
            
        <?php 
        echo "PHP Data Types";
        echo "<br> <br>";
        $r = array ("Hridoy", "Ria", "Rion");
        var_dump($r);
        ?>
        <hr/>
        Object
        <hr/>
        <?php 
            class student{
                function department(){
                    return "Physics";
                }
                function details(){
                    echo $this->department();
                }
            }
           $st = new student;
           $st-> details();
           echo $st->department();
        ?>
        

        </section>

    <section class="footeroption">
            <h3><?php echo "www.shapedplugin.com";?></h3>
    </section>
    <div>
</body>
</html>