@extends('template.main')

@section('content')
<div class="container">

    <div class="row align-items-start">

        <div class="mt-5 p-3 col-md-4 border bg-body-secondary">
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" id="staticEmail" value="email@example.com">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-4 col-form-label">Password</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" id="inputPassword">
                </div>
            </div>

            <div class="mb-3 row text-end">
                <div class="col-12">
                    <button class="btn bg-light me-3">Login</button>
                    <a href="#">Forgot Password?</a>
                </div>
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
                <div class="card p-3 col-md-4 ">
                    <img class="img-fluid" src="{{ asset('image/cow.png') }}" alt="Cow">
                </div>
                <div class="card p-3 col-md-4 ">
                    <img class="img-fluid" src="{{ asset('image/cow.png') }}" alt="Cow">
                </div>
                <div class="card p-3 col-md-4 ">
                    <img class="img-fluid" src="{{ asset('image/cow.png') }}" alt="Cow">
                </div>
            </div>

            <div class="row">
                <div class="card p-3 col-md-4 ">
                    <img class="img-fluid" src="{{ asset('image/cow.png') }}" alt="Cow">
                </div>
                <div class="card p-3 col-md-4 ">
                    <img class="img-fluid" src="{{ asset('image/cow.png') }}" alt="Cow">
                </div>
                <div class="card p-3 col-md-4 ">
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
@endsection