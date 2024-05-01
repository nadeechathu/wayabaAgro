<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserInquiry;

class InquiryController extends Controller
{
    public function index(Request $request){

        $searchKey = $request->searchKey;

        $inquiries = UserInquiry::getInquiriesForFilters($searchKey);

        return view('admin.inquiry.all_inquiries',compact('inquiries','searchKey'));
    }

    public function replyInquiry(Request $request){
        
    }
}
