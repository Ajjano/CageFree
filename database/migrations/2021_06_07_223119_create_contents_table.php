<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('main__title', 200);
            $table->text('main__subtitle');
            $table->text('main__description');
            $table->string('main__image');

            $table->string('about_us__name',200);
            $table->text('about_us__title');
            $table->text('about_us__description');
            $table->text('about_us__our_activity__title')->nullable();
            $table->string('about_us__image')->nullable();

$table->string('battery_system__name',200);

            $table->string('blog__name',200);
            $table->string('blog__title',500);

            $table->string('contacts__name',200);
            $table->string('contacts__title',200);
            $table->text('contacts__description')->nullable();

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
        Schema::dropIfExists('contents');
    }
}
