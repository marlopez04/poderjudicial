@extends('front.templates.main')

@section('title', 'Inicio')

@section('content')

<div class="col-md-12 graphs">
<div class="xs">
	    <h3>Mensajes</h3>

  <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
        <div class="panel-heading">
          <h2>Mensajes Recibidos</h2>
          <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
        </div>
        <div class="panel-body no-padding" style="display: block;">
          <table class="table table-striped">
            <thead>
              <tr class="warning">
                <th>#</th>
                <th>Contacto</th>
                <th>Asunto</th>
                <th>Descripcion</th>
                <th>Importancia</th>
                <th>Jerarquía</th>
                <th>Fecha</th>
              </tr>
            </thead>
            <tbody>
              @foreach($entrantes as $entrante)
              <tr>
                <td><a href="{{ route('notificaciones.show', $entrante->id) }}" class="btn btn-warning"> {{$entrante->id}} </a> </td>
                <td>{{$entrante->user->nombre}}</td>
                <td>{{$entrante->titulo}}</td>
                <td>{{$entrante->descripcion}}</td>
                <td>{{$entrante->importancia}}</td>
                <td>{{$entrante->jerarquia}}</td>
                <td>{{$entrante->created_at}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
          <div class="panel-heading">
           <h2>Mensajes Enviados</h2>
        <!-- 
            <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}">
        -->
            <span class="button-icon has-bg">
            <i class="ti ti-angle-down">
              
            </i>
            </span>
          </div>
        </div>
        <div class="panel-body no-padding" style="display: block;">
           <table class="table table-striped">
            <thead>
              <tr class="warning">
                <th>#</th>
                <th>Contacto</th>
                <th>Asunto</th>
                <th>Descripcion</th>
                <th>Importancia</th>
                <th>Jerarquía</th>
                <th>Fecha</th>
              </tr>
            </thead>
            
            <tbody>
              @foreach($salientes as $saliente)
              <tr>
                <td><a href="{{ route('notificaciones.show', $saliente->id) }}" class="btn btn-warning"> {{$saliente->id}} </a> </td>
                @foreach($users as $user)
                  @if( $user->id == $saliente->destinatario)
                  <td>{{$user->nombre}}</td>
                  @endif
                @endforeach
                <td>{{$saliente->titulo}}</td>
                <td>{{$saliente->descripcion}}</td>
                <td>{{$saliente->importancia}}</td>
                <td>{{$saliente->jerarquia}}</td>
                <td>{{$saliente->created_at}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>   
        </div>
      </div>

        </div>
      </fieldset>
  </div>
</div>
</div>

@endsection