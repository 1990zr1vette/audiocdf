<?php namespace App\Composers;

use Illuminate\View\View;
use \App\Models\Product;

class HeaderComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('Products', Product::getProducts());
    }
}