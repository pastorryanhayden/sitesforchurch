<?php namespace Sfc\Sitesforchurch\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Gospel extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('sfc.sitesforchurch', 'aboutus', 'gospel');
    }
}