<?php

include_once "db7.php";

$i_board = $_POST['i_board'];
$title = $_POST['title'];
$ctnt = $_POST['ctnt'];

$conn = get_conn();
$sql = "UPDATE t_board SET title = '$title', ctnt = '$ctnt' WHERE i_board = $i_board";

$result = mysqli_query($conn, $sql);
mysqli_close($conn);

header("location: detail7.php?i_board=$i_board");
die();
