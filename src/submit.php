<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the name and email from the POST data
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    // Here you can add your logic to process the form data,
    // for now, let's just return a success message
    $response = "Hello $name, your message is successfully submitted!";
    
    // Return the response
    echo $response;
} else {
    // If the request method is not POST, return an error message
    echo "Error: Invalid Request";
}
?>
