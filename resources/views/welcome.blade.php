<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>


    <div class="container">
        <div class="mt-5">
            <div class="row">
                <div class="col-md-6 float-start">
                   
                        <h3>Download all data</h3>
                        <br>
                        
                        <a href="{{ route('download_file') }}" class=" mt-2 btn btn-sm btn-success float-start">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                              </svg>
                            Download file
                        </a>
                </div>
                <div class="col-md-6 float-end">
                    <form action="{{ route('import_file') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="" class="form-group mb-1">Upload file</label>
                        <input type="file" class="form-control" name="upload_file" id="">
                        <button type="submit" class=" mt-2 btn btn-sm btn-primary float-end">upload file</button>
                    </form>
                </div>
            </div>
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $userData as $item)
                    <tr>
                        <td>{{ $item->last }}</td>
                        <td>{{ $item->first }}</td>
                        <td>{{ $item->email }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $userData->links() }}
        </div>
    </div>


















    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
