<?php

class Connection 
{
    public static function make()
    {
        try {

            return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', 'root');
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
?>

<!-- if it is NOT a static method -->

<!-- $connection = new Connection();
$connection->make(); -->

<!-- With static method -->
<!-- $pdo = Connection::make(); -->
