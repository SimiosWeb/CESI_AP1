<html>
<head><link rel="stylesheet" href="assets/css/main.css"></head>
</html>
<?php
include './include/header.php';

$page = $_GET['page'] ?? "";
$files = glob("./include/*.inc.php");
var_dump($files);

include './include/footer.php';
