<?php namespace Sfc\Sitesforchurch\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSfcSitesforchurchPhotos extends Migration
{
    public function up()
    {
        Schema::create('sfc_sitesforchurch_photos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->nullable();
            $table->boolean('published')->nullable();
            $table->string('gallery')->nullable();
            $table->string('event')->nullable();
            $table->string('ministry')->nullable();
            $table->dateTime('date_added')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sfc_sitesforchurch_photos');
    }
}
