@extends('layouts/layout-admin')
@section('content')
    <div class="app-main__inner">


        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Add Product</h5>
                        <form class="" method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="col-md-3">
                                    <div class="position-relative form-group"><label for="exampleEmail11"
                                            class="">Name</label><input name="name" id="exampleEmail11" placeholder=""
                                            type="text" class="form-control"></div>
                                </div>
                                <div class="col-md-3">
                                    <div class="position-relative form-group"><label for="exampleAddress"
                                            class="">Category</label>
                                        <select name="category" id="" class="form-control">
                                            @foreach ($categories as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>


                            <div class="form-row">
                                <div class="col-md-3">
                                    <div class="position-relative form-group">
                                        <label for="exampleCity" class="">Qty</label>
                                        <input name="qty" id="exampleCity" type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="position-relative form-group">
                                        <label for="exampleCity" class="">Qty Type</label>
                                        <select name="qty_type" id="" class="form-control">
                                            <option value="kg">Kg</option>
                                            <option value="piece">Piece</option>
                                            <option value="pack">Pack</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="position-relative form-group">
                                        <label for="exampleCity" class="">Price</label>
                                        <input name="price" id="exampleCity" type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="position-relative form-group">
                                        <label for="exampleCity" class="">Sell Price</label>
                                        <input name="sell price" id="exampleCity" type="number" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="">Description</label>

                                        <textarea name="description" id="exampleEmail11" placeholder="" type="text"
                                            class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <label for="exampleFile" class="">Image</label>
                                        <input name="product_image" id="ProductImage" type="file" class="form-control-file">
                                    </div>
                                </div>
                            </div>
                            <button class="mt-2 btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
