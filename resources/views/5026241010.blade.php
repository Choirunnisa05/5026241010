<!DOCTYPE html>
<html lang="en">

<head>
    <title>Select a Plan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background: #e9e9e9;
            font-family: 'Titillium Web', sans-serif;
            padding: 60px 0;
        }

        .section {
            background: #ffffff;
            padding: 80px 120px;
            max-width: 950px;
            margin: 0 auto;
            border: 1px solid #ddd;
        }

        .video-container {
            text-align: center;
            margin-bottom: 30px;
        }

        video {
            width: 60%;
            max-width: 100px;
            height: auto;
        }

        .judul {
            font-weight: 700;
            letter-spacing: 1.5px;
            font-size: 26px;
            text-align: center;
            margin-bottom: 5px;
        }

        .subjudul {
            color: #777;
            text-align: center;
            margin-bottom: 50px;
            font-size: 13px;
        }

        .plan-card {
            background: white;
            border: 1.7px solid #b9b8b8;
            padding: 30px 15px;
            text-align: center;
            height: 100%;
        }

        .plan-card h5 {
            font-weight: 700;
            font-size: 16px;
            margin-bottom: 5px;
        }

        .price {
            color: #888;
            font-size: 12px;
            margin-bottom: 30px;
            line-height: 1.4;
        }

        .btn-plan {
            font-family: 'Monserrat', sans-serif;
            font-weight: 600;
            font-size: 13px;
            letter-spacing: 2.5px;
            text-transform: uppercase;
            width: 100%;
            max-width: 150px;
            padding: 10px 0;
            border: none;
            border-radius: 3px;
            margin-bottom: 40px;
        }

        .btn-grey { background: #cfcfcf; color: white; }
        .btn-blue { background: #1a73e8; color: white; }

        .feature-list p {
            margin-bottom: 6px;
            font-size: 13px;
            color: #888;
            text-align: center;
        }

        .feature-list strong {
            color: #444;
            font-weight: 700;
        }

        .row-card {
            margin-left: -8px;
            margin-right: -8px;
        }

        .col-custom {
            padding-left: 8px;
            padding-right: 8px;
        }
    </style>
</head>

<body>

    <div class="section">
        <div class="video-container">
            <video autoplay loop muted playsinline>
                <source src="https://storage.googleapis.com/gweb-gemini-cdn/gemini/uploads/a21a64fe0131928e76bc9924aed2da8fccd5dfad.mp4" type="video/mp4">
            </video>
        </div>

        <div class="row">
            <div class="col">
                <p class="judul">SELECT A PLAN</p>
                <p class="subjudul">Dapatkan akses ke model AI paling cerdas dan fitur eksklusif Google</p>
            </div>
        </div>

        <div class="row row-card">
            <div class="col-md-4 col-custom">
                <div class="plan-card">
                    <h5>GRATIS</h5>
                    <p class="price">Rp 0 IDR/bulan<br>dengan Akun Google</p>
                    <button class="btn-plan btn-grey">MULAI</button>
                    <div class="feature-list">
                        <p><strong>Akses</strong> ke 1.5 Flash</p>
                        <p><strong>Beragam</strong> akses ke 1.5 Pro</p>
                        <p><strong>Gemini</strong> Live & Canvas</p>
                        <p><strong>50 poin</strong> AI harian</p>
                        <p><strong>Penyimpanan</strong> 15 GB</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-custom">
                <div class="plan-card">
                    <h5>AI PLUS</h5>
                    <p class="price">Rp 75.000 IDR/bulan<br>Rp 37.500 selama 6 bln</p>
                    <button class="btn-plan btn-blue">MULAI</button>
                    <div class="feature-list">
                        <p><strong>Mencakup</strong> semua fitur Gratis</p>
                        <p><strong>Akses</strong> model 1.5 Pro cerdas</p>
                        <p><strong>Nano Banana</strong> Pro (Gambar)</p>
                        <p><strong>200 poin</strong> AI bulanan</p>
                        <p><strong>Penyimpanan</strong> 200 GB</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-custom">
                <div class="plan-card">
                    <h5>AI PRO</h5>
                    <p class="price">Rp 309.000 IDR/bulan<br>Rp 0 untuk satu bulan</p>
                    <button class="btn-plan btn-blue">MULAI</button>
                    <div class="feature-list">
                        <p><strong>Akses</strong> fitur baru & canggih</p>
                        <p><strong>Lengkap</strong> versi Gratis & Plus</p>
                        <p><strong>1.000 poin</strong> AI bulanan</p>
                        <p><strong>Gemini</strong> Code Assist & CLI</p>
                        <p><strong>Penyimpanan</strong> 2 TB</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
