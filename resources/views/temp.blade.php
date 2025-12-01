<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        body {
            background-color: #ffd6e7;
        }

        .separator {
            border-bottom: 2px solid;
            margin: 10px;
        }
    </style>
    <title>Student</title>
</head>

<body>
    <div class="container p-5 border border-1 mt-5 shadow mb-5 bg-body rounded">
        <div class="row pt-2">
            <h1 class="">Modified Act 2</h1>
        </div>
        <div class="separator"></div>
        <div class="row p-2">
            <div class="col-md-4 p-2">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" placeholder="name@example.com">
            </div>
        </div>
        <div class="row p-2">
            <div class="col-md-4">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstName" name="firstName">
            </div>
            <div class="col-md-4">
                <label for="middleName" class="form-label">Middle Name</label>
                <input type="text" class="form-control" id="middleName" name="middleName">
            </div>
            <div class="col-md-4">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="lastName">
            </div>
        </div>
        <div class="row p-2">
            <div class="col-md-4">
                <label for="birthday" class="form-label">Birthday</label>
                <input type="date" class="form-control" id="birthday">
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-md-4">
                <button class="btn btn-success" type="submit">Save changes</button>
            </div>
        </div>
    </div>
</body>

</html>