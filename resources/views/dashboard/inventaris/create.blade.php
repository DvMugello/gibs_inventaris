<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <link rel="shortcut icon" href="{{ asset('svg/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon"
        href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAiCAYAAADRcLDBAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjMzIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iMzQiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSIzMyIKICAgdGlmZjpJbWFnZUxlbmd0aD0iMzQiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LjAiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LjAiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiCiAgIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiPgogICA8eG1wTU06SGlzdG9yeT4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJwcm9kdWNlZCIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWZmaW5pdHkgRGVzaWduZXIgMS4xMC4xIgogICAgICBzdEV2dDp3aGVuPSIyMDIyLTAzLTMxVDEwOjUwOjIzKzAyOjAwIi8+CiAgICA8L3JkZjpTZXE+CiAgIDwveG1wTU06SGlzdG9yeT4KICA8L3JkZjpEZXNjcmlwdGlvbj4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjw/eHBhY2tldCBlbmQ9InIiPz5V57uAAAABgmlDQ1BzUkdCIElFQzYxOTY2LTIuMQAAKJF1kc8rRFEUxz9maORHo1hYKC9hISNGTWwsRn4VFmOUX5uZZ36oeTOv954kW2WrKLHxa8FfwFZZK0WkZClrYoOe87ypmWTO7dzzud97z+nec8ETzaiaWd4NWtYyIiNhZWZ2TvE946WZSjqoj6mmPjE1HKWkfdxR5sSbgFOr9Ll/rXoxYapQVik8oOqGJTwqPL5i6Q5vCzeo6dii8KlwpyEXFL519LjLLw6nXP5y2IhGBsFTJ6ykijhexGra0ITl5bRqmWU1fx/nJTWJ7PSUxBbxJkwijBBGYYwhBgnRQ7/MIQIE6ZIVJfK7f/MnyUmuKrPOKgZLpEhj0SnqslRPSEyKnpCRYdXp/9++msneoFu9JgwVT7b91ga+LfjetO3PQ9v+PgLvI1xkC/m5A+h7F32zoLXug38dzi4LWnwHzjeg8UGPGbFfySvuSSbh9QRqZ6H+Gqrm3Z7l9zm+h+iafNUV7O5Bu5z3L/wAdthn7QIme0YAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAJTSURBVFiF7Zi9axRBGIefEw2IdxFBRQsLWUTBaywSK4ubdSGVIY1Y6HZql8ZKCGIqwX/AYLmCgVQKfiDn7jZeEQMWfsSAHAiKqPiB5mIgELWYOW5vzc3O7niHhT/YZvY37/swM/vOzJbIqVq9uQ04CYwCI8AhYAlYAB4Dc7HnrOSJWcoJcBS4ARzQ2F4BZ2LPmTeNuykHwEWgkQGAet9QfiMZjUSt3hwD7psGTWgs9pwH1hC1enMYeA7sKwDxBqjGnvNdZzKZjqmCAKh+U1kmEwi3IEBbIsugnY5avTkEtIAtFhBrQCX2nLVehqyRqFoCAAwBh3WGLAhbgCRIYYinwLolwLqKUwwi9pxV4KUlxKKKUwxC6ZElRCPLYAJxGfhSEOCz6m8HEXvOB2CyIMSk6m8HoXQTmMkJcA2YNTHm3congOvATo3tE3A29pxbpnFzQSiQPcB55IFmFNgFfEQeahaAGZMpsIJIAZWAHcDX2HN+2cT6r39GxmvC9aPNwH5gO1BOPFuBVWAZue0vA9+A12EgjPadnhCuH1WAE8ivYAQ4ohKaagV4gvxi5oG7YSA2vApsCOH60WngKrA3R9IsvQUuhIGY00K4flQG7gHH/mLytB4C42EgfrQb0mV7us8AAMeBS8mGNMR4nwHamtBB7B4QRNdaS0M8GxDEog7iyoAguvJ0QYSBuAOcAt71Kfl7wA8DcTvZ2KtOlJEr+ByyQtqqhTyHTIeB+ONeqi3brh+VgIN0fohUgWGggizZFTplu12yW8iy/YLOGWMpDMTPXnl+Az9vj2HERYqPAAAAAElFTkSuQmCC"
        type="image/png">



    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app-dark.css') }}">
    <link rel="stylesheet" href="{{ asset('css/iconly.css') }}">
    <link rel="stylesheet" href="{{ asset('dropify/dist/css/dropify.css') }}">
    <link rel="stylesheet" href="{{ asset('dropify/dist/css/dropify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('scss/trix.scss') }}">
</head>

<body>
    <script src="{{ asset('js/initTheme.js') }}"></script>
    <div id="app">
        @include('partials.sidebar')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading border-bottom">
                <h3><i class="bi bi-clipboard"></i> {{ $sub }}</h3>
                <p>{{ $teks }}</p>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col">
                        <div class="card mt-md-0">
                            <main class="col-md-auto col-lg-auto px-md-2">
                                <div
                                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                                    <h1 class="fs-4">{{ $subteks }}</h1>
                                </div>
                                @if (session()->has('success'))
                                    <div class="alert alert-success col-lg-auto" role="alert">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <div class="table-responsive small col-lg-auto">
                                    <table class="table table-striped table-sm">
                                        <form method="post" action="/dashboard/inventaris"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="year" class="form-label">Tahun</label>
                                                <select name="period_id" id="period_id" class="form-select">
                                                    @foreach ($periode as $periode)
                                                        @if (old('period_id') == $periode->id)
                                                            <option value="{{ $periode->id }}" selected>
                                                                {{ $periode->year }}</option>
                                                        @else
                                                            <option value="{{ $periode->id }}">{{ $periode->year }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="item" class="form-label">Data Inventaris </label>
                                                <select name="item_id" id="item_id" class="form-select">
                                                    @foreach ($item as $items)
                                                        @if (old('item_id') == $items->id)
                                                            <option value="{{ $items->id }}" selected>
                                                                {{ $items->name }} -
                                                                {{ $items->merk }} - Warna {{ $items->color }}
                                                            </option>
                                                        @else
                                                            <option value="{{ $items->id }}">{{ $items->name }} -
                                                                {{ $items->merk }} - Warna {{ $items->color }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="room" class="form-label">Rooms </label>
                                                <select name="rooms_id" id="rooms_id" class="form-select">
                                                    @foreach ($room as $rooms)
                                                        @if (old('rooms_id') == $rooms->id)
                                                            <option value="{{ $rooms->id }}" selected>
                                                                {{ $rooms->name }}</option>
                                                        @else
                                                            <option value="{{ $rooms->id }}">{{ $rooms->name }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="total" class="form-label">Total Barang</label>
                                                <x-forms.input name="total" id="total" type="numeric"
                                                    value="{{ old('total') }}" placeholder="Total Barang"
                                                    attribute="required" />
                                            </div>
                                            <div class="input-group ">
                                                <label for="total_barang" class="form-label">Kondisi Barang</label>
                                                <div class="col-md-3 m-md-3">
                                                    <x-forms.input name="total_good" id="total_good" type="numeric"
                                                        value="{{ old('total_good') }}" placeholder="Total Barang Baik"
                                                        attribute="required" />
                                                </div>
                                                <div class="col-md-3 m-md-3">
                                                    <x-forms.input name="total_not_good" id="total_not_good"
                                                        type="numeric" value="{{ old('total_not_good') }}"
                                                        placeholder="Total Barang K.Baik" attribute="required" />
                                                </div>
                                                <div class="col-md-3 m-md-3">
                                                    <x-forms.input name="total_bad" id="total_bad" type="numeric"
                                                        value="{{ old('total_bad') }}"
                                                        placeholder="Total Barang Rusak" attribute="required" />
                                                </div>
                                                <div class="mb-3 col-md-11">
                                                    <label for="description" class="form-label">Keterangan</label>
                                                    <x-forms.input name="description" id="description" type="teks"
                                                        value="{{ old('description') }}" placeholder="Keterangan"
                                                        attribute="required" />
                                                </div>
                                            </div>


                                            <button type="submit" class="btn btn-primary">Create Data</button>
                                        </form>
                                    </table>
                                </div>
                            </main>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/components/dark.js') }}"></script>
    <script src="{{ asset('extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>


    <script src="{{ asset('mainjs/app.js') }}"></script>



    <!-- Need: Apexcharts -->
    {{-- <script src="{{ asset('extensions/apexcharts/apexcharts.js') }}"></script> --}}
    <script src="{{ asset('js/pages/dashboard.js') }}"></script>
    <script src="{{ asset('dropify/dist/js/dropify.min.js') }}"></script>
    <script src="{{ asset('dropify/dist/js/dropify.js') }}"></script>
    <script>
        $('.dropify').dropify();
    </script>

</body>

</html>
