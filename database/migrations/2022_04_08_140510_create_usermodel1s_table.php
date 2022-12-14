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
        Schema::create('usermodel1s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userinfo_id')
                ->references('id')
                ->on('userinfos')
                ->onDelete('cascade');
            $table->string('jobtitle')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('usermodel1s');
    }
};
