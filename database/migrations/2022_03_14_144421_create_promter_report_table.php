<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromterReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promter_report', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->string('PhoneNumber');
            $table->string('ExchangeMechanism');
            $table->string('OldMilk');
            $table->string('NewMilk');
            $table->string('Note');
            $table->integer('User_id');
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
        Schema::dropIfExists('promter_report');
    }
}
