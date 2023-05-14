<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SSN Student Mentor Form</title>
  <link rel="shortcut icon" href="https://lms.ssn.edu.in/theme/image.php/boost/theme/1661575225/favicon" />
  <link rel="stylesheet" type="text/css" href="styles.css" />
</head>


<body>
  <header>
    <nav id="navbar">
      <div class="brand"><img src="download.png" alt="Logo of SSN">SSN Mentor Manager</div>
      <div id="links">
        <a href="index.html">Home</a>
      </div>
    </nav>
  </header>

  <div class="container ">
    <div class="glass_container studform">

      <form class="form" action="insert.php" method="post">
        <div class="input">
          <label for="name">Name: </label>
          <input type="text" id="name" name="name">
        </div>

        <div class="input">
          <label for="B/S">Branch/Section: </label>
          <input type="text" id="BS" name="BS">
        </div>

        <div class="input">
          <label for="year">Year of Joining: </label>
          <input type="number" id="year" name="year">
        </div>

        <div class="input">
          <label for="Mobile">Mobile Number: </label>
          <input type="number" id="mobile" name="mobile">
        </div>

        <div class="input">
          <label for="Gender">Gender: </label>
          <input type="text" id="gender" name="gender">
        </div>

        <br>

        <div class="center">
          <button type="submit" name="submit" class="btn">Submit</a>
        </div>
      </form>
    </div>
  </div>

</body>

</html>