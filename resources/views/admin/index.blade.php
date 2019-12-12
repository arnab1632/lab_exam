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
			<td>Vendor Name:</td>
			<td>Price:</td>
			<td>Availability:</td>
			<td>Type:</td>
			<td>Category:</td>
			<td>Action:</td>
		</tr>

	 @foreach($medicines as $m)
		<tr>
			<td>{{$m->id}}</td>
			<td>{{$m->vendorname}}</td>
			<td>{{$m->price}}</td>
			<td>{{$m->availability}}</td>
			<td>{{$m->type}}</td>
			<td>{{$m->category}}</td>
			<td>
				<a href="{{route('admin.edit', $m->id)}}">Edit</a> | 
				<a href="{{route('admin.delete', $m->id)}}">Delete</a> | 
				<a href="{{route('admin.details', $m->id)}}">Details</a>
			</td>
		</tr>
	@endforeach

	</table>

</body>
</html>