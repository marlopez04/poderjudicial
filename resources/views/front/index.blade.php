@extends('front.templates.main')

@section('title', 'Inicio')

@section('content')

<div class="col-md-12 graphs">
<div class="xs">
	    <h3>Validation</h3>
	    <div class="well1 white">
    <form class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern" novalidate="novalidate" ng-submit="submit()">
      <fieldset>
        <div class="form-group">
          <label class="control-label">Required</label>
          <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" required="">
        </div>
        <div class="form-group">
          <label class="control-label">Email</label>
          <input type="email" class="form-control1 ng-invalid ng-valid-email ng-invalid-required ng-touched" ng-model="model.email" required="">
        </div>
        <div class="form-group">
          <label class="control-label">Password</label>
          <input type="password" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.password" required="">
        </div>
        <div class="form-group">
          <label class="control-label">Url</label>
          <input type="url" class="form-control1 ng-invalid ng-valid-url ng-invalid-required ng-touched" ng-model="model.url" required="">
        </div>
        <div class="form-group">
          <label class="control-label">Number</label>
          <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-valid-pattern ng-touched" ng-model="model.number" ng-pattern="/[0-9]/" required="">
          <p class="help-block hint-block">Numeric values from 0-***</p>
        </div>
        <div class="form-group">
          <label class="control-label normal">Date</label>
          <input type="date" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" required="">
        </div>
        <div class="form-group">
          <div class="checkbox1">
            <label>
              <input type="checkbox" ng-model="model.winner" required="" class="ng-invalid ng-invalid-required">
              Are you a winner?
            </label>
          </div>
        </div>
        <div class="form-group filled">
          <label class="control-label">Select</label>
          <select class="form-control1 ng-invalid ng-invalid-required" ng-model="model.select" required=""><option value="? undefined:undefined ?"></option>
            <option value="Select a pirate">Select a pirate</option>
            <option value="Monkey D. Luffy">Monkey D. Luffy</option>
            <option value="Roronoa Zoro">Roronoa Zoro</option>
            <option value="Tony Tony Chopper">Tony Tony Chopper</option>
            <option value="Nico Robin">Nico Robin</option>
            <option value="Bon Clay">Bon Clay</option>
          </select>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-default">Reset</button>
        </div>
      </fieldset>
    </form>
  </div>
</div>
</div>
@endsection