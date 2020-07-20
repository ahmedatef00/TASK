<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Page;
use Illuminate\Http\Request;
use App\Setting;

class SettingController extends Controller
{
    public function edit()
    {
        $setting = Setting::first();
        $pages = Page::select('id', 'feature', 'show')->get();

        return view('dashboard.settings.edit', compact(['setting', 'pages']));
    } // end of edit

    public function update(Request $request, $id)
    {

        $selectedElements = $request->show;
        $pages = Page::select('id', 'show')->get();

        foreach ($pages as $key => $page) {

            // check if there is no elements to show
            if ($selectedElements) {
                // check if the element is selected
                if (in_array($page->id, $selectedElements)) {
                    $page->update(['show' => 1]);
                } else {
                    $page->update(['show' => 0]);
                }
            } else {
                $page->update(['show' => 0]);
            }
        } // end of update menu foreach


        $data =  $request->validate([
            'site_name' => 'required|string|max:50'
        ]);

        // update site name
        Setting::where('id', $id)->update($data);
        session()->flash('status', 'Settings updated successfully!');
        return redirect('/dashboard/home');
    } // end of edit


}
