<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
  public function add()
  {
      return view('admin.profile.create');
  }

  // 以下を追記
  public function create(Request $request)
  {
      // admin/profile/createにリダイレクトする
      return redirect('admin/profile/create');
  }  
}

    
    
    
    