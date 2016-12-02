<?php namespace Sfc\Sitesforchurch\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSfcSitesforchurchSermons extends Migration
{
    public function up()
    {
        Schema::create('sfc_sitesforchurch_sermons', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->nullable();
            $table->date('date')->nullable();
            $table->string('speaker')->nullable();
            $table->string('series')->nullable();
            $table->string('bible_text')->nullable();
            $table->string('service')->nullable();
            $table->string('slides')->nullable();
            $table->string('handout')->nullable();
            $table->string('mp3')->nullable();
            $table->text('body_content')->nullable();
            $table->text('short_description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sfc_sitesforchurch_sermons');
    }
}
