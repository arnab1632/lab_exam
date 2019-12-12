<!DOCTYPE html>
<html>

<head>
	<title>Add Medicine page</title>
</head>
<body>
	<h1>Add Medicine</h1>
	<a href="/home">Back</a> | 
	<a href="/logout">logout</a>
	
	<form method="post" enctype="multipart/form-data">
		{{csrf_field()}}
	<table>
		<tr>
			<td>Vendor Name:</td>
			<td><input type="text" name="vendorname"></td>
		</tr>
		<tr>
			<td>Price:</td>
			<td><input type="text" name="price"></td>
		</tr>
		<tr>
			<td>Availability:</td>
			<td><input type="text" name="availability"></td>
		</tr>
		<tr>
			<td>Type:</td>
			<td>
				<select name="type">
					<option value="liquid">liquid</option>
					<option value="solid">solid</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Category:</td>
			<td>
				<select name="category">
					<option value="aspirin">aspirin</option>
					<option value="paracetamol">paracetamol</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Save"></td>
		</tr>
	</table>
</form>

@foreach($errors->all() as $err)
	{{$err}} <br>
@endforeach	
</body>
</html>



