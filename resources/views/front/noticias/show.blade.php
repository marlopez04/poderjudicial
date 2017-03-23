@extends('front.templates.main')

@section('title', 'Inicio')

@section('content')


<style type="text/css">
.col-md-12{
  background:#8888FF;
}

#comentario{
  float: left;
  width:50%;
  
}

#historial{
  float: right;
  width:30%;
}

</style>

<div id="wrapper">
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


</div>

<div class="clearfix"> </div>

<div class="content_bottom">

<div class="col-md-8 span_3">
  <div class="bs-example1" data-example-id="contextual-table">
<!-- comentarios -->

              @foreach($noticia->noticiacomentarios as $comentario)
<!--                      <div> -->
                        <h4>{{$comentario->user->nombre}}</h4>
                        <p> {{$comentario->descripcion}}
<!--                      </div> -->
                        <hr>
              @endforeach

<!-- comentarios -->                      
{!! Form::open(['route' =>['noticiacomentarios.update', $noticia->id], 'method' => 'PUT']) !!}
                        {!! Form::text('descripcion', null, ['class' => 'form-control1 control3', 'placeholder' => 'Escriba su comentario', 'required'])!!}
                        {!! Form::Submit('Enviar',['class' => 'btn btn-primary']) !!}

<!--      </fieldset> -->
{!! Form::close() !!}

  </div>

</div>


  <div class="col-md-4 span_4">
    <div class="bs-example1">
              <table class="table">
                  <thead>
                    <th>Usuario</th>
                    <th>Visita</th>
                  </thead>
                  <tbody>
                    @foreach($users as $user)
                      <tr>
                        <td>{{ $user->nombre }}</td>
                        <td>
                          @foreach($noticia->noticiahistorial as $historial)
                            @if ($user->id == $historial->user_id)
                              {{ $historial->created_at }}
                            @endif
                          @endforeach
                        </td>
                      </tr>
                    @endforeach
<!--
-->
                  </tbody>
                </table>
    </div>
  </div>


</div>



</div>

</div>


<!-- Comentarios  fin -->

@endsection