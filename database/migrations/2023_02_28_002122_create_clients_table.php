<?php
use App\Models\Address;
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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->foreignIdFor(Address::class)->references('id')->on('addresses')->onDelete('CASCADE');
            $table->string('cpf', 14)->unique()->nullable(true);
            $table->string('fone', 15)->nullable(true);
            $table->string('email')->unique()->nullable(true);
            
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('clients', function(Blueprint $table){
            $table->dropForeignIdFor(Address::class);
        });

        Schema::dropIfExists('clients');
    }
};