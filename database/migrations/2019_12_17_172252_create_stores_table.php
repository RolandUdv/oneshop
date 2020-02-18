<?php
// php artisan make:model Store -m
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            // php artisan migrate
            $table->bigIncrements('store_id');
            $table->integer('staff_id')->nullable();
            $table->string('store_name')->nullable();
            $table->mediumText('store_information');
            $table->integer('store_phone_no')->nullable();
            $table->integer('store_house_no');
            $table->string('store_address')->nullable();
            $table->string('store_city')->nullable();
            $table->string('store_county');
            $table->string('store_country');
            $table->string('store_postcode')->nullable();
            $table->string('open_time');
            $table->mediumText('qr_code');
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
        Schema::dropIfExists('stores');
    }
}
