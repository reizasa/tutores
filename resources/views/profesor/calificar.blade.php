@extends('template.main')

@section('title') 
   Califica Alumnos 
@endsection

@section('contenido') 

<div class="container body-content">
        <div class="row">
          <h2 class="mb-3">Captura de calificaciones</h2>
			</div>
                
         <div class="form-group">
				<label for="exampleFormControlSelect1">Seleccione el curso</label>
				<select class="form-control" id="exampleFormControlSelect1">
				  <option>Curso 1</option>
				  <option>Curso 2</option>
				  <option>Curso 3</option>
				  <option>Curso 4</option>
				</select>
			  </div>
			  
			  <div class="form-group">
				<label for="exampleFormControlSelect1">Grupo</label>
				<select class="form-control" id="exampleFormControlSelect1">
				  <option>A</option>
				  <option>B</option>
				  <option>C</option>
				  <option>D</option>
				</select>
			  </div>
			  
			  <div class="form-group">
				<label for="exampleFormControlSelect1">Nivel (si aplica)</label>
				<select class="form-control" id="exampleFormControlSelect1">
				  <option>N/A</option>
				  <option>1</option>
				  <option>2</option>
				  <option>3</option>
				  <option>4</option>
				  <option>5</option>
				  <option>6</option>
				  <option>7</option>
				  <option>8</option>
				</select>
			  </div>
			  
			<div>
				  <button  class="btn btn-success">Buscar alumnos</button>
			</div>
			  
			 <br>
         
          
         <!--TABLA DE RESULTADOS DE BÚSQUEDA!-->   
         <div class="table-responsive">
            <table class="table table-bordered table-striped">
               <thead>
                  <tr>
                  <th>Periodo</th>
                  <th>Matrícula</th>
                  <th>Nombre</th>
                  <th>Acreditación</th>
                  </tr>
               </thead>
               <tbody id="myTable">
                  <tr>
                     <td>2018_1</td>
                     <td>172D90123</td>
                     <td>José Antonio Córdova Hernández</td>
                     <td>
                        <div class="form-group">
                           <select class="form-control form-control-sm" id="exampleFormControlSelect1">
                           <option>Acreditado</option>
                           <option>No acreditado</option>
                           </select>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td>2018_1</td>
                     <td>172D90124</td>
                     <td>Reinerio Zapata Salazar</td>
                     <td>
                        <div class="form-group">
                           <select class="form-control form-control-sm" id="exampleFormControlSelect1">
                           <option>Acreditado</option>
                           <option>No acreditado</option>
                           </select>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td>2018_1</td>
                     <td>172D90123</td>
                     <td>José Antonio Córdova Hernández</td>
                        <td>
                           <div class="form-group">
                              <select class="form-control form-control-sm" id="exampleFormControlSelect1">
                              <option>Acreditado</option>
                              <option>No acreditado</option>
                              </select>
                           </div>
                        </td>
                  </tr>

               </tbody>
            </table>
            <!-- BOTONES DE TABLA DE RESULTADOS DE BÚSQUEDA!-->
                  <div class="text-center">
                     <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ModalGuardar">Guardar</button>
                     <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#ModalSalir">Salir</button>
                  </div>
         </div>

</div>	            
        
		<!-- Modal Guardar -->
<div class="modal fade" id="ModalGuardar" tabindex="-1" role="dialog" aria-labelledby="modalGuardar1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="modalGuardar1">Confirmar</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>¿Desea guardar los cambios realizados?.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No, salir</button>
        <button type="button" class="btn btn-primary">Si, guardar</button>
      </div>
     
    </div>
  </div>
</div>

<!-- Modal Salir -->
<div class="modal fade" id="ModalSalir" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle">Confirmar</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"> &times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Desea salir sin guardar los cambios?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary">Salir</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Seguir modificando</button>
      </div>
    </div>
  </div>
</div>

@endsection