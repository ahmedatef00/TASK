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
        $pages = Page::select('id', 'title', 'slug')->latest()->paginate(5);
        return view('dashboard.pages.index', compact('pages'));
    } // end of index

    public function create()
    {
        return view('dashboard.pages.create');
    } // end of create


    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|min:5|max:50|unique:pages,title',
            'content' => 'required|string',
        ]);

        $data['slug'] = str_replace(' ', '-', strtolower($data['title']));

        Page::create($data);
        session()->flash('status', 'Page has been created successfully!');
        return redirect(route('dashboard.pages.index'));
    } // end of store

    public function edit(Page $page)
    {
        return view('dashboard.pages.edit', compact('page'));
    } // end of edit

    public function update(Request $request, Page $page)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'min:5', 'max:50', Rule::unique('pages', 'title')->ignore($page->id, 'id')],
            'content' => 'required|string',
        ]);

        $data['slug'] = str_replace(' ', '-', strtolower($data['title']));

        $page->update($data);
        session()->flash('status', 'Page has been updated successfully!');
        return redirect(route('dashboard.pages.index'));
    } // end of update

    public function destroy(Page $page)
    {
        $page->delete();
        session()->flash('status', 'Page has been deleted successfully!');
        return redirect(route('dashboard.pages.index'));
    } // end of destroy
}
