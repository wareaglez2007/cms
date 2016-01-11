<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of backend_site
 *
 * @author rostomsahakian
 */
class backend_site {

    //put your code here
    private $_header;
    private $_footer;
    private $_title;

    public function setHeader($header) {
        
        $this->_header = $header;
    }

    public function setFooter($footer) {
        $this->_footer = $footer;
    }

    public function getHeader() {
        include $this->_header;
    }

    public function getFooter() {
        include $this->_footer;
    }

    public function setTitle( $title){
        global $title;
        $this->_title = $title;
    }
    public function getTitle(){
        return $this->_title;
    }
   

}
