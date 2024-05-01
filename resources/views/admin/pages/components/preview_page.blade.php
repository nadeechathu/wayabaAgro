<!-- Button trigger modal -->
<button type="button" class="btn btn-warning btn-sm text-white" data-bs-toggle="modal" data-bs-target="{{'#preview-modal-'.$page->id}}">
<i class="fa fa-eye"></i> Preview Content
</button>

<!-- Modal -->
<div class="modal fade" id="{{'preview-modal-'.$page->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="max-width:900px;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Preview Page Content</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          
        </button>
      </div>
      <div class="modal-body">
       {!!$page->pageDescriptions->content!!}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>