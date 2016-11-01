<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;
use App\Permission;

class PermisosController extends Controller
{
  /**
  * Get permissions assigned.
  * @param  Request $request
  * @return JSON
  */
  public function permsAssigned(Request $request)
  {
    $role = Role::findOrFail($request->roleId);
    $perms = $role->perms;
    $notAssigned = $this->permsNotAssigned($perms);
    return response()->json([
      'assigned' => $perms
    ]);

  }
  /**
  * Get permissions not assigned.
  * @param  Collection $perms
  * @return array
  */
  public function permsNotAssigned($perms)
  {
    $permissions = Permission::all();
    $notAssigned = $permissions->diff($perms);
    return $notAssigned->all();
  }
  /**
  * Attach permission to the role.
  * @param  Request $request
  * @return JSON
  */
  public function assign(Request $request)
  {
    $role = Role::findOrFail($request->roleId);
    $role->attachPermission($request->permissionId);
    return response()->json([
      'message' => 'Permission has been assigned'
    ]);

  }
  /**
  * Remove the specified resource from storage.
  * @param  Request $request
  * @return JSON
  */
  public function remove(Request $request)
  {
    $role = Role::findOrFail($request->roleId);
    $permission = Permission::findOrFail($request->permissionId);
    $role->detachPermission($permission);
    return response()->json([
      'message' => 'Permission has been removed'
    ]);
  }

}
