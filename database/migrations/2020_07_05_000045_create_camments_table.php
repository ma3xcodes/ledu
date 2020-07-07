<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCammentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->enum('type', [0,1,2,3])->default(0);
            $table->string('text');
            $table->text('tags')->nullable();
            $table->bigInteger('commentable_id');
            $table->bigInteger('commentable_type');
            $table->bigInteger('typeable_id')->nullable();
            $table->bigInteger('typeable_type')->nullable();
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
        Schema::dropIfExists('camments');
    }
}
