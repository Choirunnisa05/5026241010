<!DOCTYPE html>
<html lang="en">

<head>
    <title>ITS Student Choir - PSM ITS | TikTok | Linktree</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            /* Mobile: gradient biru penuh */
            background: linear-gradient(180deg, #0d5fa3 0%, #0a3d8f 40%, #071A8C 100%);
            font-family: 'Inter', sans-serif;
            min-height: 115vh;
            margin: 0;
        }

        /* Desktop: background luar gelap, card mengapung di tengah */
        @media (min-width: 576px) {
            body {
                background: #202c7b;
                display: flex;
                justify-content: center;
                align-items: flex-start;
                padding-top: 2rem;
            }
        }

        .lt-card {
            max-width: 600px;
            width: 100%;
            min-height: 115vh;
            background: linear-gradient(180deg, #49a5bf 0%, #3070ab 30%, #2151a0 40%, #123195 80%, #030928 100%);
        }

        @media (min-width: 576px) {
            .lt-card {
                min-height: 115vh;
                border-radius: 1.5rem 1.5rem 0 0;
                box-shadow: 0 24px 32px 0 rgba(0, 0, 0, 0.2);
                padding-bottom: 2rem;
            }
        }

        .lt-topbar {
            position: static;
            top: 0;
            z-index: 10;
        }

        .lt-topbar-btn {
            width: 2rem;
            height: 2rem;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.741);
            border: 1px solid rgba(255, 255, 255, 0.25);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            color: #fff;
            transition: background 0.15s;
        }

        .lt-topbar-btn:hover {
            background: rgb(255, 255, 255);
        }

        .lt-topbar-btn svg {
            width: 0.9rem;
            height: 0.9rem;
            fill: #000000;
        }

        .lt-avatar {
            width: 4.5rem;
            height: 4.5rem;
            border-radius: 50%;
            object-fit: cover;
        }

        .lt-name {
            color: #fff;
            font-weight: 700;
            font-size: large;
            letter-spacing: -0.01em;
        }

        /* Button Link-Link */
        .lt-btn {
            background: transparent;
            border: 1.5px solid rgb(255, 255, 255);
            border-radius: 3rem;
            min-height: 3.3rem;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            font-size: 80%;
            padding: 0.75rem 2.75rem 0.75rem 4rem;
            transition: background 0.15s, border-color 0.15s;
        }

        .lt-btn:hover {
            background: rgba(255, 255, 255, 0.08);
            border-color: rgba(255, 255, 255, 0.85);
            color: #fff;
            text-decoration: none;
        }

        .lt-btn-thumb {
            position: absolute;
            left: 0.5rem;
            width: 3rem;
            height: 3rem;
            border-radius: 0.75rem;
            overflow: hidden;
            background: transparent;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .lt-btn-thumb img {
            width: 80%;
            height: 80%;
            object-fit: cover;
            border-radius: 50%;
        }

        .lt-btn-thumb svg {
            width: 1.6rem;
            height: 1.6rem;
            fill: #fff;
        }

        .lt-btn-dots {
            position: absolute;
            right: 0.875rem;
            width: 1.5rem;
            height: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgba(255, 255, 255, 0.4);
            font-size: 0.8rem;
            line-height: 1;
            border-radius: 50%;
        }

        .lt-btn-dots:hover {
            background: rgba(29, 28, 28, 0.182);
        }

        .lt-link-header {
            color: #fff;
            font-size: 80%;
            font-weight: 700;
            text-align: center;
        }

        /* Footer */
        .lt-footer-link {
            font-size: xx-small;
            color: rgba(255, 255, 255);
            text-decoration: none;
        }

        .lt-footer-link:hover {
            color: #fff;
            text-decoration: underline;
        }

        .lt-join-btn {
            display: inline-block;
            background: #fff;
            color: #111;
            border-radius: 3rem;
            padding: 0.5rem 1rem;
            font-weight: 600;
            font-size: 0.8375rem;
            text-decoration: none;
            margin-bottom: 0.875rem;
        }

        .lt-join-btn:hover {
            background: #efefef;
            color: #111;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="lt-card mx-auto">

        <!-- TOP BAR -->
        <div class="lt-topbar d-flex justify-content-between align-items-center px-3 py-3">
            <button class="lt-topbar-btn">
                <!-- Logo Linktree -->
                <svg viewBox="0 0 28 28" fill="currentColor">
                    <path
                        d="M15.76 6.83L20.43 2.03L23.14 4.8L18.24 9.48H25.14V13.33H18.21L23.14 18.12L20.43 20.85L13.73 14.12L7.04 20.85L4.32 18.13L9.26 13.34H2.33V9.48H9.23L4.32 4.8L7.04 2.03L11.71 6.83V0H15.76V6.83ZM11.71 18.85H15.76V28H11.71V18.85Z" />
                </svg>
            </button>
            <button class="lt-topbar-btn">
                <!-- Icon share/upload -->
                <svg viewBox="0 0 256 256" fill="currentColor">
                    <path
                        d="M216,112v96a16,16,0,0,1-16,16H56a16,16,0,0,1-16-16V112A16,16,0,0,1,56,96H80a8,8,0,0,1,0,16H56v96H200V112H176a8,8,0,0,1,0-16h24A16,16,0,0,1,216,112ZM93.66,69.66,120,43.31V136a8,8,0,0,0,16,0V43.31l26.34,26.35a8,8,0,0,0,11.32-11.32l-40-40a8,8,0,0,0-11.32,0l-40,40A8,8,0,0,0,93.66,69.66Z" />
                </svg>
            </button>
        </div>

        <!-- PROFIL -->
        <div class="text-center px-4 pt-3 pb-4">
            <img src="https://ugc.production.linktr.ee/P9t9FSwnRhKXobRH1U8x_UHSVxVbH96TSKCvi?io=true&size=avatar-v3_0"
                alt="ITS Student Choir" class="lt-avatar mb-3">
            <h1 class="lt-name mb-0">ITS Student Choir - PSM ITS</h1>
        </div>

        <!-- LINK-LINK -->
        <div class="px-3 pb-4" style="display: flex; flex-direction: column; gap: 0.875rem;">

            <!-- 1. YouTube -->
            <a href="https://www.youtube.com/@itsstudentchoir1661?sub_confirmation=1" target="_blank" class="lt-btn">
                <span class="lt-btn-thumb">
                    <svg viewBox="0 0 24 24">
                        <path
                            d="M23.5 6.2a3.01 3.01 0 0 0-2.1-2.1C19.5 3.6 12 3.6 12 3.6s-7.5 0-9.4.5A3.01 3.01 0 0 0 .5 6.2 31.3 31.3 0 0 0 0 12a31.3 31.3 0 0 0 .5 5.8A3.01 3.01 0 0 0 2.6 19.9C4.5 20.4 12 20.4 12 20.4s7.5 0 9.4-.5a3.01 3.01 0 0 0 2.1-2.1A31.3 31.3 0 0 0 24 12a31.3 31.3 0 0 0-.5-5.8zM9.8 15.5V8.5l6.3 3.5-6.3 3.5z" />
                    </svg>
                </span>
                YouTube ITS Student Choir
                <span class="lt-btn-dots">⋮</span>
            </a>

            <!-- 2. Email -->
            <a href="mailto:psmits.itsstudentchoir@gmail.com" class="lt-btn">
                <span class="lt-btn-thumb">
                    <svg viewBox="0 0 24 24">
                        <path
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c1.85 0 3.57-.5 5.04-1.38l-1.5-1.5C14.42 19.69 13.24 20 12 20c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8v1c0 .55-.45 1-1 1s-1-.45-1-1v-1c0-3.31-2.69-6-6-6S6 8.69 6 12s2.69 6 6 6c1.66 0 3.16-.68 4.24-1.76.65.98 1.73 1.76 3.01 1.76 1.66 0 3-1.34 3-3v-3c0-5.52-4.48-10-10-10zm0 14c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z" />
                    </svg>
                </span>
                Email ITS Student Choir
                <span class="lt-btn-dots">⋮</span>
            </a>

            <!-- 3. LINE -->
            <a href="https://lin.ee/fs6igtu" target="_blank" class="lt-btn">
                <span class="lt-btn-thumb">
                    <img src="https://ugc.production.linktr.ee/QrBOjOhcSj6fFGZMQJM0_og_image.png?io=true&size=thumbnail-stack_v1_0"
                        alt="LINE">
                </span>
                LINE ITS Student Choir
                <span class="lt-btn-dots">⋮</span>
            </a>

            <!-- 4. X (Twitter) -->
            <a href="https://x.com/itschoir" target="_blank" class="lt-btn">
                <span class="lt-btn-thumb">
                    <svg viewBox="0 0 24 24">
                        <path
                            d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.744l7.73-8.835L1.254 2.25H8.08l4.259 5.629 5.905-5.629zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                    </svg>
                </span>
                X PSM ITS
                <span class="lt-btn-dots">⋮</span>
            </a>

            <!-- 5. TikTok -->
            <a href="https://www.tiktok.com/@its.choir" target="_blank" class="lt-btn">
                <span class="lt-btn-thumb">
                    <img src="https://ugc.production.linktr.ee/OR3TKfXxQiyEhKVoNUQJ_ccb4ea45101eef7d67628bef88bc1500~c5_720x720.jpg?io=true&size=thumbnail-stack_v1_0"
                        alt="TikTok">
                </span>
                its.choir (@its.choir) | TikTok
                <span class="lt-btn-dots">⋮</span>
            </a>

            <!-- Header teks -->
            <p class="lt-link-header mb-10 pt-2">Paduan Suara Mahasiswa ITS</p>

        </div>

        <!-- FOOTER -->
        <div class="pb-0 pt-3 text-center">
            <a href="https://linktr.ee/register" target="_blank" class="lt-join-btn">
                Join itsstudentchoir on Linktree
            </a>
            <div class="d-flex justify-content-center flex-wrap" style="gap: 0.25rem; font-size: 0.625rem;">
                <a href="#" class="lt-footer-link" onclick="return false;">Cookie Preferences</a>
                <span style="color: rgba(255,255,255,0.35); font-size: 0.625rem;">•</span>
                <a href="#" class="lt-footer-link" onclick="return false;">Report</a>
                <span style="color: rgba(255,255,255,0.35); font-size: 0.625rem;">•</span>
                <a href="#" class="lt-footer-link" onclick="return false;">Privacy</a>
            </div>
        </div>

    </div>

</body>

</html>
