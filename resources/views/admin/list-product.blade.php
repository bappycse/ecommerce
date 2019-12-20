@extends('admin.app')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Product list Page</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Product Entry Page</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All Product Lists</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th><input type="checkbox" /></th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Discount</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>SKU</th>
                                    <th>Price</th>
                                    <th>Discount</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->getId() }}</td>
                                        <td>{{ $product->getName() }}</td>
                                        <td>{{ $product->getSku() }}</td>
                                        <td>{{ $product->getPrice() }}</td>
                                        <td>{{ $product->getDiscount() }}</td>
                                        <td>{{ $product->getCategory() }}</td>
                                        <td><a href="/products/{{ $product->getId() }}/edit"><i
                                                    class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            <form method="POST" action="/products/{{ $product->getId() }}"
                                                  style="display:inline-block">
                                                <button type="submit" style="background: transparent; border: none;
                                  display: inline-block;color: darkorange"><i class="fa fa-trash-o"
                                                                              aria-hidden="true"></i></button>
                                                @method('DELETE')
                                                @csrf
                                            </form>
                                        </td>
                                    <tr>
                                @endforeach

                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>

    </section>
    <!-- /.content -->
    </div>
@endsection
