@extends('admin.layouts.app')

@section('content')
    <div>
        <!-- Breadcrumbs-->
        <div class="bg-white border-bottom py-3 mb-5">
            <div
                class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
                <nav class="mb-0" aria-label="breadcrumb">
                    <h3 class="m-0">All Orders</h3>
                </nav>
                <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item active" aria-current="page">All Orders</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- / Breadcrumbs-->
        <section class="container-fluid">
            <div class="card">
                <div class="card-header">
                    @include('admin.common.alerts')
                    <form action="{{ route('orders.all') }}" method="get">
                        <div class="row">
                            <div class="col-md-2">
                                <p style="line-height:35px;">Filter by status</p>
                            </div>
                            <div class="col-md-4">
                                <select name="selectedOrderStatus" id="orderStatus" class="form-control">
                                    <option selected value="all">All</option>
                                    @foreach ($orderStatuses as $orderStatus)
                                        @if ($selectedOrderStatus == $orderStatus->id)
                                            <option selected value="{{ $orderStatus->id }}">{{ $orderStatus->status_name }}
                                            </option>
                                        @else
                                            <option value="{{ $orderStatus->id }}">{{ $orderStatus->status_name }}</option>
                                        @endif
                                    @endforeach


                                </select>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="search" class="form-control" name="searchKey"
                                        placeholder="Order Number / Tracking Number" value="{{ $searchKey }}">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form><br />
                    <div class="row">
                        <div class="table-responsive-sm">
                            <table class="table table-bordered">
                                <thead class="table-light">
                                    <tr>

                                        <th>Order Tracking Number</th>
                                        <th>Status</th>
                                        <th>Inventory Status</th>
                                        <th>Postal Code</th>
                                        <th>State</th>
                                        <th>Suburb</th>
                                        <th>Total ({{ $commonContent['currencySymbol']['description'] }})</th>
                                        <th style="width:30%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>

                                            <td>{{ $order->tracking_number }}</td>

                                            <td>
                                                @include('admin.orders.components.order_statuses')
                                            </td>
                                            <td>
                                                @if ($order->inventory_status == 0)
                                                    <span class="badge bg-danger">Not Reserved</span>
                                                @elseif ($order->inventory_status == 1)
                                                    <span class="badge bg-success">Reserved</span>
                                                @else
                                                    <span class="badge bg-warning">Returned</span>
                                                @endif
                                            </td>
                                            <td>{{ $order->shippingAddress->zip }}</td>
                                            <td>{{ $order->shippingAddress->state }}</td>
                                            <td>{{ $order->shippingAddress->city }}</td>

                                            <td>
                                                {{ $order->order_total }}
                                            </td>
                                            <td>




                                                <div class="accordion accordion-flush"
                                                    id="{{ 'accordionFlush' . $order->id }}">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header"
                                                            id="{{ 'flush-heading' . $order->id }}">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="{{ '#flush-collapse' . $order->id }}"
                                                                aria-expanded="false" aria-controls="flush-collapseOne">
                                                                Actions
                                                            </button>
                                                        </h2>
                                                        <div id="{{ 'flush-collapse' . $order->id }}"
                                                            class="accordion-collapse collapse"
                                                            aria-labelledby="{{ 'flush-heading' . $order->id }}"
                                                            data-bs-parent="{{ '#accordionFlush' . $order->id }}">
                                                            <div class="accordion-body">
                                                                @include('admin.orders.components.quick_view')


                                                                @if ($order->order_status != 9)
                                                                    @if (Auth::user()->hasPermission('edit_orders'))
                                                                        <a href="{{ route('orders.edit', $order->id) }}"><button
                                                                                class="btn btn-primary btn-sm text-white action-buttons"><i
                                                                                    class="fa fa-edit"></i> Edit</button>
                                                                        </a>
                                                                    @endif


                                                                    @include('admin.orders.components.view_refund')

                                                                    @if (Auth::user()->hasPermission('change_order_status'))
                                                                        @include('admin.orders.components.change_status_modal')
                                                                    @endif

                                                                    @if (Auth::user()->hasPermission('request_order_cancellation'))
                                                                        @if ($order->order_status < 6)
                                                                            @include('admin.orders.components.order_cancellation_request')
                                                                        @endif
                                                                    @endif
                                                                @endif






                                                                @if (Auth::user()->hasPermission('invoices_and_packing_slips'))
                                                                    <a
                                                                        href="{{ route('orders.packingSlip.download', $order->id) }}"><button
                                                                            type="button"
                                                                            class="btn btn-success btn-sm text-white action-buttons"
                                                                            id="{{ 'btnPrint' . $order->id }}"><i
                                                                                class="fa fa-download mr-2"></i>Packing
                                                                            Slip</button></a>

                                                                    <a href="{{ route('order.download', $order->id) }}"><button
                                                                            type="button"
                                                                            class="btn btn-warning btn-sm text-white action-buttons"
                                                                            id="{{ 'btnPrint' . $order->id }}"><i
                                                                                class="fa fa-download mr-2"></i>Download
                                                                            Invoice</button></a>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                            </td>



                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            <div class="d-felx justify-content-center">

                                {{ $orders->links() }}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
