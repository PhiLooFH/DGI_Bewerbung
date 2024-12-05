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
        

        //create table "wishes"
        Schema::create('wishes', function (Blueprint $table) {
            $table->id('id');
            $table->char('title',length:255);
            $table->text('description');
            $table->boolean('is_fulfilled'); 
            $table->timestamp('created_at',precision: 0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
