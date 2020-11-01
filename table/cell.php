<?php

class Cell {
    private $_content;
    
    public function __construct($content) {
        $this->_content = $content;
    }
    
    public function getContent() {
        return $this->_content;
    }
}
?>