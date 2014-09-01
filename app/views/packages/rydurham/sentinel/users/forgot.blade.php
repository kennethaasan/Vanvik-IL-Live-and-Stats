@extends(Config::get('Sentinel::config.layout'))

{{-- Web site Title --}}
@section('title')
@parent
Forgot Password
@stop

{{-- Content --}}
@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        {{ Form::open(array('action' => 'Sentinel\UserController@forgot', 'method' => 'post')) }}
            
            <h2>Glemt ditt passord?</h2>
            
            <div class="form-group {{ ($errors->has('email')) ? 'has-error' : '' }}">
                {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'E-post', 'autofocus')) }}
                {{ ($errors->has('email') ? $errors->first('email') : '') }}
            </div>

            {{ Form::submit('Send Instruksjoner', array('class' => 'btn btn-primary'))}}

  		{{ Form::close() }}
  	</div>
</div>

@stop