<?php
$_POST = json_decode(file_get_contents("php://input"), true); // так мы можем в php обрабатывать json
echo var_dump($_POST);