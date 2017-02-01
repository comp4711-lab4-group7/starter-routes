<?php

class First extends Application {

    // #1
    public function index()
    {
	$record = $this->quotes->get('1');
        $this->data = array_merge($this->data, $record);
        $this->data['pagebody'] = 'justone';
        $this->render();
    }
    
    // #3
    public function zzz() 
    {
        $record = $this->quotes->get('1');
        $this->data = array_merge($this->data, $record);
        $this->data['pagebody'] = 'justone';
        $this->render();
    }
}
