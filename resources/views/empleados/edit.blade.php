@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{!! Form::model(
			$empleado,
			['route' => ['empleados.update', $empleado->id],
			'method' => 'PUT'
			]
		)
	!!}

<!-- {!! Form::model($empleado, ['action' => 'EmpleadoController@store']) !!} -->

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
	{!!Form::select('sexo',$sexos,$empleado->sexo,['class'=>'form-control']) !!}
</div>
<div class="form-group">
	{!!Form::label('id_turno','Turnos') !!}
	{!!Form::select('id_turno',$turnos,$empleado->id_turno,['class'=>'form-control']) !!}
</div>
<div class="form-group">
	{!!Form::label('id_departamento','Departamentos') !!}
	{!!Form::select('id_departamento',$departamentos,$empleado->departamento->id,['class'=>'form-control']) !!}
</div>

{!! Form::submit('Guardar') !!}
{!!Form::close()!!}



