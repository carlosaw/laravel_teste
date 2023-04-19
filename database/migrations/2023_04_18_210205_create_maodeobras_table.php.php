<?php

use App\Models\MaodeobraModel;
use App\Models\Mechanic;
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
        //
        Schema::create('maodeobras', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('percentage');
            $table->foreignIdFor(Mechanic::class)->references('id')->on('mechanics')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('maodeobras', function(Blueprint $table){
            $table->dropForeignIdFor(MaodeobraModel::class);
        });
        Schema::dropIfExists('maodeobras');
    }
};
