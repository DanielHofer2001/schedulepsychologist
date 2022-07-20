<?php

namespace App\Http\Controllers;

use App\Models\HorasAdmin;
use Illuminate\Http\Request;

/**
 * Class HorasAdminController
 * @package App\Http\Controllers
 */
class HorasAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horasAdmins = HorasAdmin::paginate();

        return view('horas-admin.index', compact('horasAdmins'))
            ->with('i', (request()->input('page', 1) - 1) * $horasAdmins->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $horasAdmin = new HorasAdmin();
        return view('horas-admin.create', compact('horasAdmin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(HorasAdmin::$rules);

        $horasAdmin = HorasAdmin::create($request->all());

        return redirect()->route('horas-admins.index')
            ->with('success', 'HorasAdmin created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $horasAdmin = HorasAdmin::find($id);

        return view('horas-admin.show', compact('horasAdmin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $horasAdmin = HorasAdmin::find($id);

        return view('horas-admin.edit', compact('horasAdmin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  HorasAdmin $horasAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HorasAdmin $horasAdmin)
    {
        request()->validate(HorasAdmin::$rules);

        $horasAdmin->update($request->all());

        return redirect()->route('horas-admins.index')
            ->with('success', 'HorasAdmin updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $horasAdmin = HorasAdmin::find($id)->delete();

        return redirect()->route('horas-admins.index')
            ->with('success', 'HorasAdmin deleted successfully');
    }
}
