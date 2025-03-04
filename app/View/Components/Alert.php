<?php

namespace App\View\Components;

use Carbon\Carbon;
use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public string $type;
    public string $title;
    public string $message;
    public string $icon;
    public string $now;

    public function __construct(Carbon $date, string $type, string $title, string $message, $icon = "")
    {
        $this->type = $type;
        $this->title = $title;
        $this->message = $message;
        $this->icon = $icon;
        $this->now = $date->format('d/m/Y H:i:s');
    }

    public function getBgClass()
    {
        $bgClass = [
            'success' => 'bg-green-50',
            'warning' => 'bg-yellow-50',
            'error' => 'bg-red-50',
        ];

        return $bgClass[$this->type];
    }

    public function getTitleClass()
    {
        $titleClass = [
            'success' => 'text-green-500',
            'warning' => 'text-yellow-500',
            'error' => 'text-red-500',
        ];

        return $titleClass[$this->type];
    }

    public function getMessageClass()
    {
        $messageClass = [
            'success' => 'text-green-700',
            'warning' => 'text-yellow-700',
            'error' => 'text-red-700',
        ];

        return $messageClass[$this->type];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return function(array $data) {
            $data['title'] = "Mudando o titulo do seu pai";

           return "components.alert";
        };
    }
}
