<?php
function dd($param)
{
    var_dump($param);
    exit();
}

function loadWhoops()
{
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
    return $whoops;
}

function ucParagraph(String $text):String
{

$newtext= ucwords($text,".");

    return $newtext;
}

function greetins($hora=null):String
{
    $hora1=$hora??date("H:i");
   
    $hora1=substr($hora1,0,2);
    $hora1=(int)$hora1;
    

$mes=date("n"); //mes numero


//echo($hora." ".$mes);

if ($mes==1 || $mes==12) {
    if ($hora1<7 || $hora1>=18) {
        return 'Bona nit';
    }else{
        return 'Bon dia';
    }
}

if ($mes==2 || $mes==11) {
    if ($hora1<7 || $hora1>=19) {
        return 'Bona nit';
    }else{
        return 'Bon dia';
    }
}

if ($mes==3 || $mes==4 || $mes==10 || $mes==9) {
    if ($hora1<7 || $hora1>=20) {
        return 'Bona nit';
    }else{
        return 'Bon dia';
    }
}

if ($mes==5 || $mes==8) {
    if ($hora1<7 || $hora1>=21) {
        return 'Bona nit';
    }else{
        return 'Bon dia';
    }
}

if ($mes==6 || $mes==7) {
    if ($hora1<7 || $hora1>=22) {
        return 'Bona nit';
    }else{
        return 'Bon dia';
    }
}
    



    return '';
}

function valDate($fecha=null):String
{
if($fecha==null){

    $fecha=date('d-m-Y H:i:s');

    $fecha= substr($fecha,0,10);
    
    $numeroDia = date('d', strtotime($fecha));
    $numeroDia=(int)$numeroDia;
    $mes = date('F', strtotime($fecha));
    $anio = date('Y', strtotime($fecha));
    
    
    $meses_ES = array("gener", "febrer", "març", "abril", "maig", "juny", "juliol", "agost", "setembre", "octubre", "novembre", "decembre");
    $meses_EN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
    $nombreMes = str_replace($meses_EN, $meses_ES, $mes);
    
    
        if (substr($nombreMes,0,1)=='a' || substr($nombreMes,0,1)=='e' || substr($nombreMes,0,1)=='i' || substr($nombreMes,0,1)=='o'  ||  substr($nombreMes,0,1)=='u') {
    
             return $numeroDia." d' ".$nombreMes.' de '.$anio;
        }else {
             return $numeroDia.' de '.$nombreMes.' de '.$anio;
    }


}else{


    $fecha= substr($fecha,0,10);


    if (validateDate($fecha)==false) {
        return 'Bad Format';
    }else{

    $numeroDia = date('d', strtotime($fecha));
    $numeroDia=(int)$numeroDia;
    $mes = date('F', strtotime($fecha));
    $anio = date('Y', strtotime($fecha));


    $meses_ES = array("gener", "febrer", "març", "abril", "maig", "juny", "juliol", "agost", "setembre", "octubre", "novembre", "decembre");
    $meses_EN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
    $nombreMes = str_replace($meses_EN, $meses_ES, $mes);


            if (substr($nombreMes,0,1)=='a' || substr($nombreMes,0,1)=='e' || substr($nombreMes,0,1)=='i' || substr($nombreMes,0,1)=='o'  ||  substr($nombreMes,0,1)=='u') {

              return $numeroDia." d'".$nombreMes.' de '.$anio;

             }else {
                 
              return $numeroDia.' de '.$nombreMes.' de '.$anio;
            }
    }
}
}

function validateDate($date, $format= 'Y/m/d'){

    $d =DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;

}

function paintLine(Array $linea):String
{
$salida="";
    
foreach($linea as $key){


    $salida.='<td>'.$key.'</td>';

}

    return '<tr>'.$salida.'</tr>';
}

?>