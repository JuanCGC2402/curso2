<h1>Empleados</h1>
{{ $empleados->links() }}
<table>
	<thead>
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
			<td><a href="/empleados/{!!$empleado->id!!}/edit"> Editar</a></td>
			
			<td>{!! Form::model(
			'',
			['route' => ['empleados.destroy', $empleado->id],
			'method' => 'DELETE'
			]
		)
	!!}
		{!! Form::submit('Eliminar') !!}
			{!!Form::close()!!}
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
