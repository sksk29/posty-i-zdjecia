@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Moje Linki</h3>
        <a class="btn btn-success mb-4" href="link/create">
            Dodaj
        </a>
        <div><strong style="font-size: 17px; color: #1b0fc3;">
            <?php   
            $handle = fopen("linki.txt", "r");
            if ($handle) {
                while (($line = fgets($handle)) !== false) {
                    echo $line . '</br>';

                }

                fclose($handle);
            }
            ?>
            </strong>
        </div>
    </div>
@endsection