<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreightsTable extends Migration
{
    public function up()
    {
        Schema::create('freights', function (Blueprint $table) {
            $table->id();
            $table->string('origin');
            $table->string('destination');
            $table->decimal('price', 8, 2);
            $table->string('details');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('freights');
    }
}
