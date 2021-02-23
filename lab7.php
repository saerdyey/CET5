<?php

define('NAME', 'Jay Anton V. Roblico');
define('STUDENT_NUMBER', '2018-03745-MN-0');
define('ADDRESS', '#63 Kaligtasan Ext., Holy Spirit Q.C.');
define('EMAIL_ADDRESS', 'jayantonroblico23@gmail.com');
define('CONTACT_NUMBER', '09636874548');
define('WEB_ADDRESS', 'cet5_lab_roblico');
define('LAB_TITLE', 'Laboratory Activity No. 7');
define('DESCRIPTION', 'Regular Expression');

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
                    <li><a href="lab6.php">String Functions in PHP</a></li>
                    <li><a href="lab7.php"><?php echo DESCRIPTION;?></a></li>
                    <li><a href="lab8.php">Array Manipulations - Word Counter</a></li>
                    <li><a href="lab9.php">Handling User Input - User Registration</a></li>
                    <li><a href="lab10.php">Handling User Input - Dynamic Page</a></li>
                </ul>
            </nav>
        </div>
    
        <div class="content-section">
        <?php
            error_reporting(0);
            //regex expressions
            $patterns[] = array('String containing "PHP"', 'PHP');
            $patterns[] = array('Starting with "PHP"', '^PHP');
            $patterns[] = array('Ends with "PHP"', 'PHP$');
            $patterns[] = array('String equal to "PHP"', '^PHP$');
            $patterns[] = array('Word starting with letter "C"', '^C\w');
            $patterns[] = array('Non-empty lowercase string', '[a-z]');
            $patterns[] = array('Non-empty uppercase string', '[A-Z]');
            $patterns[] = array('Minimum 10 letters Maximum 20 letters', '^[A-Za-z].{10,20}$');
            $patterns[] = array('Minimum 10 digits Maximum 20 digits', '^[0-9]{10,20}$');
            $patterns[] = array('Minimum 10 characters Maximum 20 characters', '^.{10,20}$');
            $patterns[] = array('Valid PHP variable name', '[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*');
            $patterns[] = array('Valid PHP constant name', '[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*');
            $patterns[] = array('Valid decimal (base-10) integer', '^[0-9]\d');
            $patterns[] = array('Valid float number', '^[0-9]\d*(?:\.\d+)?');
            $patterns[] = array('5-letter string', '\b\w[A-Za-z]{1,5}\b');
            $patterns[] = array('5-digit string', '^[0-9]{5}$');
            $patterns[] = array('5 ascii characters', '[^A-Za-z0-9]{5}$');
            $patterns[] = array('5 non-alphanumeric characters', '[^A-Za-z0-9]{5}$');
            $patterns[] = array('Passing Grade (1.00,1.25,1.50 to 3.00)', '1.00|1.25|1.50|1.75|2.00|2.25|2.50|2.75|3.00');
            $patterns[] = array('Sub-domain Name (Ex. .edu or .ue.edu or .ccss.ue.edu)', '\w.edu|.ue.edu|.ccss.ue.edu');
            
            echo '<form method="post">';
            $i=1;
            echo '<table border=1>';
            echo '<tr><td colspan=5 align=center>Regular Expression Test</td></tr>';
            echo '<tr><td>No.</td><td>Description</td><td>String</td><td>RegEx Pattern</td><td>Result</td>';
            foreach ($patterns as $pattern_item) {
            $description = $pattern_item[0];
            $pattern = $pattern_item[1];
            $value = isset($_POST["field$i"]) ? $_POST["field$i"] : '';
            if ($pattern == '') {
                $result = 'Missing pattern';
                $pattern = '&nbsp;';
            }
            else {
                $pattern = '/' . $pattern . '/';
                if (preg_match($pattern, $value))
                $result = 'Valid';
                else
                $result = 'Invalid';
            }
            echo "<tr>";
            echo "<td>$i.</td><td>$description</td>";
            echo "<td><input type=text name=\"field$i\" value=\"$value\"></td>";
            echo "<td>$pattern</td><td>$result</td>";
            echo '<tr>';
            $i++;
            }
            echo '</table><br />';
            echo '<input type="submit" name="validate" value="Validate Data">&nbsp';
            echo '<input type="reset" value="Reset">&nbsp';
            echo '</form>';
        ?>
        </div>
    </div>
    
    <footer>
        <?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?>
    </footer>
</body>
</html>