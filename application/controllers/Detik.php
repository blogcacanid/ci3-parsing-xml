<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Detik extends CI_Controller {

    function __construct(){
        parent::__construct();

    }

    public function index(){
        $feed_url = 'http://rss.detik.com/index.php/inet';
        $content = file_get_contents($feed_url);
        $x = new SimpleXmlElement($content);
           //print_r($x);
        $data_array = array(
            'datalist' => $x->channel->item
        );

        $this->load->view('v_detik',$data_array);
    }
    
}
