<?php


try {
    
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', 'root');

} 
catch (PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}

$statement = $pdo->prepare('select * from todos');

$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_OBJ);

require 'index.view.php';
?>
