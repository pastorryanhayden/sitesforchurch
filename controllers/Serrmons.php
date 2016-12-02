<?php namespace Sfc\Sitesforchurch\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Serrmons extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'everything' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('sfc.sitesforchurch', 'sermons', 'sermons');
    }
}