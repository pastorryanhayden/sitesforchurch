<?php namespace Sfc\Sitesforchurch\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSfcSitesforchurchSermons extends Migration
{
    public function up()
    {
        Schema::table('sfc_sitesforchurch_sermons', function($table)
        {
            $table->boolean('published')->nullable();
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('sfc_sitesforchurch_sermons', function($table)
        {
            $table->dropColumn('published');
            $table->increments('id')->unsigned()->change();
        });
    }
}
