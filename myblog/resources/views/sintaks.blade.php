<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaks dasar blade</title>
</head>

<body>
    <!-- tangkap data -->
    <!-- sintaks blade echo -->
    {{-- ini komentar blade --}}

    <!-- index -->

    <a href="{{ route('halo') }}">halman halo</a>

    <!-- nama variabel -->
    <p>Selamat datang {{ $nama }}
    <p>
    <p>alamat anda {!! $alamat !!}
    <p>

        <!-- struktur control
     logika interface di taruh disini
     logika bisnis di controler
     @ penanda -->
        @if ($nilai > 50)
            <b>{{ $nilai }} Lulus <b>
                @else
                    <b>{{ $nilai }} Tidak lulus <b>
        @endif

        {{-- looping --}}
        @for ($i = 0; $i < 5; $i++)
            {{ $i }}
        @endfor

    <ul>
        @for ($i = 0; $i < count($buah); $i++)
            <li> {{ $buah[$i] }} </li>
        @endfor
    </ul>

    <ol>
        @foreach ($buah as $item)
            <li> {{ $item }} </li>
        @endforeach
    </ol>


</body>

</html>
