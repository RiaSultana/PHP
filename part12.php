<?php
$test = "Testing PHP";
$fonts = "verdana";
?>

<!DOCTYPE html>
<html lang="en">
<head> 
   <title>PHP Foreach Loop</title>
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

        Foreach Loop 

      <hr> <hr/>
        <?php 
//The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.

//Syntax: foreach ($array as $value) {
  //code to be executed;}
        ?>
        <?php
        $colors = array("red", "green", "blue", "white");

        foreach($colors as $value){
            echo "$value <br/>";
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