<!DOCTYPE html>
<html>
<head>
	<title>create genres</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<table>
			<tr>
				<td>title</td>
				<td>category id</td>
				<td>picture</td>
				<td>ღილაკები</td>
			</tr>	
			@foreach($Movies as $movie)
				<tr>
					<td>{{ $movie->title }}</td>
					<td>{{ $movie->genre_id }}</td>
					<td><img src="{{ $movie->picture }}" ></td>
					<td>
						<button class="btn btn-primary">ნახვა</button>
						<button class="btn btn-warning">ჩასწორება</button>
						<form action="{{ route('adminDelete') }}" method="POST">
							@csrf
							<input type="hidden" name="id" value="{{ $movie->genre_id }}">
							<button class="btn btn-danger">წაშლა</button>
						</form>
					</td>
				</tr>
			@endforeach
		</table>
	</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>