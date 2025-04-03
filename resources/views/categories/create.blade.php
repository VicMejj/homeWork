@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add Category</h2>
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <label>Nom:</label>
            <input type="text" name="Nom_catégorie" placeholder="Category Name" required>
            <label>Description:</label>
            <textarea name="Description" class="form-control"></textarea>
            <label>Date d'ajout:</label>
            <input type="date" name="Date_ajout" class="form-control" required>
            <label>Statut:</label>
            <input type="text" name="Statut" class="form-control" required>
            <button type="submit" class="btn btn-success mt-3">Add</button>
        </form>
    </div>
@endsection
