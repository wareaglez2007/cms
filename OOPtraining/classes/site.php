<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of site
 *
 * @author rostomsahakian
 */
class site {

    private $_header;
    private $_footer;

    public function addHeader($header) {
        $this->_header = $header;
    }

    public function addFooter($footer) {
        $this->_footer = $footer;
    }

    public function display($content,$title) {
        global $page;
        include $this->_header;
        $page->display($content);
        include $this->_footer;
    }

}
