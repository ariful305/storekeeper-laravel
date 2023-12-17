@extends('layouts.website')
@section('title','Product List')
@section('content')
     <section class="content">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center mt-5">
                <div class="col-10">
                    <div class="card">
                        <div class="card-header">
                                <div class="row">
                                    <div class="col-10 text-center">
                                        <h2>Product List </h2>
                                    </div>
                                    <div class="col-2">
                                        <a href="{{ route('create') }}" class="btn btn-primary">Add Product</a>
                                    </div>
                                </div>
                        </div>
                        <div class="card-body">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Sl. No</th>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as  $key=>$iteam)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $iteam->name }}</td>
                                        <td>{{ $iteam->quantity }}</td>
                                        <td>{{ $iteam->price }}</td>
                                        <td>
                                            <div class="row d-flex">
                                            <a href="{{ route('order.create',$iteam->id ) }}" class="btn btn-success ml-3 
                                                 @if($iteam->quantity==0)
                                                 {{ 'disabled' }}
                                                    @endif
                                                 ">Sell</a>
                                           <a href="{{ route('edit', $iteam->id) }}" class="btn btn-primary ml-2">Edit</a>
                                           <form action="{{ route('destroy',$iteam->id) }}" method="post">
                                                  @csrf
                                                  @method('DELETE')
                                                  <button type="submit" class="btn btn-danger ml-2" >Delete</button>
                                            </form>
                                        </div>
                                    </td>
                               </tr>
                               @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Sl. No</th>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
