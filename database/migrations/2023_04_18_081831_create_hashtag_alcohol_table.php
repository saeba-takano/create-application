<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hashtag_alcohol', function (Blueprint $table) {
            $table->foreignId('hashtag_name_id')->constrained('hashtag_name');
            $table->foreignId('alcohol_id')->constrained('alcohols');
            $table->primary(['hashtag_name_id','alcohol_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hashtag_alcohol');
    }
};
