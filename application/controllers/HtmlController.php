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
        
//        function substr_count_unicode($str, $substr, $caseSensitive = true, $offset = 0, $length = null) {
//            if ($offset) {
//                $str = substr_unicode($str, $offset, $length);
//            }
//
//            $pattern = $caseSensitive
//                ? '~(?:'. preg_quote($substr) .')~u'
//                : '~(?:'. preg_quote($substr) .')~ui';
//            preg_match_all($pattern, $str, $matches);
//
//            return isset($matches[0]) ? count($matches[0]) : 0;
//        }
//        
//        function substr_unicode($str, $start, $length = null) {
//            return join('', array_slice(
//                preg_split('~~u', $str, -1, PREG_SPLIT_NO_EMPTY), $start, $length));
//        }
        
        public function check_search()
        {
            $result = json_decode($this->input->post('data'), true);              
            $count = 0;
            //$arr=array();
            for($i = 1;$i <= 1; $i++)
            {
                $website = $this->domparser->file_get_html($result['txtUrl']."?wpage=".$i);
                foreach($website->find($result['txtTag']) as $key)
                {
                    $link = $result['txtUrl'].$key->href;                    
                    $page = $this->domparser->file_get_html($link);
                    $title = $page->find($result['txtTitle'], 0);
                    $content = $page->find($result['txtContent'], 0)->plaintext;
                    $count += substr_count($title, $result['txtKeyword']);                    
                    $count += substr_count($content, $result['txtKeyword']);
                    $item['title'] = $title;
                    $item['content'] = $content;                    
                    $item['amount'] = $count;
                    $arr[] = $item;
                    echo '<span style="color:red">'.$item['title'].'</span><br/>'.$item['content'].'<br/>';                                     
                }
            }
//            echo '<pre>';
//            print_r($arr);
//            echo '</pre>';
        }
    }
?>