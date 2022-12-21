<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Apps;

class AppsComposer
{
    /**
     * @var Apps
     */
    private $apps;

    public function __construct(Apps $apps)
    {
        $this->apps = $apps;
    }

    public function compose(View $view)
    {
        $view->with('apps', $this->apps);
    }
}
