<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class toasSuccess extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $msg = 'Operations Success',
        public string $time = '2000',
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        toastr()
            ->timeOut($this->time)
            ->newestOnTop(true)
            ->closeButton()
            ->addSuccess($this->msg);
    }
}
