<?php

namespace App\Controllers;
use App\Models\MenuModel;
use App\Models\GalleryModel;
use App\Models\ActivityModel;
class Dashboard extends BaseController{
    private $menu;
    private $gallery;

    public function __construct() {
        $this->menu = new MenuModel;
        $this->gallery = new GalleryModel;
        $this->activity = new ActivityModel;
    }
    public function index(){
        $data=[
            'menus'=>$this->menu->countAll(),
            'galleries'=>$this->gallery->countAll(),
            'activity'=>$this->activity->countAll(),
            'activities' => $this->activity->join('user', 'user.id=activity.author')->orderBy('created_at','DESC')->findAll(5),
            'active'=>'dashboard'
        ];
        return view('admin/dashboard',$data);
    }
    public function activity(){
        $data=[
            'activities' => $this->activity->join('user', 'user.id=activity.author')->orderBy('created_at','DESC')->findAll(5),
            'history' => $this->activity->join('user', 'user.id=activity.author')->orderBy('created_at','DESC')->paginate(15),
            'active'=>'table',
            'pager'=>$this->activity->pager,
        ];
        return view('admin/table/activity',$data);
    }
    
    public function listMenu(){
        $data=[
            'active'=>'table',
            'activities' => $this->activity->join('user', 'user.id=activity.author')->orderBy('created_at','DESC')->findAll(5),
            'menus'=>$this->menu->join('user','user.id=menu.author')->paginate(5),
            'pager'=>$this->menu->pager,
        ];
        return view('admin/table/menu',$data);
    }
    public function searchMenu(){
        $q=$this->request->getvar('q');
        $data=[
            'active'=>'table',
            'activities' => $this->activity->join('user', 'user.id=activity.author')->orderBy('created_at','DESC')->findAll(5),
            'menus'=>$this->menu->like('menu',$q)->join('user','user.id=menu.author')->paginate(5),
            'pager'=>$this->menu->pager,
        ];
        return view('admin/table/menu',$data);
    }
    public function listGallery(){
        $data=[
            'activities' => $this->activity->join('user', 'user.id=activity.author')->orderBy('created_at','DESC')->findAll(5),
            'active'=>'table',
            'galleries'=>$this->gallery->join('user','user.id=gallery.author')->paginate(5),
            'pager'=>$this->gallery->pager,
        ];
        return view('admin/table/gallery',$data);
    }
    public function formMenu(){
        $data=[
            'activities' => $this->activity->join('user', 'user.id=activity.author')->orderBy('created_at','DESC')->findAll(5),
            'active'=>'form',
        ];
        return view('admin/form/menu',$data);
    }
    public function formGallery(){
        $data=[
            'activities' => $this->activity->join('user', 'user.id=activity.author')->orderBy('created_at','DESC')->findAll(5),
            'active'=>'form',
        ];
        return view('admin/form/gallery',$data);
    }
    public function profile(){
        $data=[
            'activities' => $this->activity->join('user', 'user.id=activity.author')->orderBy('created_at','DESC')->findAll(5),
            'active'=>'profile'
        ];
        return view('admin/profile',$data);
    }
}