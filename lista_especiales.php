<table  class="table table-bordered" cellspacing="0" cellpadding="0">
    <tr>
        <th>Matricula</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Telefono</th>
        <th>Grado</th>
        <th>Id_carrera</th>
        <th>Id_materia</th>
        <th>Estatus</th>
        <th style="width:160px;">Borrar Alumno</th>
    </tr>
    <?php
 // Mostrar labla de alumnosWW
        $sql = "SELECT * FROM especiales ORDER BY Matricula ASC";
        $query = $pdo->prepare($sql);
        $query->execute();
        $list = $query->fetchAll();
        foreach ($list as $rs) {
            ?>
            <tr>
                <td><?php echo $rs['Matricula']; ?></td>
                <td><?php echo $rs['Nombre']; ?></td>
                <td><?php echo $rs['Correo']; ?></td>
                <td><?php echo $rs['Telefono']; ?></td>
                <td><?php echo $rs['Grado']; ?></td>
                <td><?php echo $rs['Id_carrera']; ?></td>
                <td><?php echo $rs['Id_materia']; ?></td>
                <td><?php echo $rs['Estatus']; ?></td>
                <td><a href="#" onclick="delete_member(<?php echo $rs['Matriculas']; ?>)"> Borrar</a></td>
            </tr>
            <?php

        }
    ?>
</table>
