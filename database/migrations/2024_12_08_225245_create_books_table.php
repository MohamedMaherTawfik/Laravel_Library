<?php

use App\Models\Authors;
use App\Models\BooksCategories;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('bookname');
            $table->foreignIdFor(App\Models\Authors::class);
            $table->foreignIdFor(App\Models\BooksCategories::class);
            $table->string('publish_year')->nullable();
            $table->string('language')->nullable();
            $table->decimal('quantity');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
