<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class NotificationHelper
{
    public static function admin_notification($fcmtoken, $title, $description, $notificationData = [])
    {
        // return    $notificationData;
        $response = Http::withHeaders([
            'Authorization' => 'key=AAAAMWE6ZJ8:APA91bEywjrM4M7tCC1gp5rigjeHjySlFK_gmhqkqeAzh1ohQyPrXR7Dr6cce7dfOisjG7fNPh75FUpICRO6LURqmP63c2UIkunloLDheW4UVv2cga9LajbTzYHTRjemwybEPVBcckxY',
            'Content-Type' => 'application/json',
        ])->post('https://fcm.googleapis.com/fcm/send', [
            'to' => $fcmtoken,
            'notification' => [
                'title' => $title,
                'body' => $description,
            ],
            'data' => $notificationData
        ]);
        if ($response->successful()) {
            return response()->json([
                'message' => 'Notifications Sent Successfully',
                'fcm' => $notificationData

            ], 200);
        } else {
            return response()->json(['error' => 'Notifications Send Unsuccessfully'], 400);
        }
    }
}
