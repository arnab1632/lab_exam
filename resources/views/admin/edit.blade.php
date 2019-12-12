<!DOCTYPE html>
<html>
<head>
	<title>Edit Medicine Page</title>
</head>
<body>
	<h1>Edit Medicine</h1>
	<a href="{{route('admin.index')}}">Back</a> | 
	<a href="/logout">logout</a>
	
	<form method="post">
	{{csrf_field()}}
	<table>
	@foreach($medicines as $m)
		<tr>
			<td>Vendor Name:</td>
			<td><input type="text" name="vendorname" value="{{$m->vendorname}}"></td>
		</tr>
		<tr>
			<td>Price:</td>
			<td><input type="text" name="price" value="{{$m->price}}"></td>
		</tr>
		<tr>
			<td>Availability:</td>
			<td><input type="text" name="availability" value="{{$m->availability}}"></td>
		</tr>
		<tr>
			<td>Type:</td>
			<td>
				<select name="type">
					<option>{{$m->type}}</option>
					<option value="liquid">liquid</option>
					<option value="solid">solid</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Category:</td>
			<td>
				<select name="category">
					<option>{{$m->category}}</option>
					<option value="aspirin">aspirin</option>
					<option value="paracetamol">paracetamol</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Update"></td>
			<td></td>
		</tr>
	</table>
	@endforeach
</form>
@foreach($errors->all() as $err)
	{{$err}} <br>
@endforeach	
</body>
</html>