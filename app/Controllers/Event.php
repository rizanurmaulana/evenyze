<?php

namespace App\Controllers;

class Event extends BaseController
{
  public function events()
  {
    $data = [
      'title' => 'Event | Events'
    ];
    return view('event/events', $data);
  }
  public function create()
  {
    $data = [
      'title' => 'Event | Add Event'
    ];
    return view('event/create', $data);
  }
}
