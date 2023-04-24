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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('name', 45);
            $table->enum('cate', ['web' ,'python']);
            $table->enum('status', ['not yet start', 'ongoing', 'finished']);
            $table->integer('amount');
            $table->date('start_contact_date');
            $table->date('start_implement_date')->nullable();
            $table->date('finished_date')->nullable();
            $table->date('last_update_date')->nullable();
            $table->date('receive_payment_date')->nullable();
            $table->string('tag', 100)->nullable();
            $table->string('remark', 100)->nullable();
            // $table->timestamps('create_at', $precision = 0);
            // $table->timestamps('update_at', $precision = 0);
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
        Schema::dropIfExists('tasks');
    }
};
