<!DOCTYPE html>
<html>

<head>
    <title>SIMPLE LAPOR</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/style.css" />
</head>

<body>
    <h1>SIMPLE LAPOR !</h1>

    <div class="container">
        <div class="row content-footer">
            <div class="col text-left">Detail Laporan/Komentar</div>
        </div>


        <div class="content">
            <div class="detail-content">
                {!! nl2br(e($lapor->body)) !!}

                @if($lapor->lampiran)
                <br>
                <br>
                <br>
                <a href="/{{ $lapor->lampiran }}">
                    <div class="col text-left">Unduh Lampiran</div>
                </a>
                @endif
            </div>

            <div class="row content-footer">
                <div class="col text-left">
                    <span>Waktu: {{ $lapor->created_at }}</span>
                    <span>Aspek: {{ $lapor->aspek }}</span>
                </div>
                <div class="col text-right">
                    <form action="{{ route('delete', $lapor->id) }}" method="POST">
                        @csrf
                        <button type="submit" style="padding: 0; border: none; background: none;">
                            <span>Hapus Laporan/Komentar <i class="fa fa-times"></i></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>


</html>
