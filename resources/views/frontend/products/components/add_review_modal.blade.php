<!-- Button trigger modal -->
<button type="button" class="btn  hvr-grow font-15 text-white fw-normal rounded-3 green-bg py-1 border  border-2 border-success border-1" data-bs-toggle="modal" data-bs-target="#add-review-modal">
  <i class="fa fa-star"></i> Review Product
</button>

<!-- Modal -->
<div class="modal fade" id="add-review-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-Asap font-22  fw-bolder black-text" id="exampleModalLabel">Add Product Review</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('web.product.reviews.add')}}" method="post">
          {{csrf_field()}}
      <div class="modal-body">
        <input type="text" name="product_id" value="{{$product->id}}" hidden>
        <div class="form-group">
            <label for="review" class="font-15 font-Asap fw-normal black-text pb-1">Review Description</label>
            <textarea type="text" name="review" id="review" class="form-control" required> </textarea>
        </div>
        <div class="form-group">
            <label for="rating" class="font-15 font-Asap fw-normal black-text py-1">Rating</label>
            <select name="rating" id="rating" class="form-control" required> 
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
            </select>
        </div>

      </div>
      <div class="modal-footer">          
        <button type="submit" class="btn  font-15 text-white fw-normal rounded-3 green-bg py-1 border  border-2 border-success border-1">Add Review</button>
        <button type="button" class="btn btn-secondary font-15 text-white fw-normal rounded-3  py-1 border  border-2 border-secondary border-1" data-bs-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>