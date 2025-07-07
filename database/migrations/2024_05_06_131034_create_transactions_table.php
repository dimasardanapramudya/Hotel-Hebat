<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('room_id');
            $table->string('check_in');
            $table->string('many_room');
            $table->string('check_out');
           $table->string('status')->default('pending');
            $table->timestamps();
           $table->string('bukti')->nullable();
            $table->string('total_harga')->default(0);
            $table->string('total_malam')->default(0);
            $table->string('type_room')->default('');
            $table->string('nomor_kamar')->default('');
            $table->string('nama_pemesan')->default('');
            $table->string('email_pemesan')->default('');
            $table->string('phone_pemesan')->default('');
            $table->string('alamat_pemesan')->default('');
            $table->string('keterangan')->default('');
            $table->string('nama_tamu')->default('');
            $table->string('email_tamu')->default('');
            $table->string('phone_tamu')->default('');
            $table->string('alamat_tamu')->default('');
            $table->string('keterangan_tamu')->default('');
            $table->string('nama_pembayaran')->default('');
            $table->string('email_pembayaran')->default('');
            $table->string('phone_pembayaran')->default('');
            $table->string('alamat_pembayaran')->default('');
            $table->string('keterangan_pembayaran')->default('');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
