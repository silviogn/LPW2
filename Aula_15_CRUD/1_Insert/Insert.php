<?php


$connection;
try {
    $connection = new PDO('mysql:host=127.0.0.1;dbname=psdb', 'root', 'root');
    $connection->beginTransaction();
    
    $sql = "INSERT INTO departments (dept_no,dept_name) VALUES (:dept_no,:dept_name)";
    
    $no = "dX01";
    $name = "Manutencao";
    
    $preparedStatment = $connection->prepare($sql);
    $preparedStatment->bindParam(":dept_no", $no);
    $preparedStatment->bindParam(":dept_name",$name );
    
    $executionResult = $preparedStatment->execute();
    //throw new PDOException("Erro provocado!!!");
    //print_r($preparedStatment->errorInfo());
    //print $executionResult;
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
