<?php

$this->load->view('includes/header');
$this->load->view($template, isset($template_campos) ? $template_campos : null);
$this->load->view('includes/footer');
?>
