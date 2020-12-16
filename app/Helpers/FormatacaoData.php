<?php

class FormatacaoData {

    public static function conversorDia($dia) {
        if(isset($dia)):
            return date('d/m/Y H:i', strtotime($dia));
        else:
            return false;
        endif;

    }

}