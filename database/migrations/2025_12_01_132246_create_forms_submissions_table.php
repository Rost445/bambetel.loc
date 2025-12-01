<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('forms_submissions', function (Blueprint $table) {
            $table->id();
            $table->string('form_name'); // наприклад 'contact', 'book_table'
            $table->json('data'); // всі поля форми зберігатимуться як JSON
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('forms_submissions');
    }
};
