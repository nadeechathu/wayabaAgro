<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PreOrder;
use App\Models\EmailSender;

class PreOrderController extends Controller
{
    

    public function submitPreOrder(Request $request)
    {
    
        try{        

                $validated = $request->validate([
                    'customer_name' => ['required', 'max:255'],
                    'phone_number' => ['required','digits:10'],
                    'email' => ['required', 'max:255'],
                    'quantity' => ['required'],
                
                ],);
            
                $preOrder = new PreOrder();
                $preOrder->product_id = $request->product_id;
                $preOrder->customer_name = $request->customer_name;
                $preOrder->phone_number = $request->phone_number;
                $preOrder->email = $request->email;
                $preOrder->quantity = $request->quantity;
                $preOrder->remark = $request->remark;
                $preOrder->variant_id = $request->varient_selector;
                $preOrder->status = 1;
            
                $preOrder->save();

                // send preorder customer and admin alerts

                EmailSender::sendPreorderAlerts($preOrder->id);
            
                return back()->with('success','Your preorder received successfully.');

        }catch(\Exception $exception){

            return back()->with('error',$exception->getMessage());
        }

    }
}
