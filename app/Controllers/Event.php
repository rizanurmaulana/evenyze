<?php

namespace App\Controllers;

use App\Models\EventModel;

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
    helper('form');

    $data = [
      'title' => 'Event | Buat Event'
    ];

    // Validasi form input (opsional)
    $validation = \Config\Services::validation();
    // Atur aturan validasi sesuai kebutuhan
    $validation->setRules([
      // Atur aturan validasi untuk setiap field
    ]);

    if ($this->request->getMethod() === 'post') {
      // Jika validasi berhasil
      if ($validation->withRequest($this->request)->run()) {
        // Proses menyimpan data ke database
        $eventModel = new EventModel();
        $eventModel->save([
          // Isi array dengan data dari form input
          'nama_event' => $this->request->getPost('nama_event'),
          'kategori' => $this->request->getPost('kategori'),
          'tanggal' => $this->request->getPost('tanggal'),
          'waktu' => $this->request->getPost('waktu'),
          'harga_tiket' => $this->request->getPost('harga_tiket'),
          'kuota' => $this->request->getPost('kuota'),
          'deskripsi_event' => $this->request->getPost('deskripsi_event'),
          'nama_tempat' => $this->request->getPost('nama_tempat'),
          'alamat_lengkap' => $this->request->getPost('alamat_lengkap'),
          'kota' => $this->request->getPost('kota'),
          'provinsi' => $this->request->getPost('provinsi')
        ]);

        return redirect()->to('event/events'); // Redirect ke halaman events setelah berhasil menyimpan
      }
    }

    // Jika request bukan POST atau validasi gagal, tampilkan kembali form input event
    return view('event/create', $data);
  }
  public function details()
  {
    $data = [
      'title' => 'Event | Detail Event'
    ];
    return view('event/details', $data);
  }
  public function list_event()
  {
    $data = [
      'title' => 'Event | List Event'
    ];

    $eventModel = new EventModel();
    $data['events'] = $eventModel->getAllEvents();

    return view('event/list-event', $data);
  }
  public function delete($id)
  {
    $eventModel = new EventModel();
    $eventModel->deleteEvent($id);

    return redirect()->to('list-event');
  }
}
