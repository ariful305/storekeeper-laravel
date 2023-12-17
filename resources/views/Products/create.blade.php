@extends('layouts.website')
@section('title','Product Create')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-10">
                <div class="card">
                    <div class="card-header">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <h2>Product Add</h2>
                                </div>
                            </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                              <label for="name">Product Name</label>
                              <input type="text" class="form-control" id="name" name="name">
                              
                            </div>
                            <div class="form-group">
                              <label for="quantity">Quantrity</label>
                              <input type="number" class="form-control" id="quantity"  name="quantity">
                            </div>
                            <div class="form-group">
                              <label for="price">Price</label>
                              <input type="number" class="form-control" id="price"  name="price">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
