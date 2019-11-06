<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateAuthorFk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table( 'authors',function(Blueprint $table){
            $table->unsignedBigInteger("phone_id")->nullable();
            //$table->foreign("phone_id")->references("id")->on("phones")->onDelete('cascade');
        } );

        Schema::table('phones',function(Blueprint $table){
            $table->unsignedBigInteger("author_id");
            $table->foreign("author_id")
            ->references("id")
            ->on("authors")->onDelete('cascade');
        } );
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
