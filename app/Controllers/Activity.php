<?php 

namespace App\Controllers;

use App\Models\ActivityModel;

class Activity extends BaseController

{
    public function index()
    {
        $model = new ActivityModel();
        $data['activities'] = $model->findAll();

        return view('activities/index' , $data);
    }

    public function create()
    {
        return view('activies/create');
    }
    
    public function store()
    {
        $model = new ActivityModel();
        $model->save([
        'name' => $this->request->getPost('name'),
        'description' => $this->request->getPost('desctiption'),
    ]);

    return redirect()->to('/activity');
    }
}