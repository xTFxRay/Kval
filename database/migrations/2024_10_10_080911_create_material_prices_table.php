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
        Schema::create('material_prices', function (Blueprint $table) {
            $table->string('kustibas_kamera');
            $table->string('radiators');
            $table->string('apkures_katls');
            $table->string('siltumsuknis');
            $table->string('gazes_katls');
            $table->string('akmens_vate');
            $table->string('stikla_vate');
            $table->string('putuplasts');
            $table->string('xps');
            $table->string('putas');
            $table->string('koka_durvis');
            $table->string('metala_durvis');
            $table->string('ugunsdrosas_durvis');
            $table->string('skanu_izolejosas_durvis');
            $table->string('aluminija_logs');
            $table->string('pvc_logs');
            $table->string('koka_logs');
            $table->string('flizes');
            $table->string('parkets');
            $table->string('laminats');
            $table->string('dakstini');
            $table->string('metala_jumts');
            $table->string('siferis');
            $table->string('tapetes');
            $table->string('krasa');
            $table->string('spot_gaismas');
            $table->string('led_paneli');
            $table->string('koka_divans');
            $table->string('koka_galds');
            $table->string('koka_skapis');
            $table->string('koka_kresls');
            $table->string('koka_gulta');
            $table->string('auduma_gulta');
            $table->string('auduma_galds');
            $table->string('auduma_skapis');
            $table->string('auduma_divans');
            $table->string('auduma_kresls');
            $table->string('adas_kresls');
            $table->string('adas_divans');
            $table->string('adas_galds');
            $table->string('adas_gulta');
            $table->string('adas_skapis');
            $table->string('metala_skapis');
            $table->string('metala_divans');
            $table->string('metala_galds');
            $table->string('metala_kresls');
            $table->string('metala_gulta');
            $table->string('dumu_detektors');
            $table->string('sienas_gaismeklis');
            $table->string('zemes_lampa');
            $table->string('cela_apgaismojums');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prices');
    }
};
