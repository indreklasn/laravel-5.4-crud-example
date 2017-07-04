@extends('welcome');

@section('content')


	<div class="columns">
		<div class="column is-10 is-offset-1">
			<table class="table is-striped">

				<thead>
					<tr>
						<th>id</th>
						<th>Username</th>
						<th>Password</th>
						<th>Email</th>
						<th>Edit</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<th>{{$users->id}}</th>
						<th>{{$users->name}}</th>
						<th>{{$users->password}}</th>
						<th>{{$users->email}}</th>
						<th>
							<a href="{{ url('/users/' . $users->id . '/edit')}}">Edit user</a>
						</th>
					</tr>
				</tbody>

			</table>

			<div>
				<a href=" {{ url('/users')}} ">View all users</a>		
			</div>
			<a href=" {{ url('/users/create')}} ">Create a new user</a>

		</div>
	</div>

	
@endsection