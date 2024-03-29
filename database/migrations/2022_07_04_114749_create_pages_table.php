<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string("contenue");
            $table->string("image");
            $table->string("date");

            $table->unsignedBigInteger("idTypePage")->nullable();
            $table->unsignedBigInteger("idUtilisateur")->nullable();

            $table->foreign("idTypePage")->references("id")->on("type_pages")->onDelete('set null');
            $table->foreign("idUtilisateur")->references("id")->on("utilisateurs")->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
