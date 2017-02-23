<?php
# DECLARE BASIC VARIABLES
    $give_cards_num_p1 = rand(4, 6);
    $give_cards_num_p2 = rand(4, 6);
    $give_cards_num_p3 = rand(4, 6);
    $give_cards_num_p4 = rand(4, 6);
    $score_p1 = 0;
    $score_p2 = 0;
    $score_p3 = 0;
    $score_p4 = 0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<table style="width:100%;">
    <tbody>
        <tr>
            <td>
                <?php 
                for ($x = 0; $x <= $give_cards_num_p1-1; $x++)
                   {
                       $card = rand(1,13);
                       $suit = rand(0, 3);
                       echo "<img src='cards/" . $suit . "/" . $card . ".png'>";
                       echo "<br><br>";
                        $score_p1=$score_p1+$card;
                   }
                    echo "<h1>You Got " . $score_p1 . " Points!</h1>";
                    if ($score_p1 > 42)
                        {
                            echo "<h1 style='color:red'>You Busted!</h1>";
                        }
                ?>
            </td>
            <td>
                <?php 
                for ($x = 0; $x <= $give_cards_num_p2-1; $x++)
                   {
                      $card = rand(1,13);
                       $suit = rand(0, 3);
                       echo "<img src='cards/" . $suit . "/" . $card . ".png'>";
                       echo "<br><br>";
                        $score_p2=$score_p2+$card;
                   }
                     echo "<h1>You Got " . $score_p2 . " Points!</h1>";
                    if ($score_p2 > 42)
                        {
                            echo "<h1 style='color:red'>You Busted!</h1>";
                        }                     
                ?>
            </td>
            <td>
                <?php 
                for ($x = 0; $x <= $give_cards_num_p3-1; $x++)
                   {
                       $card = rand(1,13);
                       $suit = rand(0, 3);
                       echo "<img src='cards/" . $suit . "/" . $card . ".png'>";
                       echo "<br><br>";
                        $score_p3=$score_p3+$card;
                   }
                     echo "<h1>You Got " . $score_p3 . " Points!</h1>";
                    if ($score_p3 > 42)
                        {
                            echo "<h1 style='color:red'>You Busted!</h1>";
                        }                     
                ?>
            </td>
            <td>
                <?php 
                for ($x = 0; $x <= $give_cards_num_p4-1; $x++)
                   {
                       $card = rand(1,13);
                       $suit = rand(0, 3);
                       echo "<img src='cards/" . $suit . "/" . $card . ".png'>";
                       echo "<br><br>";
                        $score_p4=$score_p4+$card;
                   }
                     echo "<h1>You Got " . $score_p4 . " Points!</h1>";
                    if ($score_p4 > 42)
                        {
                            echo "<h1 style='color:red'>You Busted!</h1>";
                        }                     
                ?>
            </td>
        </tr>
    </tbody>
</table>
<div class="text-center">
<?php
    $score_check_p1=$score_p1;
    $score_check_p2=$score_p2;
    $score_check_p3=$score_p3;
    $score_check_p4=$score_p4;
    if ($score_check_p1 > 42){
        $score_check_p1 = 0;
    }
    if ($score_check_p2 > 42){
        $score_check_p2 = 0;
    }
    if ($score_check_p3 > 42){
        $score_check_p3 = 0;
    }
    if ($score_check_p4 > 42){
        $score_check_p4 = 0;
    }
         
         $arr = array("a"=>$score_check_p1,"b"=>$score_check_p2, "c"=>$score_check_p3, "d"=>$score_check_p4);
         echo(max(array($score_check_p1,$score_check_p2,$score_check_p3,$score_check_p4)));
?>
</div>
</body>
</html>