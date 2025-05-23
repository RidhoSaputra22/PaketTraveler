<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AdminApp extends Component
{
    /**
     * Create a new component instance.
     */

    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $active = "bg-white text-black rounded-l-lg ";
        return view('components.admin-app', compact('active'));
    }
}
