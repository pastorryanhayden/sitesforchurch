<?php namespace Sfc\Sitesforchurch\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSfcSitesforchurchSeries extends Migration
{
    public function up()
    {
        Schema::table('sfc_sitesforchurch_series', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('sfc_sitesforchurch_series', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
