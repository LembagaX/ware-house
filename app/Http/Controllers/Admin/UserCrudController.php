<?php

namespace App\Http\Controllers\Admin;

use Hash;
use Auth;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\UserRequest as StoreRequest;
use App\Http\Requests\UserRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

class UserCrudController extends CrudController
{
    public function setup()
    {
        if  (backpack_user()->hasRole(\App\Role::ADMIN)) {
        } else {
            return abort(403);
        }
        $this->crud->setModel('App\Models\User');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/user');
        $this->crud->setEntityNameStrings('user', 'users');
        $this->crud->setFromDb();
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
        $this->crud->removeColumns(['password', 'remember_token', 'email_verified_at']);
        $this->crud->removeFields(['remember_token', 'email_verified_at']);

        $this->crud->addField([
           'label' => "Hak Akses",
           'type' => 'select2',
           'name' => 'role_id',
           'entity' => 'role',
           'attribute' => 'name',
           'model' => "App\Role"
        ]);

        $this->crud->addColumn([
           'label' => "Hak Akses",
           'type' => "select",
           'name' => 'role_id',
           'entity' => 'role',
           'attribute' => "name",
           'model' => "App\Role",
        ]);
    }

    public function store(StoreRequest $request)
    {
        $request->request->set('password', Hash::make($request->password));
        $redirect_location = parent::storeCrud($request);
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        $redirect_location = parent::updateCrud($request);
        return $redirect_location;
    }
}
