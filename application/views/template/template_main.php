<?php
/*Header*/
$this->load->view('template/front_end/header_p');
$this->load->view('template/front_end/header_s');
/*Contenido Dinamico*/
$this->load->view('conten_dinamic/'.$contenido);
/*Footer*/
$this->load->view('template/front_end/footer_azul');
$this->load->view('template/front_end/footer_negro');