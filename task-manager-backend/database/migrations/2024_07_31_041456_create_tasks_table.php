<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create the 'tasks' table
        Schema::create('tasks', function (Blueprint $table) {
            // Create an auto-incrementing 'id' column (primary key)
            $table->id();

            // Create a 'title' column as a string
            $table->string('title');

            // Create a 'description' column as a text, which can be nullable (optional)
            $table->text('description')->nullable();

            // Create a 'completed' column as a boolean, defaulting to false
            $table->boolean('completed')->default(false);

            // Add created_at and updated_at timestamp columns
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations (drop the table).
     *
     * @return void
     */
    public function down()
    {
        // Drop the 'tasks' table if it exists
        Schema::dropIfExists('tasks');
    }
};
