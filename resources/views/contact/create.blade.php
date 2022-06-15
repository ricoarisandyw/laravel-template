<?php 
    
?>

<html>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <body>
        <form method="POST" action="/contacts" class="">
            @csrf
            <h1>Contact Form</h1>
            <input class="form-control" placeholder="name" name="name">
            <input class="form-control" placeholder="email" name="email" type="email">
            <input class="form-control" placeholder="phone" name="phone">
            <button class="btn btn-primary">Submit</button>
        </form>
    </body>
</html>