<?php
function bulan($word) {
    $warr = explode(';',$word);
    $result = '';
    foreach($warr as $value){
        switch(trim($value)){
            case 'zero':
                $result .= '0';
                break;
            case 'Januari':
                $result .= '01';
                break;
            case 'Februari':
                $result .= '02';
                break;
            case 'Maret':
                $result .= '03';
                break;
            case 'April':
                $result .= '04';
                break;
            case 'Mei':
                $result .= '05';
                break;
            case 'Juni':
                $result .= '06';
                break;
            case 'Juli':
                $result .= '07';
                break;
            case 'Agustus':
                $result .= '08';
                break;
            case 'September':
                $result .= '09';
                break;    
            case 'Oktober':
                $result .= '10';
                break;    
            case 'November':
                $result .= '11';
                break;    
            case 'Desember':
                $result .= '12';
                break;    
        }
    }
    return $result;
}
?>