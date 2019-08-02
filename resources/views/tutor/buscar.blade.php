@extends('template.main')

@section('title') 
   Buscar Alumnos 
@endsection

@section('contenido') 

<div class="container body-content">
              
          <div class="row">
            <h2 class="mb-3">Buscar tutorados</h2>
          </div>
          
			 <div class="form-group">
				<label for="exampleFormControlSelect1">Seleccione el ciclo</label>
				<select class="form-control" id="exampleFormControlSelect1">
				  <option>2016</option>
				  <option>2017</option>
				  <option>2018</option>
				  <option>2019</option>
				</select>
			  </div>
			  <div class="form-group">
				<label for="exampleFormControlSelect1">Seleccione el plan de estudios</label>
				<select class="form-control" id="exampleFormControlSelect1">
				  <option>Enfermería</option>
				  <option>Médico Cirujano</option>
				  <option>Atención prehospitalaria</option>
				  <option>Rehabilitación Física</option>
				</select>
			  </div>
			  <div>
				  <button  class="btn btn-success">Buscar tutorados</button>
           </div>
</div>

@endsection