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
        Schema::create('post', function (Blueprint $table) {
            $table->id();
            $table->string("isim");
            $table->string("soyisim");
            $table->text("yazi");
            $table->string("telefon");
            $table->string("mail");
            $table->string("ipAdresi");
            $table->text("tarayici");
            $table->string("renk");
            $table->string("image");
            $table->integer("barkod");
            $table->text("adres");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post');
    }
};
