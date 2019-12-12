<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	
</head>
<body>

<fieldset>
	<legend>Register</legend>
	<form method="post" >
		<!-- @csrf -->
		<!-- {{csrf_field()}} -->
		<input type="hidden" name="_token" value="{{csrf_token()}}">
	<table>
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td>Type:</td>
			<td> 
				<select name="type">
					<option value="admin">Admin</option>
					<option value="customer">Customer</option>
				</select> 
			</td>
		</tr>
		
		<tr>
			<td><input type="submit" name="register" value="Register"></td>
		</tr>
	</table>
	</form>
</fieldset>

<div>
	{{session('msg')}}
</div>
</body>
</html>