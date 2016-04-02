<?php
    class HtmlController extends CI_Controller{
        
        public function __construct(){
            
            parent::__construct();
            $this->load->helper("url");
            $this->load->library("domparser");
            set_time_limit(0);
        }
        
        public function index(){     
            $data['view'] = "form.php";
            $this->load->view("index.php",$data);
        }
        public function getGiaoVien(){
            $this->load->view("index.php");
        }
        
        public function check_search()
        {            
            $result = json_decode($this->input->post('data'), true);              
            $j = 0;
            $count = 0;
            $arr=array();
            try{
                for($i = 1;$i <= $result['txtNumPage']; $i++)
                {                    
                    $website = $this->domparser->file_get_html($result['txtUrl']."?wpage=".$i);
                    foreach($website->find($result['txtTag']) as $key)
                    {
                        $link = $result['txtUrl'].$key->href;                    
                        $page = $this->domparser->file_get_html($link);
                        $title = $page->find($result['txtTitle'], 0)->plaintext;
                        $content = $page->find($result['txtContent'], 0)->plaintext;
                        $count += substr_count(strtolower($title), strtolower($result['txtKeyword']));                    
                        $count += substr_count(strtolower($content), strtolower($result['txtKeyword']));
                        $item['title'] = $title;
                        $item['link'] = $link;                    
                        $item['amount'] = $count;
                        $arr['Page'.$i]['article'.$j++] = $item;                        
                    }
                    $j=0;
                }
                echo "Từ khóa: '".$result['txtKeyword']."'";
                echo '<pre>';
                print_r($arr);
                echo '</pre>'; 
            }
            catch(Exception $err){
                echo $err->getMessage();
            }            
        }
    }
?>