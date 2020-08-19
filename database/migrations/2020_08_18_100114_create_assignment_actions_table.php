<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignmentActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignment_actions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('assignment_id')->constrained('assignments')->onDelete('cascade');
            $table->foreignId('group_id')->constrained('groups')->onDelete('cascade');
            $table->foreignId('owner_id')->constrained('identifications')->onDelete('cascade');
            $table->foreignId('student_id')->constrained('identifications')->onDelete('cascade');
            $table->string('platform');
            $table->text('code');
            $table->string('file');
            $table->text('report');
            $table->unsignedTinyInteger('student_status');
            $table->unsignedTinyInteger('assessment');
            $table->dateTime('submitted_at');
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
        Schema::dropIfExists('assignment_actions');
    }
}
