@extends('template.main')

@section('title') 
   Consultar Alumnos 
@endsection

@section('contenido') 


<!-- Tabla de tutorados -->
<div class="container body-content">
              
           <div class="row">
            <h2 class="mb-3">Buscar tutorados</h2>
           </div>
			  
			  <br>
			  <input class="form-control" id="myInput" type="text" placeholder="Buscar alumno por nombre o matrìcula">
			  <br>
			  <div class="table-responsive">
			      <table class="table table-bordered table-striped">
                  <thead>
                     <tr>
                        <th>Periodo</th>
                        <th>Matrícula</th>
                        <th>Nombre</th>
                        <th>Carrera</th>
                        <th>Teléfono</th>
                        <th>Dirección</th>
                        <th>Correo</th>
                     </tr>
                  </thead>
                  <tbody id="myTable">
                     <tr>
                        <td>2018_1</td>
                        <td>172D90123</td>
                        <td><a data-toggle="modal" data-target="#exampleModalCenter">José Antonio Córdova Hernández</a></td>
                        <td>Enfermería</td>
                        <td>9141111360</td>
                        <td>Constitución 41 Jalpa de Méndez</td>
                        <td>cordovak790@gmail.com</td>
                     </tr>
                     <tr>
                        <td>2018_1</td>
                        <td>172D90124</td>
                        <td>Reinerio Zapata Salazar</td>
                        <td>Enfermería</td>
                        <td>9141111360</td>
                        <td>Juárez S/N Cárdenas</td>
                        <td>reinerio@gmail.com</td>
                     </tr>
                     <tr>
                     <td>2018_1</td>
                        <td>172D90123</td>
                        <td>José Antonio Córdova Hernández</td>
                        <td>Enfermería</td>
                        <td>9141111360</td>
                        <td>Prolongación de 27 de febrero Jalpa de Méndez</td>
                        <td>cordovak790@gmail.com</td>
                     </tr>
                     <tr>
                     <td>2019_1</td>
                        <td>172D90123</td>
                        <td>José Antonio Córdova Hernández</td>
                        <td>Enfermería</td>
                        <td>9141111360</td>
                        <td>Prolongación de 27 de febrero Jalpa de Méndez</td>
                        <td>cordovak790@gmail.com</td>
                     </tr>
                     <tr>
                     <td>2019_2</td>
                        <td>172D90123</td>
                        <td>José Antonio Córdova Hernández</td>
                        <td>Enfermería</td>
                        <td>9141111360</td>
                        <td>Constitución 41 Jalpa de Méndez</td>
                        <td>cordovak790@gmail.com</td>
                     </tr>
                     <tr>
                     <td>2018_2</td>
                        <td>172D90123</td>
                        <td>José Antonio Córdova Hernández</td>
                        <td>Enfermería</td>
                        <td>9141111360</td>
                        <td>Constitución 41 Jalpa de Méndez</td>
                        <td>cordovak790@gmail.com</td>
                     </tr>
                     <tr>
                     <td>2019_1</td>
                        <td>172D90123</td>
                        <td>José Antonio Córdova Hernández</td>
                        <td>Enfermería</td>
                        <td>9141111360</td>
                        <td>Constitución 41 Jalpa de Méndez</td>
                        <td>cordovak790@gmail.com</td>
                     </tr>
                  </tbody>
               </table>
           </div>
</div>                              
                            

<!-- Modal de información del alumno seleccionado -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Cursos y talleres</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            Aquí va la información del estudiante
               <div class="table-responsive">
                  <table class="table table-striped table-sm">
                        <thead>
                           <tr>
                           <th>#</th>
                           <th>Ciclo</th>
                           <th>Curso</th>
                           <th>Condiciòn</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                           <td>1</td>
                           <td>2018-2</td>
                           <td>Inglés 1er nivel</td>
                           <td>No acreditado</td>
                           </tr>
                           <tr>
                           <td>2</td>
                           <td>2019-1</td>
                           <td>Danza</td>
                           <td>Acreditado</td>
                           </tr>
                           <tr>
                           <td>3</td>
                           <td>2019-1</td>
                           <td>Inglés 1er nivel</td>
                           <td>Acreditado</td>
                           </tr>
                           <tr>
                           <td>3</td>
                           <td>2019-2</td>
                           <td>Inglés 2do nivel</td>
                           <td>En curso</td>
                           </tr>
                        </tbody>
                  </table>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
      </div>
    </div>
  </div>



<!-- Jquery para script de búsqueda en tabla-->  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<!-- script para búsqueda en tabla-->  
      <script> 
         $(document).ready(function(){
         $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
               $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
         });
         });
      </script>

@endsection