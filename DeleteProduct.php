<?php
    include_once 'dbCon.php';
?>

<?php
    if (isset($_GET['cid'])) {
        $cart_id = $_GET['cid'];
        $sql = "DELETE FROM cart WHERE cid = '$cart_id'";
        $conn->query($sql);
    }
    
    header("Location: cart.php");
    exit();
    ?>
?>