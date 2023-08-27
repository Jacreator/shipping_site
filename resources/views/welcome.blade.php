<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Skyway Express</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, sans-serif;
            font-feature-settings: normal
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::-webkit-backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .relative {
            position: relative
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mx-6 {
            margin-left: 1.5rem;
            margin-right: 1.5rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-16 {
            margin-top: 4rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .mr-1 {
            margin-right: 0.25rem
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .grid {
            display: grid
        }

        .h-16 {
            height: 4rem
        }

        .h-7 {
            height: 1.75rem
        }

        .h-6 {
            height: 1.5rem
        }

        .h-5 {
            height: 1.25rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-auto {
            width: auto
        }

        .w-16 {
            width: 4rem
        }

        .w-7 {
            width: 1.75rem
        }

        .w-6 {
            width: 1.5rem
        }

        .w-5 {
            width: 1.25rem
        }

        .max-w-7xl {
            max-width: 80rem
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .gap-6 {
            gap: 1.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .self-center {
            align-self: center
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-red-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity))
        }

        .bg-dots-darker {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")
        }

        .from-gray-700\/50 {
            --tw-gradient-from: rgb(55 65 81 / 0.5);
            --tw-gradient-to: rgb(55 65 81 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-transparent {
            --tw-gradient-to: rgb(0 0 0 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)
        }

        .bg-center {
            background-position: center
        }

        .stroke-red-500 {
            stroke: #ef4444
        }

        .stroke-gray-400 {
            stroke: #9ca3af
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .font-semibold {
            font-weight: 600
        }

        .leading-relaxed {
            line-height: 1.625
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-2xl {
            --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-gray-500\/20 {
            --tw-shadow-color: rgb(107 114 128 / 0.2);
            --tw-shadow: var(--tw-shadow-colored)
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .selection\:bg-red-500 *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-red-500::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-gray-900:hover {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .hover\:text-gray-700:hover {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .focus\:rounded-sm:focus {
            border-radius: 0.125rem
        }

        .focus\:outline:focus {
            outline-style: solid
        }

        .focus\:outline-2:focus {
            outline-width: 2px
        }

        .focus\:outline-red-500:focus {
            outline-color: #ef4444
        }

        .group:hover .group-hover\:stroke-gray-600 {
            stroke: #4b5563
        }

        .z-10 {
            z-index: 10
        }

        @media (prefers-reduced-motion: no-preference) {
            .motion-safe\:hover\:scale-\[1\.01\]:hover {
                --tw-scale-x: 1.01;
                --tw-scale-y: 1.01;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-800\/50 {
                background-color: rgb(31 41 55 / 0.5)
            }

            .dark\:bg-red-800\/20 {
                background-color: rgb(153 27 27 / 0.2)
            }

            .dark\:bg-dots-lighter {
                background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")
            }

            .dark\:bg-gradient-to-bl {
                background-image: linear-gradient(to bottom left, var(--tw-gradient-stops))
            }

            .dark\:stroke-gray-600 {
                stroke: #4b5563
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:shadow-none {
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .dark\:ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .dark\:ring-inset {
                --tw-ring-inset: inset
            }

            .dark\:ring-white\/5 {
                --tw-ring-color: rgb(255 255 255 / 0.05)
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .group:hover .dark\:group-hover\:stroke-gray-400 {
                stroke: #9ca3af
            }
        }

        @media (min-width: 640px) {
            .sm\:fixed {
                position: fixed
            }

            .sm\:top-0 {
                top: 0px
            }

            .sm\:right-0 {
                right: 0px
            }

            .sm\:ml-0 {
                margin-left: 0px
            }

            .sm\:flex {
                display: flex
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-center {
                justify-content: center
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-8 {
                padding: 2rem
            }
        }
    </style>
</head>
{{-- <body class="antialiased">
        
    </body> --}}

{{-- Template --}}

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="bg-white show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="p-0 container-fluid bg-light">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="px-5 col-lg-7 text-start">
                <div class="py-3 h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>8/4-6 Junction St, Auburn NSW 2144, Australia</small>
                </div>
                <div class="py-3 h-100 d-inline-flex align-items-center">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            {{-- <div
                class="relative min-h-screen bg-gray-100 bg-center sm:flex sm:justify-center sm:items-center bg-dots-darker dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            </div> --}}
            <div class="px-5 col-lg-5 text-end">
                <div class="py-3 h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+140 533 55856</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="bg-white btn btn-sm-square text-primary me-1" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="bg-white btn btn-sm-square text-primary me-1" href=""><i
                            class="fab fa-twitter"></i></a>
                    <a class="bg-white btn btn-sm-square text-primary me-1" href=""><i
                            class="fab fa-linkedin-in"></i></a>
                    <a class="bg-white btn btn-sm-square text-primary me-0" href=""><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="p-0 bg-white shadow navbar navbar-expand-lg navbar-light sticky-top">
        <a href="index.html" class="px-4 navbar-brand d-flex align-items-center px-lg-5">
            <h2 class="m-0 text-primary"><i class="fas fa-shipping-fast"></i>SkyWay Express</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="p-4 navbar-nav ms-auto p-lg-0">
                <a href="#" class="nav-item nav-link active">Home</a>
                <a href="#about-us" class="nav-item nav-link">About</a>
                <a href="#service-us" class="nav-item nav-link">Services</a>
                {{-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="m-0 dropdown-menu fade-up">
                        <a href="booking.html" class="dropdown-item">Booking</a>
                        <a href="team.html" class="dropdown-item">Technicians</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                         <a href="404.html" class="dropdown-item">404 Page</a> 
                    </div>
                </div> --}}
                <a href="#contact-us" class="nav-item nav-link">Contact</a>
            </div>
            <div id="google_translate_element" class="btn btn-primary"></div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="p-0 mb-5 container-fluid">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/plane.jpeg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="text-center col-10 col-lg-7 text-lg-start">
                                    <h6 class="mb-3 text-white text-uppercase animated slideInDown">// Delivery
                                        Servicing //
                                    </h6>
                                    <h1 class="pb-3 mb-4 text-white display-3 animated slideInDown">Move Your Goods
                                        FAST, SECURE and CHEAP</h1>
                                    <a href="" class="px-5 py-3 btn btn-primary animated slideInDown">Learn
                                        More<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="img/forklift.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/ship_flipped.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="text-center col-10 col-lg-7 text-lg-start">
                                    <h6 class="mb-3 text-white text-uppercase animated slideInDown">// Sea Ways //
                                    </h6>
                                    <h1 class="pb-3 mb-4 text-white display-3 animated slideInDown">Qualified Sea Experts</h1>
                                    <a href="" class="px-5 py-3 btn btn-primary animated slideInDown">Learn
                                        More<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="img/truck_flipped.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="py-5 container-xxl">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="px-4 py-5 d-flex">
                        <i class="flex-shrink-0 fa fa-certificate fa-3x text-primary"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Quality Servicing</h5>
                            <p>We're committed to delivering not just packages, but also peace of mind. With meticulous
                                handling, real-time tracking, and a dedication to excellence, we ensure your items
                                arrive on time and in perfect condition. Experience quality servicing with every
                                delivery.</p>
                            <a class="text-secondary border-bottom" href="">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="px-4 py-5 d-flex bg-light">
                        <i class="flex-shrink-0 fa fa-users-cog fa-3x text-primary"></i>
                        <div class="ps-4">
                            <h5 class="mb-3 text-center ">Expert Workers</h5>
                            <p>Our team of skilled professionals are driven by expertise and a passion for excellence.
                                our expert workers ensure every task is handled with precision, delivering results that
                                speak for themselves. Trust in our experienced team to bring your goods to the expected
                                location on time.</p>
                            <a class="text-secondary border-bottom" href="">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="px-4 py-5 d-flex">
                        <i class="flex-shrink-0 fa fa-tools fa-3x text-primary"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Modern Equipment</h5>
                            <p>Equipped with state-of-the-art technology and modern tools, we stands at the forefront of
                                efficiency and precision. Our commitment to utilizing cutting-edge equipment ensures
                                that every project is executed with a modern touch, resulting in high-quality outcomes
                                that exceed expectations</p>
                            <a class="text-secondary border-bottom" href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="py-5 container-xxl">
        <div class="container">
            <div class="row g-5">
                <div class="pt-4 col-lg-6" style="min-height: 400px;">
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/trucks.jpeg"
                            style="object-fit: cover;" alt="">
                        <div class="top-0 px-5 py-4 position-absolute end-0 mt-n4 me-n4"
                            style="background: rgba(0, 0, 0, .08);">
                            <h1 class="mb-0 text-white display-4">20 <span class="fs-4">Years</span></h1>
                            <h4 class="text-white">Experience</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h6 class="text-primary text-uppercase">// About Us //</h6>
                    <h1 class="mb-4"><span class="text-primary">Skyway</span> Is The Best Place to use for
                        delivering services
                    </h1>
                    <p class="mb-4">We redefine the art of delivery. With a dedicated focus on reliability and speed,
                        we ensure your packages reach their destination on time, every time. Our well-trained team and
                        advanced tracking systems guarantee a seamless experience, keeping you informed at every step.
                        Experience top-tier delivery solutions that prioritize your convenience and peace of mind.</p>
                    <div class="pb-3 mb-3 row g-4">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex">
                                <div class="flex-shrink-0 mt-1 bg-light d-flex align-items-center justify-content-center"
                                    style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">01</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Unparalleled Delivery Expertise</h6>
                                    <span>We go beyond the ordinary, offering a professional and expert approach to
                                        every delivery</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex">
                                <div class="flex-shrink-0 mt-1 bg-light d-flex align-items-center justify-content-center"
                                    style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">02</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Quality Servicing Center</h6>
                                    <span>With a focus on quality servicing, we ensure your packages are handled with
                                        utmost care from pick-up to drop-off</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                            <div class="d-flex">
                                <div class="flex-shrink-0 mt-1 bg-light d-flex align-items-center justify-content-center"
                                    style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">03</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Awards Winning Workers</h6>
                                    <span>Their dedication and expertise ensure that every delivery is executed with
                                        precision, earning us recognition and trust within the industry</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="" class="px-5 py-3 btn btn-primary">Read More<i
                            class="fa fa-arrow-right ms-3"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Fact Start -->
    <div class="py-5 my-5 container-fluid fact bg-dark">
        <div class="container">
            <div class="row g-4">
                <div class="text-center col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <i class="mb-3 text-white fa fa-check fa-2x"></i>
                    <h2 class="mb-2 text-white" data-toggle="counter-up">20</h2>
                    <p class="mb-0 text-white">Years Experience</p>
                </div>
                <div class="text-center col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <i class="mb-3 text-white fa fa-users-cog fa-2x"></i>
                    <h2 class="mb-2 text-white" data-toggle="counter-up">1091</h2>
                    <p class="mb-0 text-white">Expert Technicians</p>
                </div>
                <div class="text-center col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <i class="mb-3 text-white fa fa-users fa-2x"></i>
                    <h2 class="mb-2 text-white" data-toggle="counter-up">6524</h2>
                    <p class="mb-0 text-white">Satisfied Clients</p>
                </div>
                <div class="text-center col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <i class="mb-3 text-white fa fa-car fa-2x"></i>
                    <h2 class="mb-2 text-white" data-toggle="counter-up">7021</h2>
                    <p class="mb-0 text-white">Compleate Projects</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->


    <!-- Service Start -->
    <div class="py-5 container-xxl service">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Our Services //</h6>
                <h1 class="mb-5">Explore Our Services</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav w-100 nav-pills me-4">
                        <button class="p-4 mb-4 nav-link w-100 d-flex align-items-center text-start active"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <i class="fa fa-car-side fa-2x me-3"></i>
                            <h4 class="m-0">Pick-up </h4>
                        </button>
                        <button class="p-4 mb-4 nav-link w-100 d-flex align-items-center text-start"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <i class="fa fa-map-pin fa-2x me-3"></i>
                            <h4 class="m-0">Package Tracking</h4>
                        </button>
                        <button class="p-4 mb-4 nav-link w-100 d-flex align-items-center text-start"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <i class="fa fa-door-open fa-2x me-3"></i>
                            <h4 class="m-0">Door Delivery</h4>
                        </button>
                        <button class="p-4 mb-0 nav-link w-100 d-flex align-items-center text-start"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <i class="fa fa-user fa-2x me-3"></i>
                            <h4 class="m-0">Good Customer Support</h4>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/doorstep.jpeg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Over Two Decades of Delivery Mastery</h3>
                                    <p class="mb-4">With over 20 years of unwavering commitment to delivery
                                        servicing, we bring a legacy of experience that speaks for itself. Our journey
                                        is defined by reliability, efficiency, and a deep understanding of customer
                                        needs, making us your trusted choice for seamless deliveries backed by decades
                                        of expertise.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                    <a href="" class="px-5 py-3 mt-3 btn btn-primary">Read More<i
                                            class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-2.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">20 Years Of Experience In Delivery Service</h3>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                                        Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem
                                        sit clita duo justo magna dolore erat amet</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                    <a href="" class="px-5 py-3 mt-3 btn btn-primary">Read More<i
                                            class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-3.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">15 Years Of Experience In Auto Servicing</h3>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                                        Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem
                                        sit clita duo justo magna dolore erat amet</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                    <a href="" class="px-5 py-3 mt-3 btn btn-primary">Read More<i
                                            class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-4.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">15 Years Of Experience In Auto Servicing</h3>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                                        Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem
                                        sit clita duo justo magna dolore erat amet</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                    <a href="" class="px-5 py-3 mt-3 btn btn-primary">Read More<i
                                            class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Booking Start -->
    <div class="my-5 container-fluid bg-secondary booking wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="py-5 col-lg-6">
                    <div class="py-5">
                        <h1 class="mb-4 text-white">Certified and Award Winning Car Repair Service Provider</h1>
                        <p class="mb-0 text-white">Experience seamless convenience with our goods delivery service! Say
                            goodbye to the hassle of navigating crowded stores and heavy packages. With just a few
                            clicks, you can schedule a pickup and have your items delivered to your doorstep. Our
                            reliable and efficient team ensures that your goods are handled with care and delivered on
                            time. Plus, enjoy the peace of mind that comes with real-time tracking, so you're always in
                            the know about your delivery's progress. Make life easier – book your delivery today and let
                            us take care of the rest!</p>
                    </div>
                </div>
                <div class="col-lg-6" id="contact-us">
                    <div class="p-5 text-center bg-primary h-100 d-flex flex-column justify-content-center wow zoomIn"
                        data-wow-delay="0.6s">
                        <h1 class="mb-4 text-white">Make a Pick-up</h1>
                        <form method="POST" action="{{ route('make.booking') }}">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="border-0 form-control" name="name" required placeholder="Your Name"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="border-0 form-control" name="email" required placeholder="Your Email"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="border-0 form-control"
                                        placeholder="Your Phone Number" name="phone" style="height: 55px;" required>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" class="border-0 form-control datetimepicker-input"
                                            placeholder="Pick-up Date" name="pick" data-target="#date1"
                                            data-toggle="datetimepicker" style="height: 55px;" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <textarea class="border-0 form-control" name="address" placeholder="Home Address" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="py-3 btn btn-secondary w-100" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->


    <!-- Team Start -->
    <div class="py-5 container-xxl" id="about-us">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Our Technicians //</h6>
                <h1 class="mb-5">Our Expert Technicians</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                            <div class="top-0 team-overlay position-absolute start-0 w-100 h-100">
                                <a class="mx-1 btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="mx-1 btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="mx-1 btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4 text-center bg-light">
                            <h5 class="mb-0 fw-bold">Andrew Jackson</h5>
                            <small>Transportation Coordinator</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                            <div class="top-0 team-overlay position-absolute start-0 w-100 h-100">
                                <a class="mx-1 btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="mx-1 btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="mx-1 btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4 text-center bg-light">
                            <h5 class="mb-0 fw-bold">Ethan Smith</h5>
                            <small>Customs Broker</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                            <div class="top-0 team-overlay position-absolute start-0 w-100 h-100">
                                <a class="mx-1 btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="mx-1 btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="mx-1 btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4 text-center bg-light">
                            <h5 class="mb-0 fw-bold">Lucas Williams</h5>
                            <small>Warehouse Supervisor</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                            <div class="top-0 team-overlay position-absolute start-0 w-100 h-100">
                                <a class="mx-1 btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="mx-1 btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="mx-1 btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4 text-center bg-light">
                            <h5 class="mb-0 fw-bold">Benjamin Henry</h5>
                            <small>Logistics Manager</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="py-5 container-xxl wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="text-primary text-uppercase">// Testimonial //</h6>
                <h1 class="mb-5">Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="text-center testimonial-item">
                    <img class="p-2 mx-auto mb-3 bg-light rounded-circle" src="img/testimonial-1.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Ava Thompson</h5>
                    {{-- <p>Profession</p> --}}
                    <div class="p-4 text-center testimonial-text bg-light">
                        <p class="mb-0">I was incredibly impressed with skyway xpress' efficient and reliable
                            services. They ensured my shipments arrived ahead of schedule, and their proactive
                            communication kept me informed every step of the way.</p>
                    </div>
                </div>
                <div class="text-center testimonial-item">
                    <img class="p-2 mx-auto mb-3 bg-light rounded-circle" src="img/testimonial-2.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Jackson Oliver</h5>
                    {{-- <p>Profession</p> --}}
                    <div class="p-4 text-center testimonial-text bg-light">
                        <p class="mb-0">The seamless experience I had with skyway xpress truly exceeded my
                            expectations. Their attention to detail and dedication to meeting my unique shipping
                            requirements showcased their commitment to exceptional customer service.</p>
                    </div>
                </div>
                {{-- <div class="text-center testimonial-item">
                    <img class="p-2 mx-auto mb-3 bg-light rounded-circle" src="img/testimonial-3.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                      <p>Profession</p> 
                    <div class="p-4 text-center testimonial-text bg-light">
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                            eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div> --}}
                <div class="text-center testimonial-item">
                    <img class="p-2 mx-auto mb-3 bg-light rounded-circle" src="img/testimonial-4.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Mia Williams</h5>
                    {{-- <p>Profession</p> --}}
                    <div class="p-4 text-center testimonial-text bg-light">
                        <p class="mb-0">skyway xpress proved to be a game-changer for my business. Their streamlined
                            processes and professional handling of my goods demonstrated their expertise in the
                            logistics industry.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="pt-5 mt-5 container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="mb-4 text-light">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>8/4-6 Junction St, Auburn NSW 2144, Australia</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+140 533 55856</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>skywayxpressdel@outlook.com</p>
                    <div class="pt-2 d-flex">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="mb-4 text-light">Opening Hours</h4>
                    <h6 class="text-light">Monday - Friday:</h6>
                    <p class="mb-4">09.00 AM - 09.00 PM</p>
                    <h6 class="text-light">Saturday - Sunday:</h6>
                    <p class="mb-0">09.00 AM - 12.00 PM</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="mb-4 text-light">Services</h4>
                    <a class="btn btn-link" href="">Pick-up</a>
                    <a class="btn btn-link" href="">Package Tracking</a>
                    <a class="btn btn-link" href="">Door Delivery</a>
                    <a class="btn btn-link" href="">Good Customer Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="mb-4 text-light">Newsletter</h4>
                    <p>Submit your email to join our weekly news letter.</p>
                    <div class="mx-auto position-relative" style="max-width: 400px;">
                        <input class="py-3 border-0 form-control w-100 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="top-0 py-2 mt-2 btn btn-primary position-absolute end-0 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="mb-3 text-center col-md-6 text-md-start mb-md-0">
                        &copy; <a class="border-bottom" href="#">Skyway xpress</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">Codex</a>
                    </div>
                    <div class="text-center col-md-6 text-md-end">
                        <div class="footer-menu">
                            <a href="#">Home</a>
                            <a href="#">Cookies</a>
                            <a href="#">Help</a>
                            <a href="#">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                    pageLanguage: 'en',
                    layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL,
                    autoDisplay: false,
                    
                    gaTrack: true,
                    gaId: 'YOUR_API_KEY'
                },
                'google_translate_element'
            );
        }
    </script>
</body>

</html>
