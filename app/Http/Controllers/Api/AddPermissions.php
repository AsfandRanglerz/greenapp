<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;


class AddPermissions extends Controller
{
    public function add_permission(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required',
            'guard_name' => 'required',
        ]);
        $data = Permission::create([
            'name' => $request->name,
            'guard_name' => $request->guard_name,
        ]);
        if($data)
        {
            return response()->json([
                'message'=>'permission added successfully.',
                'status'=>'success.',
                'data'=>$data,
            ],200);
        }
        else
        {
            return response()->json([
                'message'=>'permission not added.',
                'status'=>'failed.',
            ],200);
        }
    }

    public function update_permission(Request $request ,$id)
    {
        $validator = $request->validate([
            'name' => 'required',
            'guard_name' => 'required',
        ]);
        $permission = Permission::find($id);
        $permission->update([
            'name' => $request->name,
            'guard_name' => $request->guard_name,
        ]);
        if($permission)
        {
            return response()->json([
                'message'=>'permission updated successfully.',
                'status'=>'success.',
                'data'=>$permission,
            ],200);
        }
        else
        {
            return response()->json([
                'message'=>'permission not added.',
                'status'=>'failed.',
            ],200);
        }
    }


    // public function add(Request $request)
    // {
    //             //  $imageUrl = NULL;
    //             $video = $request->video;
    //             // return $image;
    //             if($request->input('text'))
    //             {
    //                 // return "ok";
    //                 $text = $request->input('text');
    //                 $params = array(
    //                     'text' => $text,
    //                     'lang' => 'en',
    //                     'opt_countries' => 'us,gb,fr',
    //                     'mode' => 'rules',
    //                     'api_user' => '1566047306',
    //                     'api_secret' => '69zScMzTqptmASqFgMkxZFFSVTQQ6How',
    //                 );

    //                 // this example uses cURL
    //                 $ch = curl_init('https://api.sightengine.com/1.0/text/check.json');
    //                 curl_setopt($ch, CURLOPT_POST, true);
    //                 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //                 curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
    //                 $response = curl_exec($ch);
    //                 curl_close($ch);

    //                 $output = json_decode($response, true);
    //                 if (
    //                     isset($output['profanity']['matches']) &&
    //                     !empty($output['profanity']['matches']) &&
    //                     isset($output['profanity']['matches'][0]['type']) &&
    //                     (
    //                         $output['profanity']['matches'][0]['type'] == "sexual" ||
    //                         $output['profanity']['matches'][0]['type'] == "inappropriate" ||
    //                         $output['profanity']['matches'][0]['type'] == "insult" ||
    //                         $output['profanity']['matches'][0]['type'] == "discriminatory" ||
    //                         $output['profanity']['matches'][0]['type'] == "grawlix"
    //                     )
    //                 ) {
    //                     return response()->json([
    //                         'status' => 'failed',
    //                         'message' => 'You are entering wrong text',
    //                     ], 400);
    //                 }
    //                 else
    //                 {
    //                     return response()->json([
    //                         'status' => 'success',
    //                         'message' => 'You enter correct data.',
    //                     ], 400);
    //                 }

    //             }
    //             elseif($request->file('image'))
    //             {
    //                 // return "ok";
    //                 $file = $request->file('image');
    //                 $extension = $file->getClientOriginalExtension();
    //                 $filename = time() . '.' . $extension;
    //                 $file->move('public/admin/assets/img/users', $filename);
    //                 $file = 'public/admin/assets/img/users/' . $filename;
    //                 $imageUrl = asset($file);
    //                 $params = array(
    //                     'url' =>$imageUrl,
    //                     'models' => 'nudity-2.0',
    //                     'api_user' => '1529854875',
    //                     'api_secret' => '8MZDnotW9fMGn49FHWk8gqJw2nnf5RkU',
    //                   );
    //                   $ch = curl_init('https://api.sightengine.com/1.0/check.json?'.http_build_query($params));
    //                   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //                   $response = curl_exec($ch);
    //                   curl_close($ch);
    //                   $output = json_decode($response, true);
    //                 //   return $output;
    //                 if (isset($output['nudity']['suggestive']) && $output['nudity']['suggestive'] > 0.01) {
    //                     return response()->json([
    //                         'status' => 'success',
    //                         'message' => 'You are entering an image with sexual content.',
    //                     ], 200);
    //                 }
    //                 else
    //                 {
    //                     return response()->json([
    //                         'status' => 'success',
    //                         'message' => 'You are entering correct image',
    //                     ], 200);
    //                 }
    //             }
    //             else
    //             {
    //                 $file = $request->file('video');
    //                 $extension = $file->getClientOriginalExtension();
    //                 $filename = time() . '.' . $extension;
    //                 $file->move('public/admin/assets/img/users', $filename);
    //                 $file = 'public/admin/assets/img/users/' . $filename;
    //                 $imageUrl = asset($file);
    //                 // return $imageUrl;
    //                 $params = array(
    //                     'media' => new \CurlFile($file),
    //                     // 'media' => new \CurlFile('https://www.youtube.com/shorts/KyhZP9AiHw4'),
    //                     // specify the models you want to apply
    //                     'models' => 'nudity-2.0',
    //                     'api_user' => '1529854875',
    //                     'api_secret' => '8MZDnotW9fMGn49FHWk8gqJw2nnf5RkU',
    //                   );

    //                   // this example uses cURL
    //                   $ch = curl_init('https://api.sightengine.com/1.0/video/check-sync.json');
    //                   curl_setopt($ch, CURLOPT_POST, true);
    //                   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //                   curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
    //                   $response = curl_exec($ch);
    //                   curl_close($ch);
    //                   $output = json_decode($response, true);
    //                 //   return $output;
    //                 // Check if 'frame' key exists and it is an array
    //                     // Check if 'frame' key exists and it is an array
    //                     if (isset($output['data']['frames']) && is_array($output['data']['frames'])) {
    //                         // Iterate through each frame
    //                         foreach ($output['data']['frames'] as $frame) {
    //                             // Check if the 'nudity' key exists in the frame
    //                             if (isset($frame['nudity']['suggestive']) && $frame['nudity']['suggestive'] > 0.01) {
    //                                 // If 'suggestive' value is greater than 0.01, return a sexual response
    //                                 return response()->json([
    //                                     'status' => 'success',
    //                                     'message' => 'You are entering sexual content in one or more frames.',
    //                                 ], 200);
    //                             }
    //                         }
    //                     }
    //                     // If no suggestive content is found in any frame
    //                     return response()->json([
    //                         'status' => 'success',
    //                         'message' => 'No sexual content detected.',
    //                     ], 200);

    //             }
    // }
}
