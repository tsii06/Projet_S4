<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once APPPATH.'/libraries/fpdf183/fpdf.php';
class Fpdf_helper extends FPDF
{
    function __construct()
    {
        parent::__construct();
    }
}
