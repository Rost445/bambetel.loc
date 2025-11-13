<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssortModel;
use App\Models\AssortTagsModel;
use App\Models\MenuModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AssortController extends Controller
{
   public function assort(){
     return view('backend.assort.list');
}
   }
