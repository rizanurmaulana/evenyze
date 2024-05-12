<?php

namespace App\Controllers;

use App\Models\UserModel;

class Register extends BaseController
{
  public function index()
  {
    //include helper form
    helper(['form']);
    $data = [];
    echo view('register', $data);
  }

  public function save()
  {
    //include helper form
    helper(['form']);
    //set rules validation form
    $rules = [
      'name'          => 'required|min_length[3]|max_length[20]',
      'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[user.email]',
      'password'      => 'required|min_length[6]|max_length[200]',
      'confirmPassword'  => 'matches[password]'
    ];

    if ($this->validate($rules)) {
      $model = new UserModel();
      $data = [
        'name'     => $this->request->getVar('name'),
        'email'    => $this->request->getVar('email'),
        'phone'    => $this->request->getVar('phone'),
        'role'     => $this->request->getVar('role'),
        'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
      ];
      $model->save($data);
      return redirect()->to('/login');
    } else {
      $data['validation'] = $this->validator;
      return view('/register', $data);
    }
  }
}