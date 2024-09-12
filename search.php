<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'library');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the search term
$searchTerm = $_GET['searchTerm'];

// Query the books table
$sql = "SELECT * FROM books WHERE title LIKE '%$searchTerm%' OR author LIKE '%$searchTerm%' OR isbn LIKE '%$searchTerm%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output the results
    echo "<h2>Search Results:</h2>";
    while($row = $result->fetch_assoc()) {
        echo "Title: " . $row['title'] . " - Author: " . $row['author'] . "<br>";
    }
} else {
    echo "No results found.";
}

$conn->close();
?>
