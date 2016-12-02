<?php namespace Sfc\Sitesforchurch\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSfcSitesforchurchSpeakers extends Migration
{
    public function up()
    {
        Schema::create('sfc_sitesforchurch_speakers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('role')->nullable();
            $table->string('thumbnail')->nullable();
            $table->text('bio')->nullable();
            $table->string('email')->nullable();
            $table->string('sermons')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sfc_sitesforchurch_speakers');
    }
}
