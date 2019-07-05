<?php
include_once 'connect.php';

// if(isset($_POST['add'])){
    $quantity = $_POST['quantity'];
    $id = $_POST['id'];
    $sql = "UPDATE product SET quantity = ? WHERE id = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('ii',$quantity,$id);
    $stmt->execute();
    $_SESSION['msg'] = "Add success";
    echo json_encode(array('msg' => 'success'));
    // header('Location: main.php');

// } else {
//     $_SESSION['msg'] = "Add Fail";
//     header('Location: main.php');
// }
