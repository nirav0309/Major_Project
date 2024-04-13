<?php
require('connection.php');
session_start();

// Create the 'registered_users' table if it doesn't exist
$createTableQuery = "CREATE TABLE IF NOT EXISTS `registered_users` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `confirm` VARCHAR(255) NOT NULL
)";

// Execute the table creation query
if (mysqli_query($con, $createTableQuery)) {
    echo "Table 'registered_users' created or already exists.";
} else {
    echo "Error creating table: " . mysqli_error($con);
}

# for login form
if (isset($_POST['Login'])) {
    $query = "SELECT * FROM `registered_users` WHERE `email`='$_POST[email]' OR `username`='$_POST[email]'";
    $result = mysqli_query($con, $query);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $result_fetch = mysqli_fetch_assoc($result);
            if (password_verify($_POST['password'], $result_fetch['password'])) {
                $_SESSION['logged_in'] = true;
                $_SESSION['username'] = $result_fetch['username'];

                header("location: login.php");
            } else {
                echo "
                <script>
                alert('Incorrect Password');
                window.location.href='login.php';
                </script>
                ";
            }
        } else {
            echo "
            <script>
            alert('Email or Username not registered');
            window.location href='login.php';
            </script>
            ";
        }
    } else {
        echo "
        <script>
        alert('Cannot Run Query');
        window.location.href='login.php';
        </script>
        ";
    }
}

# for register form
if (isset($_POST['Register'])) {
    $user_exist_query = "SELECT * FROM `registered_users` WHERE `username`='$_POST[username]' OR `email`='$_POST[email]'";
    $result = mysqli_query($con, $user_exist_query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $result_fetch = mysqli_fetch_assoc($result);
            if ($result_fetch['username'] == $_POST['username']) {
                echo "
                <script>
                alert('$result_fetch[username] - Username already taken');
                window.location.href='login.php';
                </script>
                ";
            } else {
                echo "
                <script>
                alert('$result_fetch[email] - E-mail already registered');
                window.location.href='login.php';
                </script>
                ";
            }
        } else {
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $query = "INSERT INTO `registered_users`(`username`, `email`, `password`, `confirm`) VALUES ('$_POST[username]','$_POST[email]','$password','$_POST[confirm]')";
            if (mysqli_query($con, $query)) {
                echo "
                <script>
                alert('Registration Successful');
                window.location.href='login.php';
                </script>
                ";
            } else {
                echo "
                <script>
                alert('Cannot Run Query');
                window.location.href='login.php';
                </script>
                ";
            }
        }
    } else {
        echo "
        <script>
        alert('Cannot Run Query');
        window.location.href='login.php';
        </script>
        ";
    }
}
