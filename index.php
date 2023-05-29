<!DOCTYPE html>
<html>
<head>
  <title>User Registration Form</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <h1>User Registration Form</h1>
  <form>
    <label for="first-name">First Name:</label>
    <input type="text" id="first-name" name="first-name" required><br><br>

    <label for="last-name">Last Name:</label>
    <input type="text" id="last-name" name="last-name" required><br><br>

    <label for="login">Login:</label>
    <input type="text" id="login" name="login" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="address">Address:</label>
    <textarea id="address" name="address" required></textarea><br><br>

    <label for="education">Education:</label>
    <select id="education" name="education" required>
      <option value="" disabled selected>Select education level</option>
      <option value="Primary">Primary</option>
      <option value="Secondary">Secondary</option>
      <option value="Higher">Higher</option>
    </select><br><br><br>

    <label for="hobbies">Hobbies:</label>
    <label><input type="checkbox" id="sports" name="hobbies" value="Sports">Sports</label>
    <label><input type="checkbox" id="music" name="hobbies" value="Music">Music</label>
    <label><input type="checkbox" id="travel" name="hobbies" value="Travel">Travel</label>
    <label><input type="checkbox" id="movies" name="hobbies" value="Movies">Movies</label>
    <label><input type="checkbox" id="cooking" name="hobbies" value="Cooking">Cooking</label><br><br>

    <input type="submit" value="Register">
  </form>
</body>
</html>
