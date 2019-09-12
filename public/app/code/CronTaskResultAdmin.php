<?php
use SilverStripe\Admin\ModelAdmin;
use LeKoala\SimpleJobs\CronTaskResult;
class CronTaskResultAdmin extends ModelAdmin 
{

    private static $managed_models = [
        'LeKoala\SimpleJobs\CronTaskResult'
    ];

    private static $url_segment = 'crontaskresult';

    private static $menu_title = 'Tareas Programadas';
}
