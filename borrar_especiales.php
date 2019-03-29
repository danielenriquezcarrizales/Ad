<?php

include('cone.php');
$pdo = connect();
// Borrar alumno con PDO
try {
 $sql = "DELETE FROM especiales WHERE Matricula = :Matriculas";
 $query = $pdo->prepare($sql);
 $query->bindParam(':Matriculas', $_POST['Matriculas'], PDO::PARAM_INT);
 $query->execute();
} catch (PDOException $e) {
 echo 'PDOException : '.  $e->getMessage();
}

// Mostrar lista de alumnos
include('lista_especiales.php');
?>
