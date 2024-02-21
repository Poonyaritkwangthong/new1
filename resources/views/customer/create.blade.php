<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Customer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Add Customer</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('customer.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('customer.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>First Name:</strong>
                        <input type="text" name="f_name" class="form-control" placeholder="First Name">
                        <strong>Last Name:</strong>
                        <input type="text" name="l_name" class="form-control" placeholder="Last Name">
                        <strong>Image:</strong>
                        <input type="text" name="c_img" class="form-control" placeholder="Image">
                        <strong>phone Number:</strong>
                        <input type="int" name="phone_n" class="form-control" placeholder="Phone Number">
                        <strong>User Id:</strong>
                        <input type="text" name="user_id" class="form-control" placeholder="User Id">
                        <strong>Password:</strong>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>