<?php

define('NAME', 'Jay Anton V. Roblico');
define('STUDENT_NUMBER', '2018-03745-MN-0');
define('ADDRESS', '#63 Kaligtasan Ext., Holy Spirit Q.C.');
define('EMAIL_ADDRESS', 'jayantonroblico23@gmail.com');
define('CONTACT_NUMBER', '09636874548');
define('WEB_ADDRESS', 'cet5_lab_roblico');
define('LAB_TITLE', 'Laboratory Activity No. 3');
define('DESCRIPTION', 'Working with Data Types and Operators');

$myinteger = 10;
$myfloat = 10.57;
$mystring = '10 apples';
$myboolean = TRUE;
$mynull = NULL;
$myarray = array(1,2,3)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo LAB_TITLE;?></title>
    <link rel="stylesheet" href="./style/style.css">
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
                <li><a href="lab2.php">Basic PHP Script</a></li>
                <li><a href="lab3.php">Data Types and Operators</a></li>
                <li><a href="#">Lab 4</a></li>
                <li><a href="#">Lab 5</a></li>
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
        <h2>1. PHP Data Types</h2>
        <?php
        echo '<table width="95%" border=1 style="border-collapse: collapse;">';
        echo '<tr><td>1a. $myinteger </td><td>', var_dump($myinteger), '</td></tr>';
        echo '<tr><td>1b. $myfloat </td><td>', var_dump($myfloat), '</td></tr>';
        echo '<tr><td>1c. $mystring </td><td>', var_dump($mystring), '</td></tr>';
        echo '<tr><td>1d. $myboolean </td><td>', var_dump($myboolean), '</td></tr>';
        echo '<tr><td>1e. $mynull </td><td>', var_dump($mynull), '</td></tr>';
        echo '<tr><td>1f. $myarray </td><td>', var_dump($myarray), '</td></tr>';
        echo '</table>'
        ?>
        <h2>2. PHP Arithmetic Operators</h2>
        <?php
        echo '<table width="95%" border=1 style="border-collapse: collapse;">';
        echo '<tr><td>2a. $myinteger + 10 </td><td>', var_dump($myinteger + 10), '</td></tr>';
        echo '<tr><td>2b. $myinteger - 5 </td><td>', var_dump($myinteger - 5), '</td></tr>';
        echo '<tr><td>2c. $myinteger * 2 </td><td>', var_dump($myinteger * 2), '</td></tr>';
        echo '<tr><td>2d. $myinteger / 3 </td><td>', var_dump($myinteger / 3), '</td></tr>';
        echo '<tr><td>2e. $myboolean + 1 </td><td>', var_dump($myboolean + 1), '</td></tr>';
        echo '<tr><td>2f. $mystring * 2 </td><td>', var_dump($mystring * 2), '</td></tr>';
        echo '</table>'
        ?>
        <h2>3. PHP Bitwise Operators</h2>
        <?php
        echo '<table width="95%" border=1 style="border-collapse: collapse;">';
        echo '<tr><td>3a. $myinteger & 8 </td><td>', var_dump($myinteger & 8), '</td></tr>';
        echo '<tr><td>3b. $myinteger | 8 </td><td>', var_dump($myinteger | 8), '</td></tr>';
        echo '<tr><td>3c. $myinteger << 1 </td><td>', var_dump($myinteger << 1), '</td></tr>';
        echo '<tr><td>3d. $myinteger >> 1 </td><td>', var_dump($myinteger >> 1), '</td></tr>';
        echo '</table>'
        ?>
        <h2>4. PHP Comparison Operators</h2>
        <?php
        echo '<table width="95%" border=1 style="border-collapse: collapse;">';
        echo '<tr><td>3a. $myinteger == 10 </td><td>', var_dump($myinteger == 10), '</td></tr>';
        echo '<tr><td>3b. $myinteger > 10 </td><td>', var_dump($myinteger > 10), '</td></tr>';
        echo '<tr><td>3c. $myinteger >= 10 </td><td>', var_dump($myinteger >= 10), '</td></tr>';
        echo '<tr><td>3d. $myinteger < 20 </td><td>', var_dump($myinteger < 20), '</td></tr>';
        echo '<tr><td>3e. $myinteger <= 20 </td><td>', var_dump($myinteger <= 20), '</td></tr>';
        echo '<tr><td>3f. $myinteger == $mystring </td><td>', var_dump($myinteger == $mystring), '</td></tr>';
        echo '<tr><td>3g. $myinteger === $mystring </td><td>', var_dump($myinteger === $mystring), '</td></tr>';
        echo '</table>'
        ?>
        <h2>5. PHP Logical Operators</h2>
        <?php
        echo '<table width="95%" border=1 style="border-collapse: collapse;">';
        echo '<tr><td>3a. $myinteger >= 10 and $myinteger <= 20 </td><td>', var_dump($myinteger >= 10 and $myinteger <= 20), '</td></tr>';
        echo '<tr><td>3b. $myinteger == 10 or $myinteger == 20 </td><td>', var_dump($myinteger > 10 or $myinteger == 20), '</td></tr>';
        echo '<tr><td>3c. $myinteger == 10 xor $myinteger == 20 </td><td>', var_dump($myinteger >= 10 xor $myinteger == 20), '</td></tr>';
        echo '</table>'
        ?>
    </div>
    </div>
    
    <footer>
        <?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?>
    </footer>
</body>
</html>