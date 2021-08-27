@extends('layouts/layout-admin')

@section('content')
    <div class="app-main__inner">
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title"> Product List</h5>
                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Qty</th>
                                    <th>Price </th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)

                                    <tr>
                                        <td>
                                            <img src="/storage/images/product_image/{{ $product->product_image }}"
                                                style="height:40px; width:70px;">
                                        </td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->getcategory->name ?? '-' }}</td>
                                        <td>{{ $product->qty }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>


                                            @livewire('product-status',["product"=>$product])
                                        </td>
                                        <td style="width: 190px">
                                            <a href="{{ route('products.show', $product->id) }}"
                                                class="btn btn-primary">View</a>
                                            <a href="{{ route('products.edit', $product->id) }}"
                                                class="btn btn-warning">Edit</a>
                                            <form class="d-inline" action="{{ route('products.destroy', $product->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" class="btn btn-danger" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')

    {{-- <script>
        $(function() {
            $('.toggle-class').change(function() {
                alert(0);
                var status = $(this).prop('checked') == true ? 1 : 0;
                console.log(status);
                var id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/changestatus_products',
                    data: {
                        'status': status,
                        'id': id
                    },
                    success: function(data) {
                        console.log(data.success)
                    }
                });
            })
        })
    </script> --}}
@endsection
