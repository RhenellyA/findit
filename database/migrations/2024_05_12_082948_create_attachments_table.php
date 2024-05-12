<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('attachments', function (Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->unsignedBigInteger('item_id');
            $table->softDeletes();
            $table->timestamps();
            
            $table->foreign('item_id')->references('id')->on('items');
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('attachments');
    }
};