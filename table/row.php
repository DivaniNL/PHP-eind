<?php
class Row{
    private $_cells;
    
    public function __construct() {
        $this->_cells = array();
    }
    
    public function append($cell) {
        $this->_cells[] = $cell;
    }
    
    public function getCells() {
        return $this->_cells;
    }
}
?>