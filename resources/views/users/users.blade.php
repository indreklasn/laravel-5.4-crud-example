@extends('welcome');

@section('content')

	<div class="columns">
		<div class="column is-8 is-offset-2">
			<table class="table is-striped">
				<thead>
					<tr>
						<th>Id</th>
						<th>User</th>
						<th>Password</th>
						<th>Email</th>
						<th>Profile</th>
						<th>Destroy</th>
					</tr>
				</thead>

				<tbody>
					@foreach($users as $user)
						<tr>

								<th>
									{{ $user->id }}
								</th>

								<th>
									{{ $user->name }}
								</th>

								<th>
									{{ $user->password }}
								</th>

								<th>
									{{ $user->email }}
								</th>

								<th>
									<a href="/users/{{ $user->id}}">View Profile</a>
								</th>

								<th>

									<form action="/users/{{$user->id}}" method="post">

										{{ csrf_field() }}
								    {{ method_field('DELETE') }}										
										<button class="button is-small is-danger">X</button>

									</form>

								</th>

						</tr>
					@endforeach					
				</tbody>
			</table>

			<a href="{{ url('users/create') }}">Create new user</a>

		</div>
	</div>
	

@endsection