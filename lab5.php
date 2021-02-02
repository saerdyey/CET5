<?php

define('NAME', 'Jay Anton V. Roblico');
define('STUDENT_NUMBER', '2018-03745-MN-0');
define('ADDRESS', '#63 Kaligtasan Ext., Holy Spirit Q.C.');
define('EMAIL_ADDRESS', 'jayantonroblico23@gmail.com');
define('CONTACT_NUMBER', '09636874548');
define('WEB_ADDRESS', 'cet5_lab_roblico');
define('LAB_TITLE', 'Laboratory Activity No. 4');
define('DESCRIPTION', 'Magic Square');

$number = (int)(isset($_POST['number']) ? $_POST['number'] : 0);
if (($number < 1) or ($number > 999)) {
    if (count($_POST) > 0) {
        $words = 'Sorry, I can process 1 to 999 only!';
    }
    else {
        $words = '&nbsp;';
    }
}
else {
    $words = $number . ' in words is ' . NumberToWords($number);
}

function NumberToWords($number){
    $words = '';
    $f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
    return ucfirst($f->format($number));
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo LAB_TITLE;?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <?php
    echo NAME;
    ?>
    </header>
    <div class="container">
        <div class="nav-section">
            <nav>
                <ul>
                    <li><a href="/roblico">Home Page</a></li>
                    <li><a href="lab1.php">Hello World</a></li>
                    <li><a href="lab2.php">Creating Basic PHP Script</a></li>
                    <li><a href="lab3.php">Working with Data Types and Operators]</a></li>
                    <li><a href="lab4.php">Number to Words</a></li>
                    <li><a href="lab5.php"><?php echo DESCRIPTION;?></a></li>
                    <li><a href="#">Lab 6</a></li>
                    <li><a href="#">Lab 7</a></li>
                    <li><a href="#">Lab 8</a></li>
                    <li><a href="#">Lab 9</a></li>
                    <li><a href="#">Lab 10</a></li>
                    <li><a href="#">Lab 11</a></li>
                    <li><a href="#">Lab 12</a></li>
                    <li><a href="#">Lab 13</a></li>
                    <li><a href="#">Lab 14</a></li>
                    <li><a href="#">Lab 15</a></li>
                    <li><a href="#">Lab 16</a></li>
                </ul>
            </nav>
        </div>
    
        <div class="content-section">
        <?php 
            echo '<form action="" method="post">';
            echo '<table cellpadding=4 border=1 style="border-collapse:collapse">';
            echo '<tr><td align="center"><strong>Magic Square</strong></td></tr>';
            echo '<tr><td>Enter an odd number &nbsp;<input type=text name=number>&nbsp;';
            echo '<input type="submit" value="Generate Magic Square"></td></tr>';
            echo '</table>';
            echo '</form>';
            if (count($_POST) > 0) {
            $number = (int)(isset($_POST['number']) ? $_POST['number'] : 3);
            print_magicsquare($number);
            }
            function print_magicsquare($number) {
                if ($number <= 3 and $number!= null){
                    $size = 3;
                }elseif ($number%2 == 0 and $number!= null){
                    $size = $number + 1;
                }else{
                    $size = $number;
                }                       
                $MATRIX = array();
                foreach (range(0,$size) as $row) {
                    foreach (range(0,$size) as $col) {
                        $MATRIX[$row][$col] = 0;
                    }
                }
                $MATRIX[0][floor( $size / 2 )] = 1;
                $numbering = $size * $size;
                for ($i=1, $r=0, $c=((($size+1) /2)-1); $i<=$numbering; $i++){
                    while($MATRIX[$r][$c] != 0){
                        $r=$r-1;
                        $c=$c-1;
                        if ($r<0){
                            $r=($size -1);
                        }
                        if ($c<0){
                            $c=($size -1);
                        }
                        if ($MATRIX[$r][$c] != 0){
                            if($r==$size-1 || $c==$size-1){
                                if($r==$size-1){
                                    $r=1;
                                }
                                if($c==$size-1){
                                    $c=0;
                                }
                            }else{
                                $r=$r+2;
                                $c=$c+1;
                            }
                        }
                    }
                    $MATRIX[$r][$c] = ($i+1);
                }
                echo '<table border=1 cellpadding=4 style="border-collapse:collapse">';
                for ($r=0, $i=0; $r<$size; $r++) {
                echo '<tr>';
                for ($c=0; $c<$size; $c++, $i++)
                echo '<td>' . $MATRIX[$r][$c] . '</td>';
                echo '</tr>';
                }
                echo '</table>';
            }
        ?>
        </div>
    </div>
    
    <footer>
        <?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?>
    </footer>
</body>
</html>