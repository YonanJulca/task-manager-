<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * This method adds a new 'is_premium' column to the 'users' table.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Add a boolean 'is_premium' column with a default value of false
            $table->boolean('is_premium')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * This method removes the 'is_premium' column from the 'users' table.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Drop the 'is_premium' column
            $table->dropColumn('is_premium');
        });
    }
};
