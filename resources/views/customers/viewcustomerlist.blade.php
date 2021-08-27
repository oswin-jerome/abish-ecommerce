@extends('layouts/layout-admin')

@section('content')
    <div class="app-main__inner">
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title"> Customers List</h5>
                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>City</th>
                                    <th>Password</th>
                                    <th>Status</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($customers as $customer)

                                    <tr>
                                        <td>
                                            {{ $customer->id }}
                                        </td>
                                        <td>{{ $customer->name }}</td>
                                        <td>{{ $customer->email }}</td>
                                        <td>{{ $customer->city }}</td>
                                        <td>{{ $customer->password }}</td>
                                        <td>
                                            {{-- {{ $customer->status }} --}}
                                            <div class="row">
                                                <div class="col-md-3">
                                                    @livewire('user-status',["customer"=>$customer])
                                                </div>
                                                <div class="col-md-3">


                                                    <a href="{{ route('customer.show', $customer->id) }}"
                                                        class="btn btn-info">Address</a>
                                                </div>
                                            </div>

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
