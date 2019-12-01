@section('footer')
<footer class="footer">
    <div class="d-flex justify-content-between flex-wrap bg-dark p-4">
        <ul class="list-inline">
            <li class="list-inline-item pl-2 border-left border-light">
                <a href="" class="text-white">トップ / TOP</a>
            </li>
            <li class="list-inline-item pl-2 border-left border-light">
                <a href="" class="text-white">時刻表 / Time</a>
            </li>
            <li class="list-inline-item pl-2 border-left border-light">
                <a href="" class="text-white">電車内情報 / TrainInf</a>
            </li>
            <li class="list-inline-item pl-2 border-left border-light">
                <a href="" class="text-white">ヘルプ / Help</a>
            </li>
        </ul>
        <div class="text-white">
            <small>&copy;電車情報 / TrainInfo</small>
        </div>
    </div>
</footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
@yield('pageJs')
@endsection
