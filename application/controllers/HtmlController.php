<?php
    class HtmlController extends CI_Controller{
        
        public function __construct(){
            parent::__construct();
            $this->load->helper("url");
            $this->load->library('session');
            $this->load->library("domparser");
            set_time_limit(0);
        }
        
        public function index(){
            $data['view'] = "form.php";
            $this->load->view("index.php",$data);
        }
        
        public function member(){
            $data['view'] = "thongtinthanhvien.php";
            $this->load->view("index.php",$data);
        }
        
        public function teacher(){
            $data['view'] = "giaovien.php";
            $this->load->view("index.php",$data);
        }
        
        public function document(){
            $data['view'] = "document.php";
            $this->load->view("index.php",$data);
        }
        
        public function check_search()
        {
            $result = json_decode($this->input->post('data'), true);              
            $j = 0;
            $count = 0;
            $arrWithNotZero = array();
            $arrWithZero = array();
            $parse_url = array();
            $link = "";
            $page = "";
            $title = "";
            $content = "";
            $item = array();
            $website = "";
            $data = array();
            try{
                for($i = $result['minNumPage'];$i <= $result['maxNumPage']; $i++)
                {
                    $website = $this->domparser->file_get_html($result['txtWpage'].$i.$result['txtWpageEnd']);
                    foreach($website->find($result['txtTag']) as $key)
                    {
                        $parse_url = parse_url($key->href);
                        if(isset($parse_url['host']))                        
                            $link = $key->href;
                        else                            
                            $link = $result['txtUrl'].$key->href;
                        $page = $this->domparser->file_get_html($link);
                        $title = $page->find($result['txtTitle'], 0);
                        $title = $title->plaintext;
                        $content = $page->find($result['txtContent'], 0);
                        $content = $content->plaintext;

                        $count += substr_count(strtolower($title), strtolower($result['txtKeyword']));
                        $count += substr_count(strtolower($content), strtolower($result['txtKeyword']));

                        $item['title'] = trim($title);
                        $item['content'] = trim($content);
                        $item['link'] = $link;
                        $item['amount'] = $count;
                        if($count > 0){
                            $arrWithNotZero['Page'.$i]['article'.$j++] = $item;
                        }
                        $arrWithZero['Page'.$i]['article'.$j++] = $item;
                        $count = 0;
                    }
                    $j = 0;                    
                }
                //Lấy kiểu file muốn lưu
                $data['keyword'] = $result['txtKeyword'];
                $data['resultWithNotZero'] = $arrWithNotZero;
                $data['resultWithZero'] = $arrWithZero;
                
                $this->session->set_userdata("content",$data);
                echo $this->load->view('Result.php',$data);
            }
            catch(Exception $err){
                echo $err->getMessage();
            }
        }
        private function writeToFile($array){
            $i = 0;
            print("<?xml version='1.0' encode='utf-8' ?>\n");
            print("<root>");
            foreach($array as $key)
            {
                print "\r\n"."<page id=".++$i.">";
                foreach($key as $value){
                    print "\r\n\t"."<url>";
                        print "\r\n\t\t".$value['link'];
                    print "\r\n\t"."</url>";

                    print "\r\n\t"."<title>";
                        print "\r\n\t\t".$value['title'];
                    print "\r\n\t"."</title>";

                    print "\r\n\t"."<content>";
                        print "\r\n\t\t".$value['content'];
                    print "\r\n\t"."</content>";

                    print "\r\n\t"."<count>";
                        print "\r\n\t\t".$value['amount'];
                    print "\r\n\t"."</count>";
                }
                print "\r\n"."</page>";

            }
            print("</root>");
        }
        public function export($type, $page){
            $ResultArr = $this->session->userdata("content");
            $i=0;
            
            if($type == "xml"){
                header('Content-Type: application/octet-stream');
                header("Content-Transfer-Encoding: Binary");
                header("Content-disposition: attachment; filename=myXML.xml");
            }
            else if($type == "word"){
                header("Content-type: application/vnd.ms-word");
                header("Content-Disposition: attachment;Filename=myWord.doc");                
            }
            else if($type == "excel"){
                header ('Content-Type: application/vnd.ms-excel');
                header ('Content-Disposition: attachment; filename="filename.xls"');
                header ('Content-Transfer-Encoding: base64');                              
            }
            
            if($page == "page1"){
                $this->writeToFile($ResultArr['resultWithNotZero']);
            }
            else{
                $this->writeToFile($ResultArr['resultWithZero']);
            }  
        }
    }
?>