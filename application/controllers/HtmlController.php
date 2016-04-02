<?php
    class HtmlController extends CI_Controller{
        
        public function __construct(){
            
            parent::__construct();
            $this->load->helper("url");
            $this->load->library("domparser");
            
        }
        
        public function index(){

//            for($i = 1;$i <= 1; $i++){
//                $website = $this->domparser->file_get_html("https://tinhte.vn/?wpage=".$i);
//                foreach($website->find("a.newsTitle") as $key){
//                    $link = "https://tinhte.vn/".$key->href;
//                    //echo $link;
//                    $page = $this->domparser->file_get_html($link);
//                    $title = $page->find("p.title",0);
//                    $content = $page->find("article", 0)->plaintext;
//                    echo '<span style="color:red">'.$title.'</span><br/>'.$content.'<br/>';
//                }
//            }
            $data['view'] = "form.php";
            $this->load->view("index.php",$data);
        }
        public function getGiaoVien(){
            $this->load->view("index.php");
        }
        
        public function check_search(){
            $result = json_decode($this->input->post('data'));
            $data['result'] = $result;
            $data['view'] = "Result.php";
            echo $this->load->view("Result.php",$data);
            echo '<pre>';
            print_r($result);
            echo '</pre>';
        }
    }
?>