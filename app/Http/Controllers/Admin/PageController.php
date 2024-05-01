<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Models\Page;
use App\Models\PageDescription;
use App\Models\PageMetaData;
use App\Http\Controllers\Controller;
use Auth;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){

        $hasPermission = Auth::user()->hasPermission('view_pages');

        if($hasPermission){


            $searchKey =$request->searchKey;

            $pages = Page::getAllPagesForFilters($searchKey);


            return view('admin.pages.all_pages',compact('pages','searchKey'));

        }else{

            return redirect('admin/not_allowed');

        }

    }

    public function createPageUI(){

        $hasPermission = Auth::user()->hasPermission('add_pages');

        if($hasPermission){


            return view('admin.pages.new_page');

        }else{

            return redirect('admin/not_allowed');

        }

    }

    public function store(Request $request){



        $hasPermission = Auth::user()->hasPermission('add_pages');

        if($hasPermission){



                $validated = $request->validate([
                    'page_heading' => ['required'],
                    'content' => ['required'],
                    'slug' => ['required'],
                    'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=50,min_height=50,max_width=2000,max_height=2000',
                    'visibility' => ['required']
                ],
                [
                    'image.mimes' => 'Image types should be jpg,png,jpeg.',
                    'image.max' => 'The Image must not be greater than 2048 kilobytes.',
                    'image.dimensions' => 'Please upload the images with the mentioned image dimentions.',

                ]);

                // saving data to pages table
                $page = new Page;

                $page->page_heading = $request->page_heading;
                $page->slug = $request->slug;
                $page->entered_by = Auth::user()->id;
                $page->visibility = $request->visibility;

                if($request->file('image')){

                    $imageName = time().'.'.$request->image->extension();
                    $request->image->move(public_path('images/uploads/banner-images/'), $imageName);
                    $imageUrl = 'images/uploads/banner-images/' . $imageName;

                    $page->page_banner = $imageUrl;
                }

                $savedPage = Page::create($page->toArray());

                //saving data to page descriptions table
                $pageDescription = new PageDescription;

                $pageDescription->content = $request->content;
                $pageDescription->page_id = $savedPage->id;

                $savedDescription = PageDescription::create($pageDescription->toArray());

                //sabing data to page meta data table

                $pageMetaData = new PageMetaData;

                $pageMetaData->page_title = $request->page_title;
                $pageMetaData->meta_tag_description = $request->meta_tag_description;
                $pageMetaData->meta_keywords = $request->meta_keywords;
                $pageMetaData->page_id = $savedPage->id;
                $pageMetaData->canonical_url = $request->canonical_url;


                $savedPageMetaData = PageMetaData::create($pageMetaData->toArray());

                return back()->with('success','Page created successfully !');



        }else{

            return redirect('admin/not_allowed');

        }

    }

    public function editPageUI($id){

        $hasPermission = Auth::user()->hasPermission('edit_pages');

        if($hasPermission){

            $page = Page::getPageForId($id);

            return view('admin.pages.edit_page',compact('page'));

        }else{

            return redirect('admin/not_allowed');

        }

    }

    public function update(Request $request){

        $hasPermission = Auth::user()->hasPermission('edit_pages');

        if($hasPermission){


                $validated = $request->validate([
                    'page_heading' => ['required'],
                    'content' => ['required'],
                    'slug' => ['required'],
                    'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=50,min_height=50,max_width=2000,max_height=2000',
                    'visibility' => ['required']
                ],
                [
                    'image.mimes' => 'Image types should be jpg,png,jpeg.',
                    'image.dimensions' => 'Please upload the images with the mentioned image dimentions.',

                ]);
                // saving data to pages table
                $page = Page::getPageForId($request->page_id);

                $page->page_heading = $request->page_heading;
                $page->slug = $request->slug;
                $page->visibility = $request->visibility;

                
                if($request->file('image')){

                    $imageName = time().'.'.$request->image->extension();
                    $request->image->move(public_path('images/uploads/banner-images/'), $imageName);
                    $imageUrl = 'images/uploads/banner-images/' . $imageName;

                    $page->page_banner = $imageUrl;
                }

                $page->save();

                //saving data to page descriptions table
                $pageDescription = PageDescription::getPageDescriptionForPageId($request->page_id);

                $pageDescription->content = $request->content;

                $pageDescription->save();

                //saving data to page meta data table

                $pageMetaData = PageMetaData::getPageMetaDataForPageId($request->page_id);

                $pageMetaData->page_title = $request->page_title;
                $pageMetaData->meta_tag_description = $request->meta_tag_description;
                $pageMetaData->meta_keywords = $request->meta_keywords;
                $pageMetaData->canonical_url = $request->canonical_url;


                $pageMetaData->save();

                return back()->with('success','Page updated successfully !');


        }else{

            return redirect('admin/not_allowed');

        }


    }

    public function changePageVisibility($id){

        $hasPermission = Auth::user()->hasPermission('page_visibility_change');

        if($hasPermission){


            $page = Page::getPageForId($id);

            if($page != null){

                $msg = '';

                if($page->visibility == 0){

                    $page->visibility = 1;
                    $msg = "Page '".$page->page_heading."' visibility changed to visible status.";

                }else{

                    $page->visibility = 0;
                    $msg = "Page '".$page->page_heading."' visibility changed to hidden status.";

                }

                $page->save();

                return back()->with('success',$msg);

            }else{
                return back()->with('error','could not find the page.');
            }

        }else{

            return redirect('admin/not_allowed');

        }

    }

    public function deletePage($id){

        $hasPermission = Auth::user()->hasPermission('delete_pages');

        if($hasPermission){

            $deleted = Page::where('id',$id)->delete();

            if($deleted){
                return back()->with('success','Page deleted successfully !');
            }else{
                return back()->with('error','Page deletion failed.');
            }

        }else{

            return redirect('admin/not_allowed');

        }


    }

    public function sortPages(Request $request){

        $hasPermission = Auth::user()->hasPermission('edit_pages');



        if($hasPermission){
            $order = 0;
            foreach($request->menu_ids as $menu_id){

                Page::where('id',$menu_id)->update(['sort_order' => $order]);

                $order++;
            }

            return back()->with('success','Page order saved successfully !');

        }else{

            return redirect('admin/not_allowed');

        }

    }
}
