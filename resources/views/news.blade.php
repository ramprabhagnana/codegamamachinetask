<!DOCTYPE html>
<html>

<head>
    <title>Laravel 9 Import Export Excel to Database Example - ItSolutionStuff.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>






<body>

    <div class="container">
        <div class="card bg-light mt-3">
            <!-- <div class="card-header">
                News list
            </div> -->
            <div class="card-body">
                <!-- <form action="{{ route('news_import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" class="form-control">
                    <br>
                    <button class="btn btn-success">Import User Data</button>
                </form> -->

                <table class="table table-bordered mt-3">
                    <tr>
                        <th colspan="3">
                            News list </th>
                    </tr>

                    <?php
                    $i = 1;

                    ?>
                    @foreach($news as $ne_ws)

                    <tr>
                        <th>ID</th>
                        <th>uniq id</th>

                        <th>title</th>
                        <th>content</th>
                        <th>date</th>
                        <th>source</th>
                        @if( $is_admin == 1)

                        <th>Action</th>

                        @else

                        <th>Is bookmarked</th>
@endif


                    </tr>

                    <tr>

                        <td>{{ $i++ }}</td>
                        <td>{{ $ne_ws->id }}</td>

                        <td>{{ $ne_ws->title }}</td>
                        <td>{{ $ne_ws->content }}</td>
                        <td>{{ $ne_ws->date }}</td>
                        <td>{{ $ne_ws->source }}</td>
                        @if( $is_admin == 1)
                        <td>
                            <a href="{{ route('delete_news', [$ne_ws->id]) }}" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                            <!-- class="btn btn-xs btn-danger" -->
                        </td>


                        @else


                        @if( $ne_ws->is_bookmarked == 1)
                        <td>
                            <a href="#" class="btn btn-xs btn-success">Bookmarked</a>
                            <!-- class="btn btn-xs btn-danger" -->
                        </td>


                        @elseif( $ne_ws->is_bookmarked == null || $ne_ws->is_bookmarked == 0)
                        <td>
                            <a href="#" class="btn btn-xs btn-primary">Bookmark</a>


                        </td>
                        @endif

                        @endif


                    </tr>


                    @endforeach

                </table>

            </div>
        </div>
    </div>

    <script type="text/javascript">
        $("#save").on("click", function() {
            alert("hai");

        });
    </script>

</body>

</html>