<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Dashboard'
    ];
    return view('dashboard/index', $data);
    // echo "Welcome Back, " . $session->get('name');
  }

  public function analytics()
  {
    $data = [
      'title' => 'Dashboard | Analytics'
    ];
    return view('dashboard/analytics', $data);
  }
  
  public function reports()
  {
    $data = [
      'title' => 'Dashboard | Reports'
    ];
    return view('dashboard/reports', $data);
  }
}
