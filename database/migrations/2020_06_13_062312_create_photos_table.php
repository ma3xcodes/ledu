<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->bigInteger('profile_id')->nullable();
            $table->bigInteger('gallery_id')->nullable();
            $table->boolean('is_avatar')->default(false);
            $table->boolean('is_cover')->default(false);
            $table->string('original');
            $table->string('large');
            $table->string('medium');
            $table->string('thumbnail');
            $table->enum('status', [0,1,2,3,4])->default(1);
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
        Schema::dropIfExists('photos');
    }
}
