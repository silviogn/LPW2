<?php


$connection;
try {
    $connection = new PDO('mysql:host=127.0.0.1;dbname=psdb', 'root', 'root');
    $connection->beginTransaction();
    
    $sql = "UPDATE departments SET dept_name = :dept_name WHERE dept_no = :dept_no";
    
    $no = "dX01";
    $name = "Vendas";
    
    $preparedStatment = $connection->prepare($sql);
    $preparedStatment->bindParam(":dept_no", $no);
    $preparedStatment->bindParam(":dept_name",$name );
    
    $executionResult = $preparedStatment->execute();
    $connection->commit();
    
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
