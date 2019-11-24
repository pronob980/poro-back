<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUserBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('bookmarked', function (Blueprint $table) {
            
        //     $table->foreign('user_id')
        //         ->references('id')->on('users')
        //         ->onDelete('cascade');
        //     $table->foreign('book_id')
        //         ->references('id')->on('books')
        //         ->onDelete('cascade');
        // });

        // Schema::create('review_books', function (Blueprint $table) {
            
        //     $table->foreign('user_id')
        //         ->references('id')->on('users')
        //         ->onDelete('cascade');
        //     $table->foreign('book_id')
        //         ->references('id')->on('books')
        //         ->onDelete('cascade');
        // });

        // Schema::create('books', function (Blueprint $table) {
        //     $table->foreign('cat_id')
        //         ->references('id')->on('categories')
        //         ->onDelete('cascade');
        // });

        // Schema::create('categories', function (Blueprint $table) {
        //     $table->foreign('parent_id')
        //         ->references('id')->on('categories')
        //         ->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
