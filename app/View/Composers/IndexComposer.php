<?php

namespace App\View\Composers;

use App\Models\Enterprise;
use Illuminate\View\View;

class IndexComposer

{
    public function compose(View $view){

        $view->with('enterprise', Enterprise::first());

    }
}
