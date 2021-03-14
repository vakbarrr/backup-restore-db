<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Backup extends CI_Controller {


    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here

        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $data = [
			'title' => 'Aplikasi',
			'subtitle' => 'Backup Database'
		];

        $this->load->view('master/backup-restore', $data, FALSE);
        
    }

    public function backup(){
        $this->load->dbutil();
        $this->load->helper('download');
        $dateFormat = date('d - m - Y');

        $config = [
            'format' => 'zip',
            'filename' => 'Backup Database - '.$dateFormat.'.sql',
            'add_drop' => TRUE,
            'add_insert' => TRUE,
            'newline' => "\n",
            'foreign_key_checks' => FALSE
        ];

        $backup =& $this->dbutil->backup($config);
        $dbName = 'Backup Database - '.$dateFormat.'.zip';
        force_download($dbName, $backup);
    }

}

/* End of file Backup.php */
