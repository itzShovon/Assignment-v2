<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->char('owner_id', 20);
            $table->string('owner_name');
            $table->unsignedTinyInteger('group_id');
            $table->string('group_title');
            $table->unsignedTinyInteger('receiver_id');
            $table->string('receiver_name');
            $table->char('receriver_contact');
            $table->string('receiver_email');
            $table->enum('way', ['sms', 'email', 'both'])->default('sms');
            $table->text('text');
            $table->string('response');
            $table->string('status');
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
        Schema::dropIfExists('messages');
    }
}
