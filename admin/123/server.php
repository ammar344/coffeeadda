<?php 
include_once './connection.php';

// delete product funtion

$productId = $_GET['deleteId'];

$delete = "DELETE FROM products WHERE id = $productId";
$deleteQuery = mysqli_query($conn, $delete);
if($deleteQuery){
    header('Location: ./products_manage.php');
}else{
    echo "Error in deleting product";
}

// delete message function

$messageId = $_GET['deleteMesId'];

$delete = "DELETE FROM contact_us WHERE id = $messageId";
$deleteQuery = mysqli_query($conn, $delete);
if($deleteQuery){
    header('Location: ./messages.php');
}else{
    echo "Error in deleting message";
}

// reservation status
$resStatusId = $_GET['resStatusId'];

$updateStatus = "UPDATE reservations SET status = 'Completed' WHERE id = $resStatusId";
$updateStatusQuery = mysqli_query($conn, $updateStatus);
if($updateStatusQuery){
    header('Location: ./reservations.php');
}else{
    echo "Error in changing status";
}

// delete reservation
$resId = $_GET['deleteResId'];

$delete = "DELETE FROM reservations WHERE id = $resId";
$deleteQuery = mysqli_query($conn, $delete);
if($deleteQuery){
    header('Location: ./reservations.php');
}else{
    echo "Error in deleting message";
}

// Subscribers delete
$subId = $_GET['deleteSubId'];

$delete = "DELETE FROM subscribe WHERE id = $subId";
$deleteQuery = mysqli_query($conn, $delete);
if($deleteQuery){
    header('Location: ./subscribe.php');
}else{
    echo "Error in deleting product";
}
?>