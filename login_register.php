<?php
require('connection.php');

if (isset($_POST['register'])) {
    $user_exist_query = "SELECT * FROM `users` WHERE `username`= '$_POST[username]' OR `email`= '$_POST[email]'";
    $result = mysqli_query($con, $user_exist_query);
    
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            // User already exists with the provided username or email
            $result_fetch = mysqli_fetch_assoc($result);
            if ($result_fetch['username'] == $_POST['username']) {
                // Error for username already registered
                echo "
                    <script>
                        alert('$result_fetch[username] - Username already taken');
                        window.location.href = 'index.php';
                    </script>
                ";
            } else {
                // Error for email already registered
                echo "
                    <script>
                        alert('$result_fetch[email] - E-mail already registered');
                        window.location.href = 'index.php';
                    </script>
                ";
            }
        } else {
            $query = "INSERT INTO `users` (`fullname`, `username`, `email`, `password`,`role`) VALUES ('$_POST[fullname]', '$_POST[username]', '$_POST[email]', '$_POST[password]', '$_POST[role]')";
            if (mysqli_query($con, $query)) {
                // Data inserted successfully
                echo "
                    <script>
                        alert('Registration successful');
                        window.location.href = 'index.php';
                    </script>
                ";
            } else {
                // Data cannot be inserted
                echo "
                    <script>
                        alert('Registration failed');
                        window.location.href = 'index.php';
                    </script>
                ";
            }
        }
    } else {
        // Query execution failed
        echo "
            <script>
                alert('Cannot run query');
                window.location.href = 'index.php';
            </script>
        ";
    }
}
?>