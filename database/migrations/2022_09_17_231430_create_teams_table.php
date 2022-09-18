<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description')
                ->nullable();
            $table->integer('founded_year')
                ->nullable();
            $table->string('location')
                ->nullable();
            $table->integer('teammanager_id')
                ->unsigned()
                ->nullable();
            $table->dateTime('created_at')
                ->nullable();
            $table->dateTime('updated_at')
                ->nullable();
            $table->dateTime('deleted_at')
                ->nullable();

            $table->foreign('teammanager_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
};
