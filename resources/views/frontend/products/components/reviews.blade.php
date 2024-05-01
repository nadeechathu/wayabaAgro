@if (sizeof($product->reviews) > 0)
@foreach ($product->reviews as $review)
@if ($review->review_status == 1)
    


<div class="row">
    <div class="col-md-12">
        <table class="table">
            <tr>
                <td rowspan="2" style="width:70px;">
                <img src="{{$review->customer != null ? asset($review->customer->user->user_image) : asset('images/no_user_image.png')}}" style="width:45px;" alt="">
                </td>
                <td>
                @php
                     $emptyStars = 5 - $review->review_rating;
                     
                     for ($x = 0; $x < $review->review_rating; $x++) {
                     
                        echo '<i class="fa fa-star text-warning"></i>';
                     }

                     for ($x = 0; $x < $emptyStars; $x++) {
                        echo '<i class="fa fa-star text-muted"></i>';
                     }

                @endphp 

                &nbsp;
                <span class="review-date-font"> - {{$review->created_at}}</span>
                </td>
            </tr>
            <tr>
                
                <td>{!!$review->review_description!!}</td>
            </tr>
        </table>
        
    </div>
   
</div>
@endif
@endforeach
@else

<h5>No reviews yet</h5>
    
@endif