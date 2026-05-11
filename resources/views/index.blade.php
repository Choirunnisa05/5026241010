<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PWEB Portfolio - 5026241010</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f8f2e7;
            font-family: 'Quicksand', sans-serif;
            color: #6d5d6e;
            padding-top: 60px;
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
        }

        .sakura-header {
            color: #dc409b;
            font-weight: 700;
        }

        .card-sakura {
            background: #FBC9E4;
            border: 3px solid #FFA3C3;
            border-radius: 25px;
            transition: all 0.3s ease;
        }

        .card-sakura:hover {
            transform: scale(1.05);
            border-color: #ED7BBD;
            box-shadow: 0 8px 15px rgba(237, 123, 189, 0.2);
        }

        .btn-link {
            text-decoration: none;
            color: #559d59;
            font-weight: 700;
            font-size: 1.1rem;
        }

        .petal {
            position: fixed;
            background-color: #FFA3C3;
            border-radius: 150% 0 150% 0;
            opacity: 0.5;
            z-index: -1;
            pointer-events: none;
        }

        @keyframes fall {
            0% { transform: translateY(-10vh) translateX(0) rotate(0deg); opacity: 1; }
            100% { transform: translateY(110vh) translateX(100px) rotate(360deg); opacity: 0; }
        }
    </style>
</head>
<body>

<script>
    for (let i = 0; i < 30; i++) {
        let petal = document.createElement('div');
        petal.className = 'petal';
        petal.style.top = Math.random() * -100 + 'vh';
        petal.style.left = Math.random() * 100 + 'vw';
        petal.style.width = Math.random() * 23 + 18 + 'px';
        petal.style.height = petal.style.width;
        petal.style.animation = `fall ${Math.random() * 8 + 8}s linear infinite`;
        petal.style.animationDelay = Math.random() * -8 + 's';
        document.body.appendChild(petal);
    }
</script>

<div class="container text-center">
    <h1 class="sakura-header display-4 mb-2">Choirunnisa' Irianti</h1>
    <p style="color: #999D55;">5026241010 | Departemen Sistem Informasi</p>

    <div class="row g-4 justify-content-center mt-4">
        @php
            $tugas = [
                'pertemuan5' => 'Dell Technology',
                'linktree' => 'Linktree PSM ITS',
                'makeover' => 'Instagram Makeover',
                'blog' => 'Blog Malas Ngoding',
                'workshop' => 'Bootstrap Pricing',
                'responsive' => 'Responsive Web',
                'news' => 'ITS News',
                'intro' => 'Intro PWEB',
                '5026241010' => 'Tugas UTS',
                'welcome' => 'Welcome Laravel'
            ];
        @endphp

        @foreach($tugas as $route => $judul)
        <div class="col-lg-4 col-md-6">
            <a href="{{ url($route) }}" class="btn-link">
                <div class="card card-sakura p-4 h-100 d-flex align-items-center justify-content-center">
                    <div class="card-body">
                        <span>{{ $judul }}</span>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>

    <footer class="mt-5 mb-5" style="color: #c92384; opacity: 0.7; font-size:large;">
        <p>❀ 5026241010 - Pemrograman Web 2026 ❀</p>
    </footer>
</div>

</body>
</html>
