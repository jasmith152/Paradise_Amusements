<?php 
try {
    $dbcnx = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
    $dbcnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>
