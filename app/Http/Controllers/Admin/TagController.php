<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Auth;

class TagController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){

        $hasPermission = Auth::user()->hasPermission('view_tags');

        if($hasPermission){
                
            $searchKey = $request->searchKey;

            $tags = Tag::getTagsForFilters(0, $searchKey);

            return view('admin.tags.all_tags',compact('tags','searchKey'));

        }else{
            return redirect('admin/not_allowed');
        }

    }

    public function store(Request $request){

        $hasPermission = Auth::user()->hasPermission('add_tags');

        if($hasPermission){

            try{
                $validated = $request->validate([
                    'tag_name' => ['required', 'max:255'],
                    'type' => ['required']
                ]);
        
                $tag = new Tag;
        
                $tag->tag_name = $request->tag_name;
                $tag->type = $request->type;
        
                $savedTag = Tag::create($tag->toArray());
        
                return back()->with('success','Tag created successfully !');
    
            }catch(\Exception $exception){
    
                return back()->with('error','Error occured - '.$exception->getMessage());
            }

        }else{
            return redirect('admin/not_allowed');
        }
        
       
    }

    public function update(Request $request){

        $hasPermission = Auth::user()->hasPermission('edit_tags');

        if($hasPermission){

            try{
                $validated = $request->validate([
                    'tag_name' => ['required', 'max:255'],
                    'type' => ['required']
                ]);
        
                $tag = Tag::where('id',$request->tag_id)->get()->first();
    
                if($tag != null){
    
                    $tag->tag_name = $request->tag_name;
                    $tag->type = $request->type;
            
                    $tag->save();
            
                    return back()->with('success','Tag updated successfully !');
    
                }else{
                    return back()->with('error','Could not find the tag');
                }
        
    
            }catch(\Exception $exception){
    
                return back()->with('error','Error occured - '.$exception->getMessage());
            }

        }else{
            return redirect('admin/not_allowed');
        }
        
       
    }

    public function deleteTag($id){

        $hasPermission = Auth::user()->hasPermission('delete_tags');

        if($hasPermission){

            try{

                // TODO
                // $postsForTag = Post::where('id',$id)->update(['tag_id'=>null]);
    
                Tag::where('id',$id)->delete();
    
                return back()->with('success','Tag deleted successfully !');
    
            }catch(\Exception $exception){
    
                return back()->with('error','Error occured - '.$exception->getMessage());
            }

        }else{
            return redirect('admin/not_allowed');
        }
        
    }
}
