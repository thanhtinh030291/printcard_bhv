<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCardPrintTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_print', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('policy_no')->nullable();
            $table->string('member_no')->nullable();
            $table->string('valid_from')->nullable();
            $table->string('valid_to')->nullable();
            $table->string('plan_type')->nullable();
            $table->string('op')->nullable();
            $table->string('dt')->nullable();
            $table->string('co_payment')->nullable();
            $table->string('deductible')->nullable();
            $table->string('medical_check_up')->nullable();
            $table->string('waiting_period')->nullable();
            $table->string('exclusion_1')->nullable();
            $table->string('exclusion_2')->nullable();
            $table->string('first_year')->nullable();
            $table->string('type')->nullable();
            $table->integer('created_user')->nullable();
            $table->integer('update_user')->nullable();
            $table->string('name_remember')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('card_print');
    }
}
