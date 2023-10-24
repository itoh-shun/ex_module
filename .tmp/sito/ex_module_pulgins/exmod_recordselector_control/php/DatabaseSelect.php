<?php

class DatabaseSelect{

    private $database = '';
    
	public function __construct(string $database){
        global $SPIRAL;
        $this->database = $SPIRAL->getDataBase($database);
	}

    public function setSelectTitle(string $select_name){
        $this->database->addSelectNameCondition($select_name);
    }

    public function setSort(string $sort_name = 'id', $sort_type = true){
        $this->database->addSortField($sort_name, $sort_type);
    }

    public function getLabelRecord(string $label_value, string $label_name){
        $this->database->addSelectFields($label_value, $label_name);
        return $this->database->doSelectLoop();
    }
}