<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
//use Inertia\Inertia;

class UserCotroller extends Controller {
    public function __construct(){
       // $this->middleware('can:user list', ['only'=>['index','show']]);
       // $this->middleware('can:user create', ['only'=> ['create','show']]);
       // $this->middleware('can:user edit', ['only'=> ['edit','update']]);
       // $this->middleware('can:user edit', ['only'=> ['destroy']]);
    }


  


    
}

?>