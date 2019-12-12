<!DOCTYPE html>
<html>
<head>
	<title>Delete Medicine Page</title>
</head>
<body>
	<h1>Delete Medicine</h1>
	<a href="{{route('admin.index')}}">Back</a> | 
	<a href="/logout">logout</a>
	
	<table border="1">
	<tr>
			<td>Id:</td>
	@foreach($users as $m)
			<td>{{$m->userId}}</td>
		</tr>
		<tr>
			<td>Username:</td>
			<td>{{$m->username}}</td>
		</tr>
		<tr>
			<td>Password:</td>
			<td>{{$m->password}}</td>
		</tr>
		<tr>
			<td>Type</td>
			<td>{{$m->type}}</td> 
	@endforeach
		</tr>
	</table>

<form method="post">
	<h3>Are you sure?</h3>
	<input type="submit" name="submit" value="Confirm">
</form>

</body>
</html>