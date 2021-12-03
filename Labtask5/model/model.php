<?php

require_once 'db_connect.php';


function showAllManager()
{
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `area_manager` ';
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showManager($id)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `area_manager` where ID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function searchManager($manager_username)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `area_manager` WHERE Username LIKE '%$manager_username%'";


    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function addManager($data)
{
    $conn = db_conn();
    $selectQuery = "INSERT into area_manager (Manager_Username, First_name, Last_name, Phone, Email, Password, Address, Image)
VALUES (:manager_username, :first_name, :last_name, :phone, :email, :password, :address , :image)"; // 
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':manager_username' => $data['manager_username'],
            ':first_name' => $data['firstname'],
            ':last_name' => $data['lastname'],
            ':phone' => $data['phone'],
            ':email' => $data['email'],
            ':password' => $data['password'],
            ':address' => $data['address'],
            ':image' => "Rafi",
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}


function updateManager($manager_id, $data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE area_manager set Manager_Username =? ,First_name = ?, Last_name= ?, Phone=?, Email=?, Address=?  where ID = ?";
    try { //baki kaj
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['manager_username'], $data['first_name'], $data['last_name'], $data['phone'], $data['email'], $data['address'], $manager_id
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

function deleteManager($manager_id)
{
    $conn = db_conn();
    $selectQuery = "DELETE FROM `area_manager` WHERE `Manager_ID` = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$manager_id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}
