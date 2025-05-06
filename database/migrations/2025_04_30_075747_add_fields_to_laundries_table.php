<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::table('laundries', function (Blueprint $table) {
            $table->string('nama_pelanggan')->after('id');
            $table->string('no_telepon')->nullable();
            $table->text('alamat')->nullable();
            $table->float('berat')->nullable();
            $table->integer('harga')->nullable();
        });
    }

    
    public function down(): void
    {
        Schema::table('laundries', function (Blueprint $table) {
            $table->dropColumn([
                'nama_pelanggan',
                'no_telepon',
                'alamat',
                'berat'
                'harga'
            ]);
        });
    }
};
