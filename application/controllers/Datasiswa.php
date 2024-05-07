<?php
class Datasiswa extends CI_Controller
{
    public function index()
    {
        $this->load->view('view_form_datasiswa');
    }
    
    public function cetak()
    {
        {
            $data = [
                'Nama' => $this->input->post('Nama'),
                'NIS' => $this->input->post('NIS'),
                'Kelas' => $this->input->post('Kelas'),
                'Tgl' => $this->input->post('Tgl'),
                'Tmpt' => $this->input->post('Tmpt'),
                'Alamat' => $this->input->post('Alamat'),
                'JenisKelamin' => $this->input->post('JenisKelamin'),
                'Agama' => $this->input->post('Agama')
            ];
            $this->load->view('view_data_siswa', $data);
        }
    }
}