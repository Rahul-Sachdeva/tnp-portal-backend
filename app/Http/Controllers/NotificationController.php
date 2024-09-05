<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        return Notification::all();
    }

    public function show(Notification $notification)
    {
        return $notification;
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'message' => 'required|string',
            'is_read' => 'boolean',
        ]);

        $notification = Notification::create($validated);

        return response()->json($notification, 201);
    }

    public function update(Request $request, Notification $notification)
    {
        $validated = $request->validate([
            'user_id' => 'sometimes|exists:users,id',
            'message' => 'sometimes|string',
            'is_read' => 'sometimes|boolean',
        ]);

        $notification->update($validated);

        return response()->json($notification);
    }

    public function destroy(Notification $notification)
    {
        $notification->delete();
        return response()->json(null, 204);
    }
}
