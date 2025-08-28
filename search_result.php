<body style="background: url('search.jpg') no-repeat center center/cover; padding: 60px; text-align: center; color: white;">
<?php
include 'db.php';
include 'includes_header.php';
?>

<h2>Search Results</h2>

<?php
// Get search parameters safely
$title = isset($_GET['title']) ? $conn->real_escape_string($_GET['title']) : '';
$city = isset($_GET['city']) ? $conn->real_escape_string($_GET['city']) : '';
$sector = isset($_GET['sector']) ? $conn->real_escape_string($_GET['sector']) : '';

// ✅ Insert search into search_history table
$insert_sql = "INSERT INTO users (title, city, sector) VALUES (?, ?, ?)";
$stmt = $conn->prepare($insert_sql);
$stmt->bind_param("sss", $title, $city, $sector);
$stmt->execute();
$stmt->close();

// Display selected filters
echo "<p style='background:#ffffffcc; color:#000; display:inline-block; padding:10px 20px; border-radius:5px;'>
    <strong>Your Data:</strong><br>
    Job Title: " . (!empty($title) ? $title : "Any") . " |
    City: " . (!empty($city) ? $city : "Any") . " |
    Sector: " . (!empty($sector) ? $sector : "Any") . "
</p><br><br>";

// Build SQL query for job search
$sql = "SELECT * FROM users WHERE 1=1";

if (!empty($title)) {
    $sql .= " AND title LIKE '%$title%'";
}
if (!empty($city)) {
    $sql .= " AND city = '$city'";
}
if (!empty($sector)) {
    $sql .= " AND sector = '$sector'";
}

// Execute the search query
$result = $conn->query($sql);
?>

<?php include 'includes_footer.php'; ?>
