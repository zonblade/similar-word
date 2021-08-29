<?php

namespace SimilarWord;

/*
kode ini dibuat dan ditulis oleh
Agung Zon Blade.
*/

function find($word_array){
    try{
        $array_string = $word_array;
        $splitted = [];
        foreach($array_string as $string){
          $string_split = str_split($string);
          $splitted[] = $string_split;
        }
        $sprinted = [];
        foreach($splitted as $key=>$val){
          foreach($val as $key2=>$val2){
            $sprinted[] = $val2;
          }
        }
        $count_arr = count($array_string);
        $out   = array_count_values($sprinted);
        $kata_akhir = [];
        foreach($out as $key=>$val){
          if($val>=$count_arr){
            $kata_akhir[] = $key;
          }
        }
        return implode('',$kata_akhir);
    } catch (\Throwable  $e) {
        return 'Array Error';
    }
}
