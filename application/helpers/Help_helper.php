<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function assetUrl(){
    $url = base_url()."assets/";
    return $url;
}
function alert($tipe,$text)
{
    $alert = "<div class='alert alert-$tipe'>
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>$text</div>";
    return $alert;
}
function btnSubmit(){
    $btn = '<button type="submit" class="mr-2 btn btn-primary"> <span class="fa fa-save"></span> Save</button> <button type="reset" class="btn btn-default"> <span class="fa fa-times"></span> Reset</button>
    ';
    return $btn;    
}
function rupiah($idr)
{
    $rupiah = number_format($idr,0,',','.');
    return $rupiah;
}
function dateTime($date){
    $dateTime = date('d-m-Y H:i', strtotime($date));
    return $dateTime;
}
function dateOnly($date){
    $date = date('d-m-Y', strtotime($date));
    return $date;
}
