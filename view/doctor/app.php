<?php
include '../model/db.php';

// Check if the user is logged in as a doctor
session_start();
if (!isset($_SESSION["email"])) {
    header("Location: login.php");
    exit();
}

// Open database connection
$db = new Model();
$conobj = $db->OpenCon();

// Execute SQL query to fetch appointment list
$sql = "SELECT name, age, gender, email FROM patient_app";

$result = $conobj->query($sql);
?>

<html>
<head>
    <title>Appointment List</title>
</head>
<body>
    <h2>Appointment List</h2>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Email</th>
        </tr>
        <input type="submit" name= "update" value="Update">
        <input type="submit" name= "delete" value="delete">
    
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["age"] . "</td>";
                echo "<td>" . $row["gender"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td> <input type='text'></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No appointments found</td></tr>";
        }
        ?>
    </table>
    <br>
    <a href="homepage.php">Back to Homepage</a>
</body>
</html>
