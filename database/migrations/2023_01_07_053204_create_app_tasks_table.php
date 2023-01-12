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
        Schema::create('app_tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('task_parent_id')->nullable();
            $table->string('name')->nullable();
            $table->text('description');
            $table->unsignedBigInteger('main_task_parent_id')->nullable();
            $table->unsignedBigInteger('by_user_id')->nullable();
            $table->unsignedBigInteger('to_user_id')->nullable();
            $table->timestamp('dt_starting')->nullable();
            $table->timestamp('dt_done')->nullable();
            $table->boolean('is_done')->default(0);
            $table->boolean('is_active')->default(1);
            $table->timestamps();

            $table->foreign('task_parent_id')->references('id')->on('app_tasks')->onDelete('set null');
            $table->foreign('main_task_parent_id')->references('id')->on('app_tasks')->onDelete('set null');
            $table->foreign('by_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('to_user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('app_tasks', function (Blueprint $table) {
            $table->dropForeign(['task_parent_id']);
            $table->dropForeign(['main_task_parent_id']);
            $table->dropForeign(['by_user_id']);
            $table->dropForeign(['to_user_id']);
        });

        Schema::dropIfExists('app_tasks');
    }
};
