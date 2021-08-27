{{-- {{ $order_items }} --}}
@extends('layouts/layout-admin')

@section('content')
    <div class="app-main__inner">
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Orders Items</h5>
                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Orders_id</th>
                                    <th>Product_id</th>

                                    <th>Qty</th>
                                    <th>Price</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($order_items as $item)

                                    <tr style="height:80px">
                                        <td>

                                        </td>
                                        <td>{{ $item->order_list_id }}</td>
                                        <td>{{ $item->product }}</td>
                                        <td>{{ $item->qty }}</td>
                                        <td>{{ $item->price }}</td>


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
