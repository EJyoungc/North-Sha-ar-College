<?php

namespace App\Http\Controllers;

use App\Models\IntakeCandidates;
use Illuminate\Http\Request;

class IntakeCandidatesController extends Controller
{
 
 
 
    public function approve(Request $request ,$id){
        $ic = IntakeCandidates::where('intake_id', $this->id)->first();
        if (!empty($ic)) {
            if ($ic->status == "") {
                $ic->status = "disapproved";
                $ic->save();
                $request->back();
                
            } elseif ($ic->status == "approved") {

                $ic->status = "disapproved";
                $ic->save();
                $request->back();
            } else {
                $ic->status = "approved";
                $ic->save();
                $request->back();
            }
        }
    }
 
    //
}
