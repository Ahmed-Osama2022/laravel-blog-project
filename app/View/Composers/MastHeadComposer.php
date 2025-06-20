<?php


namespace App\View\Composers;

use Illuminate\View\View;

class MastHeadComposer
{
  public function compose(View $view)
  {
    // dd(request()->route()->getName());
    $img_link = null;

    if (request()->route()->getName() === 'home') {
      $img_link = '/images/home-bg.jpg';
    } elseif (request()->routeIs('home.about')) {
      $img_link = '/images/about-bg.jpg';
    } elseif (request()->routeIs('home.contact')) {
      $img_link = '/images/contact-bg.jpg';
    }

    // $view->with('key', 'value');
    $view->with('mastHeadPhoto', $img_link);
  }
}
