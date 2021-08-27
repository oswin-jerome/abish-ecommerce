@extends('layouts/layout-admin')
@section('content')
    <div class="app-main__inner">


        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Product</h5>

                        <form action="{{ route('products.update', $product->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="old_image" value="{{ $product->image }}">
                            @method('PUT')
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group"><label for="exampleEmail11"
                                            class="">Name</label>
                                        <input name="name" id="exampleEmail11" placeholder="" type="text"
                                            value="{{ $product->name }}" class="form-control" />
                                    </div>
                                </div>

                            </div>


                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group"><label for="exampleAddress"
                                            class="">Category</label>
                                        <select name="category" id="" class="form-control">
                                            @foreach ($categories as $item)
                                                <option {{ $product->category == $item->id ? 'selected' : '' }}
                                                    value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="exampleCity" class="">Price</label><input name="price" id="exampleCity"
                                            type="number" value="{{ $product->price }}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="exampleState" class="">Qty</label><input readonly name="qty"
                                            id="exampleState" type="number" value="{{ $product->qty }}"
                                            class="form-control">
                                    </div>
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="col-md-2">
                                    <div class="position-relative form-group"><label for="exampleFile" class="">File</label>
                                        <input type="file" name="product_image" class="form-control" id="ProductImage"
                                            aria-describedby="emailHelp" value="{{ $product->image }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <img src="/storage/images/product_image/{{ $product->product_image }}"
                                    style="width:400px; height:200px;">
                                {{-- {{$product}} --}}
                            </div>
                            <button type="submit" class="mt-2 btn btn-success">Update</button>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
