<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\ProjectProviders;
use App\Provider;
use Illuminate\Http\Request;
use \App\Project;
use Auth;
class ProvidersController extends Controller
{
    
    
    public function getAllProviders(Request $request){
        
        $provider= new Provider();
        $getAllProviders=[];
        if($request->has("search")){
            $getAllProviders=$provider->getAllProviders($request->get("search"));
        }
        return array("results"=>$getAllProviders);
    
    }
    
    public function addProviderProject(Request $request){
        $project= Project::find($request->get("project"));
        $message="";
        if($project->user_id==Auth::id()){
            $projectProvider= new ProjectProviders();
            $getProjectProviderByIds=$projectProvider->getProjectProviderByIds($request->get("project"), $request->get("id"));
            if(!$getProjectProviderByIds){
                $projectProvider->project_id=$request->get("project");
                $projectProvider->provider_id=$request->get("id");
                $projectProvider->save();
                $message="Se ha agregado con Éxito";

                return array("success"=>true,"message"=>$message);
            }else{
                $message="El proveedor ya esta vinculado con el proyecto";
            }      
        }else{
                $message="No tienes permiso para hacer esta acción";
        }
        return array("success"=>false,"message"=>$message);
    }
    
    public function deleteProviderProject(Request $request){
         $project= Project::find($request->get("project"));
        $message="";
        if($project->user_id==Auth::id()){
            $projectProvider= new ProjectProviders();
            $getProjectProviderByIds=$projectProvider->getProjectProviderByIds($request->get("project"), $request->get("id"));
            if($getProjectProviderByIds){
                $getProjectProviderByIds->delete();
                $message="Se ha borrado con Éxito";

                return array("success"=>true,"message"=>$message);
            }else{
                $message="El proveedor no esta vinculado al projecto";
            }      
        }else{
                $message="No tienes permiso para hacer esta acción";
        }
        return array("success"=>false,"message"=>$message);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $providers = Provider::where('name', 'LIKE', "%$keyword%")
                ->orWhere('nit', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->orWhere('phone', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('web', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $providers = Provider::latest()->paginate($perPage);
        }

        return view('admin.providers.index', compact('providers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.providers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'name' => 'required|max:10',
			'nit' => 'required|max:10'
		]);
        $requestData = $request->all();
                if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')
                ->store('uploads', 'public');
        }

        Provider::create($requestData);

        return redirect('admin/providers')->with('flash_message', 'Provider added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $provider = Provider::findOrFail($id);

        return view('admin.providers.show', compact('provider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $provider = Provider::findOrFail($id);
        return view('admin.providers.edit', compact('provider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'name' => 'required|max:10',
			'nit' => 'required|max:10'
		]);
        $requestData = $request->all();
                if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')
                ->store('uploads', 'public');
        }

        $provider = Provider::findOrFail($id);
        $provider->update($requestData);

        return redirect('admin/providers')->with('flash_message', 'Provider updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Provider::destroy($id);

        return redirect('admin/providers')->with('flash_message', 'Provider deleted!');
    }
}
