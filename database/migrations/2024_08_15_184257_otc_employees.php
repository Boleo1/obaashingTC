<?php

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
      Schema::create('otc_employees', function (Blueprint $table) {
        $table->id();
        $table->string('first_name')->index();
        $table->string('last_name');
        $table->string('gender');
        $table->string('email_address');
        $table->string('work_extension')->nullable();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
