<?php

$connection;
try {
    $connection = new PDO('mysql:host=localhost;dbname=psdb', 'root', 'root');
    $query = "SELECT dept_no, dept_name FROM departments";
    $result = $connection->query($query);
    foreach ($result as $value) {
        print_r($value);
        print "<br>";
    }
} catch (PDOException $exc) {
    if ((isset($connection)) && ($connection->inTransaction())) {
        $connection->rollBack();
    }
    print $exc->getMessage();
} finally {
    if (isset($connection)) {
        unset($connection);
    }
}
