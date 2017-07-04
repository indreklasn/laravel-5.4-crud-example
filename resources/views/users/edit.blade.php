@extends('welcome')


@section('content')

<div class="columns">
		
		<div class="column is-8 is-offset-2">
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
							<input type="text" class="input" name="password" placeholder="password">
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