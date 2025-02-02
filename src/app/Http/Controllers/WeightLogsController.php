<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\WeightLogs;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;

class WeightLogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Auth::id();
        // $weightLogs = User::find($userId)->weightLogs()->get();
        // $weightLogs = User::find($userId)->weightLogs()->orderBy('date', 'desc')->get();
        $weightLogs = User::find($userId)->weightLogs()->orderBy('date', 'desc')->paginate(8);

        $maxDate = User::find($userId)->weightLogs()->max('date');
        $recentWeight = User::find($userId)->weightLogs()->where('date', $maxDate)->first()->weight;
        $targetWeight = User::find($userId)->weightTarget()->first()->target_weight;
        $weightDiff = $recentWeight - $targetWeight;

        $weightInf = [
            'targetWeight' => $targetWeight,
            'weightDiff' => $weightDiff,
            'recentWeight' => $recentWeight
        ];

        return view('index', compact('weightLogs', 'weightInf'));
    }

    public function search(Request $request)
    {
        // dd($request);
        $startDate = $request->start_date;
        $endDate = $request->end_date;

        $userId = Auth::id();
        $weightLogs = User::find($userId)->weightLogs();
        // if(!empty($startDate)){
        //     $weightLogs = $weightLogs->where('date', '>=', $startDate);
        // }
        // if(!empty($endDate)){
        //     $weightLogs = $weightLogs->where('date', '<=', $endDate);
        // }
        $weightLogs = $this->searchApply($request, $weightLogs);
        $weightLogs = $weightLogs->orderBy('date', 'desc')->paginate(8);

        // dd(count($weightLogs->get()));
        // dd($recentWeight = $weightLogs->first()->weight);
        // dd($weightLogs->max('date'));
        // $maxDate = User::find($userId)->weightLogs()->max('date');
        $maxDate = User::find($userId)->weightLogs();
        $maxDate = $this->searchApply($request, $maxDate)->max('date');
        $recentWeight = User::find($userId)->weightLogs()->where('date', $maxDate)->first()->weight;
        $targetWeight = User::find($userId)->weightTarget()->first()->target_weight;
        $weightDiff = $recentWeight - $targetWeight;

        $weightInf = [
            'targetWeight' => $targetWeight,
            'weightDiff' => $weightDiff,
            'recentWeight' => $recentWeight
        ];

        $result = '';
        if(!(empty($startDate) && empty($endDate))) {
            if(!empty($startDate)){
                $result .= substr($startDate, 0, 4) .'年' . substr($startDate, 5, 2) .'月' . substr($startDate, 8, 2) .'日';
            }
            $result .= '～';
            if(!empty($endDate)){
                $result .= substr($endDate, 0, 4) .'年' . substr($endDate, 5, 2) .'月' . substr($endDate, 8, 2) .'日';
            }
            $result .= 'の検索結果　' . $weightLogs->total() . '件';
        }

        return view('index', compact('weightLogs', 'request', 'weightInf', 'result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function searchApply($request, $logs)
    {
        $startDate = $request->start_date;
        $endDate = $request->end_date;

        if(!empty($startDate)){
            $logs = $logs->where('date', '>=', $startDate);
        }
        if(!empty($endDate)){
            $logs = $logs->where('date', '<=', $endDate);
        }

        return $logs;
    }
}
