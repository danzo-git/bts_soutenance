<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\EncadreurRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class EncadreurCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class EncadreurCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Encadreur::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/encadreur');
        CRUD::setEntityNameStrings('encadreur', 'encadreurs');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('id');
        CRUD::column('nom');
        CRUD::column('prenom');
        CRUD::column('domaine');
        CRUD::column('contacts');
        CRUD::column('theme');
        CRUD::column('service');
        CRUD::column('created_at');
        CRUD::column('updated_at');
        $this->crud->addClause('where', 'type_encadreur', '=', $_GET['id']??0);

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(EncadreurRequest::class);
        // CRUD::field('id');
        CRUD::field('nom');
        CRUD::field('prenom');
        CRUD::field('domaine');
        CRUD::field('contacts');
        CRUD::field('theme');
        CRUD::field('service');
        CRUD::field('type_encadreur');
        
        CRUD::field('created_at');
        CRUD::field('updated_at');
        
        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
