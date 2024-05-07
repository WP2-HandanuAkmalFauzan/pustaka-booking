<?php
class Matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->view('view_form_matakuliah');
    }
    
    public function cetak()
    {
        /*$data = [
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'sks' => $this->input->post('sks')
        ];
        $this->load->view('view_data_matakuliah', $data);*/
        $this->form_validation->set_rules('NIM', 'Kode NIM', 
'required|min_length[3]', [
            'required' => 'NIM Harus diisi',
            'min_lenght' => 'NIM terlalu pendek'
        ]);

        $this->form_validation->set_rules('nama', 'Nama Mahasiswa', 
'required|min_length[3]', [
            'required' => 'Nama Mahasiswa Harus diisi',
            'min_lenght' => 'Nama terlalu pendek'
        ]);

        $this->form_validation->set_rules('tgl', 'Tanggal Lahir', 
'required|min_length[3]', [
            'required' => 'Tanggal Lahir Harus diisi'
        ]);

        $this->form_validation->set_rules('kode', 'Kode Matakuliah', 
'required|min_length[3]', [
            'required' => 'Kode Matakuliah Harus diisi',
            'min_lenght' => 'Kode terlalu pendek'
        ]);

        $this->form_validation->set_rules('matkul', 'Nama Matakuliah', 
'required|min_length[3]', [
            'required' => 'Nama Matakuliah Harus diisi',
            'min_lenght' => 'Nama terlalu pendek'
        ]);

        if ($this->form_validation->run() != true) {
            $this->load->view('view_form_matakuliah');
        } else {
            $data = [
                'NIM' => $this->input->post('NIM'),
                'nama' => $this->input->post('nama'),
                'tgl' => $this->input->post('tgl'),
                'kode' => $this->input->post('kode'),
                'matkul' => $this->input->post('matkul'),
                'sks' => $this->input->post('sks')
            ];
            $this->load->view('view_data_matakuliah', $data);
        }
    }
}