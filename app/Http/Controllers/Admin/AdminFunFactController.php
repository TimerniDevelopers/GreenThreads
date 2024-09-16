<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FunFact;
use App\Models\FunFactElement;
use App\Models\FlatIcon;

class AdminFunFactController extends Controller
{
    public function index()
    {
        $fun_facts = FunFact::where('id',1)->first();
        $fun_fact_elements = FunFactElement::get();
        $icons = FlatIcon::orderBy('icon_code','asc')->get();
        return view('admin.fun_fact.index', compact('fun_facts', 'fun_fact_elements', 'icons'));
    }

    public function update(Request $request)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $obj = FunFact::where('id',1)->first();
        $obj->subheading = $request->subheading;
        $obj->heading = $request->heading;
        $obj->text = $request->text;
        $obj->save();

        return redirect()->back()->with('success', __('Data is updated successfully'));
    }

    public function element_submit(Request $request)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $request->validate([
            'number' => 'required',
            'name' => 'required',
        ], [
            'number.required' => __('Number is required'),
            'name.required' => __('Name is required'),
        ]);

        $obj = new FunFactElement();

        if ($request->coustomize_icon != null) {
            // Check if there is an existing file
            if ($obj->coustomize_icon) {
                // Use public_path() to get the local file system path
                $filePath = public_path('uploads/' . $obj->coustomize_icon);

                // Check if the file exists before trying to delete it
                if (file_exists($filePath)) {
                    unlink($filePath);  // Delete the existing file
                }
            }

            // Save the new file
            $final_name1 = 'coustomize_icon_oneitem_' . time() . '.' . $request->coustomize_icon->extension();
            $request->coustomize_icon->move(public_path('uploads'), $final_name1);
            $obj->coustomize_icon = $final_name1;
        }

        $obj->icon = $request->icon;
        $obj->number = $request->number;
        $obj->name = $request->name;
        $obj->save();

        return redirect()->back()->with('success', __('Data is added successfully'));
    }

    public function element_update(Request $request,$id)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $request->validate([
            'number' => 'required',
            'name' => 'required',
        ] , [
            'number.required' => __('Number is required'),
            'name.required' => __('Name is required'),
        ]);

        $obj = FunFactElement::where('id',$id)->first();
        if ($request->coustomize_icon != null) {
            // Check if there is an existing file
            if ($obj->coustomize_icon) {
                // Use public_path() to get the local file system path
                $filePath = public_path('uploads/' . $obj->coustomize_icon);

                // Check if the file exists before trying to delete it
                if (file_exists($filePath)) {
                    unlink($filePath);  // Delete the existing file
                }
            }

            // Save the new file
            $final_name1 = 'coustomize_icon_oneitem_' . time() . '.' . $request->coustomize_icon->extension();
            $request->coustomize_icon->move(public_path('uploads'), $final_name1);
            $obj->coustomize_icon = $final_name1;
        }
        $obj->icon = $request->icon;
        $obj->number = $request->number;
        $obj->name = $request->name;
        $obj->save();

        return redirect()->back()->with('success', __('Data is updated successfully'));
    }

    public function element_delete(Request $request,$id)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $obj = FunFactElement::where('id',$id)->first();
        $obj->delete();

        return redirect()->back()->with('success', __('Data is deleted successfully'));
    }
}
