<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumCadastro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::table('cadastros', function (Blueprint $table) {
            $table->integer('convite')
                ->unsigned()
                ->after('telefone');
                
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::table('cadastros', function (Blueprint $table) {
            $table->dropColumn('convite');            
        });
        
    }
}
