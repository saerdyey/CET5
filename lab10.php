<?php

define('NAME', 'Jay Anton V. Roblico');
define('STUDENT_NUMBER', '2018-03745-MN-0');
define('ADDRESS', '#63 Kaligtasan Ext., Holy Spirit Q.C.');
define('EMAIL_ADDRESS', 'jayantonroblico23@gmail.com');
define('CONTACT_NUMBER', '09636874548');
define('WEB_ADDRESS', 'cet5_lab_roblico');
define('LAB_TITLE', 'Laboratory Activity No. 10');
define('DESCRIPTION', 'Handling User Input - Dynamic Page');

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
                    <li><a href="lab7.php">Regular Expression</a></li>
                    <li><a href="lab8.php">Array Manipulations - Word Counter</a></li>
                    <li><a href="lab9.php">Handling User Input - User Registration</a></li>
                    <li><a href="#"><?php echo DESCRIPTION;?></a></li>
                </ul>
            </nav>
        </div>
    
        <div class="content-section">
        <?php
            $links['lab10_home.php'] = 'Home';
            $links['lab10_vision.php'] = 'Vision';
            $links['lab10_mission.php'] = 'Mission';
            $links['lab10_history.php'] = 'History';
            echo '<table width=80% border=1>';
            // navigation section
            echo '<tr><td>';
            foreach ($links as $key => $value)
            echo '&nbsp;<a href="?page=', $key, '"> ', $value, ' </a>&nbsp;';
            echo '</td></tr>';
            // dynamic content
            echo '<tr><td><br />';
            if ( isset($_GET['page']) ) {
            $page = $_GET['page'];
            if (is_readable($page))
            include_once($page);
            else
            echo 'File <strong>', $page, '</strong> not found!';
            }
            else {
            reset($links);
            include_once(key($links));
            }
            echo '<br /><br />';
            echo '</td></tr>';
            echo '</table>';

            ?>
        </div>
    </div>
    
    <footer>
        <?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?>
    </footer>
</body>
</html>