<?php

define('NAME', 'Jay Anton V. Roblico');
define('STUDENT_NUMBER', '2018-03745-MN-0');
define('ADDRESS', '#63 Kaligtasan Ext., Holy Spirit Q.C.');
define('EMAIL_ADDRESS', 'jayantonroblico23@gmail.com');
define('CONTACT_NUMBER', '09636874548');
define('WEB_ADDRESS', 'cet5_lab_roblico');
define('LAB_TITLE', 'Laboratory Activity No. 8');
define('DESCRIPTION', 'Handling User Input - User Registration');

?>

<?php
    function generate_textbox($name, $value) {
        return '<input type="text" name="' . $name . '" value="' . $value . '">';
    }
    function generate_password($name, $value) {
        return '<input type="password" name="' . $name . '" value="' . $value . '">';
    }
    function generate_textarea($name, $value) {
        return '<textarea name="' . $name . '">' . $value . '</textarea>';
    }
    function generate_checkbox($name) {
        return '<input type="checkbox" name="' . $name . '">';
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
                    <li><a href="lab3.php">Working with Data Types and Operators</a></li>
                    <li><a href="lab4.php">Functions and Control Structures –Number to Words</a></li>
                    <li><a href="lab5.php">Magic Square</a></li>
                    <li><a href="lab6.php">String Functions in PHP</a></li>
                    <li><a href="lab7.php">Regular Expression</a></li>
                    <li><a href="lab8.php">Array Manipulations - Word Counter</a></li>
                    <li><a href="lab9.php"><?php echo DESCRIPTION;?></a></li>
                    <li><a href="lab10.php">Handling User Input - Dynamic Page</a></li>
                </ul>
            </nav>
        </div>
    
        <div class="content-section">
        <?php
            $lastname = isset($_POST['txtLastname']) ? $_POST['txtLastname'] : '';
            $firstname = isset($_POST['txtFirstname']) ? $_POST['txtFirstname'] : '';
            $middlename = isset($_POST['txtMiddlename']) ? $_POST['txtMiddlename'] : '';
            $emailaddress = isset($_POST['txtEmailaddress']) ? $_POST['txtEmailaddress'] : '';
            $username = isset($_POST['txtUsername']) ? $_POST['txtUsername'] : '';
            $password = isset($_POST['txtPassword']) ? $_POST['txtPassword'] : '';
            $confirmpassword = isset($_POST['txtConfirmPassword']) ? $_POST['txtConfirmPassword'] : '';
            $comments = isset($_POST['txtComments']) ? $_POST['txtComments'] : '';
            $agree = isset($_POST['txtAgree']) ? $_POST['txtAgree'] : '';

            if (count($_POST) == 0) 
            {
                echo '<form method="post" action="">';  
                echo '<table>';
                echo '<tr><td colspan=2><strong>Lab 9 - Form Processing (User Registration)</td></tr>';

                echo '<tr><td>Firstname</td><td>',generate_textbox('txtFirstname', $firstname),'</td></tr>';
                echo '<tr><td>Middlename</td><td>',generate_textbox('txtMiddlename', $middlename),'</td></tr>';
                echo '<tr><td>Lastname</td><td>',generate_textbox('txtLastname', $lastname),'</td></tr>';
                echo '<tr><td>Emailaddress</td><td>',generate_textbox('txtEmailaddress', $emailaddress),'</td></tr>';
                echo '<tr><td>Username</td><td>',generate_textbox('txtUsername', $username),'</td></tr>';
                echo '<tr><td>Password</td><td>',generate_textbox('txtPassword', $password),'</td></tr>';
                echo '<tr><td>ConfirmPassword</td><td>',generate_textbox('txtConfirmPassword', $confirmpassword),'</td></tr>';
                echo '<tr><td>Comments</td><td>',generate_textarea('txtComments', $comments),'</td></tr>';
                echo '<tr><td>Agree</td><td>',generate_checkbox('txtAgree', $agree),'</td></tr>';

                echo '<tr><td colspan=2>';
                echo '<input type="submit" name="btnRegister" value="Register">&nbsp;';
                echo '<input type="reset" name="btnReset" value="Reset">&nbsp;';
                echo '</td></tr>';
                echo '</table>';
                echo '</form>';
            }else 
            {
                echo '<table border=1 style="width:500px">';
                echo '<tr><td colspan=2><strong>Lab 9 - Form Processing (User Registration)</td></tr>';
                echo '<tr><td colspan=2 align=center><strong>FORM SUBMITTED</td></tr>';
                echo '<tr><td>Firstname</td><td>', $firstname, '</td></tr>';
                echo '<tr><td>Middlename</td><td>', $middlename, '</td></tr>';
                echo '<tr><td>Lastname</td><td>', $lastname, '</td></tr>';
                echo '<tr><td>Emailaddress</td><td>', $emailaddress, '</td></tr>';
                echo '<tr><td>Username</td><td>', $username, '</td></tr>';
                echo '<tr><td>Password</td><td>', $password, '</td></tr>';
                echo '<tr><td>ConfirmPassword</td><td>', $confirmpassword, '</td></tr>';
                echo '<tr><td>Comments</td><td>', $comments, '</td></tr>';
                echo '<tr><td>Agree</td><td>', $agree, '</td></tr>';
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