<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    // Display all categories (Read)
    public function index()
{
    $categories = Category::all();  // Get all categories
    return view('categories.index', compact('categories'));  // Pass data to view
}

    
    // Show form to create a category
    public function create()
    {
        return view('categories.create');
    }

    // Store a new category in the database (Create)
    public function store(Request $request)
    {
        // Validate incoming data
        $request->validate([
            'Nom_categorie' => 'required|string|max:255',
            'Description' => 'nullable|string',
            'Statut' => 'required|string|max:255',
        ]);
        // Create and save the new category
        Category::create([
            'Nom_catégorie' => $request->Nom_categorie,
            'Description' => $request->Description,
            'Statut' => $request->Statut,
        ]);
    
        // Redirect to the categories list with a success message
        return redirect()->route('categories.index')->with('success', 'Category added successfully!');
    }
    

    





    

    // Show the edit form (Update)
    public function edit($id)
{
    $category = Category::findOrFail($id);
    return view('categories.edit', compact('category'));
}

    

    // Update the category in the database
    public function update(Request $request, $id) {
        $category = Category::where('ID_catégorie', $id)->first();
    
        // Validate and update the category
        $category->update([
            'Nom_catégorie' => $request->input('Nom_catégorie'),
            'Description' => $request->input('Description'),
            'Date_ajout' => $request->input('Date_ajout'),
            'Statut' => $request->input('Statut'),
        ]);
    
        return redirect()->route('categories.index')->with('success', 'Category updated successfully!');
    }
    

    // Delete a category (Destroy)
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully');
    }
}
?>
