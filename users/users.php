<?php
//?open connection/get resulte
include_once("../database.php");
//! function for getting all data
function getUser(): array
{
    global $db;
    $sql = "select * from users where id=? ";
    $stmt = restP($sql, 1);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;

}
//////////////////////////////////////////////////محاولة فاشلة
// function getAllUsers($role): array
// {
//     global $db;
//     $sql = "select * from users where role=?";

//     $result = restP($sql, $role)->fetchAll(PDO::FETCH_ASSOC);
//     return $result;

// }
//////////////////////////////////////////////////محاولة فاشلة تاني

// function get()
// {
//     $userId = 1; 
//     global $db;
//     $sql = "SELECT * FROM users WHERE id = :userId";
//     $stmt = $db->prepare($sql);
//     $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
//     $stmt->execute();
//     $user = $stmt->fetch(PDO::FETCH_ASSOC);
//     return $user;
// }
function search($role): array
{
    global $db;
    $role = $_GET['bob'];
    $sql = "select * from users where id=?";


    $result = restP($sql, 1)->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
?>