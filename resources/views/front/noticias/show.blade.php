@extends('front.templates.main')

@section('title', 'Inicio')

@section('content')


<style type="text/css">
.col-md-12{
  background:#8888FF;
}

</style>

<div class="col-md-12 graphs" id="divnoticias">
<div class="xs">
      <h3>Noticia</h3>
  <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
        <div class="panel-heading">
          <h2>{{ $noticia->titulo }}</h2>
          <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
        </div>
        <div class="panel-body no-padding" style="display: block;">
            {{ $noticia->descripcion }}
        </div>
      </div>

<!-- Comentarios  inicio -->

      <div class="well1 white">
  {!! Form::open(['route' => 'noticiacomentarios.store', 'method' => 'POST', 'files' => true, 'class' => 'form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern' ]) !!}

      <fieldset>
        <div class="form-group">      
                    <div class="panel-body">
                        <div class="alert alert-info">
                            Si desea agregar un comentario rellene el siguiente casillero.
                        </div>
                        <hr>
                        {!! Form::text('noticia_id', '{{ $noticia->titulo }}', ['class' => 'form-control1 control3', 'placeholder' => 'Titulo', 'required'])!!}
                        {!! Form::textarea('comentario', null, ['class' => 'form-control1 control2', 'placeholder' => 'Descripcion', 'required'])!!}
                        <hr>
                        {!! Form::Submit('Enviar',['class' => 'btn btn-primary']) !!}
                    </div>
      </fieldset>
{!! Form::close() !!}

</div>

</div>

<!-- Comentarios  fin -->

@endsection