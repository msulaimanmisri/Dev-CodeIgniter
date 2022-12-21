<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PortfolioController extends BaseController
{
    public $helpers = [
        'form',
    ];

    public function create()
    {
        if ($this->request->getMethod() === 'post' && $this->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'uploaded[image]|ext_in[image,png,jpg,jpeg]',
        ])) {
            $imageFile = $this->request->getFile('image');
            $imageFileName = $imageFile->getRandomName();
            $imageFile->move(ROOTPATH . 'public/images/', $imageFileName);

            $portfolio = new \App\Entities\Portfolio();
            $portfolio->title = $this->request->getPost('title');
            $portfolio->description = $this->request->getPost('description');
            $portfolio->image = "images/" . $imageFileName;

            $model = model('App\Models\PortfolioModel');
            $model->save($portfolio);

            return redirect()->to('/portfolio')->with('success_message', 'Successfully create a new portfolio.');
        }

        echo view('portfolio/create');
    }
}