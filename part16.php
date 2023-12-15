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

        PHP Sorting Arrays
        <hr> <hr/>
        Associative array:
        <br></br>

        <?php
            $ages = array("Bayzid"=>"33", "Saiful"=>"29","Iqbal"=>"31", "Hridoy"=>"28");
            ksort($ages);

          foreach($ages as $key=>$value){
            echo "<br>";
            echo "Name(key) =" .$key. ", Age(value) =".$value;
            echo "<br>"; 
          }
          ?>
        
        </section>

    <section class="footeroption">
            <h3><?php echo "www.shapedplugin.com";?></h3>
    </section>
    <div>
</body>
</html>