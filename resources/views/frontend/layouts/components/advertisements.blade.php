<div class="container-fluid addvertisment-sec py-4" >
    <div class="container">
        <div class="row">

@foreach($advertisements as $advertisement)
<div class="col-lg-6  col-sm-6">
    <a  class="hvr-grow">

       
        <img class="d-block w-100" src="{{ asset($advertisement->image_src) }}">
    </a>
</div>


@endforeach


        </div>
    </div> 
</div>            