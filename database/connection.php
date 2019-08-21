<?php

class Connection
{
    public static function make($config)
    {
        try {

            return new PDO(
                $config['connection'] . ';dbname=' . $config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
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
