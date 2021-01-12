<?php

define('NAME', 'Jay Anton V. Roblico');
define('STUDENT_NUMBER', '2018-03745-MN-0');
define('ADDRESS', '#63 Kaligtasan Ext., Holy Spirit Q.C.');
define('EMAIL_ADDRESS', 'jayantonroblico23@gmail.com');
define('CONTACT_NUMBER', '09636874548');
define('WEB_ADDRESS', 'cet5_lab_roblico');
define('LAB_TITLE', 'Laboratory Activity No. 2');
define('DESCRIPTION', 'Creating Basic PHP Script');

$school = 'Polytechnic University of The Philippines';
$course = 'Bachelor of Science in Computer Engineering';
$yearLevel = 3;
$dateOfBirth = '03-23-2000';
$gender = 'Male';

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
                <li><a href="lab1.php">Hello World</a></li>
                <li><a href="lab2.php">Basic PHP Script</a></li>
                <li><a href="#">Lab 3</a></li>
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
        <h1>Home Page</h1>
        <p>Use the navigation to see the laboraties</p>
    </div>
    </div>
    
    <footer>
        <?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?>
    </footer>
</body>
</html>