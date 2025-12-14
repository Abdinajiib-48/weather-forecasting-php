<?php
function db_init()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "WeatherDB";

    // Create connection (without selecting DB yet)
    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    //Create database only if it doesn't exist
    $sql = "CREATE DATABASE IF NOT EXISTS " . $dbname;
    $conn->query($sql);

    $conn->close();
}

function get_conn()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "WeatherDB"; // consistent name

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function db_create($conn)
{
    // Create table only if it doesn't exist
    $sql = "CREATE TABLE IF NOT EXISTS CityTable (
        id INT AUTO_INCREMENT PRIMARY KEY,
        city VARCHAR(50) NOT NULL UNIQUE
    )";
    $conn->query($sql);
}

function db_insert($conn, $input_city)
{
    // Prevent duplicates automatically because of UNIQUE constraint
    $sql = "INSERT IGNORE INTO CityTable (city) VALUES ('$input_city')";
    $conn->query($sql);
}

function db_delete($conn, $city)
{
    $sql = "DELETE FROM CityTable WHERE city='$city'";
    $conn->query($sql);
}

function db_delete_all($conn)
{
    $sql = "DELETE FROM CityTable";
    $conn->query($sql);
}

function db_print($conn)
{
    $sql = "SELECT * FROM CityTable";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<br>City: " . $row["city"];
        }
    } else {
        echo "<br>No cities found.";
    }
}

function db_close($conn)
{
    $conn->close();
}
?>
