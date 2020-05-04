<?php
header('Content-Type: application/json');

include('conn.php');

$sqlQuery = "SELECT id,email,nop FROM charts  ORDER BY id";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>