<?php
namespace tableBody;
class Table {
    //this property is best to be protected, since you don't want tables to act like rows.
    protected $_rows;
    
    public function __construct() {
        $this->_rows = array();
    }
    
    public function append($row) {
        $this->_rows[] = $row;
    }
    public function draw() {
        echo '<table border="1">'; 
        
        foreach($this->_rows as $row) {
            echo '<tr>';
            
            foreach($row->getCells() as $cell) {
                echo '<td>'.$cell->getContent().'</td>';
            }
        
            echo '</tr>';
        }
        
        echo '</table>';
    }
 
}

?> 