<?php
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RoleController  extends Controller {

 

    public function assingRole($userId, $rollName = 'admin'){
      //  $rol =  Role::find($rolId);
        $user = User::find($userId);
        $user->assignRole('admin');
    }



}


?>