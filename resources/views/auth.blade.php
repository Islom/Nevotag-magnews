<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Auth page</title>
	<body>
		<form action="{{ route ('auth-save') }}" method="POST">
		@csrf
		<p>
			<input type="text" placeholder="Name" name="name" required>
		</p>
		<p>
			<input type="text" placeholder="Surname" name="surname" required>
		</p>	
		<p>
			<input type="text" placeholder="Email" name="email" required>
		</p>
		<p>
			<input type="password" placeholder="Password" name="password" required>
		</p>
		<p>
			<input type="password" placeholder="Repeat" name="repeat" required>
		</p>
		<p>
			<button>Send</button>
		</p>`
		</form>

	</body>
</html>
