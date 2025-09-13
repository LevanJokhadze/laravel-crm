<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('companies', function (Blueprint $table) {
        $table->id();
        $table->string('companyName');
        $table->string('phoneNumber');
        $table->string('contactPerson')->nullable();
        $table->string('businessType')->nullable();
        $table->string('businessmanType')->nullable();
        $table->string('websiteStatus')->nullable();
        $table->text('comments')->nullable();
        $table->boolean('isCalled')->default(false);
        $table->timestamp('createdAt')->useCurrent();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
