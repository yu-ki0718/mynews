<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function add(){
        return view('admin.profile.create');
    }
    public function create(Request $request){
        return view('admin.profile.create');
    }
    public function update(Request $request)
  {
      return redirect('admin/news/edit');
  }  
}
