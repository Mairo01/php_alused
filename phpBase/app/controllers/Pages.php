<?php


class Pages extends Controller
{

    /**
     * Pages constructor.
     */
    public function __construct()
    {
        $this->pagesModel = $this->model('Page');
    }

    public function index(){
        $data = array(
            'title' => 'Pages',
            'content' => 'Pages index view'
        );
        $this->view('pages/index', $data);
    }
}
