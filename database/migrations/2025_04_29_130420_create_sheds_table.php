<?php

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
        Schema::create('sheds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_shed_id')->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->string('description');
            $table->string('cep');
            $table->string('address');
            $table->string('home_number');
            $table->string('neighborhood');
            $table->string('state');
            $table->string('city');
            $table->string('value');
            $table->integer('period_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sheds');
    }
};
