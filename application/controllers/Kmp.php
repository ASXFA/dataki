<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kmp extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_karya');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['berkas'] = $this->db->get('tb_data');
        $arrayHasil=[];
        if (isset($_GET['kata'])) {
            $datas = $this->db->get('tb_data')->result();
            $kataa = strtolower($_GET['kata']);
            foreach($datas as $d){
                $hasil = $this->KMPSearch($kataa,strtolower($d->JUDUL_DATA));
                $string; 
                foreach($hasil as $h){
                    $string = $h;
                }
                if (count($hasil)>0) {
                    $dataHasil = array(
                        'ID_DATA'=> $d->ID_DATA,
                        'NO_USER' => $d->NO_USER,
                        'NAME' => $d->NAME,
                        'JUDUL_DATA'=> $d->JUDUL_DATA,
                        'ABSTRAK_DATA'=> $d->ABSTRAK_DATA,
                        'BIDANG_DATA'=> $d->BIDANG_DATA,
                        'JENIS_DATA'=> $d->JENIS_DATA,
                        'TAHUN_DATA'=> $d->TAHUN_DATA,
                        'NAMA_BERKAS'=>$d->NAMA_BERKAS,
                        'KATA' => $kataa,
                        'POSISI'=> $string
                    );
                    array_push($arrayHasil, $dataHasil);
                }
            }
            $data['hasil'] = $arrayHasil;
            $info = array(
                'kataa'=>$kataa
            );
            $this->load->model('M_bidang');
            $this->load->model('M_jenis');
            $data['bidang'] = $this->M_bidang->get_all();
            $data['jenis'] = $this->M_jenis->get_all();
            $data['informasi'] = $info;
        }
		$this->load->view('template/header');
		$this->load->view('berkas/kmp_list',$data);
		$this->load->view('template/footer');
    }

    function KMPSearch($p,$t){
        $hasil = array();
        // pattern dan text dijadikan array
        $pattern = str_split($p);
        $text    = str_split($t);

        // hitung tabel lompatan dengan preKMP()
        $lompat = $this->preKMP($pattern);
        //print_r($lompat);

        // perhitungan KMP
        $i = $j = 0;
        $num=0;
        while($j<count($text)){
            if(isset($pattern[$i]) && isset($lompat[$i])){
                while($i>-1 && $pattern[$i]!=$text[$j]){
                    // jika tidak cocok, maka lompat sesuai tabel lompatan
                    $i = $lompat[$i];
                }
            }else{
                $i = 0;
            }

            $i++;
            $j++;
            if($i>=count($pattern)){
                // jika cocok, tentukan posisi string yang cocok
                // kemudian lompat ke string berikutnya
                $hasil[$num++]=$j-count($pattern);
                if(isset($lompat[$i])){
                    $i = $lompat[$i];
                }
            }
        }
        return $hasil;
    }

    /* menetukan tabel lompatan dengan preKMP
     * input :
     *   $pattern = (string) pattern
     * output :
     *   $lompat = (array int) untuk jumlah lompatan
     */
    function preKMP($pattern){
        $i = 0;
        $j = $lompat[0] = -1;
        while($i<count($pattern)){
            while($j>-1 && $pattern[$i]!=$pattern[$j]){
                $j = $lompat[$j];
            }
            $i++;
            $j++;
            if(isset($pattern[$i])&&isset($pattern[$j])){
                if($pattern[$i]==$pattern[$j]){
                    $lompat[$i]=$lompat[$j];
                }else{
                    $lompat[$i]=$j;
                }
            }
        }
        return $lompat;
    }

    /* replace string
     * input :
     *   $str1 = (array string) string yang akan diganti dengan str2
     *   $str2 = (array string) string yang akan mengganti str1
     *   $text = (string) text yang akan dicari
     * output :
     *   $t = teks yang sudah difilter
     */
    function KMPReplace($str1,$str2,$text){
        $num = 0;
        $location = $this->KMPSearch($str1,$text);
        $t = '';
        $n = 0; $nn = 0;
        foreach($location as $in){
            $t .= substr($text,$n+$nn,$in-$n-$nn).$str2;
            $nn = strlen($str1);
            $n = $in;
        }
        $t .= substr($text,$n+$nn);
        return $t;
    }
}