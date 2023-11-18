<?php

namespace App\Controllers;

use App\Models\MenuModel;
use App\Models\GalleryModel;
use App\Models\ActivityModel;
use App\Models\Experience;
use App\Models\Setting;
use App\Models\UserModel;


class Dashboard extends BaseController
{
    private $menu;
    private $gallery;
    private $activity;
    private $user;
    private $setting;
    private $exp;

    public function __construct()
    {
        $this->menu = new MenuModel;
        $this->gallery = new GalleryModel;
        $this->activity = new ActivityModel;
        $this->user = new UserModel;
        $this->setting = new Setting();
        $this->exp = new Experience();
    }
    public function index()
    {
        $data = [
            'menus' => $this->menu->countAll(),
            'galleries' => $this->gallery->countAll(),
            'activity' => $this->activity->countAll(),
            'activities' => $this->activity->join('user', 'user.id=activity.author')->orderBy('created_at', 'DESC')->findAll(5),
            'active' => ['current' => 'Dashboard', 'page' => 'dashboard']
        ];
        return view('admin/dashboard', $data);
    }
    public function activity()
    {
        $data = [
            'activities' => $this->activity->join('user', 'user.id=activity.author')->orderBy('created_at', 'DESC')->findAll(5),
            'history' => $this->activity->join('user', 'user.id=activity.author')->orderBy('created_at', 'DESC')->paginate(15),
            'active' => [
                'page' => 'table',
                'current' => 'Activity'
            ],
            'pager' => $this->activity->pager,
        ];
        return view('admin/table/activity', $data);
    }

    public function listMenu()
    {
        $data = [
            'active' => [
                'page' => 'table',
                'current' => 'Menu'
            ],
            'activities' => $this->activity->join('user', 'user.id=activity.author')->orderBy('created_at', 'DESC')->findAll(5),
            'menus' => $this->menu->join('user', 'user.id=menu.author')->paginate(5),
            'pager' => $this->menu->pager,
        ];
        return view('admin/table/menu', $data);
    }
    public function searchMenu()
    {
        $q = $this->request->getvar('q');
        $data = [
            'active' => [
                'page' => 'table',
                'current' => 'Menu'
            ],
            'activities' => $this->activity->join('user', 'user.id=activity.author')->orderBy('created_at', 'DESC')->findAll(5),
            'menus' => $this->menu->like('menu', $q)->join('user', 'user.id=menu.author')->paginate(5),
            'pager' => $this->menu->pager,
        ];
        return view('admin/table/menu', $data);
    }
    public function listGallery()
    {
        $data = [
            'activities' => $this->activity->join('user', 'user.id=activity.author')->orderBy('created_at', 'DESC')->findAll(5),
            'active' => [
                'page' => 'table',
                'current' => 'Gallery'
            ],
            'galleries' => $this->gallery->select('gallery.*,user.name')->join('user', 'user.id=gallery.author')->paginate(5),
            'pager' => $this->gallery->pager,
        ];
        return view('admin/table/gallery', $data);
    }
    public function listUser()
    {
        $data = [
            'activities' => $this->activity->join('user', 'user.id=activity.author')->orderBy('created_at', 'DESC')->findAll(5),
            'active' => [
                'page' => 'table',
                'current' => 'User'
            ],
            'users' => $this->user->paginate(5),
            'pager' => $this->user->pager,
        ];
        return view('admin/table/user', $data);
    }
    public function formMenu()
    {
        $data = [
            'activities' => $this->activity->join('user', 'user.id=activity.author')->orderBy('created_at', 'DESC')->findAll(5),
            'active' => [
                'page' => 'form',
                'current' => 'Menu'
            ],
        ];
        return view('admin/form/menu', $data);
    }
    public function formGallery()
    {
        $data = [
            'activities' => $this->activity->join('user', 'user.id=activity.author')->orderBy('created_at', 'DESC')->findAll(5),
            'active' => [
                'page' => 'form',
                'current' => 'Gallery'
            ],
        ];
        return view('admin/form/gallery', $data);
    }
    public function profile()
    {
        $data = [
            'setting' => $this->setting->find('1'),
            'experiences' => $this->exp->paginate(7),
            'pager' => $this->exp->pager,
            'activities' => $this->activity->join('user', 'user.id=activity.author')->orderBy('created_at', 'DESC')->findAll(5),
            'active' => [
                'page' => 'profile',
                'current' => 'Profile',
            ]
        ];
        return view('admin/profile', $data);
    }
}
