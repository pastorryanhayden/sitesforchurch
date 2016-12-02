<?php namespace Sfc\Sitesforchurch\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSfcSitesforchurchMissionsletters extends Migration
{
    public function up()
    {
        Schema::create('sfc_sitesforchurch_missionsletters', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->date('date')->nullable();
            $table->string('missionary')->nullable();
            $table->string('download')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sfc_sitesforchurch_missionsletters');
    }
}
