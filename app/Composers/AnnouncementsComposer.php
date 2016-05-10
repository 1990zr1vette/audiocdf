<?php namespace App\Composers;

use Illuminate\View\View;
use \App\Models\Announcement;

class AnnouncementsComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('Announcements', where('current',1)->first());
    }
}