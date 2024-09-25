<?php

namespace App\Controllers;
use App\Models\TestimonialsModel;

class Fees extends BaseController
{
    public function index()
    {
        $model = new TestimonialsModel();
        $data['testimonials'] = $model->getTestimonialsWithImages();
        return view('feesview', $data);
    }
}
