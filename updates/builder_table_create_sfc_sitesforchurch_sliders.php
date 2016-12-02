<?php namespace Sfc\Sitesforchurch\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSfcSitesforchurchSliders extends Migration
{
    public function up()
    {
        Schema::create('sfc_sitesforchurch_sliders', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('order')->nullable();
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->string('url')->nullable();
            $table->boolean('published')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sfc_sitesforchurch_sliders');
    }
}
