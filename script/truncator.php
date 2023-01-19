<?php
    // Pour prevenir contre les injections
    function Injection($string){
        $patterns = array();
        $i=0;
        $patterns[$i++] = '/\'/';
        $patterns[$i++] = "/\"/";
        $patterns[$i++] = '/!/';
        $patterns[$i++] = '/#/';
        $patterns[$i++] = '/\$/';
        $patterns[$i++] = '/\%/';
        $patterns[$i++] = '/\^/';
        $patterns[$i++] = '/\&/';
        $patterns[$i++] = '/\*/';
        $patterns[$i++] = '/\(/';
        $patterns[$i++] = '/\)/';
        $patterns[$i++] = '/\+/';
        $patterns[$i++] = '/=/';
        $patterns[$i++] = "/\|/";
        $patterns[$i++] = "/>/";
        $patterns[$i++] = "/</";
        $patterns[$i++] = "/;/";
        $patterns[$i++] = "/:/";
        $patterns[$i++] = "/\?/";
        $patterns[$i++] = "/\{/";
        $patterns[$i++] = "/\}/";
        $patterns[$i++] = "/\[/";
        $patterns[$i++] = "/\]/";
        $patterns[$i++] = "/--/";
        $patterns[$i++] = "/ -- /";
        $patterns[$i++] = "/ OR /";
        $patterns[$i++] = "/ or /";
        $patterns[$i++] = "/ AND /";
        $patterns[$i++] = "/ IN /";

        $replacements = array();
        for($a=0;$a<=count($patterns); $a++){
            $replacements[$a]="tuestmalade";
        }
        return preg_replace($patterns, $replacements, $string);
    }
    
    function InjectionLogin($string){
        $patterns = array();
        $i=0;
        $patterns[$i++] = '/\'/';
        $patterns[$i++] = "/\"/";
        $patterns[$i++] = '/!/';
        $patterns[$i++] = '/#/';
        $patterns[$i++] = '/\$/';
        $patterns[$i++] = '/\%/';
        $patterns[$i++] = '/\^/';
        $patterns[$i++] = '/\&/';
        $patterns[$i++] = '/\*/';
        $patterns[$i++] = '/\(/';
        $patterns[$i++] = '/\)/';
        $patterns[$i++] = '/=/';
        $patterns[$i++] = "/\|/";
        $patterns[$i++] = "/>/";
        $patterns[$i++] = "/</";
        $patterns[$i++] = "/;/";
        $patterns[$i++] = "/:/";
        $patterns[$i++] = "/\?/";
        $patterns[$i++] = "/\{/";
        $patterns[$i++] = "/\}/";
        $patterns[$i++] = "/\[/";
        $patterns[$i++] = "/\]/";
        $patterns[$i++] = "/--/";
        $patterns[$i++] = "/ OR /";
        $patterns[$i++] = "/ or /";
        $patterns[$i++] = "/ AND /";
        $patterns[$i++] = "/ and /";
        $patterns[$i++] = "/ IN /";
        $patterns[$i++] = "/ in /";
        $patterns[$i++] = "/root/";
        $patterns[$i++] = "/ root /";

        $replacements = array();
        for($a=0;$a<=count($patterns); $a++){
            $replacements[$a]="";
        }
        return preg_replace($patterns, $replacements, $string);
    }
    
    function InjectionMessage($string){
        $patterns = array();
        $i=0;
        $patterns[$i++] = '/#/';
        $patterns[$i++] = '/\$/';
        $patterns[$i++] = '/\%/';
        $patterns[$i++] = '/\^/';
        $patterns[$i++] = '/\&/';
        $patterns[$i++] = '/\*/';
        $patterns[$i++] = '/=/';
        $patterns[$i++] = "/\|/";
        $patterns[$i++] = "/>/";
        $patterns[$i++] = "/</";
        $patterns[$i++] = "/\{/";
        $patterns[$i++] = "/\}/";
        $patterns[$i++] = "/\[/";
        $patterns[$i++] = "/\]/";
        $patterns[$i++] = "/--/";
        $patterns[$i++] = "/ OR /";
        $patterns[$i++] = "/ or /";
        $patterns[$i++] = "/ AND /";
        $patterns[$i++] = "/ and /";
        $patterns[$i++] = "/ IN /";
        $patterns[$i++] = "/ in /";
        $patterns[$i++] = "/root/";
        $patterns[$i++] = "/ root /";

        $replacements = array();
        for($a=0;$a<=count($patterns); $a++){
            $replacements[$a]="";
        }
        return preg_replace($patterns, $replacements, $string);
    }
?>