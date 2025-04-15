
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Categories</h2>
        





        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Date d'ajout</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($categories as $category)
    <tr>
        <td>{{ $category->Nom_catégorie }}</td>
        <td>{{ $category->Description }}</td>
        <td>{{ $category->Date_ajout }}</td>
        <td>{{ $category->Statut }}</td>
        <td>
            <a href="{{ route('categories.edit', $category->ID_catégorie) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('categories.destroy', ['id' => $category->ID_catégorie]) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
        </td>
    </tr>
@endforeach

            </tbody>
        </table>
        <a href="{{ route('categories.create') }}" class="btn btn-primary">Add Category</a>

        @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif



    </div>
@endsection
