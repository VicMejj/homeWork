<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('categories', function (Blueprint $table) {
            $table->id('ID_catégorie'); // Primary key
            $table->string('Nom_catégorie');
            $table->text('Description')->nullable();
            $table->date('Date_ajout');
            $table->string('Statut');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('categories');
    }
};
