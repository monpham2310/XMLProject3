<?php
    class HtmlController extends CI_Controller{
        
        public function __construct(){
            parent::__construct();
            $this->load->helper("url");
            $this->load->library('session');
            $this->load->library("domparser");
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
            $arr = array();
            try{
                for($i = $result['minNumPage'];$i <= $result['maxNumPage']; $i++)
                {                    
                    $website = $this->domparser->file_get_html($result['txtWpage'].$i);
                    foreach($website->find($result['txtTag']) as $key)
                    {
                        $link = $result['txtUrl'].$key->href;
                        $page = $this->domparser->file_get_html($link);
                        $title = $page->find($result['txtTitle'], 0)->plaintext;
                        $content = $page->find($result['txtContent'], 0)->plaintext;
                        $count += substr_count(strtolower($title), strtolower($result['txtKeyword']));
                        $count += substr_count(strtolower($content), strtolower($result['txtKeyword']));
                        
                        $item['title'] = trim($title);
                        $item['content'] = trim($content);
                        $item['link'] = $link;
                        $item['amount'] = $count;
                        $arr['Page'.$i]['article'.$j++] = $item;
                    }
                    $j = 0;
                    $count = 0;
                }
                //Lấy kiểu file muốn lưu
                $data['keyword'] = $result['txtKeyword'];
                $data['result'] = $arr;
                $this->session->set_userdata("content",$arr);
                echo $this->load->view('ResultWebsite.php',$data);
            }
            catch(Exception $err){
                echo $err->getMessage();
            }
        }
        public function export($type){
            $ResultArr = $this->session->userdata("content");
            $i=0;
            
            if($type == "xml"){
                header('Content-Type: application/octet-stream');
                header("Content-Transfer-Encoding: Binary");
                header("Content-disposition: attachment; filename=myXML.xml");
                
                foreach($ResultArr as $key)
                {
                    print "\r\n"."<page id=".++$i.">";
                    foreach($key as $value){
                        print "\r\n\t"."<url>";
                            print "\r\n\t\t".$value['link'];
                        print "\r\n\t"."</url>";

                        print "\r\n\t"."<title>";
                            print "\r\n\t\t".$value['title'];
                        print "\r\n\t"."</title>";

                        print "\r\n\t"."<count>";
                            print "\r\n\t\t".$value['amount'];
                        print "\r\n\t"."</count>";
                    }
                    print "\r\n"."</page>";
                }
            }
            else if($type == "word"){
                header("Content-type: application/vnd.ms-word");
                header("Content-Disposition: attachment;Filename=myWord.doc");
                foreach($ResultArr as $key)
                {
                    print "\r\n"."<page id=".++$i.">";
                    foreach($key as $value){
                        print "\r\n\t"."<url>";
                            print "\r\n\t\t".$value['link'];
                        print "\r\n\t"."</url>";

                        print "\r\n\t"."<title>";
                            print "\r\n\t\t".$value['title'];
                        print "\r\n\t"."</title>";

                        print "\r\n\t"."<keyword>";
                            print "\r\n\t\t".$value['content'];
                        print "\r\n\t"."</keyword>";

                        print "\r\n\t"."<count>";
                            print "\r\n\t\t".$value['amount'];
                        print "\r\n\t"."</count>";
                    }
                    print "\r\n"."</page>";
                }
            }
            else if($type == "excel"){
                header ('Content-Type: application/vnd.ms-excel');
                header ('Content-Disposition: attachment; filename="filename.xls"');
                header ('Content-Transfer-Encoding: base64');
                foreach($ResultArr as $key)
                {
                    print "\r\n"."<page id=".++$i.">";
                    foreach($key as $value){
                        print "\r\n\t"."<url>";
                            print "\r\n\t\t".$value['link'];
                        print "\r\n\t"."</url>";

                        print "\r\n\t"."<title>";
                            print "\r\n\t\t".iconv("UTF-8", "ISO-8859-1//TRANSLIT",$value['title']);
                        print "\r\n\t"."</title>";

                        print "\r\n\t"."<keyword>";
                            print "\r\n\t\t".$value['content'];
                        print "\r\n\t"."</keyword>";

                        print "\r\n\t"."<count>";
                            print "\r\n\t\t".$value['amount'];
                        print "\r\n\t"."</count>";
                    }
                    print "\r\n"."</page>";
                }
            }
            
            
        }
    }
?>