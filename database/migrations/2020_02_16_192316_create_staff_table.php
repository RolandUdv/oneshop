<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->bigIncrements('staff_id');
            $table->integer('store_id');
            $table->tinyInteger('admin_rights');
            $table->string('username')->nullable();
            $table->string('firstname')->nullable();
            $table->string('surname')->nullable();
            $table->date('staff_dob')->nullable();
            $table->string('email')->nullable();
            $table->string('password');
            $table->string('phone_no');
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
        Schema::dropIfExists('staff');
    }
}
