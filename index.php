<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $hobbies = $_POST["hobbies"] ?? array();
    $login = $_POST["login"] ?? "";
    $password = $_POST["password"] ?? "";
    $email = $_POST["email"] ?? "";
  
    // Check login and password length
    if (strlen($login) < 5 || strlen($password) < 5) {
      echo "Login and password must be at least 5 characters long.";
      // Handle the error condition here
    } elseif (empty($hobbies)) {
      echo "Please select at least one hobby.";
      // Handle the error condition here
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) || !preg_match('/\.com$/', $email)) {
      echo "Please enter a valid email address with a '.com' domain.";
      // Handle the error condition here
    } else {
      // Hobbies are selected, login and password are valid, and email is valid
      // Proceed with form processing
      // Access other form fields using $_POST array
      // ...
      // Process the form data
      // ...
      echo "Form submitted successfully!";
    }
  }
  



?>
