<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#sort-modal">
<i class="fa fa-sort" aria-hidden="true"></i>
Menu Order
</button>

<!-- Modal -->
<div class="modal fade" id="sort-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Menu Order</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('webpages.sort')}}" method="post">
          {{csrf_field()}}
      <div class="modal-body">
          <p class="text-danger">Drag and drop to adjust the menu order.</p>
            <table class="table table-borderd">
             @foreach ($pages as $page)
                <tr draggable="true" ondragstart="dragit(event)" ondragover="dragover(event)">
                    
                    <td>
                        {{$page->page_heading}}
                        <input type="text" hidden name="menu_ids[]" value="{{$page->id}}"/>
                    </td>
                    <td>{{$page->slug}}</td>
                </tr>
             @endforeach
            
           
            </table>
      </div>
      <div class="modal-footer">
          
        <button type="submit" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>

    <!-- jQuery -->
    <script src="{{url('/plugins/jquery/jquery.min.js')}}"></script>

    
<script>
  let shadow
function dragit(event){
  shadow=event.target;
}
function dragover(e){
  let children=Array.from(e.target.parentNode.parentNode.children);
if(children.indexOf(e.target.parentNode)>children.indexOf(shadow))
  e.target.parentNode.after(shadow);
  else e.target.parentNode.before(shadow);
}
</script>