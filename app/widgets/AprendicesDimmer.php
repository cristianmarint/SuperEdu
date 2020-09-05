<?php

namespace App\Widgets;

use App\aprendices;

use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;

class AprendicesDimmer extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = aprendices::count();
        $string = 'Aprendices';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'fas fa-users fa-3x text-info',
            'title'  => "{$count} {$string}",
            'text'   => __('Super Edu tiene '.$count.' estudiantes registrados. Clicl para ver los '.Str::lower($string).'.'),
            'button' => [
                'text' => __('Ver Aprendices'),
                'link' => route('voyager.aprendices.index'),
            ],
            'image' => asset('storage/settings/September2020/estudiantes.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return app('VoyagerAuth')->user()->can('browse', Voyager::model('User'));
    }
}