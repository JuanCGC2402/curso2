
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style type="text/css">
	td {
        text-align: center;
        width: 200px;
    }
</style>
<div cclass="fixed-top">
         
<div class="navbar-header">
              <div class="content"></div>
              
</div>
               
          
        </div>
        

<center>
<h1>Empleados</h1>
<br>

<table class="table-bordered">
	<thead >
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>Acciones</th>

		</tr>
	</thead>
	<tbody>
		@foreach ($empleados as $empleado)
		<tr>
			<td>{!!$empleado->matricula!!} </td>
			<td>{!!$empleado->paterno!!}</td>
			<td>{!!$empleado->materno!!}</td>
			<td><button class="btn btn-primary" href="{!!route('empleados.index') !!}"> Editar</button></td>
			
			<td style="text-align: center;">{!! Form::model(
			'',
			['route' => ['empleados.destroy', $empleado->id],
			'method' => 'DELETE',
			'class' => 'form-horizontal',
			]
		)
	!!}
		{!! Form::submit('Eliminar',['class' => 'btn btn-danger'])!!}
			{!!Form::close()!!}
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
</center>
<div class="float-right">
{{ $empleados->links() }}
</div>