<?php

$ID = $_POST['ID'];
$Name = $_POST['Name'];
$Age = $_POST['Age'];
$MobileNumber = $_POST['MobileNumber'];
$City = $_POST['City'];

$con = new mysqli('localhost', 'root', '', 'phpconn');

if (isset($_POST['VIEW'])) {

    $query = "select * from phpconntable";
    $cmd = mysqli_query($con, $query);

    while ($set = mysqli_fetch_array($cmd)) {
        echo "<table>";
        echo "<tr>";
        echo "<td>" . $set['ID'] . "</td>";
        echo "<td>" . $set['Name'] . "</td>";
        echo "<td>" . $set['Age'] . "</td>";
        echo "<td>" . $set['MobileNumber'] . "</td>";
        echo "<td>" . $set['City'] . "</td>";
        echo "</tr>";
        echo "</table>";
    }
} elseif (isset($_POST['INSERT'])) {

    $query = "Insert into phpconntable values($ID,'$Name',$Age, $MobileNumber ,'$City')";
    $cmd = mysqli_query($con, $query);
} elseif (isset($_POST['UPDATE'])) {

    $query = "update phpconntable set Name='$Name',Age=$Age,City='$City' where ID=$ID";
    $cmd = mysqli_query($con, $query);
} elseif (isset($_POST['DELETE'])) {

    $query = "Delete from phpconntable where ID=$ID";
    $cmd = mysqli_query($con, $query);
}
mysqli_close($con);
