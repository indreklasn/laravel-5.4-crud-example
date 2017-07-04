@extends('welcome')


@section('content')

<div class="columns">


		<div class="column is-10 is-offset-1">
			<h1>Editing {{$users->name}} </h1>

			<form action="{{"/users/" . $users->id}}" method="post">
				
				{{ csrf_field() }}
		    {{ method_field('PATCH') }}

					<div class="input-field">
						<label class="field">
							<input type="text" class="input" name="name" placeholder="name">
						</label>						
					</div>
	
					<div class="input-field">
						<label class="field">
							<input type="password" class="input" name="password" placeholder="password">
						</label>						
					</div>
			
					<div class="input-field">
						<label class="field">
							<input type="text" class="input" name="email" placeholder="email">
						</label>						
					</div>
			
					<label class="field">
						<input type="submit" name="submit" class="button is-primary">			
					</label>

			</form>	
			<a href=" {{ url('/users')}} ">View all users</a>		
		</div>
	</div>

@endsection