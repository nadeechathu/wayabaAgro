<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Frontend\CommentAPIClient;
use App\Models\APIModels\Comment;
use App\Models\APIModels\CommentReply;
use Auth;

class CommentController extends Controller
{
    public function addComments(Request $request){

        try{

            if($request->comment != null){

                $comment = new Comment;

                $comment->comment = $request->comment;
                $comment->user_id = Auth::user()->id;
                $comment->entity = Comment::POST;
                $comment->entity_id = $request->post_id;
                $comment->replies_allowed = 1;
                $comment->type = 0;


                $saved = Comment::create($comment->toArray());

                return back()->with('success','Your comment added successfully !');

           }else{

            return back()->with('error','Your comment cannot be empty !');
           }


        }catch(\Exception $exception){
            
            $error = $exception->getMessage().' - line - '.$exception->getLine();
            return view('frontend.errors.error_500',compact('error'));
        }
    }

    public function editComments(Request $request){

    
        try{

            if($request->comment != null){
 
                $comment = Comment::find($request->comment_id);

                if($comment != null){
    
                    $comment->comment = $request->comment;
                    $comment->is_approved = 0;
    
                    $comment->save();
    
                    return back()->with('success','Your comment updated successfully !');
    
                }else{
                    
                    return back()->with('error','Could not find the comment');
                }
            }else{
 
             return back()->with('error','Your comment cannot be empty !');
            }
 
 
         }catch(\Exception $exception){
             
             $error = $exception->getMessage().' - line - '.$exception->getLine();
             return view('frontend.errors.error_500',compact('error'));
         }
    
    }

    public function addCommentReplies(Request $request){

        try{

            if($request->reply != null){
 
                $comment = Comment::where('id',$request->comment_id)->update(['status' => 1]);

                if($comment != null){

                    $comment_reply = new CommentReply;

                    $comment_reply->comment_id = $request->comment_id;
                    $comment_reply->reply = $request->reply;
                    $comment_reply->user_id = $request->user_id;
                    
                    $savedReply = CommentReply::create($comment_reply->toArray());

                    if($savedReply){
                        Comment::where('id',$request->comment_id)->update(['status' => 1]);
                    }

                    return back()->with('success','Comment reply added successfully !');

                }else{

                    return back()->with('error','Could not find the comment');
                }  
            }else{
 
             return back()->with('error','Your reply cannot be empty !');
            }
 
 
         }catch(\Exception $exception){
             
             $error = $exception->getMessage().' - line - '.$exception->getLine();
             return view('frontend.errors.error_500',compact('error'));
         }
    }

    public function editCommentReplies(Request $request){

        try{

            if($request->reply != null){
 
                $commentReply = CommentReply::find($request->reply_id);

                if($commentReply != null){
    
                    $commentReply->reply = $request->updated_content;
    
                    $commentReply->save();
    
                    return back()->with('success','Comment reply updated successfully !');
    
                }else{
                    
                    return back()->with('error','Could not find the comment reply');
                }
            }else{
 
             return back()->with('error','Your reply cannot be empty !');
            }
 
 
         }catch(\Exception $exception){
             
             $error = $exception->getMessage().' - line - '.$exception->getLine();
             return view('frontend.errors.error_500',compact('error'));
         }
    }
}
