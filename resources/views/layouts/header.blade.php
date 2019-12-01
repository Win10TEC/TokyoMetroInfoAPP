@section('header')
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="../index.php">電車情報 / TrainInfo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/trainTime">時刻表 / Time</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/train">電車内情報 / TrainInf</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ヘルプ / Help</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
@endsection
