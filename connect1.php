<?php
$ename = filter_input(INPUT_POST, 'ename');
$nname = filter_input(INPUT_POST, 'nname');
$lname = filter_input(INPUT_POST, 'lname');
$dname = filter_input(INPUT_POST, 'dname');
if (!empty($ename)){
if (!empty($nname)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "book";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO multi (ename, nname, lname, dname)
values ('$ename','$nname','$lname','$dname')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
    
else{
echo "Values should not be empty";
die();
}
}

?>