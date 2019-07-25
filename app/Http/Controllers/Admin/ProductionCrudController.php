<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Backpack\CRUD\CrudPanel;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\ProductionRequest as StoreRequest;
use App\Http\Requests\ProductionRequest as UpdateRequest;

class ProductionCrudController extends CrudController
{
    public function setup()
    {
        if (backpack_user()->hasRole(\App\Role::PRODUCTION) or backpack_user()->hasRole(\App\Role::ADMIN)) {
        } else {
            return abort(403);
        }

        $this->crud->setModel('App\Models\Production');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/production');
        $this->crud->setEntityNameStrings('production', 'productions');
        // $this->crud->setFromDb();
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
        $this->crud->enableExportButtons();
        $this->crud->addField([
           'name' => 'created_at',
           'label' => 'Tanggal Hari Ini',
           'type' => 'date_picker',
               'datetime_picker_options' => [
                   'todayBtn' => true,
                   'format' => 'D MMM YYYY',
                   'language' => 'en'
               ],
               'allows_null' => true,
        ]);
        $this->crud->addField([
            'name' => 'divisi',
            'type' => 'select2_from_array',
            'options' => [
                '1' => 'Bollmill',
                '2' => 'Oven Tunnel',
                '3' => 'Coating',
                '4' => 'Boiler',
                '5' => 'Permen',
              ],
            'allows_null' => false,
            'default' => 2,
        ]);
        $this->crud->addField([
            'name' => 'shift',
            'type' => 'select2_from_array',
            'options' => [
                1 => '1',
                2 => '2'
              ],
            'allows_null' => false,
            'default' => 1,
        ]);
        $this->crud->addField([
           'label' => "WIP",
           'type' => 'select2',
           'name' => 'good_id',
           'entity' => 'good',
           'attribute' => 'name',
           'model' => "App\Models\Good"
        ]);
        $this->crud->addField([
           'name' => 'start',
           'label' => 'Jam Mulai',
           'type' => 'datetime_picker',
               'datetime_picker_options' => [
                   'format' => 'HH:mm',
                   'language' => 'en'
               ],
               'allows_null' => true,
        ]);
        $this->crud->addField([
           'name' => 'finish',
           'label' => 'Jam Selesai',
           'type' => 'datetime_picker',
               'datetime_picker_options' => [
                   'format' => 'HH:mm',
                   'language' => 'en'
               ],
               'allows_null' => true,
        ]);
        $this->crud->addField([
           'name' => 'batch',
           'label' => 'Batch',
           'type' => 'number',
        ]);
        $this->crud->addField([
           'name' => 'wip',
           'label' => 'WIP /Kg',
           'type' => 'number',
           'attributes' => ["step" => "any"], // allow decimals
        ]);
        $this->crud->addField([
           'name' => 'bs',
           'label' => 'BS /Kg',
           'type' => 'number',
           'attributes' => ["step" => "any"], // allow decimals
        ]);
        $this->crud->addField([
           'name' => 'gas',
           'label' => 'Gas /Kg',
           'type' => 'number',
           'attributes' => ["step" => "any"], // allow decimals
        ]);
        $this->crud->addField([
           'name' => 'person',
           'label' => 'Jumlah Orang',
           'type' => 'number',
        ]);
        $this->crud->addField([
           'name' => 'description',
           'label' => 'Keterangan',
        ]);
        $this->crud->addColumn([
            'name' => 'created_at',
            'label' => 'Tanggal Hari Ini',
            'type' => 'text'
        ]);
        $this->crud->addColumn([
            'name' => 'divisi',
            'type' => 'select2_from_array',
            'options' => [
                '1' => 'Bollmill',
                '2' => 'Oven Tunnel',
                '3' => 'Coating',
                '4' => 'Boiler',
                '5' => 'Permen',
              ],
        ]);
        $this->crud->addColumn([
            'name' => 'shift',
            'type' => 'select2_from_array',
            'options' => [
                1 => '1',
                2 => '2'
              ],
        ]);
        $this->crud->addColumn([
            'type' => "select",
            'id' => 'good',
            'name' => 'good_id',
            'entity' => 'good',
            'attribute' => "name",
            'label' => 'WIP Product',
            'model' => "App\Models\Good",
        ]);
        $this->crud->addColumn([
           'name' => 'start',
           'label' => 'Jam Mulai',
           'type' => 'datetime_picker',
        ]);
        $this->crud->addColumn([
           'name' => 'finish',
           'label' => 'Jam Selesai',
           'type' => 'datetime_picker',
        ]);
        $this->crud->addColumn([
           'name' => 'batch',
           'label' => 'Batch',
           'type' => 'number',
        ]);
        $this->crud->addColumn([
           'name' => 'wip',
           'label' => 'WIP /Kg',
           'type' => 'number',
           'decimals' => 2,
        ]);
        $this->crud->addColumn([
           'name' => 'bs',
           'label' => 'BS /Kg',
           'type' => 'number',
           'decimals' => 2,
        ]);
        $this->crud->addColumn([
           'name' => 'bsrate',
           'label' => '% BS',
           'type' => 'number',
           'decimals' => 2,
        ]);
        $this->crud->addColumn([
           'name' => 'gas',
           'label' => 'Gas /Kg',
           'type' => 'number',
           'decimals' => 2,
        ]);
        $this->crud->addColumn([
           'name' => 'person',
           'label' => 'Jumlah Orang',
           'type' => 'number',
        ]);
        $this->crud->addColumn([
           'name' => 'description',
           'label' => 'Keterangan',
        ]);
    }

    public function store(StoreRequest $request)
    {
        $redirect_location = parent::storeCrud($request);
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        $redirect_location = parent::updateCrud($request);
        return $redirect_location;
    }
}
