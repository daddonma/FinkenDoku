<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "finken";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM bundesland";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id = trim($row['id']);
        $identifier = trim($row['Identifier']);
        $stadt = trim($row['Stadt']);
        $landkreis = trim($row['Landkreis']);
        $bundesland = trim($row['Bundesland']);
        
        echo $id . " " . $identifier . " ". $stadt . " ". $landkreis . " ". $bundesland . "<br>";
       /* $sql_update = utf8_encode("UPDATE bundesland SET Identifier = '".$identifier."', Stadt='".$stadt."', Landkreis ='".$landkreis."', Bundesland = '".$bundesland."' WHERE id=".$id.";");
        echo $sql_update;
        if(mysqli_query($conn, $sql_update)==true) {
            echo "success";
        } else  {
            echo "error";
        }
       ;
        echo "<br>";*/
    }
} else {
    echo "0 results";
}
$conn->close();
?>