<body style="background: url('login.jpg') no-repeat center center/cover; padding: 60px; text-align: center; color: white;">
<?php
session_start();
include 'db.php';

$admin_email = "admin@jobboard.com";  // predefined admin
$admin_password = "Admin123";         // predefined password
?>
<center>
<h1 style="background-color: #C4CFD8; color: white; padding: 5px; width: 200;">Admin Login</h1>
</center>
<h2>
<form method="POST" action="">
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button type="submit" name="login">Login</button>
</h2>   
</form>

<?php
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check hardcoded admin
    if($email == $admin_email && $password == $admin_password){
        $_SESSION['user'] = "Admin";
        $_SESSION['user_type'] = "Admin";
        echo "<p style='color:yellow;'>✅ Admin Logged In!</p>";
        header("Location: indexx.php");
        exit;
    }

    // Normal users login
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row['password'])) {
            $_SESSION['user'] = $row['name'];
            $_SESSION['user_type'] = $row['user_type'];
            echo "<p style='color:yellow;'>✅ Welcome " . $_SESSION['user'] . "</p>";
            header("Location: index.php");
        } else {
            echo "<p style='color:red;'>❌ Invalid Password!</p>";
        }
    } else {
        echo "<p style='color:red;'>❌ User Not Found!</p>";
    }
}
?>

<?php include 'includes_footer.php'; ?>
