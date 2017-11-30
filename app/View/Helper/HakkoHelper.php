<?php
class HakkoHelper extends AppHelper
{
    public $helpers = array('Html');

    public static function convert_date($str) {
        if(empty($str))
            return $str;
        $array_day = array(
            'Monday' => '月',
            'Tuesday' => '火',
            'Wednesday' => '水',
            'Thursday' => '木',
            'Friday' => '金',
            'Saturday' => '土',
            'Sunday' => '日'
        );
        $time_int = strtotime($str);
        $gdate = getdate($time_int);
        $weekday = $gdate['weekday'];

        $str = explode('-', $str);

        return $str[1] . '/' . $str[2] . '（' . $array_day[$weekday] . '）';
    }

    public static function date_jp($date_time) {
        if(empty($date_time))
            return $date_time;
        $arr_dt = explode(' ', $date_time);
        $date = $arr_dt[0];
        $time = $arr_dt[1];
        $arrDate = explode('-', $date);
        $arrTime = explode(':', $time);
        return $arrDate[0] . '年' . $arrDate[1] . '月' . $arrDate[2] . '日' . ' ' . $arrTime[0] . '時' . $arrTime[1] . '分';
    }

    public static function format_date($date_time, $comm='/') {
        if(!empty($date_time)){
            return date('Y'.$comm.'m'.$comm.'d', strtotime($date_time));
        }else{
            return '';
        }
    }

    public function split_date($datetime=null, $param=null){
        if(!empty($datetime)){
            if($param == 'Y') return date('Y', strtotime($datetime));
            elseif($param == 'm') return date('m', strtotime($datetime));
            elseif($param == 'd') return date('d', strtotime($datetime));
            elseif($param == 'H') return date('H', strtotime($datetime));
            elseif($param == 'i') return date('i', strtotime($datetime));
            elseif($param == 's') return date('s', strtotime($datetime));
            else return $datetime;
        }else{
            return '';
        }
    }

    public function c2Digit($digit){
        return str_pad($digit,2,'0',STR_PAD_LEFT);
    }

}