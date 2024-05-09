<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Contact extends Controller
{
    public function index()
    {
        // Load helper form untuk membantu pembuatan form
        helper(['form']);

        // Jika ada data yang dikirimkan melalui form
        if ($this->request->getMethod() === 'post') {
            // Ambil data dari form
            $name = $this->request->getPost('name');
            $emailPengirim = $this->request->getPost('email');
            $subject = $this->request->getPost('subject');
            $message = $this->request->getPost('message');

            // Validasi data
            $validationRules = [
                'name' => 'required',
                'email' => 'required|valid_email',
                'subject' => 'required',
                'message' => 'required',
            ];

            if (!$this->validate($validationRules)) {
                // Jika ada validasi yang gagal, tampilkan pesan error
                return view('kontak', ['validation' => $this->validator]);
            }

            // Konfigurasi email
            $email = service('email');
            $email->setTo('christianoanugerah@gmail.com');
            $email->setFrom($emailPengirim, $name);
            $email->setSubject($subject);
            $email->setMessage($message);

            // Kirim email
            if ($email->send()) {
                return 'OK';
            } else {
                $data = $email->printDebugger(['Headers']);
                return($data);
            }
        }

        // Tampilkan halaman kontak jika tidak ada data yang dikirimkan melalui form
        return view('kontak');
    }
}
