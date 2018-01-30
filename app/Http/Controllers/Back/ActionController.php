<?php

namespace App\Http\Controllers\Back;


use App\ {
    Http\Controllers\Controller,
    Http\Requests\Request as Request,
    Models\Action
};

class ActionController extends Controller
{
    /**
     * Display list of models
     */
    public function index()
    {
        $actions = Action::all();

        return view('back.actions.index', compact('actions'));
    }



    /**
     * Show the form for creating a new model.
     */
    public function create()
    {
        return view('back.actions.create');
    }

    /**
     * Create a new model
     * @param Request $request
     * @return
     */
    public function store(Request $request)
    {
        $action = Action::create($request->all());

        $img = $request->file('image');
        $img_ex = $img->getClientOriginalExtension();

        $image = $action->images()->create([]);
        $image->setImage($img, 'img_src', $img_ex);
        $image->save;

        return view('back.actions.index')->with('action-ok', __('The action has been successfully created'));
    }


    /**
     * Show the form for editing the specified model.
     *
     * @param  \App\Models\Action $action
     * @return \Illuminate\Http\Response
     */
    public function edit(Action $action)
    {
        return view('back.actions.edit', compact('action'));
    }

    /**
     * Update the specified model in storage.
     *
     * @param  \App\Http\Requests\Request $request
     * @param  \App\Models\Action $action
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Action $action)
    {
        $action->update($request->all());

        return redirect(route('actions.index'))->with('action-ok', __('The action has been successfully updated'));
    }

    /**
     * Remove the specified categorie from storage.
     *
     * @param  \App\Models\Action $action
     * @return \Illuminate\Http\Response
     */
    public function destroy(Action $action)
    {
        foreach ($action->images() as $image){
            $image->deleteImage($image->img_src);
            $image->delete();
        }

        $action->delete();

        return response()->json();
    }
}
