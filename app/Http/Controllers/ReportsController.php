<?php

namespace App\Http\Controllers;

use App\Report;
use App\User;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\ReportRequest;

class ReportsController extends Controller
{
    public function create()
    {
        return view('reports.create');
    }

    public function store(ReportRequest $request)
    {
        $report = new Report();

        $report->user_id = Auth::id();
        $report->feeling = $request->feeling;
        $report->note = $request->note;
        $report->save();

        return redirect()->route('reports.show', Auth::id());
    }

    public function show(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $report_data = Report::all();

        return view('reports.show', compact('user', 'report_data'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        
        if (Auth::id() == $user->id){
            return view('reports.edit', compact('user'));
        }
    }
}
