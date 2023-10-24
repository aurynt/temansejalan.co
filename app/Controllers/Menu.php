<?php




namespace App\Controllers;
use App\Models\Menu;

class Menu extends BaseController{
    protected $db;
    public function __construct() {
        $this->db = new Menu();
    }
    public function create() {
        helper('form');
        $data=[
            'name'=>$this->request->getVar('name'),
            'price'=>$this->request->getVar('price'),
            'description'=>$this->request->getVar('description')
        ];
        $res=$this->db->insert($data);
        
    }
}