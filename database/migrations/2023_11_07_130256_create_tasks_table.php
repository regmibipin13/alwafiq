<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('asset_id');
            $table->foreign('asset_id')->references('id')->on('assets')->onDelete('cascade');
            $table->unsignedInteger('driver_id');
            $table->foreign('driver_id')->references('id')->on('drivers')->onDelete('cascade');
            $table->string('customer_id');
            $table->string('customer_name');
            $table->string('object_id');
            $table->string('emirates');
            $table->string('billing_type');
            $table->string('frequency');
            $table->string('area');
            $table->string('address');
            $table->string('address_latitude')->nullable();
            $table->string('address_longitude')->nullable();
            $table->string('remarks')->nullable();
            $table->date('submission_date')->nullable();
            $table->string('updated_remarks')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('tasks');
    }
}
