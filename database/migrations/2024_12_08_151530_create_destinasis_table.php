<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD
return new class extends Migration
{
    /**
=======
return new class extends Migration{
        /**
>>>>>>> 86259d4 (BAB 10 : Framework II)
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('destinasis', function (Blueprint $table) {
            $table->id('id_destinasi');
<<<<<<< HEAD
            $table->string('destinasi'); // Nama file gambar
=======
            $table->string('destinasi');
>>>>>>> 86259d4 (BAB 10 : Framework II)
            $table->string('namaDestinasi');
            $table->string('lokasi');
            $table->text('deskripsi');
            $table->timestamps();
        });
    }
    
<<<<<<< HEAD

=======
>>>>>>> 86259d4 (BAB 10 : Framework II)
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destinasis');
    }
<<<<<<< HEAD
};
=======
};
>>>>>>> 86259d4 (BAB 10 : Framework II)
