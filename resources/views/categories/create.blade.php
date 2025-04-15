@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add Category</h2>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="Nom_categorie">Category Name</label>
        <input type="text" name="Nom_categorie" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="Description">Description</label>
        <input type="text" name="Description" class="form-control">
    </div>
    <div class="form-group">
        <label for="Statut">Status</label>
        <input type="text" name="Statut" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Add Category</button>
</form>


    </div>
@endsection
