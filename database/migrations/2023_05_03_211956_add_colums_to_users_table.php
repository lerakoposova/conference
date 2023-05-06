<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('surname')->after('name');
            $table->string('gender')->after('surname');
            $table->string('nationality')->after('gender');
            $table->string('name_of_the_organization')->after('nationality');
            $table->string('job_title')->after('name_of_the_organization');
            $table->date('date_of_birth')->after('job_title');


            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('surname');
            $table->dropColumn('gender');
            $table->dropColumn('nationality');
            $table->dropColumn('name_of_the_organization');
            $table->dropColumn('job_title');
            $table->dropColumn('date_of_birth');
            //
        });
    }
};
