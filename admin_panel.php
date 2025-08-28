<?php
session_start();
include 'db.php';
include 'includes_header.php';

// Restrict access to admin only
if(!isset($_SESSION['user_type']) || $_SESSION['user_type'] != "Admin"){
    echo "<p style='color:red;'>❌ Access Denied. Admins only.</p>";
    exit;
}
?>

<h2>Admin Panel</h2>

<h3>Registered Users</h3>
<?php
$sql_users = "SELECT id, name, email, user_type, created_at FROM users";
$result_users = $conn->query($sql_users);

if($result_users->num_rows > 0){
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>User Type</th><th>Registered At</th></tr>";
    while($row = $result_users->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['user_type']."</td>";
        echo "<td>".$row['created_at']._]()
