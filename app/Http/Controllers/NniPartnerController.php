<?php

namespace App\Http\Controllers;

use App\Models\NniPartner;
use Illuminate\Http\Request;
use DataTables;

class NniPartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = NniPartner::latest()->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {

                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $data->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editProduct">Edit</a>';

                    $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $data->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct">Delete</a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('nni-partners.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        NniPartner::updateOrCreate(
            [
                'id' => $request->id
            ],
            [
                'partner_name' => $request->partner_name,
                'location' => $request->location,
                'site_id' => $request->site_id,
                'hostname_metro' => $request->hostname_metro,
                'ip_metro' => $request->ip_metro,
                'port_metro' => $request->port_metro,
                'hostname_switch' => $request->hostname_switch,
                'ip_switch' => $request->ip_switch,
                'port_switch' => $request->port_switch,
                'note' => $request->note,
            ]
        );

        return response()->json(['success' => 'Product saved successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NniPartner  $nniPartner
     * @return \Illuminate\Http\Response
     */
    public function show(NniPartner $nniPartner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NniPartner  $nniPartner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = NniPartner::find($id);
        return response()->json($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NniPartner  $nniPartner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NniPartner $nniPartner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NniPartner  $nniPartner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        NniPartner::find($id)->delete();

        return response()->json(['success' => 'Product deleted successfully.']);
    }
}
