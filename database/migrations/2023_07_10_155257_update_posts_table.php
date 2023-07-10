<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->after('id')->default('1');

            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropForeign('projects_user_id_foreign');

            $table->dropColumn('category_id');
        });
    }
};