<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">
    <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Numero de benne</th>
                        <th>Longeur</th>
                        <th>largeur</th>
                        <th>Hauteur</th>
                        <th>Remarque</th>                               
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bennes as $benne)
                        
                   
                    <tr>
                        <td>{{ $benne->id }}</td>
                        <td>{{ $benne->nbenne }}</td>
                        <td>{{ $benne->long }}</td>
                        <td>{{ $benne->larg }}</td>
                        <td>{{ $benne->haut }}</td>
                        <td>{{ $benne->req }}</td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
    <script>
        
        $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
</body>
</html>