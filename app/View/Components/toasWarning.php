<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class toasWarning extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $msg = 'Warning',
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
            ->addWarning($this->msg);
    }
}
