<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\PackingRequest as StoreRequest;
use App\Http\Requests\PackingRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

class PackingCrudController extends CrudController
{
    public function setup()
    {
        $this->crud->setModel('App\Models\Packing');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/packing');
        $this->crud->setEntityNameStrings('packing', 'packings');
        // $this->crud->setFromDb();
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
        $this->crud->addField([
           'name' => 'date',
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
            'name' => 'machine',
            'type' => 'select2_from_array',
            'options' => [
                '1' => 'Manual',
                '2' => 'Vertikal',
                '3' => 'Horizontal',
              ],
            'allows_null' => false,
            'default' => 1,
        ]);
        $this->crud->addField([
           'type' => 'select2',
           'name' => 'product_id',
           'label' => 'Kode Produk',
           'entity' => 'product',
           'attribute' => 'code',
           'model' => "App\Models\Product"
        ]);
        $this->crud->addField([
           'label' => "Nama Produk",
           'type' => 'product_show',
           'name' => 'product.show',
        ]);
        $this->crud->addField([
           'label' => "Product Name",
           'type' => 'product_show',
           'name' => 'product.show',
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
           'name' => 'carton',
           'label' => 'Karton /Kg',
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
            'name' => 'date',
            'label' => 'Tanggal Hari Ini',
            'type' => 'date_picker',
            'options' => [       
                   'format' => 'D MMM YYYY',
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
            'name' => 'machine',
            'type' => 'select2_from_array',
            'options' => [
                '1' => 'Manual',
                '2' => 'Vertikal',
                '3' => 'Horizontal',
              ],
        ]);
        $this->crud->addColumn([
           'type' => 'select',
           'name' => 'product_id',
           'entity' => 'product',
           'attribute' => 'name',
           'model' => "App\Models\Product"
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
           'name' => 'carton',
           'label' => 'Karton /Kg',
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
