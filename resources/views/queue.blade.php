<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Queue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<body>
    <div class="card-head mt-5">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <h1 style="text-shadow: -5px 3px 4px #ddd; "class="text-center">Queue mail Sending</h1>
            </div>
        </div>

        </div>
    </div>


    <div class="card-body">
        <div class="row">
            <div class="col-md-8 mx-auto">

                @if (session()->get('success'))
                    <div class="alert alert-success py-2"> <strong>Success: </strong> {{ session()->get('success') }} </div>

                @elseif(session()->get('warning'))
                    <div class="alert alert-warning py-2"> <strong> Warning: </strong> {{ session()->get('warning') }}</div>

                @elseif(session()->get('error'))
                    <div class="alert alert-danger py-2"> <strong> Error: </strong> {{ session()->get('error') }}</div>
                @endif

                <form action="{{ route('queue.store') }}" method="POST">
                @csrf
                    <div class="md-3">
                        <label for="name" class="form-label"> Name</label>
                        <input type="text" name="name" class="form-control" id="name" >

                        @error('name')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>

                    <div class="md-3">
                        <label for="email" class="form-label"> Email</label>
                        <input type="text" name="email" class="form-control" id="email" >

                        @error('email')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>


                    <div class="text-end">
                        <button type="submit" class="btn btn-sm btn-primary"> Create</button>

                    </div>
                </form>
            </div>
        </div>





</body>
</html>
