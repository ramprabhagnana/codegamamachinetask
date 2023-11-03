<!DOCTYPE html>
<html>

<head>
    <title>Laravel 9 Import Export Excel to Database Example - ItSolutionStuff.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>






<body>

    <div class="container">


        <div class="card bg-light mt-3">
            <div class="card-header">
                Import News Excel File
            </div>

            <div class="card-body">
                <form action="{{ route('news_import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" class="form-control">
                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                    @endif

                    <br>
                    <button class="btn btn-success">Import User Data</button>
                </form>


            </div>
        </div>


    </div>

</body>

</html>