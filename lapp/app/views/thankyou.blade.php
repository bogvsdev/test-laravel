@extends('layout')

@section('title')
	Thank you!
@stop

@section('content')
	<div class="row">
		<h2>Thank you for using this application!</h2>

		<h6 class="card-panel green lighten-1 light-green-text text-lighten-5">The email is successfuly sent!</h6>
		<p class="light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni in reiciendis harum ad soluta expedita iure a. Quas in quaerat ratione, voluptatibus dolores, minima natus eos quod esse veniam officia dolorum. Quod dolor, ab distinctio placeat ipsum, expedita laborum consectetur repellendus repellat quaerat officiis voluptatem quos facere quae, accusamus ex.</p>
		<p class="light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni in reiciendis harum ad soluta expedita iure a. Quas in quaerat ratione, voluptatibus dolores, minima natus eos quod esse veniam officia dolorum. Quod dolor, ab distinctio placeat ipsum, expedita laborum consectetur repellendus repellat quaerat officiis voluptatem quos facere quae, accusamus ex.</p>
		<p class="light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni in reiciendis harum ad soluta expedita iure a. Quas in quaerat ratione, voluptatibus dolores, minima natus eos quod esse veniam officia dolorum. Quod dolor, ab distinctio placeat ipsum, expedita laborum consectetur repellendus repellat quaerat officiis voluptatem quos facere quae, accusamus ex.</p>

		<a href="{{ URL::to('/') }}" class="waves-effect waves-light btn red darken-2"><i class="material-icons left"></i>Try again</a>
	</div>
@stop