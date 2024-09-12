<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Admin Dashboard</h1>
    </header>

    <section>
        <h2>Welcome, Admin</h2>
        <ul>
            <li><a href="add_book.html">Add Book</a></li>
            <li><a href="update_book.html">Update/Delete Book</a></li>
            <li><a href="issue_book.html">Issue Book</a></li>
            <li><a href="return_book.html">Return Book</a></li>
            <li><a href="manage_fine.html">Manage Fines</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </section>

    <footer>
        <p>&copy; 2024 Local Library. All rights reserved.</p>
    </footer>
</body>
</html>
