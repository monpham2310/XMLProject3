<?php

    class HtmlController extends CI_Controller{
        
        public function __construct(){
            
            parent::__construct();
            $this->load->helper("url");
            $this->load->library("domparser");
            
        }
        
        public function index(){
            $data['view'] = "form.php";
            $this->load->view("index.php",$data);
        }
        public function getGiaoVien(){
            $this->load->view("index.php");
        }
        
        public function check_search(){
            $result = json_decode($this->input->post('data'));
            $keywork = $result['txtKeyword'];
            $content = array();
            $index=0;
            for($i = 1;$i <= 1; $i++){
                $website = $this->domparser->file_get_html($result['txtUrl']."?wpage=".$i);
                foreach($website->find("a.newsTitle") as $key){
                    $link = "https://tinhte.vn/".$key->href;
                    
                    //echo $link;
                    $page = $this->domparser->file_get_html($link);
                    $title = $page->find($result['txtTitle'],0);
                    $content = $page->find($result['txtContent'], 0)->plaintext;
                    $data[$index] = '<span style="color:red">'.$title.'</span><br/>'.$content.'<br/>';
                    $index++;
                }
            }
            $data['result'] = $content;
            echo $this->load->view('Result.php',$data);
        }
    }
?>