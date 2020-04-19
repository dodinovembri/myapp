<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\RequirementModel;
use App\Model\AnalysisModel;
use App\Model\DesignModel;
use App\Model\ImplementationModel;
use App\Model\TestingModel;
use App\Model\MaintananceModel;
use App\Model\ProjectModel;
use App\Model\DesignType;
use App\Model\DeveloperModel;
use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        if (session()->has('project_now')) {
            
        }else{
            session()->put('project_now', 1);            
        }

        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {        
        $id = session()->get('project_now');    
        $data['date_all'] = ProjectModel::where('id', $id)->first();
        return view('home', $data);
    }

    public function requirement()
    {       
        if (session()->get('project_now')) {
            $id = session()->get('project_now');
            $data['requirement'] = RequirementModel::where('id_project', $id)->get();
        }    

        return view('requirement.index',  $data);
    }

    public function analysis()
    {
        if (session()->get('project_now')) {
            $id = session()->get('project_now');
            $data['analysis'] = AnalysisModel::where('id_project', $id)->get();
        }

        return view('analysis.index',  $data);
    }    

    public function design()
    {
        if (session()->get('project_now')) {
            $id = session()->get('project_now');
            $data['design'] = DesignModel::where('id_project', $id)->get();
        }

        return view('design.index',  $data);
    }    

    public function implementation()
    {
        if (session()->get('project_now')) {
            $id = session()->get('project_now');
            $data['implementation'] = ImplementationModel::where('id_project', $id)->get();
        }

        return view('implementation.index',  $data);
    }    

    public function testing()
    {
        if (session()->get('project_now')) {
            $id = session()->get('project_now');
            $data['testing'] = TestingModel::where('id_project', $id)->get();
        }

        return view('testing.index',  $data);
    }    

    public function maintanance()
    {
        if (session()->get('project_now')) {
            $id = session()->get('project_now');
            $data['maintanance'] = MaintananceModel::where('id_project', $id)->get();
        }

        return view('maintanance.index',  $data);
    }                    

    public function project()
    {
        $data['project'] = ProjectModel::all();
        return view('project.index', $data);
    }   

    public function set_session($id)
    {
        session()->put('project_now', $id);
        return back();        
    } 

    public function requirement_create()
    {
        return view('requirement.create');
    }

    public function design_create()
    {
        $data['design_type'] = DesignType::all();
        return view('design.create', $data);
    } 

    public function project_create()
    {        
        return view('project.create');
    } 

    public function implementation_create()
    {        
        $data['developer'] = DeveloperModel::all();
        return view('implementation.create', $data);
    } 

    public function developer_create()
    {                
        return view('developer.create');
    } 

    public function testing_create()
    {                
        return view('testing.create');
    }             

    public function requirement_postcreate(Request $request)
    {
        $insert = new RequirementModel();
        $insert->id_project = session()->get('project_now');
        $insert->requirement = $request->content_requirement;
        $insert->created_by = Auth::user()->email;
        $insert->created_at = date('Y-m-d h:m:s');
        $insert->save();

        return redirect()->route('requirement')->withMessage('Requirement Success Added!');
    }     

    public function design_postcreate(Request $request)
    {
        $insert = new DesignModel();
        $insert->id_project = session()->get('project_now');
        $insert->id_design_type = $request->design_type;
        $insert->design_name = $request->design_name;
        $insert->url_design = $request->design_url;
        $insert->created_at = date('Y-m-d h:m:s');
        $insert->created_by = Auth::user()->email;
        $insert->save();

        return redirect()->route('design')->withMessage('Design Success Added!');
    } 

    public function project_postcreate(Request $request)
    {
        $insert = new ProjectModel();        
        $insert->project_name = $request->project_name;
        $insert->start_date = date('Y-m-d');        
        $insert->created_at = date('Y-m-d h:m:s');
        $insert->created_by = Auth::user()->email;
        $insert->save();

        return redirect()->route('project')->withMessage('Project Success Added!');
    }

    public function implementation_postcreate(Request $request)
    {
        $insert = new ImplementationModel();        
        $insert->id_project = session()->get('project_now');
        $insert->id_developer = $request->developer;
        $insert->task_name = $request->task_name;
        $insert->task_detail = $request->task_detail;
        $insert->start_date = $request->start_date;    
        $insert->due_date = $request->due_date;
        $insert->created_at = date('Y-m-d h:m:s');
        $insert->created_by = Auth::user()->email;
        $insert->save();

        return redirect()->route('implementation')->withMessage('Task Success Added!');
    }

    public function testing_postcreate(Request $request)
    {
        $insert = new TestingModel();        
        $insert->id_project = session()->get('project_now');
        $insert->testing_name = $request->testing_name;
        $insert->url_testing = $request->testing_url;
        $insert->ket = $request->ket;        
        $insert->created_by = Auth::user()->email;
        $insert->created_at = date('Y-m-d h:m:s');
        $insert->save();

        return redirect()->route('testing')->withMessage('Testing Success Added!');
    }             

    public function user()
    {
        $data['user'] = User::all();
        return view('user.index', $data);
    }

    public function developer()
    {
        $data['developer'] = DeveloperModel::all();
        return view('developer.index', $data);
    }

    public function design_type()
    {
        $data['design_type'] = DesignTypeModel::all();
        return view('design_type.index', $data);
    }
}