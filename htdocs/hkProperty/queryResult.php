<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "add";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

include 'queryMarker.php';

if (array_key_exists('query', $_POST)) {
    $sql = $_POST['query'];
    echo "Query: " . $_POST['query'];
    echo "<br><br>";
} else {
    echo "Error: empty query";
    die;
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    if (array_key_exists('fieldName', $_POST)) {
        $fieldNameArr = explode(',', $_POST['fieldName']);

        // output field name row
        echo "<table><tr>"; 
        foreach ($fieldNameArr as &$value) {
            echo "<th>$value</th>"; 
        }
        echo "</tr>";

        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            foreach ($fieldNameArr as &$value) {
                echo "<td>".$row[$value]."</td>"; 
            }
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Error: no fieldName";
    }
} else {
    echo "0 results";
}

$conn->close();
?>