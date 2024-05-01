<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Models\CommentReply;
use App\Http\Controllers\Controller;
use Auth;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function allPostComments(Request $request){

        $hasPermission = Auth::user()->hasPermission('view_comments');

        if($hasPermission){

                
            $searchKey = $request->searchKey;
            $comments = Comment::getAllCommentsForFilters($searchKey);

            return view('admin.comments.all_comments',compact('searchKey','comments'));

        }else{

            return redirect('admin/not_allowed');

        }

    }

    public function addPostComment(Request $request){

        $hasPermission = Auth::user()->hasPermission('add_comments');

        if($hasPermission){

            try{           
                $comment = new Comment;
    
                $comment->comment = $request->new_comment;
                $comment->user_id = Auth::user()->id;
                $comment->entity = Comment::POST;
                $comment->entity_id = $request->post_id;
                $comment->replies_allowed = 1;
                $comment->type = 0;
    
                $saved = Comment::create($comment->toArray());
    
                return back()->with('success','Comment saved successfully !');
    
            }catch(\Exception $exception){
                return back()->with('error', 'Error occured - '.$exception->getMessage());
            }

        }else{

            return redirect('admin/not_allowed');

        }
        
    }

    public function approveComment($id){

        $hasPermission = Auth::user()->hasPermission('approve_comments');

        if($hasPermission){
            
            try{

                $comment = Comment::getCommentForId($id);

                if($comment != null){

                    $comment->is_approved = 1;
                    $comment->save();

                    return back()->with('success','Comment approved successfully !');

                }else{
                    return back()->with('error','Could not find the comment !');
                }

            }catch(\Exception $exception){
                return back()->with('error','Error occured - '.$exception->getMessage());
            }

        }else{

            return redirect('admin/not_allowed');

        }

    }


    public function commentsForPost($id){

        $hasPermission = Auth::user()->hasPermission('view_comments');

        if($hasPermission){

            $post = Post::where('id',$id)->get()->first();

            $comments = Comment::getCommentsForPost($id);
    
            return view('admin.comments.comments_for_item',compact('post','comments'));

        }else{

            return redirect('admin/not_allowed');

        }
       
    }

    public function replyForComment(Request $request){

        $hasPermission = Auth::user()->hasPermission('reply_comments');

        if($hasPermission){

            
            try{

                $comment_reply = new CommentReply;

                $comment_reply->comment_id = $request->comment_id;
                $comment_reply->reply = $request->reply;
                $comment_reply->user_id = Auth::user()->id;
                
                $saved = CommentReply::create($comment_reply->toArray());

                if($saved){
                    $comment = Comment::where('id',$request->comment_id)->update(['status' => 1]);
                }

                return back()->with('success','Reply added successfully !');

            }catch(\Exception $exception){

                return back()->with('error','Error occured - '.$exception->getMessage());

            }

        }else{

            return redirect('admin/not_allowed');

        }



    }

    public function deleteComment($id){

        $hasPermission = Auth::user()->hasPermission('delete_comments');

        if($hasPermission){

            try{

                // deleting commment replies and comment
                CommentReply::where('comment_id',$id)->delete();
                $commentDeleted = Comment::where('id',$id)->delete();
    
                if($commentDeleted){
                    return back()->with('success','Comment deleted successfully from the post !');
                }else{
                    return back()->with('error','Comment deletion failed.');
                }
    
    
            }catch(\Exception $exception){
    
                return back()->with('error','Error occured - '.$exception->getMessage());
            }

        }else{

            return redirect('admin/not_allowed');

        }
        
    }

    public function changeCommentStatus($id){

        $hasPermission = Auth::user()->hasPermission('comment_status_change');

        if($hasPermission){
            
            try{
            
                $comment = Comment::getCommentForId($id);

                if($comment != null){

                    $msg = '';

                    if($comment->show == 0){

                        $comment->show = Comment::SHOW;

                        $msg = "Comment status updated to show status.";

                    }else{
                        $comment->show = Comment::NO_SHOW;

                        $msg = "Comment status updated to no show status.";
                    }

                    $comment->save();

                    return back()->with('success',$msg);

                }else{
                    return back()->with('error','Could not find the comment.');
                }

            }catch(\Exception $exception){

                return back()->with('error','Error occured - '.$exception->getMessage());
            }

        }else{

            return redirect('admin/not_allowed');

        }

    }

    public function editComment(Request $request){

        $hasPermission = Auth::user()->hasPermission('edit_comments');

        if($hasPermission){
            
            try{

                $comment = Comment::getCommentForId($request->comment_id);

                if($comment != null){

                    $comment->comment = $request->updatedContent;
                    $comment->is_approved = 0;

                    $comment->save();

                    return back()->with('success','Comment updated successfully !');

                }else{
                    return back()->with('error','Could not find the comment to update');
                }

            }catch(\Exception $exception){
                return back()->with('error','Error occured - '.$exception->getMessage());
            }

        }else{

            return redirect('admin/not_allowed');

        }

    }
}
