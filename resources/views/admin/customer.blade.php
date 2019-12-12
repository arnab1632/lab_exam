<!DOCTYPE html>
<html>
<head>
	<title>Medicine List</title>
</head>
<body>
	<h1>Medicine List</h1>
	<a href="/home">Back</a> | 
	<a href="/logout">logout</a>
	
	<table border="1">
		<tr>
			<td>Id:</td>
			<td>Username:</td>
			<td>Password:</td>
			<td>Password:</td>
			<td>Type:</td>
		</tr>

	 @foreach($users as $m)
		<tr>
			<td>{{$m->userId}}</td>
			<td>{{$m->username}}</td>
			<td>{{$m->password}}</td>
			<td>{{$m->type}}</td>
			<td>
				<a href="{{route('admin.deletecustomer', $m->userId)}}">Delete</a>
			</td>
		</tr>
	@endforeach

	</table>

</body>
</html>