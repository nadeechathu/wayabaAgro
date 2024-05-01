<?php

namespace App\Http\Controllers\APIControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\APIModels\Comment;
use App\Models\APIModels\CommentReply;
use Log;

class CommentAPIController extends Controller
{
    public function addPostComment(Request $request){

        Log::channel('posts_api_log')->info("[Add Post Comment API] ====> Received request to add post comment  - request data == ".json_encode($request->all()));

        $response = response()->json([]);

        try{           
            $comment = new Comment;

            $comment->comment = $request->comment;
            $comment->user_id = $request->user_id;
            $comment->entity = Comment::POST;
            $comment->entity_id = $request->post_id;
            $comment->replies_allowed = 1;
            $comment->type = 0;

            $saved = Comment::create($comment->toArray());

            $response = response()->json([
                'status' => 'success',
                'message' => 'new comment added to post - '.$request->post_id,
                'payload' => $comment
            ]);

        }catch(\Exception $exception){

            Log::channel('posts_api_log')->info("[Add Post Comment API] ====>  Error occured when adding post comment == ".$exception->getMessage().' - line - '.$exception->getLine());
            
            $response = response()->json([
                'status' => 'failed',
                'message' => 'error occured',
                'payload' => $exception->getMessage().' - line - '.$exception->getLine()
            ]);
        }

        Log::channel('posts_api_log')->info("[Add Post Comment API] ====>  Returning response == ".json_encode($response));

        return $response;
    }

    public function replyForComment(Request $request){

        Log::channel('posts_api_log')->info("[Reply Comment API] ====> Received request to add post comment reply  - request data == ".json_encode($request->all()));

        $response = response()->json([]);

        try{

            if($request->has('comment_id') and $request->has('reply')){

                
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
    
                        $response = response()->json([
                            'status' => 'success',
                            'message' => 'comment reply added successfully !',
                            'payload' => $savedReply
                        ]);

                    }else{

                        $response = response()->json([
                            'status' => 'failed',
                            'message' => 'could not find the comment',
                            'payload' => null
                        ]);
                    }                   

            }else{

                $response = response()->json([
                    'status' => 'failed',
                    'message' => 'mandatory fields missing',
                    'payload' => null
                ]);

            }


        }catch(\Exception $exception){

            Log::channel('posts_api_log')->info("[Reply Comment API] ====>  Error occured when adding post comment reply == ".$exception->getMessage().' - line - '.$exception->getLine());
            
            $response = response()->json([
                'status' => 'failed',
                'message' => 'error occured',
                'payload' => $exception->getMessage().' - line - '.$exception->getLine()
            ]);

        }

        Log::channel('posts_api_log')->info("[Reply Comment API] ====>  Returning response == ".json_encode($response));

        return $response;

    }

    public function deleteComment($id){

        Log::channel('posts_api_log')->info("[Delete Comment API] ====> Received request to delete post comment id - ".$id);


        $response = response()->json([]);

        try{

            $comment = Comment::find($id);

            if($comment != null){

                // deleting commment replies and comment
                CommentReply::where('comment_id',$id)->delete();
                $commentDeleted = Comment::where('id',$id)->delete();

                if($commentDeleted){

                    $response = response()->json([
                        'status' => 'success',
                        'message' => 'comment deleted successfully',
                        'payload' => $comment
                    ]);

                }else{
                    
                    $response = response()->json([
                        'status' => 'failed',
                        'message' => 'could not find the comment or already deleted',
                        'payload' => $comment
                    ]);
                }


            }else{

                $response = response()->json([
                    'status' => 'failed',
                    'message' => 'could not find the comment',
                    'payload' => null
                ]);

            }           


        }catch(\Exception $exception){

            Log::channel('posts_api_log')->info("[Delete Comment API] ====>  Error occured when deleting comment == ".$exception->getMessage().' - line - '.$exception->getLine());
            
            $response = response()->json([
                'status' => 'failed',
                'message' => 'error occured',
                'payload' => $exception->getMessage().' - line - '.$exception->getLine()
            ]);
        }

        Log::channel('posts_api_log')->info("[Delete Comment API] ====>  Returning response == ".json_encode($response));

        return $response;
    }

    public function editComment(Request $request){

        Log::channel('posts_api_log')->info("[Edit Comment API] ====> Received request to edit post comment == request data - ".json_encode($request->all()));

        $response = response()->json([]);

        try{

            $comment = Comment::find($request->comment_id);

            if($comment != null){

                $comment->comment = $request->updated_content;
                $comment->is_approved = 0;

                $comment->save();

                $response = response()->json([
                    'status' => 'success',
                    'message' => 'comment updated for id - '.$request->comment_id,
                    'payload' => $comment
                ]);

            }else{
                
                $response = response()->json([
                    'status' => 'failed',
                    'message' => 'could not find the comment for id - '.$request->comment_id,
                    'payload' => null
                ]);
            }

        }catch(\Exception $exception){
            Log::channel('posts_api_log')->info("[Edit Comment API] ====>  Error occured when updating comment == ".$exception->getMessage().' - line - '.$exception->getLine());
            
            $response = response()->json([
                'status' => 'failed',
                'message' => 'error occured',
                'payload' => $exception->getMessage().' - line - '.$exception->getLine()
            ]);
        }

        Log::channel('posts_api_log')->info("[Edit Comment API] ====>  Returning response == ".json_encode($response));

        return $response;
    }

    public function editCommentReply(Request $request){

        Log::channel('posts_api_log')->info("[Edit Comment Reply API] ====> Received request to edit post comment reply == request data - ".json_encode($request->all()));

        $response = response()->json([]);

        try{

            $commentReply = CommentReply::find($request->reply_id);

            if($commentReply != null){

                $commentReply->reply = $request->updated_content;

                $commentReply->save();

                $response = response()->json([
                    'status' => 'success',
                    'message' => 'comment reply updated for id - '.$request->reply_id,
                    'payload' => $commentReply
                ]);

            }else{
                
                $response = response()->json([
                    'status' => 'failed',
                    'message' => 'could not find the comment for id - '.$request->reply_id,
                    'payload' => null
                ]);
            }

        }catch(\Exception $exception){
            Log::channel('posts_api_log')->info("[Edit Comment Reply API] ====>  Error occured when updating comment reply == ".$exception->getMessage().' - line - '.$exception->getLine());
            
            $response = response()->json([
                'status' => 'failed',
                'message' => 'error occured',
                'payload' => $exception->getMessage().' - line - '.$exception->getLine()
            ]);
        }

        Log::channel('posts_api_log')->info("[Edit Comment Reply API] ====>  Returning response == ".json_encode($response));

        return $response;
    }
}
