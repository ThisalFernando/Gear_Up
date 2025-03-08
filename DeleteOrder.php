<?php
    include_once 'dbCon.php';
?>

<?php
    $orderId = $_GET['oid'];

    $sql = "DELETE FROM orders WHERE oid = '$orderId'";

    $data = mysqli_query($conn, $sql);

    if($data){
        echo "<script>alert('Order is deleted successfully!')</script>";
        header("Location: ReadOrderDetails.php");
        exit();

    }
    else{
        echo "<script>alert('Error in deletion!')</script>";
    }

    
    mysqli_close($conn);
?>