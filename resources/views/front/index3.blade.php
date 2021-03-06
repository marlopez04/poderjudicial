@extends('front.templates.main')

@section('title', 'Inicio')

@section('content')

<script type="text/javascript">

/*
$(document).ready(function(){
    $('table tr').click(function(){
        window.location = $(this).data('href');
        return false;
    });
});

*/

</script>

<div class="col-md-12 graphs">
<div class="xs">
	    <h3>Noticias</h3>

  <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
        <div class="panel-heading">
          <h2>Noticias</h2>
          <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
        </div>
        <div class="panel-body no-padding" style="display: block;">
          <table class="table table-striped">
            <thead>
              <tr class="warning">
                <th>#</th>
                <th>Titulo</th>
                <th>Jerarquia</th>
                <th>Importancia</th>
                <th>Descripcion</th>
                <th>Usuario</th>
                <th>Fecha</th>
              </tr>
            </thead>
            <tbody>
<!--
                @if($noticia->importancia == 3)
                    <tr class="danger algo" data-id="{{$noticia->id}}">
                @else
                    @if($noticia->importancia == 2)
                        <tr class="warning algo" data-id="{{$noticia->id}}">
                    @else
                        <tr class="info algo" data-id="{{$noticia->id}}">
                    @endif
                @if($noticia->importancia == 'alta')
                    <tr class="danger" data-href="{{ route('noticias.show', $noticia->id) }}">
                @else
                    @if($noticia->importancia == 'media')
                        <tr class="warning" data-href="{{ route('noticias.show', $noticia->id) }}">
                    @else
                        <tr class="info" data-href="{{ route('noticias.show', $noticia->id) }}">
                    @endif
                @endif
-->
              @foreach($noticias as $noticia)
              <tr>
                <td><a href="{{ route('noticias.show', $noticia->id) }}" class="btn btn-warning"> {{$noticia->id}} </a> </td>
                <td>{{$noticia->titulo}}</td>
                <td>{{$noticia->jerarquia}}</td>
                <td>{{$noticia->importancia}}</td>
                <td>{{$noticia->descripcion}}</td>
                <td>{{$noticia->user->nombre}}</td>
                <td>{{$noticia->created_at}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
            <div class="text-center">
                {!! $noticias->render() !!}
            </div>
        </div>
      </div>

        </div>
      </fieldset>
  </div>
</div>
</div>
<script>

/*
  $(".algo").click(function(){

    var noticia_id = $(this).data('id');

    console.log(noticia_id);

    window.location.replace("http://localhost:8000/noticias/"+noticia_id)


  })
*/
</script>

@endsection