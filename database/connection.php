<?php

class Connection
{
    public static function make($config)
    {
        try {

            // return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', 'root');

            return new PDO(
                $config['connection'].';dbname='.$config['name'],
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
