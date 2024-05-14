<?php

namespace App\Controllers;

class Account extends BaseController
{
  public function profile()
  {
    $data = [
      'title' => 'Account | Profile'
    ];
    return view('account/profile', $data);
  }

  public function setting()
  {
    $data = [
      'title' => 'Account | Setting'
    ];
    return view('account/account-setting', $data);
  }
}
