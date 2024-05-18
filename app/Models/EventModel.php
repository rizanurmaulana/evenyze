<?php

namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model
{
    protected $table = 'event';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_event', 'kategori', 'tanggal', 'waktu', 'harga_tiket', 'kuota', 'deskripsi_event', 'nama_tempat', 'alamat_lengkap', 'kota', 'provinsi'];

    public function getAllEvents()
    {
        return $this->findAll();
    }
    public function deleteEvent($id)
    {
        return $this->where('id', $id)->delete();
    }
}
