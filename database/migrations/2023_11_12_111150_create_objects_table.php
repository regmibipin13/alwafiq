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
            $table->string('contract_transaction');
            $table->string('customer');
            $table->string('invoice_type');
            $table->string('frequency');
            $table->string('object_type');
            $table->string('emirates');
            $table->string('visiting_address');
            $table->string('city');
            $table->string('contact_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('remarks')->nullable();
            $table->dateTime('last_visit_date')->nullable();
            $table->unsignedInteger('rider_id');
            $table->string('area')->nullable();
            $table->string('google_address');
            $table->string('month_wise_remarks');
            $table->string('batch');
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
