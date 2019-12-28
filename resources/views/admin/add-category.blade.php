@extends('admin.app')
@section('content')

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Category Entry Page</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Category Entry Page</li>
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
                  <h3 class="card-title">Add Category</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="/categories" method="post">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="inputName">Name</label>
                      <input type="text" class="form-control" id="inputName" name="name" placeholder="Enter Name">
                    </div>
                      <div class="form-group">
                          <label for="inputName">Slug</label>
                          <input type="text" class="form-control" id="inputName" name="slug" placeholder="Enter Slug">
                      </div>
                      <div class="form-group">
                          <label for="inputName">Description</label>
                          <textarea name="description" id="" cols="30" rows="10"></textarea>
                      </div>
                      <div class="form-group">
                          <label for="inputName">Featured</label>
                          <input type="text" class="form-control" id="inputName" name="featured" placeholder="Enter Featured">
                      </div>

                      <div class="form-group">
                          <label for="inputName">Parent Id</label>
                          <input type="text" class="form-control" id="inputName" name="parent_id" placeholder="Enter Featured id">
                      </div>

                    <div class="form-group">
                      <label for="exampleInputFile">File Image</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="image" id="inputImage">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text" id="">Upload</span>
                        </div>
                      </div>
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
