<?php

namespace App\Http\Controllers;

use App\Http\Resources\CrudResource;
use App\Models\crud;
use App\Trait\ApiR;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    use ApiR;

    public function create( Request $request){


    $user = crud::create($request->all());
    if($user){

        return $this->ApiR(201, new CrudResource($user), 'ok');

    }


    return $this->ApiR(400, [], 'Not found');

    }




    public function delete($id){

        $user = Crud::find($id);
        if(!$user) {
            return $this->ApiR(400, [], 'Not found');
        }

        Crud::destroy($id);
        if($user) {
            return $this->ApiR(201, new CrudResource($user), 'ok');
        }






    }


    public function update( Request $request, $id){






        $user = Crud::find($id);

        $user->update($request->all());

        if($user){
            return $this->ApiR(201,new CrudResource($user),'ok');
        }
        return $this->ApiR(404,[],'Not found');

    }

    public function reed(){
        $user =  CrudResource::collection(crud::all());
        return $this->ApiR(200, $user, 'ok');


    }
    public function show($id){

        $user = crud::find($id);
        if($user){

            return $this->ApiR(200, new CrudResource($user), 'ok');
        }
        return $this->ApiR(404, [], 'Not found');



    }

}
