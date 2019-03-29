<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8"/>
 <title>Usando Ajax con PHP MySQL: Ejemplos</title>
 </head>
 <body>
 <div class="container">
   <h1 class="main_title">Examenes Especiales</h1>
   <div class="content">
     <div class="panel panel-default">
       <div class="panel-body">
         <h3> Editar Alumnos</h3>
         <form>
           <div class="form-group">
             <div class="col-sm-2">
               <input type="text" id="Matriculas" class="form-control" placeholder="Matricula">
             </div>
             <div class="col-sm-2">
               <input type="text" id="Nombres" class="form-control" placeholder="Nombre">
             </div>
             <div class="col-sm-2">
               <input type="text" id="Correos" class="form-control" placeholder="Correo">
             </div>
             <div class="col-sm-2">
               <input type="text" id="Telefonos" class="form-control" placeholder="Telefono">
             </div>
             <div class="col-sm-2">
               <input type="text" id="Grados" class="form-control" placeholder="Grado">
             </div>
             <div class="col-sm-2">
               <input type="text" id="carreras" class="form-control" placeholder="Id_carrera">
             </div>
             <div class="col-sm-2">
               <input type="text" id="materias" class="form-control" placeholder="Id_materia">
             </div>
             <div class="col-sm-2">
               <input type="text" id="Estatus" class="form-control" placeholder="Estatus">
             </div>
             <div class="col-sm-1">
               <input type="button" class="btn btn-primary" value="Agregar" onclick="add_member()">
             </div>
             <div class="col-sm-1">
               <input type="reset" class="btn btn-default" value="Limpiar">
             </div>
           </div>
         </form>
         <div style="clear:both"></div>
       </div>
     </div>
     <hr>
     <div class="panel panel-default">
       <div class="panel-body">
         <h3> Lista de alumnos</h3>
         <div id="list_container">
           <?php
                        // inlcuimos la conexion con el servidor
                        include('cone.php');
                        $pdo = connect();
                        // Incluir para ver la totalidad de alumnos
                        include('lista_especiales.php');
                    ?>
         </div>
         <!-- lista_contenedor -->
       </div>
       <!-- content -->
     </div>
   </div>
   <!-- panel 2 -->
 </div>
 <!-- container -->
</body>
</html>
