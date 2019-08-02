@extends('template.main')

@section('title') 
   Agregar Alumnos 
@endsection

@section('contenido') 


<div class="container body-content">
        <div class="row">
          <h2 class="mb-3">Dar de alta a un alumno</h2>
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

            <div class="form-group">
               <label for="exampleFormControlInput1">Matrícula del estudiante</label>
               <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Matrícula">
            </div>  
		
		<button type="button" class="btn btn-success">Registrar</button>
		<button type="button" class="btn btn-warning">Ignorar</button>
            
   </div>

@endsection


