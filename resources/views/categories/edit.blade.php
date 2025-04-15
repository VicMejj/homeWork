@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Category</h2>
        <form action="{{ route('categories.update', $category->ID_catégorie) }}" method="POST">
    @csrf
    @method('PUT') <!-- This makes the form use the PUT HTTP method -->

    <!-- Your form fields here -->
    <input type="text" name="Nom_catégorie" value="{{ $category->Nom_catégorie }}">
    <textarea name="Description">{{ $category->Description }}</textarea>
    <input type="text" name="Statut" value="{{ $category->Statut }}">

    <button type="submit" class="btn btn-primary">Update Category</button>
</form>

    </div>
@endsection
