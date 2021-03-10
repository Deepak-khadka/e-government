<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddChangesToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('security_number')->nullable()->unique();
            $table->string('family_security_number')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('citizenship_number')->nullable();
            $table->string('state')->nullable();
            $table->string('zone')->nullable();
            $table->string('district')->nullable();
            $table->integer('ward_number')->nullable();
            $table->string('tole')->nullable();
            $table->string('phone')->nullable();
            $table->string('image')->nullable();
            $table->boolean('marital_status')->default(0);
            $table->string('education_level')->nullable();
            $table->string('service')->nullable();
            $table->string('present_location')->nullable();
            $table->boolean('status')->default(0)->comment("if value is 0 then user Can't login ");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('security_number');
            $table->dropColumn('family_security_number');
            $table->dropColumn('date_of_birth');
            $table->dropColumn('citizenship_number');
            $table->dropColumn('state');
            $table->dropColumn('zone');
            $table->dropColumn('district');
            $table->dropColumn('ward_number');
            $table->dropColumn('tole');
            $table->dropColumn('phone');
            $table->dropColumn('image');
            $table->dropColumn('marital_status');
            $table->dropColumn('education_level');
            $table->dropColumn('service');
            $table->dropColumn('present_location');
            $table->dropColumn('status');

        });
    }
}
