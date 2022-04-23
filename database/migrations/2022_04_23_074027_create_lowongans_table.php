<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLowongansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lowongans', function (Blueprint $table) {
            $table->id();
            $table->string('jabatan');
            $table->integer('gaji');
            $table->string('desk_pek');
            $table->string('skill');
            $table->string('edukasi');
            $table->string('pengalaman');
            $table->integer('lowtersedia');
            $table->string('sifat');
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
        Schema::dropIfExists('lowongans');
    }
}
