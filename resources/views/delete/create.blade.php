@extends('app')
 
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Crear Asignatura</div>
 
                @if($errors->has())
                    <div class='alert alert-danger'>
                        @foreach ($errors->all('<p>:message</p>') as $message)
                            {!! $message !!}
                        @endforeach
                    </div>
                @endif
 
				@if (Session::has('message'))
				    <div class="alert alert-success">{{ Session::get('message') }}</div>
				@endif
 
				<div class="panel-body">
 						{!! Form::open(['route' => 'eliminar.store']) !!}
							<div class="form-group">
								{!! Form::text('id', null, ["class" => "form-control", 'placeholder'=>'ID Asignatura']) !!}
							</div>
 
							<div class="form-group">
								{!! Form::text('nombre', null,
										['class'=>'form-control', 'placeholder'=>'Nombre'])
								!!}
							</div>
 							
 							<div class="form-group">
								{!! Form::textarea('prerequisito', null,
										['class'=>'form-control', 'placeholder'=>'Pre-Requisito'])
								!!}
							</div>

							<div class="form-group">
								{!! Form::text('cupos', null,
										['class'=>'form-control', 'placeholder'=>'Cantidad Cupos'])
								!!}
							</div>

							<div class="form-group">
								{!! Form::text('creditos', null,
										['class'=>'form-control', 'placeholder'=>'Cantidad Creditos'])
								!!}
							</div>
							<div class="form-group">
								{!! Form::submit('Guardar', ["class" => "btn btn-success btn-block"]) !!}
							</div>

							<div class="form-group">
								{!! Form::reset('Limpiar', ["class" => "btn btn-reset btn-block"]) !!}
							</div>
 
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection