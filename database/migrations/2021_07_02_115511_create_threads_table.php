<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThreadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('threads', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->text('content');
            $table->foreignId('user_id')
                 ->constrained()
                 ->ondelete('cascade');
            $table->foreignId('channel_id')
                 ->constrained()
                 ->ondelete('cascade');
            $table->foreignId('answer_id')
                 ->constrained()
                 ->ondelete('cascade');
            $table->boolean('flag')->default(value:1);
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
        Schema::dropIfExists('threads');
    }
}
