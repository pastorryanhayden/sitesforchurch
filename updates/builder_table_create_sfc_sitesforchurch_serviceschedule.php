<?php namespace Sfc\Sitesforchurch\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSfcSitesforchurchServiceschedule extends Migration
{
    public function up()
    {
        Schema::create('sfc_sitesforchurch_serviceschedule', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('order')->nullable();
            $table->string('service_name')->nullable();
            $table->string('service_time')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sfc_sitesforchurch_serviceschedule');
    }
}
