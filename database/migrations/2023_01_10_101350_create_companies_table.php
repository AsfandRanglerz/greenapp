<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('image')->nullable();
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('establishment_no')->nullable();
            $table->date('establishment_issue_date')->nullable();
            $table->date('establishment_expiry_date')->nullable();
            $table->string('license_no')->nullable();
            $table->date('license_issue_date')->nullable();
            $table->date('license_expiry_date')->nullable();
            $table->string('tenancy')->nullable();
            $table->date('tenancy_issue_date')->nullable();
            $table->date('tenancy_expiry_date')->nullable();
            $table->date('e_channel_issue_date')->nullable();
            $table->date('e_channel_expiry_date')->nullable();
            $table->string('mohre_no')->nullable();
            $table->string('po_box')->nullable();
            $table->string('daman_police_number')->nullable();
            $table->string('daman_customer_number')->nullable();
            $table->string('other_insurance_policy_number')->nullable();
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
        Schema::dropIfExists('companies');
    }
}
