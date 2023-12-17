@extends('layouts.dashboard')
@section('title','Dashboard')
@section('content')
<section>
    <div class="container">        
    <div class="grey-bg container-fluid">
          <div class="row mt-5">
            <div class="card">
                <div class="card-header">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h2>Sales History </h2>
                            </div>                          
                        </div>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sl. No</th>
                                <th>Product Name</th>
                                <th>Order Quantity</th>
                                <th>Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order as  $key=>$iteam)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $iteam->product->name }}</td>
                                <td>{{ $iteam->quantity }}</td>
                                <td>{{ $iteam->total_amount }}</td>                                
                       </tr>
                       @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Sl. No</th>
                                <th>Product Name</th>
                                <th>Order Quantity</th>
                                <th>Total Price</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            
          </div>
        
        </div>
    </div>

@endsection