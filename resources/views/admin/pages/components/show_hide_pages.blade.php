@if ($page->visibility == 0)

<button type="button" class="btn btn-dark btn-sm text-white" style="width:112px;" data-bs-toggle="modal" data-bs-target="{{'#show-hide-pages-'.$page->id}}">
<i class="fa fa-eye"></i> Make Visible
</button>
@else
<button type="button" class="btn btn-primary btn-sm text-white" style="width:112px;" data-bs-toggle="modal" data-bs-target="{{'#show-hide-pages-'.$page->id}}">
<i class="fa fa-eye-slash"></i> Hide Page
</button>
@endif


<div class="modal fade" id="{{'show-hide-pages-'.$page->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Confirm Page Visibility Change</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-bs-label="Close"></button>
</div>
<div class="modal-body">
    Are you sure you want to change the page visibility to {{$page->visibility == 0 ? 'visible' : 'hidden'}} status ?
</div>
<div class="modal-footer">
<a href="{{route('webpages.visible',$page->id)}}"><button type="button" class="btn btn-primary">Yes</button></a>
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>            
</div>
</div>
</div>
</div>
