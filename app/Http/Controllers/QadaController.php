<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QadaLog;
use Illuminate\Support\Facades\Auth;

class QadaController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        $qadas = QadaLog::where('user_id', $userId)->get();

        $pendingQadaCount = QadaLog::where('user_id', $userId)
            ->where('status', 'pending')
            ->count();

        $completedQadaCount = QadaLog::where('user_id', $userId)
            ->where('status', 'completed')
            ->count();

        $totalQadaCount = QadaLog::where('user_id', $userId)->count();

        return view('indexqada', compact(
            'qadas',
            'pendingQadaCount',
            'completedQadaCount',
            'totalQadaCount'
        ));
    }

    public function store(Request $request)
    {
        QadaLog::firstOrCreate([
            'user_id' => auth()->id(),
            'qada_date' => $date,
            'prayer_type' => $prayerName,
        ], [
            'status' => 'pending',
            'notes' => $prayerName
        ]);

        return redirect()->route('qada.index');
    }

    public function toggle($id)
    {
        $qada = QadaLog::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $qada->update([
            'status' => $qada->status === 'completed' ? 'pending' : 'completed'
        ]);

        return back();
    }
}