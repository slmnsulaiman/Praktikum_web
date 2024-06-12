<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Hello extends CI_Controller
{
    public function index()
    {
        echo 'Hello Perkenalkan nama saya Sulaiman';
    }

    public function test()
    {
        echo 'ini tes';
    }

    public function hello_2110020038()
    {
        $this->load->model('Hello_Model');
        $data =  $this->Hello_Model->hello_2110020038();
        echo $data;
    }

    public function  hello_views()
    {
        $this->load->view('hello_views');
    }

    public function hello_mvc()
    {
        $this->load->model('Hello_Model');

        $data['mvc'] = $this->Hello_Model->hello_mvc();
        $data['nama'] = 'Sulaiman';
        $data['npm'] = '2110020038';
        $this->load->view('hello_views', $data);
    }
}
