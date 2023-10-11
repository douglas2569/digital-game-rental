<?php
require_once '../src/user/UserDAO.php';

$userDAO = new UserDAO();
$userList = $userDAO->show();

echo $userList[0]->getId()."<br>";
echo print_r($userList);