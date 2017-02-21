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
  {!! Form::open(['route' => ['noticiacomentarios.update', $noticia->id], 'method' => 'PUT', 'files' => true]) !!}

      <fieldset>
        <div class="form-group">      
                    <div class="panel-body">
<!-- comentarios -->                      
              @foreach($noticia->noticiacomentarios as $comentario)
                      <div>
                        <h4>{{$comentario->user->nombre}}</h4>
                        <p> {{$comentario->descripcion}}
                      </div>
                        <hr>
              @endforeach
<!-- comentarios -->                      
                        {!! Form::text('descripcion', null, ['class' => 'form-control1 control3', 'placeholder' => 'Escriba su comentario', 'required'])!!}
                        {!! Form::Submit('Enviar',['class' => 'btn btn-primary']) !!}
                    </div>
      </fieldset>
{!! Form::close() !!}

</div>

</div>

<!-- Comentarios  fin -->

@endsection