<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objects', function (Blueprint $table) {
            $table->id();
            $table->string('object_id')->unique();
            $table->string('contract_transaction')->nullable();
            $table->string('customer')->nullable();
            $table->string('invoice_type')->nullable();
            $table->string('frequency')->nullable();
            $table->string('object_type')->nullable();
            $table->string('emirates')->nullable();
            $table->string('visiting_address')->nullable();
            $table->string('city')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('remarks')->nullable();
            $table->dateTime('last_visit_date')->nullable();
            $table->unsignedInteger('rider_id')->nullable();
            $table->string('area')->nullable();
            $table->text('google_address')->nullable();
            $table->string('month_wise_remarks')->nullable();
            $table->string('batch')->nullable();
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
        Schema::dropIfExists('objects');
    }
}
