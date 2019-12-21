@extends('admin.app')
@section('content')

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Product Entry Page</h1>
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
        <!-- left column -->
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Add Product</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="/products" method="POST" enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="inputName">Name</label>
                      <input type="text" class="form-control" id="inputName" name="name" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                      <label for="inputPrice">Sku</label>
                      <input type="text" class="form-control" id="inputSku" name="sku" placeholder="Sku">
                    </div>
                    <div class="form-group">
                      <label for="inputPrice">Price</label>
                      <input type="text" class="form-control" id="inputPrice" name="price" placeholder="Price">
                    </div>
                    <div class="form-group">
                      <label for="discount">Discount</label>
                      <input type="text" class="form-control" id="discount" name="discount" placeholder="Discount">
                    </div>
                    <div class="form-group">
                      <label for="inputCategory">Category</label>
                      <input type="text" class="form-control" id="inputCategory" name="category" placeholder="Category">
                    </div>
                      <div class="col-md-6">
                          <input type="file" name="image" class="form-control">
                      </div>

                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  @csrf
                </form>
              </div>
        </div>
      </div>
    </div>

  </section>
  <!-- /.content -->
</div>
@endsection
