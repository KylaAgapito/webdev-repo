<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>A Web Page</title>
</head>

<body>
    <!-- NAVBAR FOR PRICING-->
    <div class="row">
        <div class="shadow-lg">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Brand</a>
                    <div class="d-flex" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Feature</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Enterprise</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Support</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Pricing</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="container">

        <div class="row align-items-start">

            <div class="mt-5 p-3 col-md-4 border bg-body-secondary">
                <div class="mb-2 p-3 row">
                    <label for="staticEmail" class="col-md-2 col-form-label">Email</label>
                    <div class="col-sm-8">
                        <input type="text" readonly class="form-control-plaintext bg-light" id="staticEmail" value="email@example.com">
                    </div>
                </div>
                <div class="mb-2 p-3 row">
                    <label for="inputPassword" class="col-md-2 col-form-label">Password</label>
                    <div class="col-md-8">
                        <input type="password" class="form-control" id="inputPassword">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <button class="col-md-4 bg-light">Login</button>
                    <div class="col-md-4"><a href="#">Forgot Password?</a></div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="row">
                    <div>
                        <h2 class="text-center pt-5">Pricing</h2>
                        <p class="text-center">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque eaque vero assumenda nobis adipisci magnam,
                            necessitatibus itaque consequuntur? Omnis mollitia perferendis expedita beatae doloribus commodi assumenda
                            error quisquam laboriosam nisi!
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="card p-3 col-md-4 border">
                        <img class="img-fluid" src="{{ asset('image/cow.png') }}" alt="Cow">
                    </div>
                    <div class="card p-3 col-md-4 border">
                        <img class="img-fluid" src="{{ asset('image/cow.png') }}" alt="Cow">
                    </div>
                    <div class="card p-3 col-md-4 border">
                        <img class="img-fluid" src="{{ asset('image/cow.png') }}" alt="Cow">
                    </div>
                </div>
                <div class="row">
                    <div class="card p-3 col-md-4 border">
                        <img class="img-fluid" src="{{ asset('image/cow.png') }}" alt="Cow">
                    </div>
                    <div class="card p-3 col-md-4 border">
                        <img class="img-fluid" src="{{ asset('image/cow.png') }}" alt="Cow">
                    </div>
                    <div class="card p-3 col-md-4 border">
                        <img class="img-fluid" src="{{ asset('image/cow.png') }}" alt="Cow">
                    </div>
                </div>

                <div class="row">
                    <div>
                        <table class="table caption-top">
                            <caption class="text-center p-4">Compare Plans</caption>
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Free</th>
                                    <th scope="col">Pro</th>
                                    <th scope="col">Enterprise</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Public</th>
                                    <td>✓</td>
                                    <td>✓</td>
                                    <td>✓</td>
                                </tr>
                                <tr>
                                    <th scope="row">Private</th>
                                    <td>✓</td>
                                    <td>✓</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">Permissions</th>
                                    <td></td>
                                    <td>✓</td>
                                    <td>✓</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>


</body>

</html>