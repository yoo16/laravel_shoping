<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('informations')) return;
        Schema::create('informations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->text('body')->nullable();
            $table->boolean('is_opened')->nullable();
            $table->timestamp('posted_at');
            $table->integer('sort_order')->nullable();
            $table->text('title');
            $table->text('url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informations');
    }
}