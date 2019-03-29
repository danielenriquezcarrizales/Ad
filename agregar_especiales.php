<?php

include('cone.php');
$pdo = connect();
// agregar alumnos
try {
 $sql = "INSERT INTO especiales (Matricula, Nombre, Correo, telefono, Grado, Id_carrera, Id_materia, Estatus) VALUES (:Matriculas,:Nombres, :Correos,:Telefonos,:Grados,:Carreras,:Materias,:Estatus;)";
 $query = $pdo->prepare($sql);
 $query->bindParam(':Matriculas', $_POST['Matriculas'], PDO::PARAM_STR);
 $query->bindParam(':Nombres', $_POST['Nombres'], PDO::PARAM_STR);
 $query->bindParam(':Correos', $_POST['Correos'], PDO::PARAM_STR);
 $query->bindParam(':Telefonos', $_POST['Telefonos'], PDO::PARAM_STR);
 $query->bindParam(':Grados', $_POST['Grados'], PDO::PARAM_STR);
 $query->bindParam(':Carreras', $_POST['Carreras'], PDO::PARAM_STR);
 $query->bindParam(':Materias', $_POST['Materias'], PDO::PARAM_STR);
 $query->bindParam(':Estatus', $_POST['Estatus'], PDO::PARAM_STR);
 $query->execute();
} catch (PDOException $e) {
 echo 'PDOException : '.  $e->getMessage();
}

// Lista de alumnos a ver
include('lista_especiales.php');
?>
