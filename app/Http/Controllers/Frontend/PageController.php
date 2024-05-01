<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Frontend\PageAPIClient;
use App\Models\APIModels\Page;
use App\Models\Post;
use App\Models\Album;
use App\Models\UserInquiry;
use App\Models\EmailSender;
use App\Models\RecaptchaChecker;
use Validator;

class PageController extends Controller
{
    public function getPageForSlug($slug){


        try{

            $page = Page::getAllPageForSlug($slug);

            if($page){


                $metaContent = $page->pageMetaData;

                return view('frontend.pages.dynamic_pages',compact('page','metaContent'));

            }else{

                $response = response()->json([
                    'status' => 'failed',
                    'message' => 'could not find the page for slug - '.$slug,
                    'payload' => null
                ]);

            }



        }catch(\Exception $exception){

            $error = $exception->getMessage().' - line - '.$exception->getLine();
            return view('frontend.errors.error_500',compact('error'));

        }

    }

    public function loadContactUs()
    {
 

    
        return view('frontend.pages.contact_us');
    }
 public function loadContactSubmit(Request $request){
         
        $request->validate([
            'first_name'=>'required | max:255 | string',
            'last_name'=>'required | max:255 | string',
            'inquiry_email'=>'required | email',
            'inquiry_phone'=>'required | numeric | digits:10',
            'inquiry_message'=>'required',
            'g-recaptcha-response' => 'required'
        ],
        [
            'first_name.required'=>'Your Firstname is required',
            'last_name.required'=>'Your Lastname is required',
            'inquiry_email.regex'=>'Please enter correct email format',
            'inquiry_phone.required'=>'Your Phonenumber is required',
            'inquiry_message.required'=>'Your message is required', 
            "g-recaptcha-response.required" => "Please mark reCAPTCHA security checks and try again"
        ]);

        $input = $request->all();

        $recaptchaCheckResponse = RecaptchaChecker::checkRecaptchaVaidity($input['g-recaptcha-response']);

        if(!$recaptchaCheckResponse['success']){

            return back()->with('error','Please mark the recaptcha security checks');
        } 

        $inquiry = new UserInquiry;

        $inquiry->name = $request->first_name.' '.$request->last_name;
        $inquiry->email = $request->inquiry_email;
        $inquiry->phone = $request->inquiry_phone;
        $inquiry->message = $request->inquiry_message;

        $savedInquiry = UserInquiry::create($inquiry->toArray());

        //send email
        EmailSender::sendUserInquryEmail($savedInquiry->id);
        
        return back()->with('success','Your inquiry submitted successfully !');

       
    }
//Get in Touch
public function loadGetinTouch(Request $request){
    

    $validator = Validator::make($request->all(), [

        'Inquiry_name'=>'required | max:255 | string',
        'Inquiry_email'=>'required | email',
        'Inquiry_phone'=>'required | numeric | digits:10',
        'Inquiry_message'=>'required',
        'g-recaptcha-response' => 'required'

    ],
    [
        'Inquiry_name'=>'Your Name is required',
        'Inquiry_email.regex'=>'Please enter correct email format',
        'Inquiry_phone.required'=>'Your Phonenumber is required',
        'Inquiry_message.required'=>'Your message is required', 
        "g-recaptcha-response.required" => "Please mark reCAPTCHA security checks and try again"
    ]);

    // Check validation failure
    $input = $request->all();
    
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput($input);
     }

    $recaptchaCheckResponse = RecaptchaChecker::checkRecaptchaVaidity($input['g-recaptcha-response']);

    if(!$recaptchaCheckResponse['success']){

        return redirect('/#home-contact')->with('error','Please mark the recaptcha security checks');
    } 

    
         
    $inquiry = new UserInquiry;

        $inquiry->name = $request->Inquiry_name;
        $inquiry->email = $request->Inquiry_email;
        $inquiry->phone = $request->Inquiry_phone;
        $inquiry->message = $request->Inquiry_message;
        
        $savedInquiry = UserInquiry::create($inquiry->toArray());

     

        //send email
        EmailSender::sendUserInquryEmail($savedInquiry->id);
        
        return redirect('/#home-contact')->with('success','Your inqiury submitted successfully !');

   
               
}



    public function loadBlog()
    {
       
        $blogs = Post::with('blogImage','user')->where('status',1)->where('type','post')->get();
        // dd($blogs);
        return view('frontend.pages.blog.blog_archive',compact('blogs'));
    }


    public function loadBlogSingle($slug)
    {
 
        $blog = Post::with('blogImage')->where('slug',$slug)->get()->first();
        
        $resentPosts = Post::with('blogImage' )
            
        ->where('status',1)
       
        ->whereNotIn('id',[$blog->id])
        ->limit(8)->get();
        
      
        return view('frontend.pages.blog.blog_single',compact('blog','resentPosts'));
    }
    public function loadAboutUs()
    {
 

        
        return view('frontend.pages.About_Us.about_us');
    }
   
}
