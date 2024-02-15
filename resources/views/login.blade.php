<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Login</title>
   <body>
      <form action="{{ route ('signin') }}" method="POST">
      @csrf
      <p>
         <input type="text" placeholder="Email" name="email" required>
      </p>
      <p>
         <input type="password" placeholder="password" name="password" required>
      </p>  

         <button>Login</button>
      </p>`
      </form>

   </body>
</html>
