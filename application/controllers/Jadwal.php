<?php

class Jadwal extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Jadwal_model');
    }

    public function getjadwal()
    {
        $data['jadwal'] = $this->Jadwal_model->getjadwal();
        $this->load->view('jadwal/v_jadwal', $data);
    }
}
