<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\FeAboutMeModel;
use App\Model\FeExperience;
use App\Model\FeEducation;
use App\Model\FeSkill;


class PublicController extends Controller
{
    public function index()
    {
    	$data['user'] = FeAboutMeModel::first();
    	$data['experience'] = FeExperience::get();
    	$data['education'] = FeEducation::get();
    	$data['skill'] = FeSkill::get();

    	return view('welcome', $data);
    }
}
