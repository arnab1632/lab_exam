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
			<td>Type</td>
			<td>{{$m->type}}</td>
		</tr>
		<tr>
			<td>Category</td>
			<td>{{$m->category}}</td> 
	@endforeach
		</tr>
	</table>

<form method="post">
	<h3>Are you sure?</h3>
	<input type="submit" name="submit" value="Confirm">
</form>

</body>
</html>