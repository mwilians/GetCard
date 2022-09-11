<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print | Get Card</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" />

    <link href="{{ asset('assets\css\pages\template\coba.css') }}" rel="stylesheet" type="text/css"/>
</head>

<body>
    
    <div class="kartu" style="width:498.5px; height:292.5px; background: url('assets/media/desain/DKN/C2-1-C.png') no-repeat; background-size:cover; ">
        
        <div class="col-left">
            <p>081272466449</p>
            <p>lavender@gmail.com</p>
            <p>2022-09-01 / 2022-09-01</p>
        </div>
        <div class="col-right">
            <img src="{{ asset('assets/media/pengguna/20220901214532.jpg') }}" alt="">
            <h4>Lavender</h4>
            <div class="bg-jabatan">
                <h4>CEO</h4>
            </div>
            <div class="qrcode-card">
                {!! QrCode::size(88)->generate("asdasdasd"); !!}
            </div>
        </div>
    </div>

    <br>

    <div class="kartu-belakang" style="width:498.5px; height:292.5px; background: url('assets/media/desain/DKN/C2-2-A.png') no-repeat; background-size:cover; ">
        
        <div class="col-center">
            <div class="flex-image">
                <img src="{{ asset('assets/media/lembaga/20220822084936.png') }}" alt="">
            </div>
            <p>081272466449</p>
            <p>Jln. Alamat Perusahaan</p>
            <p>perusahaan@gmail.com</p>
            <p>www.perusahaan.com</p>
        </div>
    </div>

</body>
</html>