<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SSN Student Mentor Form</title>
  <link rel="shortcut icon" href="https://lms.ssn.edu.in/theme/image.php/boost/theme/1661575225/favicon" />

  <link rel="stylesheet" type="text/css" href="styles.css.css?v=<?php echo time(); ?>">
    <style>
        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 900px;
            margin: 100px 0 0 250px
        }

        table {
            border: 1px solid black;
            border-color: black;
            color: #588c7e;
            font-family: monospace;
            font-size: 25px;
            /* width: 100%; */
            margin: 50px;
        }

        th {
            background-color: #588c7e;
            color: white;
        }

        tr {
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        @import url('https://fonts.googleapis.com/css2?family=Varela+Round&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Convergence&family=Ubuntu:ital,wght@0,300;0,400;1,300&family=Varela+Round&display=swap');

@import url('https://fonts.googleapis.com/css2?family=Varela+Round&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Convergence&family=Ubuntu:ital,wght@0,300;0,400;1,300&family=Varela+Round&display=swap');

* {
    margin: 0;
    padding: 0;
}

body {
    background-color: #f2f2f2;
}


.container {
    display: flex;
    justify-content: center;
    align-items: center;
}

.index {
    margin: 150px auto;
}

.glass_container {
    background: rgba(255, 255, 255, 0.7);
    box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
    backdrop-filter: blur(4px);
    border-radius: 10px;
    border: 1px solid rgba(255, 255, 255, 0.18);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 80%;
}


.glass_container h1 {
    font-family: 'Ubuntu', sans-serif;
    text-align: center;
    margin: 50px 20px 20px;
}



.glass_container p {
    padding: 15px;
    font-family: 'Ubuntu', sans-serif;
}

.index p {
    padding: 15px;
    font-size: 200%;
    font-family: 'Ubuntu', sans-serif;
}

/*button css*/
.btn {
    font-size: 18px;
    font-weight: bold;
    background: #1E90FF;
    width: 150px;
    /* height: 20px; */
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    color: #fff;
    border-radius: 20px;
    cursor: pointer;
}

.btn:hover,
.btn:focus,
.btn:active {
    transform: scale(1.1);
}

.center {
    display: flex;
    justify-content: center;
    align-items: center;
}

/* studform.html styles */
.studform {
    display: block;
    margin: 50px 50px;
    width: 900px;
    text-align: left;
}

.form {
    /* font-size: 15px; */
    margin: 20px 80px;
    font-weight: bold;
}

.form .input {
    padding: 10px 0;
}

.form .input input {
    border-radius: 10px;
    font-size: 20px;
    padding: 10px;
}

.form .input label {
    font-size: 18px;
    display: inline-block;
    width: 150px;
}

    </style>
</head>

<body>
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
        <center>
          <button type="submit" name="submit" class="btn">Submit</a>
    </center>
      </form>
        <table>
            <tr>
                <th>Name</th>
                <th>Branch/Year</th>
                <th>Year of Joining</th>
                <th>Mobile</th>
                <th>Gender</th>
            </tr>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "sdelab");
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT name,BS,year,mobile,gender FROM student_details";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["name"] . "</td>
                            <td>" . $row["BS"] . "</td>
                            <td>" . $row["year"] . "</td>
                            <td>" . $row["mobile"] . "</td>
                            <td>" . $row["gender"] . "</td>
                        </tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </table>
    </div>
  </div>
</body>

</html>