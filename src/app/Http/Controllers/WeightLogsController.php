<?php

namespace App\Http\Controllers;

use App\Http\Requests\WeightLogRequest;
use App\Http\Requests\WeightLogRequest2;
use App\Http\Requests\WeightTargetRequest;
use App\Models\User;
use App\Models\WeightLogs;
use App\Models\WeightTarget;
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
        $weightLogs = User::find($userId)->weightLogs()->orderBy('date', 'desc')->paginate(8);

        $maxDate = User::find($userId)->weightLogs()->max('date');

        if(null != ($targetWeight = User::find($userId)->weightTarget()->first())){
            $targetWeight = $targetWeight->target_weight;
            if(isset($maxDate)){
                $recentWeight = User::find($userId)->weightLogs()->where('date', $maxDate)->first()->weight;
                $weightDiff = $recentWeight - $targetWeight;
            }else{
                $recentWeight = '―';
                $weightDiff = '―';
            }
        }else{
            $targetWeight = '―';
            $recentWeight = '―';
            $weightDiff = '―';
        }

        $weightInf = [
            'targetWeight' => $targetWeight,
            'weightDiff' => $weightDiff,
            'recentWeight' => $recentWeight
        ];

        return view('index', compact('weightLogs', 'weightInf'));
    }

    public function search(Request $request)
    {
        $startDate = $request->start_date;
        $endDate = $request->end_date;

        $userId = Auth::id();
        $weightLogs = User::find($userId)->weightLogs();
        $weightLogs = $this->searchApply($request, $weightLogs);
        $weightLogs = $weightLogs->orderBy('date', 'desc')->paginate(8);

        $maxDate = User::find($userId)->weightLogs();
        $maxDate = $this->searchApply($request, $maxDate)->max('date');

        $targetWeight = User::find($userId)->weightTarget()->first()->target_weight;

        if(isset($maxDate)){
            $recentWeight = User::find($userId)->weightLogs()->where('date', $maxDate)->first()->weight;
            $weightDiff = $recentWeight - $targetWeight;
        }else{
            $recentWeight = '―';
            $weightDiff = '―';
        }

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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WeightLogRequest $request)
    {
        WeightLogs::create([
            'user_id' => Auth::id(),
            'date' => $request->date,
            'weight' => $request->weight,
            'calories' => $request->calories,
            'exercise_time' => $request->exercise_time,
            'exercise_content' => $request->exercise_content
        ]);

        return redirect('/weight_logs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($weightLogId)
    {
        $weightLog = WeightLogs::find($weightLogId);

        $weightLog->exercise_time = substr($weightLog->exercise_time, 0, 5);

        return view('edit', compact('weightLog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WeightLogRequest2 $request, $weightLogId)
    {
        unset($request['_token']);
        $weightLog = WeightLogs::find($weightLogId)->update($request->all());
        return redirect('/weight_logs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($weightLogId)
    {
        WeightLogs::find($weightLogId)->delete();

        return redirect('/weight_logs');
    }

    public function targetEdit()
    {
        $userId = Auth::id();
        $weightTarget = WeightTarget::find($userId);

        return view('edit2', compact('weightTarget'));
    }

    public function targetUpdate(WeightTargetRequest $request)
    {
        $userId = Auth::id();
        WeightTarget::find($userId)->update(['target_weight' => $request->target_weight]);

        return redirect('/weight_logs');

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
