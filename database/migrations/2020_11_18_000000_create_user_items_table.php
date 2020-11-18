<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUser_itemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('user_items')) return;
        Schema::create('user_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('amount');
            $table->string('code');
            $table->boolean('is_include_tax')->nullable();
            $table->boolean('is_opened')->nullable();
            $table->bigInteger('item_id');
            $table->integer('price');
            $table->integer('sort_order')->nullable();
            $table->float('tax')->nullable();
            $table->integer('total_price');
            $table->bigInteger('user_card_id');
            $table->bigInteger('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_items');
    }
}