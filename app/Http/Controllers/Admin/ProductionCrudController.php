<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\CrudPanel;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\ProductionRequest as StoreRequest;
use App\Http\Requests\ProductionRequest as UpdateRequest;

class ProductionCrudController extends CrudController
{
    public function setup()
    {
        $this->crud->setModel('App\Models\Production');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/production');
        $this->crud->setEntityNameStrings('production', 'productions');
        // $this->crud->setFromDb();
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
        $this->crud->enableExportButtons();
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
            'default' => 1,
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
           'type' => 'select2',
           'name' => 'product_id',
           'label' => 'Kode Produk',
           'entity' => 'product',
           'attribute' => 'name',
           'model' => "App\Models\Product"
        ]);
        $this->crud->addField([
           'label' => "Nama Produk",
           'type' => 'product_show',
           'name' => 'product.show',
        ]);
        $this->crud->addField([
           'name' => 'batch',
           'label' => 'Batch /Kg',
           'type' => 'number',
        ]);
        $this->crud->addField([
           'name' => 'wip',
           'label' => 'WIP /Kg',
           'type' => 'number',
        ]);
        $this->crud->addField([
           'name' => 'bs',
           'label' => 'BS /Kg',
           'type' => 'number',
        ]);
        $this->crud->addField([
           'name' => 'gas',
           'label' => 'Gas /Kg',
           'type' => 'number',
        ]);
        $this->crud->addField([
           'name' => 'person',
           'label' => 'Orang',
           'type' => 'number',
        ]);
        $this->crud->addField([
           'name' => 'description',
           'label' => 'Keterangan',
        ]);
        $this->crud->addColumn([
           'type' => 'select',
           'name' => 'product_id',
           'entity' => 'product',
           'attribute' => 'name',
           'model' => "App\Models\Product"
        ]);
        
        $this->crud->addColumn([
           'type' => 'select',
           'name' => 'product_id',
           'entity' => 'product',
           'attribute' => 'name',
           'model' => "App\Models\Product"
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
