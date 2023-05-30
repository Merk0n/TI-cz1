<?php
require_once('database.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve form data
  $firstName = $_POST['first-name'];
  $lastName = $_POST['last-name'];
  $login = $_POST['login'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $education = $_POST['education'];
  $hobbies = $_POST['hobbies'];

  // Perform validations
  $errors = [];

  if (strlen($login) < 5 || strlen($password) < 5) {
    $errors[] = "Login and password must be at least 5 characters long.";
  }

  if (!strpos($email, '.com')) {
    $errors[] = "Email must contain '.com'.";
  }

  if (empty($hobbies)) {
    $errors[] = "Please select at least one hobby.";
  }


  // If there are errors, display the error message and a back button
  if (!empty($errors)) {
    echo "<h2>Error:</h2>";
    foreach ($errors as $error) {
      echo "<p>$error</p>";
    }
    echo "<a href='index.php'>Go back</a>";
    exit;
  }

  // If there are no errors, display the registration details
  else{
    echo "<h2>Registration Details:</h2>";
    echo "<p><strong>First Name:</strong> " . $firstName . "</p>";
    echo "<p><strong>Last Name:</strong> " . $lastName . "</p>";
    echo "<p><strong>Login:</strong> " . $login . "</p>";
    echo "<p><strong>Password:</strong> " . $password . "</p>";
    echo "<p><strong>Email:</strong> " . $email . "</p>";
    echo "<p><strong>Address:</strong> " . $address . "</p>";
    echo "<p><strong>Education:</strong> " . $education . "</p>";
    echo "<p><strong>Hobbies:</strong> " . (is_array($hobbies) ? implode(", ", $hobbies) : $hobbies) . "</p>";
  }

  // Define database connection parameters
  $host = 'localhost';
  $user = 'root';
  $password = '';
  $database = 'TI-cz1';

  // Connect to database
  $connection = mysqli_connect($host, $user, $password, $database);

  // Check connection
  checkConnection($connection, $database);

  // Prepare the SQL query
  $sql = "INSERT INTO users (firstName, lastName, login, password, email, address, education, hobbies) 
          VALUES ('$firstName', '$lastName', '$login', '$password', '$email', '$address', '$education', '$hobbies')";
  
  // Execute the query
  if (mysqli_query($connection, $sql)) {
      echo "Registration successful!";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($connection);
  }
  
  // Close the database connection
  mysqli_close($connection);

}
?>
