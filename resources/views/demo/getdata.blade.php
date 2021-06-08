<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<table class="table table-hover"> 
			<tr>
				<td>ID</td>
				<td>Name</td>
				<td>BirdDay</td>
				<td>Address</td>
				<td>Money</td>
				<td>Action</td>

			</tr>
			@foreach($data as $item)
			<tr>
				<td>{{$item->id}}</td>
				<td>{{$item->ten}}</td>
				<td>{{$item->ngaysinh}}</td>
				<td>{{$item->diachi}}</td>
				<td>{{$item->luong}}</td>
				<td>
					<a href="" class="btn btn-primary btn-sm">View</a>
				</td>
			</tr>
			@endforeach
		</table>

</body>
</html>