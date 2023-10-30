<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Page Title</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<h4 class="bg-warning p-3 text-white text-center">
		<b class="text-primary ">Writer-Name :</b>{{$user_id->name}}:</h4>


			<table class="table table-striped">
				<tr>
					<th>Post-Id</th>
					<th>Posts-Title</th>

					<th>Posts-content</th>


				</tr>
			@foreach($user_post as $user)
				<td>{{$user->user->name}}</td>


			<tr>
				<td>{{$user->id}}</td>
				<td>{{$user->title}}</td>


			<td>{{$user->content}}</td>


			</tr>
			


		
			@endforeach
</table>
			
			<br>
			

		</body>
</html>