<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Laravel</title>

        @vite(['resources/css/app.css','resources/js/app.js'])

        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link
            href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap"
            rel="stylesheet"
        />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
            *,
            ::after,
            ::before {
                box-sizing: border-box;
                border-width: 0;
                border-style: solid;
                border-color: #e5e7eb;
            }
            ::after,
            ::before {
                --tw-content: "";
            }
            html {
                line-height: 1.5;
                -webkit-text-size-adjust: 100%;
                -moz-tab-size: 4;
                tab-size: 4;
                font-family: Figtree, sans-serif;
                font-feature-settings: normal;
            }
            body {
                margin: 0;
                line-height: inherit;
            }
            hr {
                height: 0;
                color: inherit;
                border-top-width: 1px;
            }
            abbr:where([title]) {
                -webkit-text-decoration: underline dotted;
                text-decoration: underline dotted;
            }
            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-size: inherit;
                font-weight: inherit;
            }
            a {
                color: inherit;
                text-decoration: inherit;
            }
            b,
            strong {
                font-weight: bolder;
            }
            code,
            kbd,
            pre,
            samp {
                font-family: ui-monospace, SFMono-Regular, Menlo, Monaco,
                    Consolas, "Liberation Mono", "Courier New", monospace;
                font-size: 1em;
            }
            small {
                font-size: 80%;
            }
            sub,
            sup {
                font-size: 75%;
                line-height: 0;
                position: relative;
                vertical-align: baseline;
            }
            sub {
                bottom: -0.25em;
            }
            sup {
                top: -0.5em;
            }
            table {
                text-indent: 0;
                border-color: inherit;
                border-collapse: collapse;
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
                padding: 0;
            }
            button,
            select {
                text-transform: none;
            }
            [type="button"],
            [type="reset"],
            [type="submit"],
            button {
                -webkit-appearance: button;
                background-color: transparent;
                background-image: none;
            }
            :-moz-focusring {
                outline: auto;
            }
            :-moz-ui-invalid {
                box-shadow: none;
            }
            progress {
                vertical-align: baseline;
            }
            ::-webkit-inner-spin-button,
            ::-webkit-outer-spin-button {
                height: auto;
            }
            [type="search"] {
                -webkit-appearance: textfield;
                outline-offset: -2px;
            }
            ::-webkit-search-decoration {
                -webkit-appearance: none;
            }
            ::-webkit-file-upload-button {
                -webkit-appearance: button;
                font: inherit;
            }
            summary {
                display: list-item;
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
                margin: 0;
            }
            fieldset {
                margin: 0;
                padding: 0;
            }
            legend {
                padding: 0;
            }
            menu,
            ol,
            ul {
                list-style: none;
                margin: 0;
                padding: 0;
            }
            textarea {
                resize: vertical;
            }
            input::placeholder,
            textarea::placeholder {
                opacity: 1;
                color: #9ca3af;
            }
            [role="button"],
            button {
                cursor: pointer;
            }
            :disabled {
                cursor: default;
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
                vertical-align: middle;
            }
            img,
            video {
                max-width: 100%;
                height: auto;
            }
            [hidden] {
                display: none;
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
                --tw-backdrop-sepia: ;
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
                --tw-backdrop-sepia: ;
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
                --tw-backdrop-sepia: ;
            }
            .relative {
                position: relative;
            }
            .mx-auto {
                margin-left: auto;
                margin-right: auto;
            }
            .mx-6 {
                margin-left: 1.5rem;
                margin-right: 1.5rem;
            }
            .ml-4 {
                margin-left: 1rem;
            }
            .mt-16 {
                margin-top: 4rem;
            }
            .mt-6 {
                margin-top: 1.5rem;
            }
            .mt-4 {
                margin-top: 1rem;
            }
            .-mt-px {
                margin-top: -1px;
            }
            .mr-1 {
                margin-right: 0.25rem;
            }
            .flex {
                display: flex;
            }
            .inline-flex {
                display: inline-flex;
            }
            .grid {
                display: grid;
            }
            .h-16 {
                height: 4rem;
            }
            .h-7 {
                height: 1.75rem;
            }
            .h-6 {
                height: 1.5rem;
            }
            .h-5 {
                height: 1.25rem;
            }
            .min-h-screen {
                min-height: 100vh;
            }
            .w-auto {
                width: auto;
            }
            .w-16 {
                width: 4rem;
            }
            .w-7 {
                width: 1.75rem;
            }
            .w-6 {
                width: 1.5rem;
            }
            .w-5 {
                width: 1.25rem;
            }
            .max-w-7xl {
                max-width: 80rem;
            }
            .shrink-0 {
                flex-shrink: 0;
            }
            .scale-100 {
                --tw-scale-x: 1;
                --tw-scale-y: 1;
                transform: translate(
                        var(--tw-translate-x),
                        var(--tw-translate-y)
                    )
                    rotate(var(--tw-rotate)) skewX(var(--tw-skew-x))
                    skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x))
                    scaleY(var(--tw-scale-y));
            }
            .grid-cols-1 {
                grid-template-columns: repeat(1, minmax(0, 1fr));
            }
            .items-center {
                align-items: center;
            }
            .justify-center {
                justify-content: center;
            }
            .gap-6 {
                gap: 1.5rem;
            }
            .gap-4 {
                gap: 1rem;
            }
            .self-center {
                align-self: center;
            }
            .rounded-lg {
                border-radius: 0.5rem;
            }
            .rounded-full {
                border-radius: 9999px;
            }
            .bg-gray-100 {
                --tw-bg-opacity: 1;
                background-color: rgb(243 244 246 / var(--tw-bg-opacity));
            }
            .bg-white {
                --tw-bg-opacity: 1;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity));
            }
            .bg-red-50 {
                --tw-bg-opacity: 1;
                background-color: rgb(254 242 242 / var(--tw-bg-opacity));
            }
            .bg-dots-darker {
                background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
            }
            .from-gray-700\/50 {
                --tw-gradient-from: rgb(55 65 81 / 0.5);
                --tw-gradient-to: rgb(55 65 81 / 0);
                --tw-gradient-stops: var(--tw-gradient-from),
                    var(--tw-gradient-to);
            }
            .via-transparent {
                --tw-gradient-to: rgb(0 0 0 / 0);
                --tw-gradient-stops: var(--tw-gradient-from), transparent,
                    var(--tw-gradient-to);
            }
            .bg-center {
                background-position: center;
            }
            .stroke-red-500 {
                stroke: #ef4444;
            }
            .stroke-gray-400 {
                stroke: #9ca3af;
            }
            .p-6 {
                padding: 1.5rem;
            }
            .px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }
            .text-center {
                text-align: center;
            }
            .text-right {
                text-align: right;
            }
            .text-xl {
                font-size: 1.25rem;
                line-height: 1.75rem;
            }
            .text-sm {
                font-size: 0.875rem;
                line-height: 1.25rem;
            }
            .font-semibold {
                font-weight: 600;
            }
            .leading-relaxed {
                line-height: 1.625;
            }
            .text-gray-600 {
                --tw-text-opacity: 1;
                color: rgb(75 85 99 / var(--tw-text-opacity));
            }
            .text-gray-900 {
                --tw-text-opacity: 1;
                color: rgb(17 24 39 / var(--tw-text-opacity));
            }
            .text-gray-500 {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity));
            }
            .underline {
                -webkit-text-decoration-line: underline;
                text-decoration-line: underline;
            }
            .antialiased {
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }
            .shadow-2xl {
                --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
                --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
                    var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }
            .shadow-gray-500\/20 {
                --tw-shadow-color: rgb(107 114 128 / 0.2);
                --tw-shadow: var(--tw-shadow-colored);
            }
            .transition-all {
                transition-property: all;
                transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                transition-duration: 150ms;
            }
            .selection\:bg-red-500 *::selection {
                --tw-bg-opacity: 1;
                background-color: rgb(239 68 68 / var(--tw-bg-opacity));
            }
            .selection\:text-white *::selection {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity));
            }
            .selection\:bg-red-500::selection {
                --tw-bg-opacity: 1;
                background-color: rgb(239 68 68 / var(--tw-bg-opacity));
            }
            .selection\:text-white::selection {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity));
            }
            .hover\:text-gray-900:hover {
                --tw-text-opacity: 1;
                color: rgb(17 24 39 / var(--tw-text-opacity));
            }
            .hover\:text-gray-700:hover {
                --tw-text-opacity: 1;
                color: rgb(55 65 81 / var(--tw-text-opacity));
            }
            .focus\:rounded-sm:focus {
                border-radius: 0.125rem;
            }
            .focus\:outline:focus {
                outline-style: solid;
            }
            .focus\:outline-2:focus {
                outline-width: 2px;
            }
            .focus\:outline-red-500:focus {
                outline-color: #ef4444;
            }
            .group:hover .group-hover\:stroke-gray-600 {
                stroke: #4b5563;
            }
            .z-10 {
                z-index: 10;
            }
            @media (prefers-reduced-motion: no-preference) {
                .motion-safe\:hover\:scale-\[1\.01\]:hover {
                    --tw-scale-x: 1.01;
                    --tw-scale-y: 1.01;
                    transform: translate(
                            var(--tw-translate-x),
                            var(--tw-translate-y)
                        )
                        rotate(var(--tw-rotate)) skewX(var(--tw-skew-x))
                        skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x))
                        scaleY(var(--tw-scale-y));
                }
            }
            @media (prefers-color-scheme: dark) {
                .dark\:bg-gray-900 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(17 24 39 / var(--tw-bg-opacity));
                }
                .dark\:bg-gray-800\/50 {
                    background-color: rgb(31 41 55 / 0.5);
                }
                .dark\:bg-red-800\/20 {
                    background-color: rgb(153 27 27 / 0.2);
                }
                .dark\:bg-dots-lighter {
                    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
                }
                .dark\:bg-gradient-to-bl {
                    background-image: linear-gradient(
                        to bottom left,
                        var(--tw-gradient-stops)
                    );
                }
                .dark\:stroke-gray-600 {
                    stroke: #4b5563;
                }
                .dark\:text-gray-400 {
                    --tw-text-opacity: 1;
                    color: rgb(156 163 175 / var(--tw-text-opacity));
                }
                .dark\:text-white {
                    --tw-text-opacity: 1;
                    color: rgb(255 255 255 / var(--tw-text-opacity));
                }
                .dark\:shadow-none {
                    --tw-shadow: 0 0 #0000;
                    --tw-shadow-colored: 0 0 #0000;
                    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
                        var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
                }
                .dark\:ring-1 {
                    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0
                        var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0
                        calc(1px + var(--tw-ring-offset-width))
                        var(--tw-ring-color);
                    box-shadow: var(--tw-ring-offset-shadow),
                        var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
                }
                .dark\:ring-inset {
                    --tw-ring-inset: inset;
                }
                .dark\:ring-white\/5 {
                    --tw-ring-color: rgb(255 255 255 / 0.05);
                }
                .dark\:hover\:text-white:hover {
                    --tw-text-opacity: 1;
                    color: rgb(255 255 255 / var(--tw-text-opacity));
                }
                .group:hover .dark\:group-hover\:stroke-gray-400 {
                    stroke: #9ca3af;
                }
            }
            @media (min-width: 640px) {
                .sm\:fixed {
                    position: fixed;
                }
                .sm\:top-0 {
                    top: 0px;
                }
                .sm\:right-0 {
                    right: 0px;
                }
                .sm\:ml-0 {
                    margin-left: 0px;
                }
                .sm\:flex {
                    display: flex;
                }
                .sm\:items-center {
                    align-items: center;
                }
                .sm\:justify-center {
                    justify-content: center;
                }
                .sm\:justify-between {
                    justify-content: space-between;
                }
                .sm\:text-left {
                    text-align: left;
                }
                .sm\:text-right {
                    text-align: right;
                }
            }
            @media (min-width: 768px) {
                .md\:grid-cols-2 {
                    grid-template-columns: repeat(2, minmax(0, 1fr));
                }
            }
            @media (min-width: 1024px) {
                .lg\:gap-8 {
                    gap: 2rem;
                }
                .lg\:p-8 {
                    padding: 2rem;
                }
            }
        </style>
        <style>
            nav {
                background: rgba(52, 52, 52, 0.3);
            }
        </style>
    </head>
    <body class="antialiased">
        <nav class="fixed w-full z-20 top-0 start-0">
            <div
                class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 "
            >
                <a
                    href="/"
                    class="flex items-center space-x-3 rtl:space-x-reverse bg-red"
                >
                <div style="background-color: white; box-shadow: 0 8px 10px 0 rgba(0, 0, 0, 0.2); padding: 5px; border: 2px solid white; border-radius: 20px;">
                    <img
                        src="/img/Smartin.png"
                        class="h-8"
                        alt="PT. Smartin Teknologi Sistem"
                    />
                </div>
                </a>
                <div
                    class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse"
                >
                    <button
                        type="button"
                            style="background-color: white; color: black; box-shadow: 0 8px 10px 0 rgba(0, 0, 0, 0.2);"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    >
                        Let's Talk
                    </button>
                    <button
                        data-collapse-toggle="navbar-sticky"
                        type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-sticky"
                        aria-expanded="false"
                    >
                        <span class="sr-only">Open main menu</span>
                        <svg
                            class="w-5 h-5 md:hidden"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 17 14"
                        >
                            <path
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15"
                            />
                        </svg>
                    </button>
                </div>
                <div
                    class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
                    id="navbar-sticky"
                >
                    <ul
                        class="flex flex-col p-4 md:p-0 mt-2 font-medium rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 sl:bg-gray-900 "
                    >
                        <li>
                            <a
                                href="#"
                                class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-white md:p-0 md:dark:text-white font-bold"
                                aria-current="page"
                                >Home</a
                            >
                        </li>
                        <li>
                            <a
                                href="#about"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                                >About Us</a
                            >
                        </li>
                        <li>
                            <a
                                href="#portfolio"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                                >Portfolio</a
                            >
                        </li>
                        <li>
                            <a
                                href="#contact"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                                >Contact Us</a
                            >
                        </li>
                        @if (Route::has('login')) @auth
                        <li>
                            <a
                                href="{{ url('/dashboard') }}"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                                >Home</a
                            >
                        </li>
                        @else
                        <li>
                            <a
                                href="{{ route('login') }}"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                                >Login as Admin</a
                            >
                        </li>
                        @if (Route::has('register'))
        <li>
                <a href="{{ route('register') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Register</a>
            </li> 
                @endif
                        @endauth @endif
                    </ul>
                </div>
            </div>
        </nav>

        <div class="h-[32rem]">
            <div class="bg-top bg-no-repeat bg-cover bg-[url('/img/background.png')]" style="background-image: url('/img/background.png'); background-size: full; background-repeat: no-repeat">
                <div class="container pt-14 max-w-full overflow-hidden">
                    <div class="columns">
                        <div id="background" class="flex font-montserrat text-green-700 justify-left pl-10" style="padding: 100px; padding-top: 270px; padding-bottom: 300px; background-repeat: no-repeat;"> 
                            <div class="flex flex-col w-2/5" style="color: white; max-width: 500px; ">
                                <h1 class="font-bold pb-5 text-xl xl:text-4xl" style="font-size: 33px; font-weight: bold;">Professional IT Consultants</h1><br>
                                <h2 class="text-xs sm:text-base lg:text-lg" style="font-size: 20px">We understand what you need.<br>Your satisfaction is number one for us.</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- OUR SERVICES -->

        <div id="service" class="h-[32rem]" style="">
            <div class="container max-w-full h-full bg-custom-color3 relative">
                <div class="flex flex-row justify-center items-center gap-80" style="padding-top: 40px; padding-bottom: 20px;">
                    <div class="flex flex-col font-montserrat flex justify-center">
                        <div class="flex justify-center" style="padding-bottom: 10px; font-size: 33px; font-weight: bold;">
                            <h2>Our Services</h2>
                        </div >     
                        <div class="flex justify-center" style="margin-bottom: 20px; display: flex; justify-content: center; max-width: 500px; text-align: center;">                       
                            <p>PT. Smartin Teknologi Sistem provide various services to our clients. Solutions range from trading platform, back-office support system, metatrader support, web & application chart tools to web site developments.</p>
                        </div>
                        
                    </div>
                </div>

                <div class="grid grid-cols-3 gap-4" style="margin-top: 20px; margin-left: 80px; margin-right: 80px; margin-bottom: 60px">
                    <div class="">
                            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="#">
                                    <img class="p-8 rounded-t-lg" src="/docs/images/products/apple-watch.png" alt="product image" />
                                </a>
                                <div class="px-5 pb-5">
                                    <a href="#">
                                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h5>
                                    </a>
                                    <div class="flex justify-center mt-2.5 mb-5">
                                        <div class="font-bold flex justify-center space-x-1 rtl:space-x-reverse">
                                            <p>24/7 METATRADER SUPPORT</p>
                                        </div>
                                    </div>
                                    <div class="flex justify-center mt-2.5 mb-5">
                                        <div class="flex justify-center space-x-1 rtl:space-x-reverse" style="text-align: justify;">
                                            <p>• MT4 Installations • MT4 Administration & Configuration • MT4 Data Migration • Data Feeds Setup and Configuration • MT4 Servers Support • Monitoring • 24/5 technical Support • English Support</p>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                    </div>
                    <div class="">
                            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="#">
                                    <img class="p-8 rounded-t-lg" src="/docs/images/products/apple-watch.png" alt="product image" />
                                </a>
                                <div class="px-5 pb-5">
                                    <a href="#">
                                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h5>
                                    </a>
                                    <div class="flex justify-center mt-2.5 mb-5">
                                        <div class="font-bold flex justify-center space-x-1 rtl:space-x-reverse">
                                            <p>NEWS RESEARCH</p>
                                        </div>
                                    </div>
                                    <div class="flex justify-center mt-2.5 mb-5">
                                        <div class="flex justify-center space-x-1 rtl:space-x-reverse" style="text-align: justify;">
                                            <p>Learn how global markets work, how they are interrelated, and how individual companies and sectors can influence their movements.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                    </div>
                    <div class="">
                            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="#">
                                    <img class="p-8 rounded-t-lg" src="/docs/images/products/apple-watch.png" alt="product image" />
                                </a>
                                <div class="px-5 pb-5">
                                    <a href="#">
                                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h5>
                                    </a>
                                    <div class="flex justify-center mt-2.5 mb-5">
                                        <div class="font-bold flex justify-center space-x-1 rtl:space-x-reverse">
                                            <p>ERP SOLUTION</p>
                                        </div>
                                    </div>
                                    <div class="flex justify-center mt-2.5 mb-5">
                                        <div class="flex justify-center space-x-1 rtl:space-x-reverse" style="text-align: justify;">
                                            <p>An integrated suite of business applications that dissolves departmental silos and seamlessly connects your sales, marketing, HR, support, finance, and operations.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                    </div>
                    <div class="">
                            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="#">
                                    <img class="p-8 rounded-t-lg" src="/docs/images/products/apple-watch.png" alt="product image" />
                                </a>
                                <div class="px-5 pb-5">
                                    <a href="#">
                                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h5>
                                    </a>
                                    <div class="flex justify-center mt-2.5 mb-5">
                                        <div class="font-bold flex justify-center space-x-1 rtl:space-x-reverse">
                                            <p>MOBILE APPS DEVELOPMENT</p>
                                        </div>
                                    </div>
                                    <div class="flex justify-center mt-2.5 mb-5">
                                        <div class="flex justify-center space-x-1 rtl:space-x-reverse" style="text-align: justify;">
                                            <p>Best Fast Affordable Custom Android iOS Mobile app Development in Jakarta. Capable of Native / Hybrid app (Java, Swift, Ionic, React Native) development. • iOS & Android • PlatformAPI • Development • UI UX Design</p>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                    </div>
                    <div class="">
                            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="#">
                                    <img class="p-8 rounded-t-lg" src="/docs/images/products/apple-watch.png" alt="product image" />
                                </a>
                                <div class="px-5 pb-5">
                                    <a href="#">
                                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h5>
                                    </a>
                                    <div class="flex justify-center mt-2.5 mb-5">
                                        <div class="font-bold flex justify-center space-x-1 rtl:space-x-reverse">
                                            <p>DIGITAL MARKETING AND SEO</p>
                                        </div>
                                    </div>
                                    <div class="flex justify-center mt-2.5 mb-5">
                                        <div class="flex justify-center space-x-1 rtl:space-x-reverse" style="text-align: justify;">
                                            <p>Services provided include Web Design & Branding, Web Application Development, Ecommerce Development, Content Management Solutions, Mobile Application Development, Internet Marketing, Social Media Marketing, Search Engine Optimization.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                    </div>
                    <div class="">
                            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="#">
                                    <img class="p-8 rounded-t-lg" src="/docs/images/products/apple-watch.png" alt="product image" />
                                </a>
                                <div class="px-5 pb-5">
                                    <a href="#">
                                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h5>
                                    </a>
                                    <div class="flex justify-center mt-2.5 mb-5">
                                        <div class="font-bold flex justify-center space-x-1 rtl:space-x-reverse">
                                            <p>METATRADER INTEGRATION</p>
                                        </div>
                                    </div>
                                    <div class="flex justify-center mt-2.5 mb-5">
                                        <div class="flex justify-center space-x-1 rtl:space-x-reverse" style="text-align: justify;">
                                            <p>The MetaTrader 4 broad functionality can be even wider! Application Program Interface, API allow you to build new functions into the platform, integrate it with other solutions and customize it for a variety of unique tasks.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                    </div>
                    <div class="">
                            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="#">
                                    <img class="p-8 rounded-t-lg" src="/docs/images/products/apple-watch.png" alt="product image" />
                                </a>
                                <div class="px-5 pb-5">
                                    <a href="#">
                                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h5>
                                    </a>
                                    <div class="flex justify-center mt-2.5 mb-5">
                                        <div class="font-bold flex justify-center space-x-1 rtl:space-x-reverse">
                                            <p>METATRADER CRM</p>
                                        </div>
                                    </div>
                                    <div class="flex justify-center mt-2.5 mb-5">
                                        <div class="flex justify-center space-x-1 rtl:space-x-reverse" style="text-align: justify;">
                                            <p>For example, by integrating the platform and the CRM system, you can receive a ready-made business solution providing an entirely new level of functionality. The interfaces allow you to pass any information about a trader to third-party applications.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                    </div>
                    <div class="">
                            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="#">
                                    <img class="p-8 rounded-t-lg" src="/docs/images/products/apple-watch.png" alt="product image" />
                                </a>
                                <div class="px-5 pb-5">
                                    <a href="#">
                                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h5>
                                    </a>
                                    <div class="flex justify-center mt-2.5 mb-5">
                                        <div class="font-bold flex justify-center space-x-1 rtl:space-x-reverse">
                                            <p>WEB AND APPLICATION</p>
                                        </div>
                                    </div>
                                    <div class="flex justify-center mt-2.5 mb-5">
                                        <div class="flex justify-center space-x-1 rtl:space-x-reverse" style="text-align: justify;">
                                            <p>Smartin Teknologi Sistem also offer other services such as FinanceChart, Live Price and Website Development. These services are available either as a Stand-Alone or All-in-One fully hosted services on our servers.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                    </div>                
                </div>
            </div>
        </div>

<!-- ABOUT US -->

        <div id="about" class="h-[32rem]">
            <div class="container max-w-full h-full bg-custom-color3 relative" style="background-color: #2d8659;">
                <div class="flex flex-row justify-center items-center gap-80" style="padding-top: 40px; padding-bottom: 20px; padding-right: 80px; padding-left: 80px;">
                    <div class="flex flex-col font-montserrat flex justify-center">
                        <div style="padding-right: 40px; color: white;">
                            <div style="">
                                <span style="">OUR STORY</span><br>
                                <span style="font-weight: bold;">ABOUT SMARTIN TEKNOLOGI SISTEM</span>
                            </div >     
                            <div class="mt-4"> 
                                <p>PT. Smartin Teknologi Sistem adalah penyedia solusi keuangan terkemuka yang inovatif, fokus pada layanan dan platform 
                                    perdagangan untuk perusahaan pialang institusional dan ritel di berbagai pasar. Kami berkomitmen untuk menyediakan 
                                    solusi teknologi tinggi, menggabungkan pengembangan perangkat lunak dengan manajemen database keuangan real-time. </p>                      
                            </div>
                            <div class="mt-4"> 
                                <p>Umpan balik pengguna sangat berharga bagi kami, dan tim dukungan TI kami selalu siap merespons kebutuhan Anda. 
                                    Salah satu produk unggulan kami adalah solusi pembuatan grafik berbasis web yang memberikan keunggulan 
                                    kompetitif kepada pelanggan kami. </p>                      
                            </div>
                        </div>
                    </div>
                    <div style="width: 1000px; height: 1000px;" class="justfiy-center">
                        <img src="/img/guy.png">
                    </div>
                </div>
            </div>
        </div>

<!-- Portfolio -->

        <div id="portfolio" class="h-[32rem]" style="">
            <div class="container max-w-full h-full bg-custom-color3 relative">
                <div class="flex flex-row justify-center items-center gap-80" style="padding-top: 40px; padding-bottom: 20px;">
                    <div class="flex flex-col font-montserrat flex justify-center">
                        <div class="flex justify-center" style="padding-bottom: 10px; font-size: 33px; font-weight: bold;">
                            <h2>Our Succesful Project</h2>
                        </div >     
                        <div class="flex justify-center" style="margin-bottom: 20px; display: flex; justify-content: center; max-width: 500px; text-align: center;">                       
                            <p>PT. Smartin Teknologi Sistem provide various services to our clients. Solutions range from trading platform, back-office support system, metatrader support, web & application chart tools to web site developments.</p>
                        </div>
                        
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 overflow-scroll" style="margin: 20px; margin-left: 80px; margin-right: 80px; margin-bottom: 60px">
                    @foreach($books as $book)
                    <div class="">          
                            <div class="w-full h-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="#">
                                    <img src="{{ asset($book->image) }}">
                                    <img src="{{ asset('img/' . $book->image) }}" />
                                </a>
                                
                                <div class="px-5 pb-5">
                                    <a href="#">
                                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h5>
                                    </a>
                                    <div class="flex justify-center mt-2.5 mb-5">
                                        <div class="font-bold flex justify-center space-x-1 rtl:space-x-reverse">
                                            <p>{{ $book->title }}</p>
                                        </div>
                                    </div>
                                    <div class="flex justify-center mt-2.5 mb-5">
                                        <div class="flex justify-center space-x-1 rtl:space-x-reverse" style="text-align: justify;">
                                            <p>{{ $book->description }}</p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>  
                                            
                    </div> 
                    @endforeach         
                </div>
            </div>
        </div>             

<!-- Testimonial -->

        <div id="testimonial" class="h-[32rem]" style="margin-right: 60px; margin-left: 60px; padding-bottom: 60px;">
            <div class="container">
                <div class="flex justify-center" style="padding-bottom: 10px; font-size: 33px; font-weight: bold;">
                    <h2>Testimonials</h2>
                </div >   
            </div>
            <div >
                

<div id="indicators-carousel" class="relative w-full" data-carousel="static" >
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
            <img src="/docs/images/carousel/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/docs/images/carousel/carousel-2.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/docs/images/carousel/carousel-3.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/docs/images/carousel/carousel-4.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/docs/images/carousel/carousel-5.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>          
            </div>
        </div>  

<!-- Footer -->
<footer  class="bg-white dark:bg-gray-900">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0">
              <a href="https://flowbite.com/" class="flex items-center">
                  <img src="/img/Smartin.png" class="h-8 me-3" alt="FlowBite Logo" />
                  <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">PT. Smartin Teknologi Sistem</span>
              </a>
          </div>
          <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                  <ul class="text-gray-500 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                      </li>
                      <li>
                          <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                  <ul class="text-gray-500 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                      </li>
                      <li>
                          <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                  <ul class="text-gray-500 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="#" class="hover:underline">Privacy Policy</a>
                      </li>
                      <li>
                          <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
      <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
      <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
          </span>
          <div class="flex mt-4 sm:justify-center sm:mt-0">
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                        <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                    </svg>
                  <span class="sr-only">Facebook page</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                        <path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"/>
                    </svg>
                  <span class="sr-only">Discord community</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                    <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
                </svg>
                  <span class="sr-only">Twitter page</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
                  </svg>
                  <span class="sr-only">GitHub account</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z" clip-rule="evenodd"/>
                </svg>
                  <span class="sr-only">Dribbble account</span>
              </a>
          </div>
      </div>
    </div>
</footer>
        <script src="../flowbite/dist/flowbite.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    </body>
</html>
