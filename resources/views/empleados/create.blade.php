@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{!! Form::model($empleado, ['action' => 'EmpleadoController@store']) !!}

<div class="form-group">
	{!!Form::label('matricula','Matricula') !!}
	{!!Form::text('matricula',old('matricula'),['class'=>'form-control']) !!}
</div>
<div class="form-group">
	{!!Form::label('nombre','Nombre') !!}
	{!!Form::text('nombre',old('nombre'),['class'=>'form-control']) !!}
</div>
<div class="form-group">
	{!!Form::label('paterno','Paterno') !!}
	{!!Form::text('paterno',old('paterno'),['class'=>'form-control']) !!}
</div>
<div class="form-group">
	{!!Form::label('materno','Materno') !!}
	{!!Form::text('materno',old('materno'),['class'=>'form-control']) !!}
</div>
<div class="form-group">
	{!!Form::label('fecha_nacimiento','Fecha de nacimiento') !!}
	{!!Form::text('fecha_nacimiento',old('fecha_nacimiento'),['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!!Form::label('sexo','Sexo') !!}
	{!!Form::select('sexo',$sexo,'',['class'=>'form-control']) !!}
</div>
<div class="form-group">
	{!!Form::label('id_turno','Turnos') !!}
	{!!Form::select('id_turno',$turnos,'',['class'=>'form-control']) !!}
</div>
<div class="form-group">
	{!!Form::label('id_departamento','Departamentos') !!}
	{!!Form::select('id_departamento',$departamentos,'',['class'=>'form-control']) !!}
</div>

{!! Form::submit('Guardar') !!}
{!!Form::close()!!}






<!-- 

<form method="POST" action="/empleados/store">
	@csrf
	<label>Matricula</label>
	<input type="text" name="matricula">
	<label>Paterno</label>
	<input type="text" name="paterno">
	<label>Materno</label>
	<input type="text" name="materno">
	<label>Nombre</label>
	<input type="text" name="nombre">




	<input type="submit" name="Enviar" class="btn btn-success">

</form> -->