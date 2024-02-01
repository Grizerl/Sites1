<?php
try {
    $connect = mysqli_connect('localhost', 'root', '', 'Bolt');
    if (!$connect) {
        echo("Failed to connect to MySQL: " . mysqli_connect_error());
    }
} catch (Exception $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
