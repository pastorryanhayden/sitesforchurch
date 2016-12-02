<?php namespace Sfc\Sitesforchurch\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSfcSitesforchurchEvents extends Migration
{
    public function up()
    {
        Schema::create('sfc_sitesforchurch_events', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('event_name')->nullable();
            $table->boolean('published')->nullable();
            $table->dateTime('datetime')->nullable();
            $table->text('description')->nullable();
            $table->text('body_content')->nullable();
            $table->string('featured_image')->nullable();
            $table->string('ministry')->nullable();
            $table->string('photos')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sfc_sitesforchurch_events');
    }
}
