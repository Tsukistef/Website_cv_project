// search.php
<?php
if(isset($_GET['query'])) {
    $query = $_GET['query'];
    // Perform search operation in the database
    // Display search results
}
?>

// contact.php
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Store form data in the database
    // INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')
}
?>
