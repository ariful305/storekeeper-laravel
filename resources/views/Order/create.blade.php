@extends('layouts.website')
@section('title','Order Create')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-10">
                <div class="card">
                    <div class="card-header">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <h2>Sell Product</h2>
                                </div>
                            </div>
                    </div>
                   
                    <div class="card-body">
                        <form action="{{ route('order.store') }}" method="POST">
                            @csrf
                            <input type="hidden"  name="product_id" value="{{ $product->id }}" >

                            <div class="form-group">
                              <label for="name">Product Name</label>
                              <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="price">Product Price</label>
                                <input type="number" class="form-control" id="price"  name="price" value="{{ $product->price }}" readonly>
                              </div>
                            <div class="form-group">
                              <label for="quantity">Quantrity</label>
                              <input type="number" class="form-control" id="quantity"  name="quantity">
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Add Order</button>
                          </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
