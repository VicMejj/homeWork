<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    use HasFactory;

    protected $table = 'categories'; // Ensure the table name is correct
    protected $primaryKey = 'ID_catégorie'; // Ensure primary key is correct

    protected $fillable = [
        'Nom_catégorie',
        'Description',
        'Date_ajout',
        'Statut',
    ];
}
