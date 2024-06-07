<?php

class Home extends Controller
{
    public function index()
    {
        $data['page_title'] = 'Photos';
        $this->view('catlog/index',$data);
    }

    
}