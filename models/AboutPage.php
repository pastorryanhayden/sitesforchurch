<?php namespace Sfc\Sitesforchurch\Models;

use Model;

/**
 * Model
 */
class AboutPage extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'sfc_sitesforchurch_aboutpages';
}