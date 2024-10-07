<!DOCTYPE html>
<html lang="en">
<head>
    </head>

    <?php
$error = ''; // Initialize error variable

if (isset($_POST['submit'])) {
    // Check if username and password fields are empty
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = 'Please enter username and password.';
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Verify username and password
        if ($username === 'admin' && $password === 'admin123') {
            header('Location: welcome2.php');
            exit();
        } else {
            $error = 'Invalid username or password.';
        }
    }
}

if (isset($_POST['cancel'])) {
    header('Location: login1.php');
    exit();
}
?>

<!-- HTML Form for Login -->
<form method="POST" action="login1.php">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username">
    <label for="password">Password:</label>
    <input type="password" name="password" id="password">
    <input type="submit" name="submit" value="Login">
    <input type="submit" name="cancel" value="Cancel">
    <?php if (!empty($error)) { echo '<p style="color:red;">' . $error . '</p>'; } ?>
</form>

</body>
</html>