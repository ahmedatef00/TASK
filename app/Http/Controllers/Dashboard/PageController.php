<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Page;
use Illuminate\Validation\Rule;

class PageController extends Controller
{

    public function index()
    {
        $pages = Page::select('id', 'feature',)->latest()->paginate(5);
        return view('dashboard.pages.index', compact('pages'));
    } // end of index

    public function create()
    {
        return view('dashboard.pages.create');
    } // end of create

    public function store(Request $request)
    {
        $data = $request->validate([
            'feature' => 'required|string|min:5|max:50|unique:pages,feature',
            'content' => 'required|string|min:5|unique:pages,content',
        ]);

        Page::create($data);
        session()->flash('status', 'Page has been created successfully!');
        return redirect('dashboard/pages');
    } // end of store

    public function edit(Page $page)
    {
        return view('dashboard.pages.edit', compact('page'));
    } // end of edit

    public function update(Request $request, Page $page)
    {




        $data = $request->validate([
            'feature' => ['required', 'string', 'min:5', 'max:50', Rule::unique('pages', 'feature')->ignore($page->id, 'id')],
            'content' => 'required|string',
        ]);
        $page->feature = $request->feature;
        /**
         * remove any html tags 
         */
        $content = strip_tags($request->content);

        $page->content =  $content;

        $page->save();
        return redirect('dashboard/pages');
    }

    public function destroy(Page $page)
    {
        $page->delete();
        session()->flash('status', 'Page has been deleted successfully!');
        return redirect('dashboard/pages');
    } // end of destroy
}
