@extends('front.templates.main')

@section('title', 'Inicio')

@section('content')

<style type="text/css">
.col-md-12{
  background:#FFFF88;
}

</style>

<div class="col-md-12 graphs" id="divnoticias">
<div class="xs">
	    <h3>Notificaciones</h3>
	    <div class="well1 white">
  {!! Form::open(['route' => 'noticias.store', 'method' => 'POST', 'files' => true, 'class' => 'form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern' ]) !!}

      <fieldset>
        <div class="form-group">      
                    <div class="panel-body">
                        <div class="alert alert-info">
                            Rellene los campos para cargar la noticia.
                        </div>
                        <hr>
                        <label>Titulo: </label>
                        {!! Form::text('required', null, ['class' => 'form-control1 control3', 'placeholder' => 'Titulo', 'required'])!!}
                        <label>Pedido por:  </label>
                        {!! Form::select('user_id', $users, null, ['class' => 'form-control1', 'required']) !!}
                        <label>Jerarquia:  </label>
                        {!! Form::select('type', ['1' => 'Ingrediente', '2' => 'Insumo'], null, ['class'=> 'tipo'])!!}
                        <label>Importancia:  </label>
                        {!! Form::select('type', ['1' => 'Ingrediente', '2' => 'Insumo'], null, ['class'=> 'tipo'])!!}
                        <label>Descripcion de la noticia: </label>
                        {!! Form::textarea('required', null, ['class' => 'form-control1 control2', 'placeholder' => 'Descripcion', 'required'])!!}
                        <hr>
                        {!! Form::Submit('Crear',['class' => 'btn btn-primary']) !!}
                      <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-tags tag_01"></span> Cancelar </a>
                    </div>
      </fieldset>
{!! Form::close() !!}
  </div>
</div>
</div>
@endsection