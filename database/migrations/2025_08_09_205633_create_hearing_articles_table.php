<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHearingArticlesTable extends Migration
{
    public function up()
    {
        Schema::create('hearing_articles', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // عنوان المقال
            $table->string('image'); // رابط الصورة أو مسارها
            $table->text('content'); // محتوى المقال كامل
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hearing_articles');
    }
}
