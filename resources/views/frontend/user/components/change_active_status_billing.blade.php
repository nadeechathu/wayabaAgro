<form action="{{route('web.user.addressActiveStatus')}}" method="post">
    {{csrf_field()}}
<input type="text" hidden name="customer_id" value="{{$customer->id}}">
<input type="text" hidden name="type" value="{{$billingAddress->type}}">

<input type="text" hidden name="address_id" value="{{$billingAddress->id}}">
<button class="btn btn-success btn-sm" type="submit"><i class="fa fa-exchange"></i> Set As Active</button>
</form>