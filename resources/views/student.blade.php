<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        body {
            background-color: #ffd6e7;
            display: flex;
            flex-direction: column;
        }

        .separator {
            border-bottom: 2px solid;
            margin: 10px;
        }

        .footer {
            background-color: #f8f9fa;
            text-align: center;
            margin-top: auto;
        }
    </style>

    <title>Student</title>
</head>

<body>
    <div class="row">
        <div class="shadow-lg">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Brand</a>
                    <div class="d-flex" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Register</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="container p-5 border border-1 mt-5 shadow mb-5 bg-body rounded">
        @if ($errors->any())
        @foreach ($errors->all() as $error)
        <div class=" alert alert-danger">{{ $error }}</div> <!--creates a customized laravel warning-->
        @endforeach
        @endif

        <form method="POST" action="{{ route('student.add') }}">
            <!--pang-security or hash-->
            @csrf

            <header class="row pt-2">
                <h1>Student Forms</h1>
            </header>
            <div class="separator"></div>
            <div class="row p-2">
                <div class="col-md-4 p-2">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="emailAddress" placeholder="name@example.com">
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
        </form>

    </div>
    <footer class="footer p-3">
        <p>&copy; 2025 Student Registration System | Polytechnic University of the Philippines</p>
    </footer>

</body>

</html>