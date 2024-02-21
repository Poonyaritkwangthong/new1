<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Customer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Customer</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('customer.index') }}" enctype="multipart/form-data">
                        Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('customer.update',$customer->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                            <strong>First Name:</strong>
                            <input type="text" name="f_name" value="{{ $customer->f_name }}" class="form-control" placeholder="first Name">
                            <strong>Last Name:</strong>
                            <input type="text" name="l_name" value="{{ $customer->l_name }}" class="form-control" placeholder="last Name">
                            <strong>Image:</strong>
                            <input type="text" name="c_img" value="{{ $customer->c_img }}" class="form-control" placeholder="Image">
                            <strong>Phone Number:</strong>
                            <input type="int" name="phone_n" value="{{ $customer->phone_n }}" class="form-control" placeholder="Phone Number">
                            <strong>User id:</strong>
                            <input type="text" name="user_id" value="{{ $customer->user_id }}" class="form-control" placeholder="User id">
                            <strong>Password:</strong>
                            <input type="string" name="password" value="{{ $customer->password }}" class="form-control" placeholder="Password">
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
