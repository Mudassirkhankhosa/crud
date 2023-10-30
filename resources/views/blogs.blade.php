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
		<div class="container ml-6 m-auto">
	@foreach ($posts as $element)

 	<div class="card m-auto mt-5 ">

    <div class="card-body">

        <h5 class="card-title bg-warning p-3">Post</h5>

        <h4 class="card-text">{{ $element->title }}</h4>
    			<p class="card-text">{{ $element->content}}</p>

        <b>Write:</b>
        <h5> <a href="/profile/{{$element->user->id}}">{{ $element->user->name}}</a></h5>
        <a href="#" class="btn btn-primary">comment</a><br>
    	@foreach ($element->comments as $comment)
        <b class="text-danger">{{$comment->user->name}}</b>:=>
        {{$comment->comment}}
      
</div>
</div>   	
  @endforeach
	@endforeach
</div>


		</body>
</html>