<?php
$test = "Testing PHP";
$fonts = "verdana";
?>

<!DOCTYPE html>
<html lang="en">
<head> 
   <title>PHP Functions</title>
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

        PHP Functions 

      <hr> <hr/>
       <?php 
        //  function school(){
        //     echo "I am a PHP learner.";
        //  }
        //  school();
        ?>

        <?php
        //  function school($name, $year){
        //     echo "$name is a renowned school in this town is established at $year. <br/> <br/>";
        //  }
        //   school("Shahbazpur ML High School", "1975");
        // //   school ();
        //   school("Sarail High School", "1962");
        //   school("Girls High School", "2006");
        ?>
   
        <?php
           function sum($x,$y){
             $z = $x+$y;
             return $z;
           }

           echo "5+10 = ".sum(5,10);
        ?>

        </section>

    <section class="footeroption">
            <h3><?php echo "www.shapedplugin.com";?></h3>
    </section>
    <div>
</body>
</html>