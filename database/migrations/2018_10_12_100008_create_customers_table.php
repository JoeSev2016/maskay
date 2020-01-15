<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');

            $table->string('doc_num');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('address');
            $table->string('contact_number');

            $table->integer('district_id')->nullable()->unsigned();
            $table->foreign('district_id')->references('id')->on('districts');

            $table->integer('user_id')->nullable()->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->integer('document_id')->nullable()->unsigned();
            $table->foreign('document_id')->references('id')->on('document_types');            

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
        Schema::dropIfExists('customers');
    }
}
