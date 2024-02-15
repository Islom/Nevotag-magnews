<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Product</title>
   <body>                 <!-- or variant /products. == routes !-->
      <form action="{{ route ('auth-save1') }}" method="POST">
      @csrf
      <p>
         <input type="text" placeholder="Title product" name="Title_product" required>
      </p>
      <p>
         <input type="text" placeholder="Description" name="Description" required>
      </p> 
      <p>
         <input type="text" placeholder="Size" name="Size" required>
      </p>
      <p>
         <input type="text" placeholder="Price" name="Price" required>
      </p>  

         <button>Dobovit</button>
      </p>
      </form>

   </body>
</html>
