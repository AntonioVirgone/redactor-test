<?php

/**
 * Created by PhpStorm.
 * User: AntonioVirgone
 * Date: 29/07/16
 * Time: 13:30
 */
class Tinymce extends CI_Controller
{
    function index()
    {
        $this->load->helper("url");

        $this->load->view("tinymce");
    }

}