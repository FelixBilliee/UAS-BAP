<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\preorder;
use Illuminate\Http\Request;

class preorderController extends Controller
{
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
            $preorder = preorder::where('id_produk', 'LIKE', "%$keyword%")
                ->orWhere('id_po', 'LIKE', "%$keyword%")
                ->orWhere('tanggal_pembelian', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $preorder = preorder::latest()->paginate($perPage);
        }

        return view('admin.preorder.index', compact('preorder'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.preorder.create');
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
        
        $requestData = $request->all();
        
        preorder::create($requestData);

        return redirect('admin/preorder')->with('flash_message', 'preorder added!');
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
        $preorder = preorder::findOrFail($id);

        return view('admin.preorder.show', compact('preorder'));
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
        $preorder = preorder::findOrFail($id);

        return view('admin.preorder.edit', compact('preorder'));
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
        
        $requestData = $request->all();
        
        $preorder = preorder::findOrFail($id);
        $preorder->update($requestData);

        return redirect('admin/preorder')->with('flash_message', 'preorder updated!');
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
        preorder::destroy($id);

        return redirect('admin/preorder')->with('flash_message', 'preorder deleted!');
    }
}
