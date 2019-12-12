<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Welcome Home! {{session('name')}}</h1>
	<a href="{{route('admin.addmedicine')}}">Add  Medicine</a> | 
	<a href="{{route('admin.index')}}">Medicine List</a> | 
	<a href="{{route('admin.customer')}}">Customer List</a> | 
	<a href="/logout">logout</a>
	<table>
	<tr>
			<td>Id:</td>
			@foreach($users as $s)
			<td>{{$s->userId}}</td>
		</tr>
		<tr>
			<td>Username:</td>
			<td>{{$s->username}}</td>
		</tr>
		<tr>
			<td>Password:</td>
			<td>{{$s->password}}</td>
		</tr>
		<tr>
			<td>Type:</td>
			<td>{{$s->type}}</td> @endforeach
		</tr>
	</table>
	
</body>
</html>