<?php

class toConvert {


    public function toConvertPersianNumber ($value) {


        $englishValue = [ '0' ,'1', '2' , '3' , '4' , '5' , '6' , '6' ,'7' ,'8' , '9'] ; 

        $persianNumber = [ '۰' , '۱' , '۲' ,  '۳' ,  '۴' ,  '۵' , '۶' , '۷' ,  '۸' ,  '۹'  ];

        return str_replace ( $englishValue ,  $persianNumber  ,$value );

    }


    public function toConvertToman ($value)  {
     
        return $value = $this->toConvertPersianNumber( number_format($value)) . 'تومان ';

    }













}