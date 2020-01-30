<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Survey;
use App\SurveyQuestion;
use Illuminate\Http\Request;
use \App\Question;
use Auth;

class SurveysController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request) {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $surveys = Survey::where('title', 'LIKE', "%$keyword%")
                            ->orWhere('start_end_question', 'LIKE', "%$keyword%")
                            ->orWhere('question', 'LIKE', "%$keyword%")
                            ->orWhere('type_question', 'LIKE', "%$keyword%")
                            ->latest()->paginate($perPage);
        } else {
            $surveys = Survey::latest()->paginate($perPage);
        }

        return view('admin.surveys.index', compact('surveys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        return view('admin.surveys.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request) {
        $this->validate($request, [
            'title' => 'required|max:10',
        ]);
        $requestData = $request->all();
        $requestData["user_id"] = Auth::id();

        Survey::create($requestData);

        return redirect('admin/surveys')->with('flash_message', 'Survey added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id) {
        $survey = Survey::findOrFail($id);

        return view('admin.surveys.show', compact('survey'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id) {
        $surveyModel = new Survey();
        
        $survey=$surveyModel->getSurveyByIds($id);

        return view('admin.surveys.edit', compact('survey'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id) {
        $this->validate($request, [
            'title' => 'required|max:10',
        ]);
        $requestData = $request->all();
        $requestData["user_id"] = Auth::id();
        $survey = Survey::findOrFail($id);
        $survey->update($requestData);

        return redirect('admin/surveys')->with('flash_message', 'Survey updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id) {
        Survey::destroy($id);

        return redirect('admin/surveys')->with('flash_message', 'Survey deleted!');
    }

    
        public function deleteQuestionSurvey(Request $request) {


        $survey = Survey::find($request->get("survey"));
        $message = "";
        if ($survey->user_id == Auth::id()) {
            $SurveyQuestion = new SurveyQuestion();
            $getSurveyQuestionByIds = $SurveyQuestion->getSurveyQuestionByIds($request->get("survey"), $request->get("id"));


            if ($getSurveyQuestionByIds) {

                $getSurveyQuestionByIds->delete();
                  $message="Se ha borrado la pregunta";
                return array("success" => true, "message" => $message);
            } else {
                $message = "Hay un problema borrando la pregunta";
            }
        } else {
            $message = "No tienes permiso para hacer esta acción";
        }
        return array("success" => false, "message" => $message);

    }
    
    
    public function addQuestionSurvey(Request $request) {


        $survey = Survey::find($request->get("survey"));
        $message = "";

        if ($survey->user_id == Auth::id()) {

            $SurveyQuestion = new SurveyQuestion();
            $getSurveyQuestionByIds = $SurveyQuestion->getSurveyQuestionByIds($request->get("survey"), $request->get("id"));


            if (!$getSurveyQuestionByIds) {

                $SurveyQuestion->survey_id = $request->get("survey");
                $SurveyQuestion->user_id = Auth::id();
                $SurveyQuestion->text = $request->get("id");
                $SurveyQuestion->save();
                $message = "Se ha creado con Éxito";

                return array("success" => true, "message" => $message);
            } else {
                $message = "El proveedor no esta vinculado al projecto";
            }
        } else {
            $message = "No tienes permiso para hacer esta acción";
        }
        return array("success" => false, "message" => $message);

    }

}
