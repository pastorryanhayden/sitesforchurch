<?php namespace Sfc\Sitesforchurch\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSfcSitesforchurchSingles extends Migration
{
    public function up()
    {
        Schema::create('sfc_sitesforchurch_singles', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('gospel_heading')->nullable();
            $table->string('gospel_featured_image')->nullable();
            $table->text('gospel_content')->nullable();
            $table->string('welcome_heading')->nullable();
            $table->string('welcome_featured_image')->nullable();
            $table->string('church_name')->nullable();
            $table->string('church_tagline')->nullable();
            $table->string('church_logo')->nullable();
            $table->string('church_logo_dark')->nullable();
            $table->string('home_intro_heading')->nullable();
            $table->text('home_intro_text')->nullable();
            $table->string('home_main_image')->nullable();
            $table->string('home_link1_image')->nullable();
            $table->string('home_link1_text')->nullable();
            $table->string('home_link1_url')->nullable();
            $table->string('home_link2_image')->nullable();
            $table->string('home_link2_text')->nullable();
            $table->string('home_link2_url')->nullable();
            $table->string('home_link3_image')->nullable();
            $table->string('home_link3_text')->nullable();
            $table->string('home_link3_url')->nullable();
            $table->text('home_link1_description')->nullable();
            $table->text('home_link2_description')->nullable();
            $table->text('home_link3_description')->nullable();
            $table->string('church_phone')->nullable();
            $table->string('church_email')->nullable();
            $table->string('church_facebook')->nullable();
            $table->string('church_twitter')->nullable();
            $table->string('church_youtube')->nullable();
            $table->string('church_street')->nullable();
            $table->string('church_street2')->nullable();
            $table->string('church_city')->nullable();
            $table->string('church_state')->nullable();
            $table->string('church_zip')->nullable();
            $table->text('church_google_maps_embed')->nullable();
            $table->string('contact_heading')->nullable();
            $table->text('contact_content')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sfc_sitesforchurch_singles');
    }
}
