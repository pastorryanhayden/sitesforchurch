<?php namespace Sfc\Sitesforchurch\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSfcSitesforchurchSeries extends Migration
{
    public function up()
    {
        Schema::create('sfc_sitesforchurch_series', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('featured_image')->nullable();
            $table->string('sermons')->nullable();
            $table->boolean('published')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sfc_sitesforchurch_series');
    }
}
