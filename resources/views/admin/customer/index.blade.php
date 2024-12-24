@extends('admin.master')
@section('title')
Customer
@endsection

@section('content')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card card-body">
                    <h4 class="text-center mb-3"><strong>Add Customer</strong></h4>
                    <form action="{{ route('customer.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter you Name"/>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter your Email"/>
                        </div>
                        <div class="form-group">
                            <label for="">Mobile</label>
                            <input type="mobile" name="mobile" class="form-control" placeholder="Enter you Mobile Number"/>
                        </div>
                        <div class="form-group">
                            <label for=""></label>
                            <input type="submit" class="btn btn-success" value="Save Customer"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
