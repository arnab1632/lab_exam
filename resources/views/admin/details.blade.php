<!DOCTYPE html>
<html>
<head>
	<title>Medicine Details Page</title>
</head>
<body>
	<h1>Medicine Details</h1>
	<a href="{{route('admin.index')}}">Back</a> | 
	<a href="/logout">logout</a>
	
	<table border="1">
		<tr>
			<td>Vendor Name:</td>
	@foreach($medicines as $m)
			<td>{{$m->vendorname}}</td>
		</tr>
		<tr>
			<td>Price:</td>
			<td>{{$m->price}}</td>
		</tr>
		<tr>
			<td>Availability:</td>
			<td>{{$m->availability}}</td>
		</tr>
		<tr>
			<td>Type:</td>
			<td>{{$m->type}}</td>
		</tr>
		<tr>
			<td>Category:</td>
			<td>{{$m->category}}</td> 
			
	@endforeach
		</tr>
	</table>
	
</body>
</html>