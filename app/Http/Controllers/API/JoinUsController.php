<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appliedartist;
use Illuminate\Support\Facades\Validator;

class JoinUsController extends Controller
{
        /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function crete_request(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email:rfc,dns',
            'name' => 'required|string|max:100',
            'phone' => ['required', 'regex:/^\+(?:[0-9] ?){6,14}[0-9]$/'],            ]);
                if($validator->errors()->count() > 0)
                {
                    return response()->json(['status'=>false,'errors'=>$validator->errors()->all()]);
                }

          $applied =  Appliedartist::create($request->only(['name','email','phone']));
          if($applied)
          {
            return response()->json(['status'=>true,'data'=>$applied]);

          }else{
            return response()->json(['status'=>false,'eroors'=>['wrong in saving data']]);

          }
    }
}
