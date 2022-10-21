<?php
class Matakuliah extends CI_Controller
{

    public function index()
    {

        $this->load->view('view-form-mahasiswa');
    }

    public function cetak()
    { 
        $this->form_validation->set_rules('nama', 'nama mahasiswa',
        'required|min_length[20]', [
                    'required' => 'NAMA SISWA Harus diisi',
                    'min_lenght' => 'NAMA SISWA terlalu pendek'
                ]);
        
                $this->form_validation->set_rules('NIS', 'NOMOR INDUK SISWA',
                'required|min_length[6]', [
                    'required' => 'NIS Harus diisi',
                    'min_lenght' => 'NIS terlalu pendek'
                ]);

                $this->form_validation->set_rules('KELAS', 'KELAS',
                'required|min_length[20]', [
                    'required' => 'KELAS Harus diisi',
                    'min_lenght' => 'KELAS terlalu pendek'
                ]);
                
                $this->form_validation->set_rules('TANGGAL', 'TANGGALLAHIR',
                'required|min_length[20]', [
                            'required' => 'TANGGALLAHIR Harus diisi',
                            'min_lenght' => 'TANGGALLAHIR terlalu pendek'
                ]);

                $this->form_validation->set_rules('TEMPAT', 'TEMPATLAHIR',
                'required|min_length[20]', [
                    'required' => 'TEMPATLAHIR Harus diisi',
                    'min_lenght' => 'TEMPATLAHIR terlalu pendek'
                ]);

                $this->form_validation->set_rules('ALAMAT', 'ALAMAT',
                'required|min_length[20]', [
                    'required' => 'ALAMAT Harus diisi',
                    'min_lenght' => 'ALAMAT terlalu pendek'
                ]);
        
                if ($this->form_validation->run() != true) {
                    $this->load->view('view-form-mahasiswa');
                } else {
                    $data = [
                        'NAMASISWA' => $this->input->post('NAMASISWA'),
                        'NIS' => $this->input->post('NIS'),
                        'KELAS' => $this->input->post('KELAS')
                        'TANGGALLAHIR' => $this->input->post('TANGGALLAHIR')
                        'TEMPATLAHIR' => $this->input->post('TEMPATLAHIR')
                        'ALAMAT' => $this->input->post('ALAMAT')
                        'JENISKELAMIN' => $this->input->post('JENISKELAMIN')
                        'agama' => $this->input->post('agama')
                    ];
                    
            $this->load->view('view-data-matakuliah', $data);
         }
    }
}         