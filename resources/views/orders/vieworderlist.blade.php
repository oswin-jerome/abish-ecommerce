@extends('layouts/layout-admin')

@section('content')
    <div class="app-main__inner">
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title"> Orders List</h5>
                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Order Date</th>
                                    <th>Preview</th>

                                    <th>Status</th>


                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($orders_list as $order)

                                    <tr>
                                        <td>

                                        </td>
                                        <td>{{ $order->order_date }}</td>
                                        <td> <a href="{{ route('order.show', $order->id) }}"
                                                class="btn btn-primary">Preview</a>
                                        </td>

                                        <td>

                                            @livewire('order-status',["order"=>$order])
                                        </td>

                                    </tr>

                                @endforeach;
                            </tbody>

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')


@endsection
