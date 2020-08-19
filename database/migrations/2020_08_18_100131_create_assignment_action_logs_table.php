<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignmentActionLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignment_action_logs', function (Blueprint $table) {
            $table->id();
            $table->enum('participant', ['student', 'teacher'])->default('student');
            $table->char('action', 20);
            $table->char('student_id', 20);
            $table->unsignedInteger('group_id');
            $table->string('group_title');
            $table->char('group_owner_id', 20);
            $table->string('group_owner_name');
            $table->unsignedInteger('assignment_id');
            $table->string('assignment_title')->nullable();
            $table->text('assignment_description');
            $table->enum('assignment_submission_way', ['code', 'file','both'])->default('both');
            $table->string('platform');
            $table->text('code');
            $table->string('file');
            $table->text('report');
            $table->unsignedTinyInteger('student_status');
            $table->unsignedTinyInteger('assessment');
            $table->dateTime('submitted_at');
            $table->dateTime('submission_end');
            $table->enum('status', ['active', 'archived'])->default('active');
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
        Schema::dropIfExists('assignment_action_logs');
    }
}
