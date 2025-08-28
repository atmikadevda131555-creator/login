<?php include 'db.php'; ?>
<?php include 'includes_header.php'; ?>

<h1>Register</h1>
<form method="POST" action="">
    <input type="text" name="name" placeholder="Full Name" required><br><br>
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    
    <label>Your Type:</label>
    <select name="user_type" required>
        <option value="">Select Type</option>
        <option value="Candidate">Candidate</option>
        <option value="Employer">Employer</option>
    </select><br><br>

    <button type="submit" name="register">Register</button>
</form>

<?php
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $user_type = $_POST['user_type'];

    $sql = "INSERT INTO users (name, email, password, user_type) VALUES ('$name','$email','$password','$user_type')";
    if ($conn->query($sql)) {
        echo "<p style='color:yellow;'>✅ Registered Successfully!</p>";
    } else {
        echo "<p style='color:red;'>❌ Error: " . $conn->error . "</p>";
    }
}
?>

<?php include 'includes_footer.php'; ?>
