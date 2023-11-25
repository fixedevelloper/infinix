<?php


namespace App\Http\Controllers;


class AdminController extends Controller
{

    public function dashboard(){
        return view('admin.dashboard', []);

    }
    public function partners(){
        return view('admin.partners', []);

    }
    public function links(){
        return view('admin.links', []);

    }
    public function statitics(){
        return view('admin.statistics', []);
    }
    public function preview(){
        return view('admin.preview', []);
    }
}
