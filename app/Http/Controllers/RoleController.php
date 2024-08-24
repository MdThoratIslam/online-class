<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:role-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:role-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:role-delete', ['only' => ['destroy']]);

    }
    public function index()
    {
        $roles = Role::with('permissions')->paginate(5);
        return view('backend.pages.role.index', compact('roles'));
    }
    public function create()
    {
        //$roles = Role::orderBy('name')->paginate(8); // get all roles
        $permissions = Permission::all(); // get all permissions
        return view('pages.role.create', compact( 'permissions'));
    }
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $role = Role::create(['name' => $request->name]);
            $role->syncPermissions($request->permissions);
            DB::commit();
            $notification = [
                'message' => 'Role created successfully!',
                'alert-type' => 'success'
            ];
            return redirect()->route('user-role.index')->with($notification);

        } catch (PermissionDoesNotExist $e) {
            // Rollback the transaction in case of an error
            DB::rollBack();

            // Prepare an error message
            $notification = [
                'message' => 'One or more permissions are invalid: ' . $e->getMessage(),
                'alert-type' => 'error'
            ];

            // Redirect back with an error message
            return back()->with($notification);

        } catch (\Exception $e) {
            // Handle any other possible exceptions and rollback the transaction
            DB::rollBack();

            // Prepare a generic error message
            $notification = [
                'message' => 'Error occurred while creating the role: ' . $e->getMessage(),
                'alert-type' => 'error'
            ];

            // Redirect back with a generic error message
            return back()->with($notification);
        }
    }
    public function show(string $id)
    {
        $role = Role::with('permissions')->find($id);
        return view('pages.role.show', compact('role'));
    }
    public function edit(string $id)
    {
        // edit role form with permissions attached to the role and all permissions available in the system to choose from them
        $role = Role::with('permissions')->find($id);
        $permissions = Permission::all();
        return view('pages.role.edit', compact('role', 'permissions'));

    }
    public function update(Request $request, string $id)
    {
        DB::beginTransaction();
        try {
            $role = Role::find($id);
            $role->update(['name' => $request->name]);
            $role->syncPermissions($request->permissions);
            DB::commit();
            $notification = [
                'message' => 'Role updated successfully!',
                'alert-type' => 'success'
            ];
            return redirect()->route('user-role.index')->with($notification);

        } catch (PermissionDoesNotExist $e)
        {
            DB::rollBack();
            $notification = [
                'message' => 'One or more permissions are invalid: ' . $e->getMessage(),
                'alert-type' => 'error'
            ];
            // Redirect back with an error message
            return back()->with($notification);

        } catch (\Exception $e) {
            // Handle any other possible exceptions and rollback the transaction
            DB::rollBack();
            // Prepare a generic error message
            $notification = [
                'message' => 'Error occurred while updating the role: ' . $e->getMessage(),
                'alert-type' => 'error'
            ];
            // Redirect back with a generic error message
            return back()->with($notification);
        }
    }
    public function destroy(string $id)
    {

        $role = Role::find($id);
        $role->syncPermissions([]);
        $role->delete();
        $notification = [
            'message' => 'Role deleted successfully!',
            'alert-type' => 'success'
        ];
        return redirect()->route('user-role.index')->with($notification);
    }
    // need all permissions data to be able to create a new role
    public function getPermissions()
    {
        $permissions = Permission::all();
        return view('backend.pages.permission.index', compact('permissions'));
    }
}
