@extends('front.templates.main')

@section('title', 'Inicio')

@section('content')

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
                <th>comentarios</th>
                <th>Leido</th>
              </tr>
            </thead>
            <tbody>
              @foreach($noticias as $noticia)
              <tr>
                <td><a href="{{ route('noticias.show', $noticia->id) }}" class="btn btn-warning"> {{$noticia->id}} </a> </td>
                <td>{{$noticia->titulo}}</td>
                <td>{{$noticia->jerarquia}}</td>
                <td>{{$noticia->importancia}}</td>
                <td>{{$noticia->descripcion}}</td>
                <td>{{$noticia->user->nombre}}</td>
                <td>{{$noticia->created_at}}</td>
                <td>{{$noticia->noticiacomentarios->count('id')}}</td>
                  @foreach ($noticia->noticiahistorial as $historial)
                    @if ( $user->id == $historial->user_id)
                      <td>{{$historial->id}}</td>
                    @endif
                  @endforeach
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

@endsection