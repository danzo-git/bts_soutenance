<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StagiaireRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class StagiaireCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class StagiaireCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Stagiaire::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/stagiaire');
        CRUD::setEntityNameStrings('stagiaire', 'stagiaires');
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
        CRUD::column('matricule');
        CRUD::column('nom');
        CRUD::column('prenom');
        CRUD::column('date_naissance');
        CRUD::column('filiere');
        CRUD::addColumn([  // Select
            'label'     => "session",
            'type'      => 'select',
            'name'      => 'id_session', // the db column for the foreign key
              'entity'    => 'session',
            'model'     => "App\Models\Session", // related model
            'attribute' => 'libelle', // foreign key attribute that is shown to user
         
       
            ]);
            
      
        CRUD::column('etablissement');
        CRUD::column('status');
          // CRUD::column('id_session');
          // CRUD::addColumn([  // Select
          //   'label'     => "Encadreur",
          //   'type'      => 'select',
          //   'name'      => 'id_encadreur', // the db column for the foreign key
         
          //   // optional
          //   // 'entity' should point to the method that defines the relationship in your Model
          //   // defining entity will make Backpack guess 'model' and 'attribute'
          //   'entity'    => 'encadreur',
            
          //   // optional - manually specify the related model and attribute
          //   'model'     => "App\Models\Encadreur", // related model
          //   'attribute' => 'nom','prenom' // foreign key attribute that is shown to user
         
          //   // optional - force the related options to be a custom query, instead of all();
          //   // 'options'   => (function ($query) {
          //   //      return $query->orderBy('name', 'ASC')->where('depth', 1)->get();
          //   //  }),
          //     //  you can use this to filter the results show in the select
          //   ]);
        CRUD::column('created_at');
        CRUD::column('updated_at');

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
        CRUD::setValidation(StagiaireRequest::class);

        // CRUD::field('id');
        CRUD::field('matricule');
        CRUD::field('nom');
        CRUD::field('prenom');
        CRUD::field('date_naissance');
        CRUD::field('filiere');
        CRUD::field('etablissement');
        // CRUD::field('id_ss');
        CRUD::field('status');
        
        // CRUD::field('id_session');
        CRUD::addField([  // Select
                'label'     => "session",
                'type'      => 'select',
                'name'      => 'id_session', // the db column for the foreign key

        //         // optional
        //         // 'entity' should point to the method that defines the relationship in your Model
        //         // defining entity will make Backpack guess 'model' and 'attribute'
               'entity'    => 'session',
                
        //         // optional - manually specify the related model and attribute
                 'model'     => "App\Models\Session", // related model
                 'attribute' => 'libelle', // foreign key attribute that is shown to user
             
        //         // optional - force the related options to be a custom query, instead of all();
        //         // 'options'   => (function ($query) {
        //         //      return $query->orderBy('name', 'ASC')->where('depth', 1)->get();
        //         //  }),
        //           //  you can use this to filter the results show in the select
                ]);
// dd($_POST);
             // CRUD::field('id_encadreur');
        // CRUD::addField([  // Select
        //     'label'     => "Encadreur",
        //     'type'      => 'select',
        //     'name'      => 'id_encadreur', // the db column for the foreign key
         
        //     // optional
        //     // 'entity' should point to the method that defines the relationship in your Model
        //     // defining entity will make Backpack guess 'model' and 'attribute'
        //     'entity'    => 'encadreur',
            
        //     // optional - manually specify the related model and attribute
        //     'model'     => "App\Models\Encadreur", // related model
        //     'attribute' => 'nom', // foreign key attribute that is shown to user
         
        //     // optional - force the related options to be a custom query, instead of all();
        //     // 'options'   => (function ($query) {
        //     //      return $query->orderBy('name', 'ASC')->where('depth', 1)->get();
        //     //  }),
        //       //  you can use this to filter the results show in the select
        //     ]);

        CRUD::field('created_at');
        CRUD::field('updated_at');

        // dd(CRUD::field('id_session'));
        

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
