<?php

namespace App\Http\Controllers\APIControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\APIModels\Post;
use App\Models\APIModels\Comment;
use App\Models\APIModels\CommentReply;

use Log;

class PostAPIController extends Controller
{
    //to get all published posts
    public function allPublishedPosts(Request $request){

        Log::channel('posts_api_log')->info("[All Published Posts API ] ====> Received request to fetch all published posts - request data == ".json_encode($request->all()));

        $response = response()->json([]);

        try{

            $posts = Post::getAllPublishedFeaturedPosts();

            $response = response()->json([
                'status' => 'success',
                'message' => 'published posts',
                'payload' => $posts
            ]);

        }catch(\Exception $exception){

            Log::channel('posts_api_log')->info("[All Published Posts API ] ====>  Error occured when fetching all published posts == ".$exception->getMessage().' - line - '.$exception->getLine());

            $response = response()->json([
                'status' => 'failed',
                'message' => 'error occured',
                'payload' => $exception->getMessage().' - line - '.$exception->getLine()
            ]);
        }

        Log::channel('posts_api_log')->info("[All Published Posts API ] ====>  Returning response == ".json_encode($response));

        return $response;
        
    }

    //to get all published posts for user
    public function getAllPublishedPostsForUser($id, Request $request){

        Log::channel('posts_api_log')->info("[All Published Posts For User API ] ====> Received request to fetch all published posts for user  - request data == ".json_encode($request->all()));

        $response = response()->json([]);

        try{

            $postsForUser = Post::getAllPublishedPostsForUser($id);

            $response = response()->json([
                'status' => 'success',
                'message' => 'published posts for user',
                'payload' => $postsForUser
            ]);

        }catch(\Exception $exception){

            Log::channel('posts_api_log')->info("[All Published Posts For User API ] ====>  Error occured when fetching all published posts for user == ".$exception->getMessage().' - line - '.$exception->getLine());

            $response = response()->json([
                'status' => 'failed',
                'message' => 'error occured',
                'payload' => $exception->getMessage().' - line - '.$exception->getLine()
            ]);
        }

        Log::channel('posts_api_log')->info("[All Published Posts For User API ] ====>  Returning response == ".json_encode($response));

        return $response;

    }

    //to get all published posts for category
    public function getAllPublishedPostsForCategory($slug, Request $request){

        Log::channel('posts_api_log')->info("[All Published Posts For Category API ] ====> Received request to fetch all published posts for category  - request data == ".json_encode($request->all()).' - slug - '.$slug);

        $response = response()->json([]);

        try{

            $postsForCategory = Post::getAllPublishedPostsForCategory($slug);

            $response = response()->json([
                'status' => 'success',
                'message' => 'published posts for category slug - '.$slug,
                'payload' => $postsForCategory
            ]);

        }catch(\Exception $exception){

            Log::channel('posts_api_log')->info("[All Published Posts For Category API ] ====>  Error occured when fetching all published posts for category == ".$exception->getMessage().' - line - '.$exception->getLine());

            $response = response()->json([
                'status' => 'failed',
                'message' => 'error occured',
                'payload' => $exception->getMessage().' - line - '.$exception->getLine()
            ]);
        }

        Log::channel('posts_api_log')->info("[All Published Posts For Category API ] ====>  Returning response == ".json_encode($response));

        return $response;
    }

    //to create posts
    public function createPost(Request $request){

        Log::channel('posts_api_log')->info("[Create Post API] ====> Received request to create post  - request data == ".json_encode($request->all()));

        $response = response()->json([]);

        try{

            $validated = $request->validate([
                'title' => ['required', 'max:255'],
                'body' => ['required'],
                'type' => ['required'],
                'status' => ['required'],
                'category_id' => ['required']
            ]);

            $post = new Post();

            $post->title = $request->title;
            $post->body = $request->body;
            $post->type = $request->type;
            $post->status = $request->status;
            $post->category_id = $request->category_id;
            $post->user_id = $request->user_id;
            $post->is_approved = Post::NOT_APPROVED;            

            $post->save();

            $post->tags()->attach($request->tags);

            $response = response()->json([
                'status' => 'success',
                'message' => 'post created and submitted for approval',
                'payload' => $post
            ]);

        }catch(\Exception $exception){
            
            Log::channel('posts_api_log')->info("[Create Post API] ====>  Error occured when creating post == ".$exception->getMessage().' - line - '.$exception->getLine());

            $response = response()->json([
                'status' => 'failed',
                'message' => 'error occured',
                'payload' => $exception->getMessage().' - line - '.$exception->getLine()
            ]);
        }

        Log::channel('posts_api_log')->info("[Create Post API] ====>  Returning response == ".json_encode($response));

        return $response;
    }

    //to update posts
    public function updatePost($id, Request $request){

        Log::channel('posts_api_log')->info("[Update Post API] ====> Received request to update post  - request data == ".json_encode($request->all()));

        $response = response()->json([]);

        try{

            $validated = $request->validate([
                'title' => ['required', 'max:255'],
                'body' => ['required'],
                'type' => ['required'],
                'status' => ['required'],
                'category_id' => ['required']
            ]);

            $post = Post::getPostForId($id);

            if($post != null){

                $post->title = $request->title;
                $post->body = $request->body;
                $post->type = $request->type;
                $post->status = $request->status;
                $post->category_id = $request->category_id;
                $post->user_id = $request->user_id;
                $post->is_approved = Post::NOT_APPROVED;            
    
                $post->save();
    
                $post->tags()->detach();
                $post->tags()->attach($request->tags);
    
                $response = response()->json([
                    'status' => 'success',
                    'message' => 'post updated and submitted for approval',
                    'payload' => Post::getPostForId($id)
                ]);

            }else{

                $response = response()->json([
                    'status' => 'failed',
                    'message' => 'post not found for the given id - '.$id,
                    'payload' => null
                ]);

            }
           

        }catch(\Exception $exception){
            
            Log::channel('posts_api_log')->info("[Update Post API] ====>  Error occured when updating post == ".$exception->getMessage().' - line - '.$exception->getLine());

            $response = response()->json([
                'status' => 'failed',
                'message' => 'error occured',
                'payload' => $exception->getMessage().' - line - '.$exception->getLine()
            ]);
        }

        Log::channel('posts_api_log')->info("[Update Post API] ====>  Returning response == ".json_encode($response));

        return $response;
    }

    //to publish unpublish posts
    public function publishUnpublishPost(Request $request){

        Log::channel('posts_api_log')->info("[Publish Unpublish Post API] ====> Received request to update post  - request data == ".json_encode($request->all()));

        $response = response()->json([]);

        try{

            if($request->has('post_id') and $request->has('publish_status')){

                $post = Post::getPostForId($request->post_id);

                if($post != null){
                    $msg = '';
    
                    if($post->is_approved == 1){

                        if($request->publish_status == POST::UNPUBLISHED){
                            // 0 status
                            $post->status = Post::PUBLISHED;
                            $msg = "Post status changed to published status.";
        
                        }else{                    
                            // 1 status
                            $post->status = Post::UNPUBLISHED;
                            $msg = "Post status changed to unpublished status.";
                        }
        
                        $post->save();

                        $response = response()->json([
                            'status' => 'success',
                            'message' => $msg,
                            'payload' => Post::getPostForId($request->post_id)
                        ]);

                    }else{

                        $response = response()->json([
                            'status' => 'falied',
                            'message' => 'your post approval is in progress. not allowed to publish until approval is completed',
                            'payload' => Post::getPostForId($request->post_id)
                        ]);

                    }    
                   
    
                }else{

                    $response = response()->json([
                        'status' => 'failed',
                        'message' => 'post not found for the given id - '.$id,
                        'payload' => null
                    ]);
                }



            }else{
                $response = response()->json([
                    'status' => 'failed',
                    'message' => 'mandatory fields not found',
                    'payload' => null
                ]); 
            }
       
           
        }catch(\Exception $exception){

            Log::channel('posts_api_log')->info("[Publish Unpublish Post API] ====>  Error occured when changing post status == ".$exception->getMessage().' - line - '.$exception->getLine());


            $response = response()->json([
                'status' => 'failed',
                'message' => 'error occured',
                'payload' => $exception->getMessage().' - line - '.$exception->getLine()
            ]);
        }

        Log::channel('posts_api_log')->info("[Publish Unpublish Post API] ====>  Returning response == ".json_encode($response));


        return $response;
    }

    public function deletePost($id, Request $request){

        Log::channel('posts_api_log')->info("[Delete Post API] ====> Received request to delete post  - request data == ".json_encode($request->all()).' - post id - '.$id);

        $response = response()->json([]);

        try{

            $postToDelete = Post::getPostForId($id);

            if($postToDelete->user_id == $request->user_id){

                // deleting commments and replies

                $comments = Comment::getCommentsForPost($id);

                foreach($comments as $comment){
                    CommentReply::where('comment_id',$comment->id)->delete();
                    Comment::where('id',$comment->id)->delete();
                }

                // deleting post
                $postDeleted = Post::where('id',$id)->delete();

                if($postDeleted){
                    $response = response()->json([
                        'status' => 'success',
                        'message' => 'post deleted for id - '.$id,
                        'payload' => $postDeleted
                    ]);
                }else{
                    $response = response()->json([
                        'status' => 'failed',
                        'message' => 'could not find the post or already deleted post',
                        'payload' => null
                    ]);
                }


            }else{
                $response = response()->json([
                    'status' => 'failed',
                    'message' => 'not allowed to delete a post of any other author',
                    'payload' => null
                ]); 
            }
             

        }catch(\Exception $exception){

            Log::channel('posts_api_log')->info("[Delete Post API] ====>  Error occured when deleting post == ".$exception->getMessage().' - line - '.$exception->getLine());

            $response = response()->json([
                'status' => 'failed',
                'message' => 'error occured',
                'payload' => $exception->getMessage().' - line - '.$exception->getLine()
            ]);
        }

        Log::channel('posts_api_log')->info("[Delete Post API] ====>  Returning response == ".json_encode($response));

        return $response;
    }


    public function getPostForSlug($slug){

        Log::channel('posts_api_log')->info("[Get Post For SLUG API] ====> Received request to get post  - request data slug == ".$slug);

        $response = response()->json([]);

        try{

            $post = Post::getPostForSlug($slug);

            $response = response()->json([
                'status' => 'success',
                'message' => 'post for slug - '.$slug,
                'payload' => $post
            ]);
             

        }catch(\Exception $exception){

            Log::channel('posts_api_log')->info("[Get Post For SLUG API] ====>  Error occured when fetching post == ".$exception->getMessage().' - line - '.$exception->getLine());

            $response = response()->json([
                'status' => 'failed',
                'message' => 'error occured',
                'payload' => $exception->getMessage().' - line - '.$exception->getLine()
            ]);
        }

        Log::channel('posts_api_log')->info("[Get Post For SLUG API] ====>  Returning response == ".json_encode($response));

        return $response;
    }

    public function allPublishedPostsForTitle(Request $request){

        Log::channel('posts_api_log')->info("[Search Post For Title API] ====> Received request to search posts  - request data slug == ".json_encode($request->all()));

        $response = response()->json([]);

        try{

            $posts = Post::getPostForSearchText($request->searchText);

            $response = response()->json([
                'status' => 'success',
                'message' => 'post for search text - '.$request->searchText,
                'payload' => $posts
            ]);
             

        }catch(\Exception $exception){

            Log::channel('posts_api_log')->info("[Search Post For Title API] ====>  Error occured when fetching posts == ".$exception->getMessage().' - line - '.$exception->getLine());

            $response = response()->json([
                'status' => 'failed',
                'message' => 'error occured',
                'payload' => $exception->getMessage().' - line - '.$exception->getLine()
            ]);
        }

        Log::channel('posts_api_log')->info("[Search Post For Title API] ====>  Returning response == ".json_encode($response));

        return $response;
    }

}
