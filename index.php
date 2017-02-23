<?php
# DECLARE BASIC VARIABLES
    $give_cards_num_p1 = 4;
    $give_cards_num_p2 = 4;
    $give_cards_num_p3 = 4;
    $give_cards_num_p4 = 4;
    $score_p1 = 0;
    $score_p2 = 0;
    $score_p3 = 0;
    $score_p4 = 0;
    $win_condition = 42;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
     body {
        background-image: url("http://i.imgur.com/uEskaSW.jpg");
        background-repeat: no-repeat;
        background-position: left top;
        background-size: 100% 100%;
        font-family:helvetica;
        font-size:14px;
        height:100%;
        width:100%;
     }
     
     #first-tb {
         width:100%;
         height:100%;
     }
     
     #container {
         width:100%;
         height:100%;
     }
     h1{
         color:#fff;
     }
  </style>
</head>
<body>
    <div id="container">
        <table id="first-tb">
            <tbody>
                <tr >
                    <td style="padding-left:50px;">
                        <?php 
                        $prof = rand(0, 9);
                        echo "<img src='prof/profile_id_" . $prof . ".jpg'><br>";
                        for ($x = 0; $x <= $give_cards_num_p1-1; $x++)
                           {
                               $card = rand(1,13);
                               $suit = rand(0, 3);
                               echo "<img src='cards/" . $suit . "/" . $card . ".png'>";
                               echo "<br><br>";
                                $score_p1=$score_p1+$card;
                           }
                            if ($score_p1 > 42)
                                {
                                    echo "<h1 style='color:red'>You Busted!</h1>";
                                }
                            elseif ($score_p1 == $win_condition) {
                                // code...
                                echo "<h1 style='color:red'>You Won!</h1>";
                            }
                            elseif ($score_p1 < $win_condition) {
                                // code...
                                $next_card = rand(1,13);
                                $next_suit = rand(0,3);
                                echo "<img src='cards/" . $next_suit . "/" . $next_card . ".png'>";
                                echo "<br><br>";
                                $score_p1=$score_p1+$next_card;
                                if ($score_p1 > $win_condition)
                                {
                                    echo "<h1 style='color:red'>You Busted!</h1>";
                                }
                                elseif ($score_p1 == $win_condition) {
                                    // code...
                                    echo "<h1 style='color:red'>You Won!</h1>";
                                    
                                }
                                elseif($score_p1 < $win_condition){
                                    $last_card = rand(1,13);
                                    $last_suit = rand(0,3);
                                    echo "<img src='cards/" . $last_suit . "/" . $last_card . ".png'>";
                                    echo "<br><br>";
                                    $score_p1=$score_p1+$last_card;
                                    if ($score_p1 > $win_condition)
                                    {
                                        echo "<h1 style='color:red'>You Busted!</h1>";
                                    }
                                    elseif ($score_p1 == $win_condition) {
                                        // code...
                                        echo "<h1 style='color:red'>You Won!</h1>";
                                        
                                    }
                                }
                            }
                            echo "<h1>You Got " . $score_p1 . " Points!</h1>";
                        ?>
                    </td>
                    <td>
                        <?php 
                        $prof = rand(0, 9);
                        echo "<img src='prof/profile_id_" . $prof . ".jpg'><br>";
                        for ($x = 0; $x <= $give_cards_num_p2-1; $x++)
                           {
                              $card = rand(1,13);
                               $suit = rand(0, 3);
                               echo "<img src='cards/" . $suit . "/" . $card . ".png'>";
                               echo "<br><br>";
                                $score_p2=$score_p2+$card;
                           }
                            if ($score_p2 > 42)
                                {
                                    echo "<h1 style='color:red'>You Busted!</h1>";
                                }   
                            elseif ($score_p2 == $win_condition) {
                                // code...
                                echo "<h1 style='color:red'>You Won!</h1>";
                                
                            }
                            elseif ($score_p2 < $win_condition) {
                                // code...
                                $next_card = rand(1,13);
                                $next_suit = rand(0,3);
                                echo "<img src='cards/" . $next_suit . "/" . $next_card . ".png'>";
                                echo "<br><br>";
                                $score_p2=$score_p2+$next_card;
                                if ($score_p2 > $win_condition)
                                {
                                    echo "<h1 style='color:red'>You Busted!</h1>";
                                }
                                elseif ($score_p2 == $win_condition) {
                                    // code...
                                    echo "<h1 style='color:red'>You Won!</h1>";
                                    
                                }
                                elseif($score_p2 < $win_condition){
                                    $last_card = rand(1,13);
                                    $last_suit = rand(0,3);
                                    echo "<img src='cards/" . $last_suit . "/" . $last_card . ".png'>";
                                    echo "<br><br>";
                                    $score_p2=$score_p2+$last_card;
                                    if ($score_p2 > $win_condition)
                                    {
                                        echo "<h1 style='color:red'>You Busted!</h1>";
                                    }
                                    elseif ($score_p2 == $win_condition) {
                                        // code...
                                        echo "<h1 style='color:red'>You Won!</h1>";
                                        
                                    }
                                }
                            }
                        echo "<h1>You Got " . $score_p2 . " Points!</h1>";
                        ?>
                    </td>
                    <td>
                        <?php 
                        $prof = rand(0, 9);
                        echo "<img src='prof/profile_id_" . $prof . ".jpg'><br>";
                        for ($x = 0; $x <= $give_cards_num_p3-1; $x++)
                           {
                               $card = rand(1,13);
                               $suit = rand(0, 3);
                               echo "<img src='cards/" . $suit . "/" . $card . ".png'>";
                               echo "<br><br>";
                                $score_p3=$score_p3+$card;
                           }
                             //echo "<h1>You Got " . $score_p3 . " Points!</h1>";
                            if ($score_p3 > 42)
                                {
                                    echo "<h1 style='color:red'>You Busted!</h1>";
                                }   
                            elseif ($score_p3 == $win_condition) {
                                // code...
                                echo "<h1 style='color:red'>You Won!</h1>";
                                
                            }
                            elseif ($score_p3 < $win_condition) {
                                // code...
                                $next_card = rand(1,13);
                                $next_suit = rand(0,3);
                                echo "<img src='cards/" . $next_suit . "/" . $next_card . ".png'>";
                                echo "<br><br>";
                                $score_p3=$score_p3+$next_card;
                                if ($score_p3 > $win_condition)
                                {
                                    echo "<h1 style='color:red'>You Busted!</h1>";
                                }
                                elseif ($score_p3 == $win_condition) {
                                    // code...
                                    echo "<h1 style='color:red'>You Won!</h1>";
                                    
                                }
                                elseif($score_p3 < $win_condition){
                                    $last_card = rand(1,13);
                                    $last_suit = rand(0,3);
                                    echo "<img src='cards/" . $last_suit . "/" . $last_card . ".png'>";
                                    echo "<br><br>";
                                    $score_p3=$score_p3+$last_card;
                                    if ($score_p3 > $win_condition)
                                    {
                                        echo "<h1 style='color:red'>You Busted!</h1>";
                                    }
                                    elseif ($score_p3 == $win_condition) {
                                        // code...
                                        echo "<h1 style='color:red'>You Won!</h1>";
                                        
                                    }
                                }
                            }
                        echo "<h1>You Got " . $score_p3 . " Points!</h1>";                  
                        ?>
                    </td>
                    <td>
                        <?php 
                        $prof = rand(0, 9);
                        echo "<img src='prof/profile_id_" . $prof . ".jpg'><br>";                        
                        for ($x = 0; $x <= $give_cards_num_p4-1; $x++)
                           {
                               $card = rand(1,13);
                               $suit = rand(0, 3);
                               echo "<img src='cards/" . $suit . "/" . $card . ".png'>";
                               echo "<br><br>";
                                $score_p4=$score_p4+$card;
                           }
                            if ($score_p4 > 42)
                                {
                                    echo "<h1 style='color:red'>You Busted!</h1>";
                                }
                                elseif ($score_p4 == $win_condition) {
                                // code...
                                echo "<h1 style='color:red'>You Won!</h1>";
                                
                            }
                            elseif ($score_p4 < $win_condition) {
                                // code...
                                $next_card = rand(1,13);
                                $next_suit = rand(0,3);
                                echo "<img src='cards/" . $next_suit . "/" . $next_card . ".png'>";
                                echo "<br><br>";
                                $score_p4=$score_p4+$next_card;
                                if ($score_p4 > $win_condition)
                                {
                                    echo "<h1 style='color:red'>You Busted!</h1>";
                                }
                                elseif ($score_p4 == $win_condition) {
                                    // code...
                                    echo "<h1 style='color:red'>You Won!</h1>";
                                    
                                }
                                elseif($score_p4 < $win_condition){
                                    $last_card = rand(1,13);
                                    $last_suit = rand(0,3);
                                    echo "<img src='cards/" . $last_suit . "/" . $last_card . ".png'>";
                                    echo "<br><br>";
                                    $score_p4=$score_p4+$last_card;
                                    if ($score_p4 > $win_condition)
                                    {
                                        echo "<h1 style='color:red'>You Busted!</h1>";
                                    }
                                    elseif ($score_p4 == $win_condition) {
                                        // code...
                                        echo "<h1 style='color:red'>You Won!</h1>";
                                        
                                    }
                                }
                            }
                             echo "<h1>You Got " . $score_p4 . " Points!</h1>";
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
                /* 
                 $arr = array("a"=>$score_check_p1,"b"=>$score_check_p2, "c"=>$score_check_p3, "d"=>$score_check_p4);
                 echo(max(array($score_check_p1,$score_check_p2,$score_check_p3,$score_check_p4)));
                 */
            $player_scores=array("Player 1"=>$score_check_p1, "Player 2"=>$score_check_p2, "Player 3"=>$score_check_p3, "Player 4"=>$score_check_p4);
            function closest($arrayNums, $checkFor){//func that gets the closest value to our desired value by measuring there absolute distances
                $distances = array();//array that will hold the distance values
                foreach ($arrayNums as $key => $num) {
                    // code...
                    $distances[$key]=abs($checkFor-$num);//get the distance from our desired value and add it to the distances array, with the keys being the values we're comparing to our condition
                }
                return $arrayNums[array_search(min($distances), $distances)];//use array_search to look through the array and return the desired min value
            }
            $winner=closest($player_scores, $win_condition);
           // echo $winner; Testing function output
            if($winner==$score_check_p1){
                echo "<h1 style='color:red'>Player 1 is the Winner!</h1>";
            }
            elseif ($winner==$score_check_p2) {
                // code...
                echo "<h1 style='color:red'>Player 2 is the Winner!</h1>";
            }
            elseif ($winner==$score_check_p3) {
                // code...
                echo "<h1 style='color:red'>Player 3 is the Winner!</h1>";
            }
            elseif($winner==$score_check_p4){
                echo "<h1 style='color:red'>Player 4 is the Winner!</h1>";
            }
            else{
                echo "<h1 style='color:red'>No Winner!</h1>";
            }
        ?>
    </div>
</div>
</body>
</html>