@extends('layout')

@section('title')
	Home page
@stop

@section('content')
	<div class="row">
		<h2>Home page</h2>

		{{ Form::open(array('url'=>'')) }}	
		<div class="row">

			{{ HTML::ul($errors->all(), array('class'=>'errors card-panel  red lighten-1  red-text text-lighten-5'))}}

			<div class="input-field col s6">
				{{ Form::text('name', null, array('placeholder'=>'Enter your name')) }}
				{{ Form::label('name','Name') }}
			</div>
			<div class="input-field col s6">
				{{ Form::label('email','Email') }}
				{{ Form::text('email', null, array('placeholder'=>'Enter your email')) }}
			</div>
			<div class="input-field col s12">
				{{ Form::textarea('body', null, array('class'=>'materialize-textarea', 'placeholder'=>'Enter your message')) }}
				{{ Form::label('body','Body') }}
		
				{{ Form::button('Send', array('class'=>'btn waves-effect waves-light red darken-2', 'type'=>'submit', 'name'=>'action')) }}
			</div>
		</div>
		{{ Form::close() }}	
	</div>
@stop