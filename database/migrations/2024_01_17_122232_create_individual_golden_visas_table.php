<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndividualGoldenVisasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individual_golden_visas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('individual_id');
            $table->foreign('individual_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('job_offer_tran_no')->nullable();
            $table->string('job_offer_tran_fees')->nullable();
            $table->string('job_offer_status')->nullable();
            $table->string('job_offer_reason')->nullable();
            $table->string('signed_mb_st_tran_no')->nullable();
            $table->string('signed_mb_st_tran_fees')->nullable();
            $table->string('signed_mb_st_status')->nullable();
            $table->string('signed_mb_st_reason')->nullable();
            $table->string('dubai_insurance_tran_no')->nullable();
            $table->string('dubai_insurance_tran_fees')->nullable();
            $table->string('dubai_insurance_status')->nullable();
            $table->string('dubai_insurance_reason')->nullable();
            $table->string('pre_approved_wp_tran_no')->nullable();
            $table->string('pre_approved_wp_tran_fees')->nullable();
            $table->string('pre_approved_wp_status')->nullable();
            $table->string('pre_approved_wp_date')->nullable();
            $table->string('pre_approved_wp_reason')->nullable();
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
        Schema::dropIfExists('individual_golden_visas');
    }
}