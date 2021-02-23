<?php

define('NAME', 'Jay Anton V. Roblico');
define('STUDENT_NUMBER', '2018-03745-MN-0');
define('ADDRESS', '#63 Kaligtasan Ext., Holy Spirit Q.C.');
define('EMAIL_ADDRESS', 'jayantonroblico23@gmail.com');
define('CONTACT_NUMBER', '09636874548');
define('WEB_ADDRESS', 'cet5_lab_roblico');
define('LAB_TITLE', 'Laboratory Activity No. 6');
define('DESCRIPTION', 'String Functions in PHP');

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
                    <li><a href="lab3.php">Working with Data Types and Operators</a></li>
                    <li><a href="lab4.php">Functions and Control Structures –Number to Words</a></li>
                    <li><a href="lab5.php">Magic Square</a></li>
                    <li><a href="lab6.php"><?php echo DESCRIPTION;?></a></li>
                    <li><a href="Lab7.php">Regular Expression</a></li>
                    <li><a href="lab8.php">Array Manipulations - Word Counter</a></li>
                    <li><a href="lab9.php">Handling User Input - User Registration</a></li>
                    <li><a href="lab10.php">Handling User Input - Dynamic Page</a></li>
                </ul>
            </nav>
        </div>
    
        <div class="content-section">
        <?php
            $string = isset($_POST['string']) ? $_POST['string'] : ' ';
            function convert($string){
            $split = explode(" ", $string);
            foreach($split as $key => $like){
                echo '*';
                echo $like, '*<br>';
            }
            };
            echo '<form method=post action="">';
            echo '<h1>String Functions in PHP</h2>';
            echo '<input type="text" name="string" value="', $string, '" size=100><br /><br />';
            echo '<input type="submit" value="Apply Functions">&nbsp;';
            echo '<input type="reset" value="Reset"><br />';
            echo '</form>';

                echo '<table border=2 align = center>';
                echo '<tr><td>1.</td><td>Original Value of String</td>';
                echo '<td>*', $string, '*</td></tr>';
                echo '<tr><td>2.</td><td>Number of characters</td>';
                echo '<td>*', strlen($string), '*</td></tr>';
                echo '<tr><td>3.</td><td>Number of words</td>';
                echo '<td>*', str_word_count($string), '*</td></tr>';
                echo '<tr><td>4.</td><td>First character to uppercase </td>';
                echo '<td>*', ucfirst($string), '*</td></tr>';
                echo '<tr><td>5.</td><td>First character of each word to uppercase </td>';
                echo '<td>*', ucwords($string), '*</td></tr>';
                echo '<tr><td>6.</td><td>To lowercase </td>';
                echo '<td>*', strtolower($string), '*</td></tr>';
                echo '<tr><td>7.</td><td>To uppercase </td>';
                echo '<td>*', strtoupper($string), '*</td></tr>';
                echo '<tr><td>8.</td><td>Without leading spaces </td>';
                echo '<td>*', ltrim($string), '*</td></tr>';
                echo '<tr><td>9.</td><td>Without trailing spaces </td>';
                echo '<td>*', rtrim($string), '*</td></tr>';
                echo '<tr><td>10.</td><td>Without leading and trailing spaces </td>';
                echo '<td>*', trim($string), '*</td></tr>';
                echo '<tr><td>11.</td><td>MD5 Value of string</td>';
                echo '<td>*', md5($string), '*</td></tr>';
                echo '<tr><td>12.</td><td>Base64 Value of string</td>';
                echo '<td>*', base64_encode($string), '*</td></tr>';
                echo '<tr><td>13.</td><td>First 16 characters</td>';
                echo '<td>*', substr($string, 0, 16), '*</td></tr>';
                echo '<tr><td>14.</td><td>Last 4 characters</td>';
                echo '<td>*', substr($string, -4), '*</td></tr>';
                echo '<tr><td>15.</td><td>4 characters starting from the 20th position</td>';
                echo '<td>*', substr($string, 20, 4), '*</td></tr>';
                echo '<tr><td>16.</td><td>Postion of the word "guide"</td>';
                echo '<td>*', var_dump(strpos($string,'guide')), '*</td></tr>';
                echo '<tr><td>17.</td><td>Position of the word "UE"</td>';
                echo '<td>*', var_dump(strpos($string, 'ue')), '*</td></tr>';
                echo '<tr><td>18.</td><td>"HTML" word in uppercase</td>';
                echo '<td>*',strtoupper(substr($string, 20, 4)), '*</td></tr>';
                echo '<tr><td>19.</td><td>"INPUT" word in uppercase </td>';
                echo '<td>*',strtoupper(substr($string, 30, 6)), '*</td></tr>';
                echo '<tr><td>20.</td><td>Strings converted to array </td>';
                echo'<td>*',convert($string), '*</td></tr>';
                echo '</table>';
        ?>
        </div>
    </div>
    
    <footer>
        <?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?>
    </footer>
</body>
</html>