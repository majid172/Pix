@extends('layouts.backend.app')

@section('title')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="page-title mb-0 font-size-18">{{__('Dashboard')}}</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">{{__('Welcome to Dashboard')}}</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@stop

<!-- end page title -->
@section('content')
<div class="row">
    <div class="col-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start">
                    <div class="avatar-sm font-size-20 me-3">
                        <span class="avatar-title bg-soft-primary text-primary rounded">
                            <i class="fas fa-clock"></i>
                        </span>
                    </div>
                    <div class="flex-1">
                        <div class="font-size-16 mt-2">Orders Placed Today</div>
                    </div>
                </div>
                <h4 class="mt-4">{{count($today_orders)}}</h4>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start">
                    <div class="avatar-sm font-size-20 me-3">
                        <span class="avatar-title bg-soft-primary text-primary rounded">
                            <i class="fas fa-spinner"></i>
                        </span>
                    </div>
                    <div class="flex-1">
                        <div class="font-size-16 mt-2">Order in Progress</div>
                    </div>
                </div>
                <h4 class="mt-4">1,368</h4>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start">
                    <div class="avatar-sm font-size-20 me-3">
                        <span class="avatar-title bg-soft-primary text-primary rounded">
                            <i class="fas fa-cart-plus"></i>
                        </span>
                    </div>
                    <div class="flex-1">
                        <div class="font-size-16 mt-2">Total Orders</div>
                    </div>
                </div>
                <h4 class="mt-4">{{count($total_orders)}}</h4>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card bg-primary text-white">
            <div class="card-body">
                <div class="d-flex align-items-start">
                    <div class="avatar-sm font-size-20 me-3">
                        <span class="avatar-title bg-soft-warning rounded">
                            <i class="fas fa-money-bill-wave"></i>
                        </span>
                    </div>
                    <div class="flex-1">
                        <div class="font-size-16 mt-2">Unpaid Amount</div>
                    </div>
                </div>
                <h4 class="mt-4">$ 1,368</h4>
            </div>
        </div>
    </div>
</div>
<!-- end row -->


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">@lang('Recent Orders')</h4>

                <div class="table-responsive">
                    <table class="table table-centered">
                        <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Order no.</th>
                            <th scope="col">Job Title</th>
                            <th scope="col">Amount</th>
                            <th scope="col">@lang('Quantity')</th>
                            <th scope="col" >Payment Status</th>
                            <th scope="col">@lang('Action')</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse ($orders as $item)
                            <tr>
                                <td>{{$item->created_at}}</td>
                                <td>
                                    <a href="#" class="text-body fw-medium">#{{$item->order_id}}</a>
                                </td>
                                
                                <td>{{__($item->job_title)}}</td>
                                <td>${{$item->price}} </td>
                                <td>{{$item->image_quantity}} </td>
                                <td>
                                    @if ($item->is_paid == 1)
                                    <span class="badge badge-soft-success font-size-12">@lang('Paid')</span>
                                    @else <span class="badge badge-soft-danger font-size-12">@lang('Unpaid')</span>
                                    @endif
                                    
                                </td>
                                <td><a href="/order/{{$item->id}}" class="btn btn-primary btn-sm">@lang('View')</a></td>
                            </tr>
                            @empty
                                <tr class="text-center">
                                    <td class="text-center">
                                        <p class="text-center">@lang('No Data Found')</p>
                                    </td>
                                </tr>
                            @endforelse
                                
                        </tbody>
                    </table>
                </div>

                {{-- <div class="mt-3">
                    <ul class="pagination pagination-rounded justify-content-center mb-0">
                        <li class="page-item">
                            <a class="page-link" href="#">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </div>
</div>
<!-- end row -->

@endsection
