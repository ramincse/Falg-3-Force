<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id();
            $table->longText('corporate_office')->nullable();
            $table->longText('dhaka1_office')->nullable();
            $table->longText('dhaka2_office')->nullable();
            $table->longText('training_center1')->nullable();
            $table->longText('training_center2')->nullable();
            $table->longText('open_time')->nullable();
            $table->string('google_link')->nullable();
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
        Schema::dropIfExists('contact_us');
    }
}
