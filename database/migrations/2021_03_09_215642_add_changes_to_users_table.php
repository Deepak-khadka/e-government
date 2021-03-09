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
            $table->string('security_number')->nullable();
            $table->string('citizenship_number')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('image')->nullable();
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
            $table->dropColumn('address');
            $table->dropColumn('phone');
            $table->dropColumn('image');
            $table->dropColumn('status');
        });
    }
}
