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
    }

    public function update(Request $request, $id)
    {

        $show = $request->show;
        $pages = Page::select('id', 'show')->get();

        foreach ($pages as $key => $page) {

            // check if there is no page to show
            if ($show) {
                // check if the page is selected
                if (in_array($page->id, $show)) {
                    $page->update(['show' => 1]);
                } else {
                    $page->update(['show' => 0]);
                }
            } else {
                $page->update(['show' => 0]);
            }
        }


        $data =  $request->validate([
            'site_name' => 'required|string|max:50',
            'site_menu' => 'required|string|max:50'
        ]);

        // update site name/menue 
        Setting::where('id', $id)->update($data);
        session()->flash('status', 'Settings updated successfully!');
        return redirect('/dashboard/home');
    }
}
