<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        @vite(['resources/sass/app.scss', 'resources/js/app.js']) 
    </head>
    <body>
        <h1>Dashboard</h1>
        <p>Welcome to your dashboard!</p>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </body>
</html>