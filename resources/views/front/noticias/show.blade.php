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

        </div>
      </fieldset>

  </div>
@endsection