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
use App\Model\DesignTypeModel;
use App\Model\DeveloperModel;
use App\Model\TestingDocumentType;
use App\Model\ProjectStatus;
use App\Model\ServerInformation;
use App\Model\BastModel;
use App\Model\TransferKnowledgeModel;
use App\Model\AccountTypeModel;
use App\Model\AccountModel;
use App\Model\EnvironmentModel;
use App\Model\MomModel;
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
            $data['design'] = DesignModel::select('design.*', 'design_type.design_type_name as design_type_name')->join('design_type', 'design.id_design_type', '=', 'design_type.id')->where('design.id_project', '=', $id)->get();
        }

        return view('design.index',  $data);
    }    

    public function implementation()
    {
        if (session()->get('project_now')) {
            $id = session()->get('project_now');
            $data['implementation'] = ImplementationModel::select('task.*', 'developer.full_name as full_name')->join('developer', 'task.id_developer', '=', 'developer.id')->where('task.id_project', '=', $id)->get();
        }

        return view('implementation.index',  $data);
    }    

    public function testing()
    {
        if (session()->get('project_now')) {
            $id = session()->get('project_now');            
            $data['testing'] = TestingModel::where('id_project', $id)->get();
            // $data['testing'] = TestingModel::select('testing.*', 'project.project_name as project_name')->join('project', 'testing.id_project', '=', 'project.id')->where('testing.id_project', '=', $id)->get();
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

    public function project_status()
    {
        $data['project_status'] = ProjectStatus::all();
        return view('project_status.index', $data);
    }       

    public function set_session($id)
    {        
        session()->put('project_now', $id);  
        return redirect()->back();        
    } 

    public function requirement_create()
    {
        return view('requirement.create');
    }

    public function design_create()
    {
        $data['design_type'] = DesignTypeModel::all();
        return view('design.create', $data);
    } 

    public function project_create()
    {        
        return view('project.create');
    } 

    public function project_status_create()
    {        
        return view('project_status.create');
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
        $data['testing_document_type'] = TestingDocumentType::all();
        return view('testing.create', $data);
    }             

    public function design_type_create()
    {                
        return view('design_type.create');
    }             

    public function testing_document_type_create()
    {                
        return view('testing_document_type.create');
    } 

    public function server_information_create()
    {                
        return view('server_information.create');
    }    

    public function bast_create()
    {                
        return view('bast.create');
    }      
    
    public function transfer_knowledge_create()
    {                
        return view('transfer_knowledge.create');
    }  

    public function account_type_create()
    {                
        return view('account_type.create');
    } 

    public function account_create()
    {                
        $data['account_type'] = AccountTypeModel::all();        
        $data['environment'] = EnvironmentModel::all();        
        return view('account.create', $data);
    } 

    public function environment_create()
    {                
        $data['environment_create'] = EnvironmentModel::all();        
        return view('environment.create', $data);
    }

    public function mom_create()
    {                
        $data['mom_create'] = MomModel::all();        
        return view('mom.create', $data);
    }                          

    public function requirement_postcreate(Request $request)
    {
        $insert = new RequirementModel();
        $insert->id_project = session()->get('project_now');
        $insert->title = $request->title;
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

    public function project_status_postcreate(Request $request)
    {
        $insert = new ProjectStatus();        
        $insert->project_status_name = $request->project_status_name;        
        $insert->created_at = date('Y-m-d h:m:s');
        $insert->created_by = Auth::user()->email;
        $insert->save();

        return redirect()->route('project_status')->withMessage('Project Status Success Added!');
    }

    public function update_project_view($id)
    {        
        $data['project'] = ProjectModel::find($id);
        return view('project.edit', $data);
    }    

    public function update_project_status_view($id)
    {        
        $data['project_status'] = ProjectStatus::find($id);
        return view('project_status.edit', $data);
    }      

    public function update_project_postcreate(Request $request, $id)
    {        
        $update = ProjectModel::find($id);                    
        $update->due_date = $request->due_date;        
        $update->finish_date = $request->finish_date;
        $update->status = $request->project_status;
        $update->updated_at = date('Y-m-d h:m:s');
        $update->updated_by = Auth::user()->email;
        $update->update();

        return redirect()->route('project')->withMessage('Project Success Updated!');
    }  

    public function update_project_status_postcreate(Request $request, $id)
    {        
        $update = ProjectStatus::find($id);                    
        $update->project_status_name = $request->project_status_name;                
        $update->updated_at = date('Y-m-d h:m:s');
        $update->updated_by = Auth::user()->email;
        $update->update();

        return redirect()->route('project_status')->withMessage('Project Status Success Updated!');
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

    public function developer_postcreate(Request $request)
    {
        $insert = new DeveloperModel();                
        $insert->full_name = $request->full_name;    
        $insert->created_by = Auth::user()->email;
        $insert->created_at = date('Y-m-d h:m:s');
        $insert->save();

        return redirect()->route('developer')->withMessage('Developer Success Added!');
    }

    public function testing_postcreate(Request $request)
    {
        $insert = new TestingModel();        
        $insert->id_project = session()->get('project_now');
        $insert->id_testing_document_type = $request->testing_document_type;
        $insert->testing_name = $request->testing_name;
        $insert->url_testing = $request->testing_url;
        $insert->ket = $request->ket;        
        $insert->created_by = Auth::user()->email;
        $insert->created_at = date('Y-m-d h:m:s');
        $insert->save();

        return redirect()->route('testing')->withMessage('Testing Success Added!');
    }    

    public function design_type_postcreate(Request $request)
    {
        $insert = new DesignTypeModel();                
        $insert->design_type_name = $request->design_type_name;   
        $insert->created_by = Auth::user()->email;
        $insert->created_at = date('Y-m-d h:m:s');
        $insert->save();

        return redirect()->route('design_type')->withMessage('Design Type Success Added!');
    }    
   
    public function testing_document_type_postcreate(Request $request)
    {
        $insert = new TestingDocumentType();                
        $insert->document_code = $request->document_code;   
        $insert->document_type = $request->document_type;   
        $insert->created_by = Auth::user()->email;
        $insert->created_at = date('Y-m-d h:m:s');
        $insert->save();

        return redirect()->route('testing_document_type')->withMessage('Testing Dcument Type Success Added!');
    }                         

    public function server_information_postcreate(Request $request)
    {
        $insert = new ServerInformation();                
        $insert->id_project = session()->get('project_now'); 
        $insert->server_name = $request->server_name;   
        $insert->server_ip = $request->server_ip;   
        $insert->server_url = $request->server_url;   
        $insert->server_type = $request->server_type;   
        $insert->laravel_verison = $request->laravel_verison;   
        $insert->php_version = $request->php_version;   
        $insert->created_by = Auth::user()->email;
        $insert->created_at = date('Y-m-d h:m:s');
        $insert->save();

        return redirect()->route('server_information')->withMessage('Server Information Success Added!');
    }  

    public function bast_postcreate(Request $request)
    {
        $insert = new BastModel();                
        $insert->id_project = session()->get('project_now'); 
        $insert->bast_name = $request->bast_name;   
        $insert->bast_to = $request->bast_to;   
        $insert->bast_url = $request->bast_url;   
        $insert->created_by = Auth::user()->email;
        $insert->created_at = date('Y-m-d h:m:s');
        $insert->save();

        return redirect()->route('bast')->withMessage('Berita Acara Serah Terima Success Added!');
    }                         
       
    public function transfer_knowledge_postcreate(Request $request)
    {
        $insert = new TransferKnowledgeModel();                
        $insert->id_project = session()->get('project_now'); 
        $insert->tf_name = $request->tf_name;           
        $insert->tf_url = $request->tf_url;   
        $insert->created_by = Auth::user()->email;
        $insert->created_at = date('Y-m-d h:m:s');
        $insert->save();

        return redirect()->route('transfer_knowledge')->withMessage('Transfer Knowledge Success Added!');
    } 

    public function account_type_postcreate(Request $request)
    {
        $insert = new AccountTypeModel();                        
        $insert->account_type_name = $request->account_type_name;                   
        $insert->created_by = Auth::user()->email;
        $insert->created_at = date('Y-m-d h:m:s');
        $insert->save();

        return redirect()->route('account_type')->withMessage('Account Type Success Added!');
    } 

    public function environment_postcreate(Request $request)
    {
        $insert = new EnvironmentModel();                        
        $insert->environment_name = $request->environment_name;                   
        $insert->created_by = Auth::user()->email;
        $insert->created_at = date('Y-m-d h:m:s');
        $insert->save();

        return redirect()->route('environment')->withMessage('Environment Success Added!');
    } 

    public function mom_postcreate(Request $request)
    {
        $insert = new MomModel();    
        $insert->id_project = session()->get('project_now');                             
        $insert->mom_name = $request->mom_name;                   
        $insert->url_mom = $request->url_mom;                   
        $insert->created_by = Auth::user()->email;
        $insert->created_at = date('Y-m-d h:m:s');
        $insert->save();

        return redirect()->route('mom')->withMessage('Minutes Of Meeting Success Added!');
    }         

    public function account_postcreate(Request $request)
    {
        $insert = new AccountModel();   
        $insert->id_project = session()->get('project_now');                             
        $insert->id_environment = $request->id_environment;                   
        $insert->id_account_type = $request->id_account_type;                   
        $insert->link_url = $request->link_url;                   
        $insert->username = $request->username;                   
        $insert->password = $request->password;                   
        $insert->ket = $request->ket;                   
        $insert->created_by = Auth::user()->email;
        $insert->created_at = date('Y-m-d h:m:s');
        $insert->save();

        return redirect()->route('account')->withMessage('Account Success Added!');
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
    

    public function testing_document_type()
    {
        $data['testing_document_type'] = TestingDocumentType::all();
        return view('testing_document_type.index', $data);
    }

    public function server_information()
    {
        if (session()->get('project_now')) {
            $id = session()->get('project_now');        
            $data['server_information'] = ServerInformation::where('id_project', $id)->get();
        }

        return view('server_information.index', $data);
    }

    public function bast()
    {
        if (session()->get('project_now')) {
            $id = session()->get('project_now');        
            $data['bast'] = BastModel::where('id_project', $id)->get();
        }

        return view('bast.index', $data);
    }   

    public function transfer_knowledge()
    {
        if (session()->get('project_now')) {
            $id = session()->get('project_now');        
            $data['transfer_knowledge'] = TransferKnowledgeModel::where('id_project', $id)->get();
        }

        return view('transfer_knowledge.index', $data);
    } 

    public function account_type()
    {        
        $data['account_type'] = AccountTypeModel::all();

        return view('account_type.index', $data);
    }            

    public function account()
    {
        if (session()->get('project_now')) {
            $id = session()->get('project_now');        
            $data['account'] = AccountModel::select('account.*', 'account_type.account_type_name as account_type_name', 'environment.environment_name as environment_name')->join('account_type', 'account.id_account_type', '=', 'account_type.id')->join('environment', 'account.id_environment', '=', 'environment.id')->where('account.id_project', '=', $id)->get();
        }

        return view('account.index', $data);
    } 

    public function environment()
    {        
        $data['environment'] = EnvironmentModel::all();

        return view('environment.index', $data);
    }

    public function mom()
    {        
        $data['mom'] = MomModel::all();

        return view('mom.index', $data);
    }    
}