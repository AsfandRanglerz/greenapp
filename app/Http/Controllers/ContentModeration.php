<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentModeration extends Controller
{
    public function add(Request $request)
    {
        $image = $request->image;
        $text = $request->text;
        $video = $request->video;

        $params = array(
            'text' => $text,
            'lang' => 'en',
            'opt_countries' => 'us,gb,fr',
            'mode' => 'rules',
            'api_user' => '1566047306',
            'api_secret' => '69zScMzTqptmASqFgMkxZFFSVTQQ6How',
          );

          // this example uses cURL
          $ch = curl_init('https://api.sightengine.com/1.0/text/check.json');
          curl_setopt($ch, CURLOPT_POST, true);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
          $response = curl_exec($ch);
          curl_close($ch);

          $output = json_decode($response, true);
          if (
            isset($output['profanity']['matches']) &&
            !empty($output['profanity']['matches']) &&
            $output['profanity']['matches'][0]['type'] == "sexual" ||
            $output['profanity']['matches'][0]['type'] == "inappropriate" ||
            $output['profanity']['matches'][0]['type'] == "insult" ||
            $output['profanity']['matches'][0]['type'] == "discriminatory" ||
            $output['profanity']['matches'][0]['type'] == "grawlix"
        ) {
            return response()->json([
                'status' => 'failed',
                'message' => 'You are entering wrong text',
            ], 400);
        }
        else
        {
            return response()->json([
                'status' => 'success',
                'message' => 'You enter correct data.',
            ], 400);
        }
    }
}
