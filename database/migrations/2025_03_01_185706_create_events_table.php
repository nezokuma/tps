<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    public function up()
{
    Schema::create('events', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('description');
        $table->date('date');
        $table->string('time')->nullable();
        $table->string('location');
        $table->string('category')->nullable();
        $table->string('image')->nullable();
        $table->integer('attendees')->default(0);
        $table->timestamps();
    });
}

    public function down()
    {
        Schema::dropIfExists('events');
    }
}