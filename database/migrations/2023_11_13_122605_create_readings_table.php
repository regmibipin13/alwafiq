<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReadingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('readings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('object_id')->nullable();
            $table->foreign('object_id')->references('id')->on('objects')->onDelete('cascade');
            $table->unsignedBigInteger('reading_type_id')->nullable();
            $table->foreign('reading_type_id')->references('id')->on('reading_types')->onDelete('cascade');
            $table->string('reading_value')->nullable();
            $table->date('visit_date')->nullable();
            $table->string('remarks')->nullable();
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
        Schema::dropIfExists('readings');
    }
}
