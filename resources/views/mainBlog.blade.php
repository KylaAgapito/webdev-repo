@extends('template.main')

@section('content')

<head>
    <style>
        .separator {
            border-bottom: 2px solid;
            margin: 10px;
        }

        .form-container {
            position: relative;
            padding-bottom: 4rem;
            /* reserve space for the absolute button */
        }

        .form-actions {
            position: absolute;
            right: 1rem;
            bottom: 1rem;
        }
    </style>
</head>

<div class="container p-5 border-2 mt-5 shadow mb-5 bg-body rounded form-container">

    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <div class=" alert alert-danger">{{ $error }}</div>
    @endforeach
    @endif

    <form method="POST" action="{{ route('blogSave') }}">
        @csrf
        <input type="hidden" name="timestamps" value="{{ now() }}">
        <header class="row pt-2">
            <h2>Blog Post Entry</h2>
        </header>
        <div class="separator"></div>
        <div class="row pt-2">
            <div class="col-md-12 pt-2">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Maximum of 50 characters">
            </div>
        </div>
        <div class="row pt-2">
            <div class="col-md-12 pt-2">
                <label for="content" class="form-label">Content</label>
                <input type="text" class="form-control" id="content" name="content" placeholder="Maximum of 200 characters">
            </div>
        </div>
        <div class="row pt-2">
            <div class="col-md-5 pt-2">
                <label for="author" class="form-label">Author</label>
                <input type="text" class="form-control" id="author" name="author" placeholder="Last Name, First Name M.I">
            </div>
        </div>
        <div class="pt-3 form-actions">
            <button class="btn btn-success" type="submit">Post Blog</button>
        </div>
    </form>
</div>
@endsection