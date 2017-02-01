<?php

class First extends Application {

    public function index()
    {
	$record = $this->quotes->get('1');
        $this->data = array_merge($this->data, $record);
        $this->data['pagebody'] = 'justone';
        $this->render();
    }
    
}
