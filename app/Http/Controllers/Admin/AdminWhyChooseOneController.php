<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WhyChooseOneItem;
use App\Models\WhyChooseOneItemElement;
use App\Models\FlatIcon;

class AdminWhyChooseOneController extends Controller
{
    public function item()
    {
        $why_choose_one_items = WhyChooseOneItem::where('id',1)->first();
        $why_choose_one_item_elements = WhyChooseOneItemElement::get();
        $icons = FlatIcon::orderBy('icon_code','asc')->get();
        return view('admin.why_choose.one', compact('why_choose_one_items', 'why_choose_one_item_elements', 'icons'));
    }

    public function item_update(Request $request)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $obj = WhyChooseOneItem::where('id',1)->first();
        if($request->photo != null) {
            $request->validate([
                'photo' => 'mimes:jpg,jpeg,png,gif',
            ],[
                'photo.mimes' => __('Photo must be jpeg, png, jpg or gif'),
            ]);

            if($obj->photo!=null) {
                unlink(public_path('uploads/'.$obj->photo));
            }

            $final_name = 'why_choose_one_photo_'.time().'.'.$request->photo->extension();
            $request->photo->move(public_path('uploads'), $final_name);
            $obj->photo = $final_name;
        }
        $obj->heading = $request->heading;
        $obj->subheading = $request->subheading;
        $obj->text = $request->text;
        $obj->save();

        return redirect()->back()->with('success', __('Data is updated successfully'));
    }

    public function item_element_submit(Request $request)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $request->validate([
            'heading' => 'required',
        ], [
            'heading.required' => __('Heading is required'),
        ]);

        $obj = new WhyChooseOneItemElement();
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
        $obj->heading = $request->heading;
        $obj->save();

        return redirect()->back()->with('success', __('Data is added successfully'));
    }

    public function item_element_update(Request $request,$id)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $request->validate([
            'heading' => 'required',
        ], [
            'heading.required' => __('Heading is required'),
        ]);

        $obj = WhyChooseOneItemElement::where('id',$id)->first();
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
        $obj->heading = $request->heading;
        $obj->save();

        return redirect()->back()->with('success', __('Data is updated successfully'));
    }

    public function item_element_delete(Request $request,$id)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $obj = WhyChooseOneItemElement::where('id',$id)->first();
        $obj->delete();

        return redirect()->back()->with('success', __('Data is deleted successfully'));
    }
}
