<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOptionsTable extends Migration
{
    public function up()
    {
        Schema::create('options', function (Blueprint $table) {
            $table->increments('id');

            $table->longText('option_text');

            $table->decimal('points', $precision = 8, $scale = 2)->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
