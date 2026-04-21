<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('sexe')->nullable();
            $table->string('etat_civil')->nullable();
            $table->string('adresse')->nullable();
            $table->string('telephone')->nullable();
            $table->string('profession')->nullable();
            $table->string('secteur_activite')->nullable();
            $table->string('pc_piece_fournie')->nullable();
            $table->date('pc_date_exp_piece')->nullable();
            $table->string('pc_source_fonds')->nullable();
            $table->date('pe_date_exp_visa')->nullable();
            $table->boolean('pe_is_fatca')->default(false);
            $table->string('ml_rccm')->nullable();
            $table->string('ml_idnat')->nullable();
            $table->string('ml_nif')->nullable();
            $table->string('ml_be_nom')->nullable();
            $table->string('mnl_arrete')->nullable();
            $table->text('mnl_source_financement')->nullable();
            $table->foreignIdFor(User::class);
            $table->string('type_client');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
