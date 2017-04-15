@extends('front.templates.main')

@section('title', 'Inicio')

@section('content')

<style type="text/css">
.col-md-12{
  background:#FFFF88;
}

</style>

<div class="col-md-12 graphs" id="divnotificaciones">
<div class="xs">
	    <h3>Mensajes</h3>
	    <div class="well1 white">
  {!! Form::open(['route' => 'notificaciones.store', 'method' => 'POST', 'files' => true, 'class' => 'form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern' ]) !!}

      <fieldset>
        <div class="form-group">      
                    <div class="panel-body">
                        <!--
                        <div class="alert alert-info">
                            Complete el asunto y contenido del mensaje.
                        </div>
                        <hr>
                        -->
                        <label>Destinatario:  </label>
                        {!! Form::select('destinatario', $users, null, ['class' => 'form-control1', 'required']) !!}

                        <label>Asunto: </label>
                        {!! Form::text('titulo', null, ['class' => 'form-control1 control3', 'placeholder' => 'Asunto', 'required'])!!}

                        <!-- 
                        <label>Jerarquia:  </label>
                        {!! Form::select('type', ['1' => 'Ingrediente', '2' => 'Insumo'], null, ['class'=> 'tipo'])!!}
                        <label>Importancia:  </label>
                        {!! Form::select('type', ['1' => 'Ingrediente', '2' => 'Insumo'], null, ['class'=> 'tipo'])!!}

                        -->
                        <label>Contenido del mensaje: </label>
                        {!! Form::textarea('descripcion', null, ['class' => 'form-control1 control2', 'placeholder' => 'Contenido', 'required'])!!}
                        <hr>
                        {!! Form::Submit('Enviar',['class' => 'btn btn-primary']) !!}
                      <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-tags tag_01"></span> Cancelar </a>
                    </div>
      </fieldset>
{!! Form::close() !!}
  </div>
</div>
</div>
@endsection