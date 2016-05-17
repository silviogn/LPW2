<?php

$connection;
try {
    $connection = new PDO('mysql:host=127.0.0.1;dbname=psdb', 'root', 'root');
    $sql  = "SELECT dept_no, dept_name FROM departments WHERE dept_no = :dept_no";
    $preparedStatment = $connection->prepare($sql);
    
    $deptNo = "d007"; 
    $preparedStatment->bindParam(":dept_no", $deptNo);
    if ($preparedStatment->execute() == TRUE) {
        $result = $preparedStatment->fetchAll();
        print_r($result);
    }
    else {
        print "Erro";
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

