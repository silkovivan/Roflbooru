<?php

$con = new mysqli('localhost', 'root', '');
mysqli_select_db($con, 'rolf');

$results_per_page = 6;

$sql = "SELECT * FROM roflbooru WHERE star = 3";

$result = mysqli_query($con, $sql);
$number_of_results = mysqli_num_rows($result);

$pagLink = "";   

$number_of_pages = ceil($number_of_results/$results_per_page);

for ($page=1; $page<=$number_of_pages;$page++) {
    '<a href="?page=' . $page . '" >' . $page . '</a> ';

}

if (!isset($_GET['page'])){
    $page = 1;
    } else {
        $page = $_GET['page'];
    }

$this_page_first_result = ($page-1)*$results_per_page;

$sql = "SELECT * FROM roflbooru WHERE star = 3 ORDER BY date DESC LIMIT " . $this_page_first_result . ',' . $results_per_page;

$category = 1;
$sqlс = "SELECT * FROM roflbooru   LIMIT  " . $this_page_first_result . ',' . $results_per_page;

$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_array($result)) {
    $row['id'] . ' ' . $row['title'] . '<br>';
    $data[]=$row;
}

?>