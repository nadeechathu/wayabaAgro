<div class="table-responsive table-cart">

<table class="table table-bordered table-striped">
                        <thead>
                          <tr class="table-secondary">
                            <th scope="col">Order</th>
                            <th scope="col">Date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Total ({{$commonContent['currencySymbol']['description']}})</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>

                        @foreach ($orders as $order)
                        <tr>
                            <td> <p class="profile-p">{{$order->id}} </p></td>
                            <td> <p class="profile-p">{{$order->created_at}}</p></td>
                            <td>
                                @include('frontend.user.components.order_statuses')
                            </td>
                            <td> <p class="profile-p">{{$order->order_total}}</p></td>
                            <td>
                                @include('frontend.user.components.order_view')
                            </td>
                        </tr>
                        @endforeach


                        </tbody>
                      </table>
                    </div>
                      <div class="d-felx justify-content-center">

                  {{$orders->links()}}

                  </div>
