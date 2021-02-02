<?php

define('NAME', 'Jay Anton V. Roblico');
define('STUDENT_NUMBER', '2018-03745-MN-0');
define('ADDRESS', '#63 Kaligtasan Ext., Holy Spirit Q.C.');
define('EMAIL_ADDRESS', 'jayantonroblico23@gmail.com');
define('CONTACT_NUMBER', '09636874548');
define('WEB_ADDRESS', 'cet5_lab_roblico');
define('LAB_TITLE', 'Laboratory Activity No. 4');
define('DESCRIPTION', 'Functions and Control Structures –Number to Words');

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
                    <li><a href="lab4.php"><?php echo DESCRIPTION;?></a></li>
                    <li><a href="lab5.php">Magic Square</a></li>
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
            <div class="form-wrapper">
                <div class="convert-form">
                    <h2>Number to Words</h2>
                    <form action="" method="post">
                    <label for="">Number</label>
                    <input type="text" name="number" maxlength="3" placeholder="Enter a Number from 1 - 999">
                    <input type="submit" id="convert-btn" value="Convert">
                    <div class="result">
                    <?php
                        echo ($words);
                    ?>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <footer>
        <?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?>
    </footer>
</body>
</html>