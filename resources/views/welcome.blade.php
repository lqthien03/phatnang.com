{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto bg-gray-100 dark:bg-gray-900">
                        <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="#FF2D20"/>
                    </svg>
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <a href="https://laravel.com/docs" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Documentation</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laracasts.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laracasts</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laravel-news.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laravel News</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Forge</a>, <a href="https://vapor.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vapor</a>, <a href="https://nova.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nova</a>, and <a href="https://envoyer.io" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Telescope</a>, and more.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                        <div class="flex items-center gap-4">
                            <a href="https://github.com/sponsors/taylorotwell" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> --}}




<!DOCTYPE html>
<html lang="vi">

<head>
    <!-- Basehref -->
    <base href="https://phatnang.com/" />

    <!-- UTF-8 -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Title, Keywords, Description -->
    <title>VI TÍNH PHÁT NĂNG | Vi Tính Bình Dương | Thanh Lý Phòng Net Giá Cao</title>
    <meta name="keywords" content="" />
    <meta name="description"
        content="VI TÍNH PHÁT NĂNG | Vi Tính Bình Dương chuyên linh kiện máy tính giá tốt, linh kiện vi tính chất lượng nguồn sẵn, thanh lý phòng net, thanh lý phòng net giá cao, thanh lý phòng nét giá tốt nhất..." />

    <!-- Robots -->
    <meta name="robots" content="index,follow" />

    <!-- Favicon -->
    <link href="upload/photo/logo-phat-nang-2188.png" rel="shortcut icon" type="image/x-icon" />

    <!-- Webmaster Tool -->

    <!-- GEO -->
    <meta name="geo.region" content="VN" />
    <meta name="geo.placename" content="Hồ Chí Minh" />
    <meta name="geo.position" content="10.823099;106.629664" />
    <meta name="ICBM" content="10.823099, 106.629664" />

    <!-- Author - Copyright -->
    <meta name='revisit-after' content='1 days' />
    <meta name="author" content="VI TÍNH PHÁT NĂNG" />
    <meta name="copyright" content="VI TÍNH PHÁT NĂNG - [ngodinhnhan82@gmail.com]" />

    <!-- Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="VI TÍNH PHÁT NĂNG" />
    <meta property="og:title" content="VI TÍNH PHÁT NĂNG | Vi Tính Bình Dương | Thanh Lý Phòng Net Giá Cao" />
    <meta property="og:description"
        content="VI TÍNH PHÁT NĂNG | Vi Tính Bình Dương chuyên linh kiện máy tính giá tốt, linh kiện vi tính chất lượng nguồn sẵn, thanh lý phòng net, thanh lý phòng net giá cao, thanh lý phòng nét giá tốt nhất..." />
    <meta property="og:url" content="https://phatnang.com/" />
    <meta property="og:image" content="https://phatnang.com/thumbs/958x384x2/upload/photo/slider-4933.jpg" />
    <meta property="og:image:alt" content="VI TÍNH PHÁT NĂNG | Vi Tính Bình Dương | Thanh Lý Phòng Net Giá Cao" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="958" />
    <meta property="og:image:height" content="384" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="ngodinhnhan82@gmail.com" />
    <meta name="twitter:creator" content="VI TÍNH PHÁT NĂNG" />
    <meta property="og:url" content="https://phatnang.com/" />
    <meta property="og:title" content="VI TÍNH PHÁT NĂNG | Vi Tính Bình Dương | Thanh Lý Phòng Net Giá Cao" />
    <meta property="og:description"
        content="VI TÍNH PHÁT NĂNG | Vi Tính Bình Dương chuyên linh kiện máy tính giá tốt, linh kiện vi tính chất lượng nguồn sẵn, thanh lý phòng net, thanh lý phòng net giá cao, thanh lý phòng nét giá tốt nhất..." />
    <meta property="og:image" content="https://phatnang.com/thumbs/958x384x2/upload/photo/slider-4933.jpg" />

    <!-- Canonical -->
    <link rel="canonical" href="https://phatnang.com/" />

    <!-- Chống đổi màu trên IOS -->
    <meta name="format-detection" content="telephone=no">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"> <!-- Css Files -->
    <link href="./assets/css/animate.min.css?v=KWLWSO5Va" rel="stylesheet">
    <link href="./assets/bootstrap/bootstrap.css?v=ByAGtWBCP" rel="stylesheet">
    <link href="./assets/bootstrap/bootstrap-icons.css?v=f5ccUgRDfX" rel="stylesheet">
    <link href="./assets/fontawesome512/all.css?v=WrFwdMzF1g" rel="stylesheet">
    <link href="./assets/mmenu/mmenu.css?v=XBLCZJRoJh" rel="stylesheet">
    <link href="./assets/fancybox3/jquery.fancybox.css?v=VIfWWAkkym" rel="stylesheet">
    <link href="./assets/fancybox3/jquery.fancybox.style.css?v=SuxS0dXDTz" rel="stylesheet">
    <link href="./assets/slick/slick.css?v=3W1fVNr23S" rel="stylesheet">
    <link href="./assets/slick/slick-theme.css?v=qXCaR1LuHh" rel="stylesheet">
    <link href="./assets/slick/slick-style.css?v=HdZQyw3Vx4" rel="stylesheet">
    <link href="./assets/owlcarousel2/owl.carousel.css?v=5rXsgoksWZ" rel="stylesheet">
    <link href="./assets/owlcarousel2/owl.theme.default.css?v=lPpvK1xPg" rel="stylesheet">
    <link href="./assets/css/font.css?v=RAqyxGwR4h" rel="stylesheet">
    <link href="./assets/css/style.css?v=mgEHvegfiG" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Js Google Analytic -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4D6T9J3L9J"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-4D6T9J3L9J');
    </script>
    <!-- Js Head -->
    <script type="text/javascript" src="//erasoft.vn/frame/default/js/snow.js"></script>
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '734190170889666');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=734190170889666&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
</head>

<body>
    <div id="full">
        <ul class="h-card hidden">
            <li class="h-fn fn">VI TÍNH PHÁT NĂNG</li>
            <li class="h-org org">VI TÍNH PHÁT NĂNG</li>
            <li class="h-tel tel">0938948862</li>
            <li><a class="u-url ul" href="https://phatnang.com/">https://phatnang.com/</a></li>
        </ul>

        <h1 class="hidden-seoh">VI TÍNH PHÁT NĂNG | Vi Tính Bình Dương | Thanh Lý Phòng Net Giá Cao</h1>
        <div class="header">
            <div class="header-bottom">
                <div class="wrap-content d-flex flex-wrap align-items-center justify-content-between">
                    <div class="hdtrai d-flex flex-wrap align-items-center justify-content-between">
                        <a class="logo-header" href=""><img
                                onerror="this.src='thumbs/122x100x1/assets/images/noimage.png';"
                                src="upload/photo/logo-phat-nang-8751.jpg" /></a>
                        <a class="banner-header text-decoration-none" href="">
                            <span>VI TÍNH PHÁT NĂNG</span>
                            Địa chỉ: 592 Đường Phú Lợi, Phường Phú Hòa, Thành Phố Thủ Dầu Một, Bình Dương </a>
                    </div>
                    <div class="search w-clear">
                        <input type="text" id="keyword" class="search-auto" placeholder="Nhập từ khóa tìm kiếm"
                            onkeypress="doEnter(event,'keyword');" />
                        <p class="mb-0" onclick="onSearch('keyword');"></p>
                    </div>
                    <p class="dt mb-0">
                        <span>Tư vấn mua hàng</span>
                        <a class="text-decoration-none" href="tel:0938948862">0938 948 862</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="menu">
            <div class="wrap-content d-flex flex-wrap align-items-center justify-content-between">
                <div class="menusp">
                    <a class="tieudedm" href="san-pham" title="Danh mục sản phẩm">Danh mục sản phẩm</a>
                    <div class="menusp1 menusp0 active ">
                        <ul class="menusp2">
                            <li><a class="transition" title="Linh Kiện Mới" href="linh-kien-moi"><img
                                        onerror="this.src='thumbs/26x25x1/assets/images/noimage.png';"
                                        src="thumbs/26x25x2/upload/product/dm01-1892.png?v=1701825946"
                                        alt="Linh Kiện Mới" />Linh Kiện Mới</a>
                                <ul>
                                    <li><a class="transition" title="CPU-BỘ XỬ LÝ CPU-BỘ XỬ LÝ"
                                            href="cpu-bo-xu-ly">CPU-BỘ XỬ LÝ CPU-BỘ XỬ LÝ</a>
                                        <ul>
                                            <li><a class="transition" title="Intel Pentium" href="cap-3">Intel
                                                    Pentium</a></li>
                                            <li><a class="transition" title="Intel Core i3"
                                                    href="intel-core-i3">Intel Core i3</a></li>
                                            <li><a class="transition" title="Intel Core i5"
                                                    href="intel-core-i5">Intel Core i5</a></li>
                                            <li><a class="transition" title="Intel Core i7"
                                                    href="intel-core-i7">Intel Core i7</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="transition" title="MAINBOARD -BO MẠCH CHỦ"
                                            href="mainboard-bo-mach-chu">MAINBOARD -BO MẠCH CHỦ</a>
                                        <ul>
                                            <li><a class="transition" title="MAIN-GIGABYTE"
                                                    href="main-gigabyte">MAIN-GIGABYTE</a></li>
                                            <li><a class="transition" title="MAIN-ASUS"
                                                    href="main-asus">MAIN-ASUS</a></li>
                                            <li><a class="transition" title="MAIN-MSI" href="main-msi">MAIN-MSI</a>
                                            </li>
                                            <li><a class="transition" title="MAIN-COLOFULL"
                                                    href="main-colofull">MAIN-COLOFULL</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="transition" title="BỘ NHỚ RAM" href="bo-nho-ram">BỘ NHỚ RAM</a>
                                        <ul>
                                            <li><a class="transition" title="DDR4 PC" href="ddr4-pc">DDR4 PC</a></li>
                                            <li><a class="transition" title="DDR3-PC" href="ddr3-pc">DDR3-PC</a></li>
                                            <li><a class="transition" title="DDR3 SEVER" href="ddr3-sever">DDR3
                                                    SEVER</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="transition" title="VGA-CARD MÀNG HÌNH"
                                            href="vga-card-mang-hinh">VGA-CARD MÀNG HÌNH</a>
                                        <ul>
                                            <li><a class="transition" title="VGA-GIGABYTE NEW"
                                                    href="vga-gigabyte-new">VGA-GIGABYTE NEW</a></li>
                                            <li><a class="transition" title="VGA-ASUS NEW"
                                                    href="vga-asus-new">VGA-ASUS NEW</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="transition" title="Linh Kiện Cũ" href="linh-kien-cu"><img
                                        onerror="this.src='thumbs/26x25x1/assets/images/noimage.png';"
                                        src="thumbs/26x25x2/upload/product/untitled-103-4878.png?v=1701825946"
                                        alt="Linh Kiện Cũ" />Linh Kiện Cũ</a>
                                <ul>
                                    <li><a class="transition" title="CPU-BỘ XỬ LÝ CPU-BỘ XỬ LÝ"
                                            href="cpu-bo-xu-ly-cpu-bo-xu-ly">CPU-BỘ XỬ LÝ CPU-BỘ XỬ LÝ</a>
                                        <ul>
                                            <li><a class="transition" title="CPU-INTEL PENTIUM"
                                                    href="cpu-intel-pentium">CPU-INTEL PENTIUM</a></li>
                                            <li><a class="transition" title="CPU-INTEL CORE I3"
                                                    href="cpu-intel-core-i3">CPU-INTEL CORE I3</a></li>
                                            <li><a class="transition" title="CPU-INTEL CORE I5"
                                                    href="cpu-intel-core-i5">CPU-INTEL CORE I5</a></li>
                                            <li><a class="transition" title="CPU-INTEL CORE I7"
                                                    href="cpu-intel-core-i7">CPU-INTEL CORE I7</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="transition" title="MAINBOARD -BO MẠCH CHỦ CŨ"
                                            href="mainboard-bo-mach-chu-cu">MAINBOARD -BO MẠCH CHỦ CŨ</a>
                                        <ul>
                                            <li><a class="transition" title="MAIN-GIGABYTE-CŨ"
                                                    href="main-gigabyte-cu">MAIN-GIGABYTE-CŨ</a></li>
                                            <li><a class="transition" title="MAIN ASUS CŨ" href="main-asus-cu">MAIN
                                                    ASUS CŨ</a></li>
                                            <li><a class="transition" title="MAIN MSI CŨ" href="main-msi-cu">MAIN MSI
                                                    CŨ</a></li>
                                            <li><a class="transition" title="MAIN COLOFULL CŨ"
                                                    href="main-colofull-cu">MAIN COLOFULL CŨ</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="transition" title="BỘ NHỚ RAM CŨ" href="bo-nho-ram-cu">BỘ NHỚ RAM
                                            CŨ</a>
                                        <ul>
                                            <li><a class="transition" title="RAM DDR4 PC" href="ram-ddr4-pc">RAM DDR4
                                                    PC</a></li>
                                            <li><a class="transition" title="RAM DDR3 PC" href="ram-ddr3-pc">RAM DDR3
                                                    PC</a></li>
                                            <li><a class="transition" title="RAM SEVER CŨ" href="ram-sever-cu">RAM
                                                    SEVER CŨ</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="transition" title="VGA-CARD MÀNG HÌNH CŨ"
                                            href="vga-card-mang-hinh-cu">VGA-CARD MÀNG HÌNH CŨ</a>
                                        <ul>
                                            <li><a class="transition" title="VGA-GIGABYTE"
                                                    href="vga-gigabyte">VGA-GIGABYTE</a></li>
                                            <li><a class="transition" title="VGA-ASUS" href="vga-asus">VGA-ASUS</a>
                                            </li>
                                            <li><a class="transition" title="VGA-MSI" href="vga-msi">VGA-MSI</a></li>
                                            <li><a class="transition" title="VGA-COLOFULL"
                                                    href="vga-colofull">VGA-COLOFULL</a></li>
                                            <li><a class="transition" title="VGA-ZOTAC"
                                                    href="vga-zotac">VGA-ZOTAC</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="transition" title="Thanh Lý Phòng Net" href="thanh-ly-phong-net"><img
                                        onerror="this.src='thumbs/26x25x1/assets/images/noimage.png';"
                                        src="thumbs/26x25x2/upload/product/untitled-105-4000.png?v=1701825946"
                                        alt="Thanh Lý Phòng Net" />Thanh Lý Phòng Net</a>
                            </li>
                            <li><a class="transition" title="Màn Hình Máy Tính" href="man-hinh-may-tinh"><img
                                        onerror="this.src='thumbs/26x25x1/assets/images/noimage.png';"
                                        src="thumbs/26x25x2/upload/product/untitled-109-5771.png?v=1701825946"
                                        alt="Màn Hình Máy Tính" />Màn Hình Máy Tính</a>
                            </li>
                            <li><a class="transition" title="Laptop" href="laptop"><img
                                        onerror="this.src='thumbs/26x25x1/assets/images/noimage.png';"
                                        src="thumbs/26x25x2/upload/product/untitled-111-3031.png?v=1701825946"
                                        alt="Laptop" />Laptop</a>
                                <ul>
                                    <li><a class="transition" title="LAPTOP DELL" href="laptop-dell">LAPTOP DELL</a>
                                    </li>
                                    <li><a class="transition" title="LAPTOP ASUS" href="laptop-asus">LAPTOP ASUS</a>
                                    </li>
                                    <li><a class="transition" title="LAPTOP HP" href="laptop-hp">LAPTOP HP</a>
                                    </li>
                                    <li><a class="transition" title="LINH KIỆN LAPTOP" href="linh-kien-laptop">LINH
                                            KIỆN LAPTOP</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="transition" title="Ổ Cứng PC" href="o-cung-pc"><img
                                        onerror="this.src='thumbs/26x25x1/assets/images/noimage.png';"
                                        src="thumbs/26x25x2/upload/product/untitled-113-5762.png?v=1701825946"
                                        alt="Ổ Cứng PC" />Ổ Cứng PC</a>
                            </li>
                            <li><a class="transition" title="Chuột, Bàn Phím" href="chuot-ban-phim"><img
                                        onerror="this.src='thumbs/26x25x1/assets/images/noimage.png';"
                                        src="thumbs/26x25x2/upload/product/untitled-115-4545.png?v=1701825946"
                                        alt="Chuột, Bàn Phím" />Chuột, Bàn Phím</a>
                            </li>
                            <li><a class="transition" title="Thiết Bị Âm Thanh" href="thiet-bi-am-thanh"><img
                                        onerror="this.src='thumbs/26x25x1/assets/images/noimage.png';"
                                        src="thumbs/26x25x2/upload/product/untitled-121-1722.png?v=1701825946"
                                        alt="Thiết Bị Âm Thanh" />Thiết Bị Âm Thanh</a>
                                <ul>
                                    <li><a class="transition" title="Thiết bị âm Thanh-Loa VI TÍNH"
                                            href="thiet-bi-am-thanh-loa-vi-tinh">Thiết bị âm Thanh-Loa VI TÍNH</a>
                                    </li>
                                    <li><a class="transition" title="Thiết bị âm Thanh-TAI NGHE"
                                            href="thiet-bi-am-thanh-tai-nghe">Thiết bị âm Thanh-TAI NGHE</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <ul class="d-flex flex-wrap align-items-center justify-content-between ulmn">
                    <li><a class="transition active" href="" title="Trang chủ">Trang chủ</a></li>
                    <li class="line"></li>
                    <li><a class="transition " href="bang-gia" title="Bảng báo giá">Bảng báo giá</a></li>
                    <li class="line"></li>
                    <li><a class="transition " href="gioi-thieu" title="Giới thiệu">Giới thiệu</a></li>
                    <li class="line"></li>
                    <li><a class="transition " href="san-pham" title="Sản phẩm">Sản phẩm</a></li>
                    <li class="line"></li>
                    <li><a class="transition " href="thanh-ly-phong-net" title="Thanh lý phòng net">Thanh lý phòng
                            net</a></li>
                    <li class="line"></li>
                    <li><a class="transition " href="tin-tuc" title="Tin công nghệ">Tin công nghệ</a></li>
                    <li class="line"></li>
                    <li><a class="transition " href="video" title="Video">Video</a></li>
                    <li class="line"></li>
                    <li><a class="transition " href="lien-he" title="Liên hệ">Liên hệ</a></li>
                </ul>
            </div>
        </div>
        <div class="menu-res ">
            <div class="menu-bar-res">
                <a id="hamburger" href="#menu" title="Menu"><span></span></a>
                <div class="search-grid w-clear">
                    <input type="text" name="keyword2" id="keyword2" placeholder="Nhập từ khóa tìm kiếm"
                        onkeypress="doEnter(event,'keyword2');" />
                    <p onclick="onSearch('keyword2');"><i class="fa fa-search"></i></p>
                </div>
            </div>
            <nav id="menu">
                <ul>
                    <li><a class="transition" title="Linh Kiện Mới" href="linh-kien-moi">Linh Kiện Mới</a>
                        <ul>
                            <li><a class="transition" title="CPU-BỘ XỬ LÝ CPU-BỘ XỬ LÝ" href="cpu-bo-xu-ly">CPU-BỘ XỬ
                                    LÝ CPU-BỘ XỬ LÝ</a>
                                <ul>
                                    <li><a class="transition" title="Intel Pentium" href="cap-3">Intel Pentium</a>
                                    </li>
                                    <li><a class="transition" title="Intel Core i3" href="intel-core-i3">Intel Core
                                            i3</a></li>
                                    <li><a class="transition" title="Intel Core i5" href="intel-core-i5">Intel Core
                                            i5</a></li>
                                    <li><a class="transition" title="Intel Core i7" href="intel-core-i7">Intel Core
                                            i7</a></li>
                                </ul>
                            </li>
                            <li><a class="transition" title="MAINBOARD -BO MẠCH CHỦ"
                                    href="mainboard-bo-mach-chu">MAINBOARD -BO MẠCH CHỦ</a>
                                <ul>
                                    <li><a class="transition" title="MAIN-GIGABYTE"
                                            href="main-gigabyte">MAIN-GIGABYTE</a></li>
                                    <li><a class="transition" title="MAIN-ASUS" href="main-asus">MAIN-ASUS</a></li>
                                    <li><a class="transition" title="MAIN-MSI" href="main-msi">MAIN-MSI</a></li>
                                    <li><a class="transition" title="MAIN-COLOFULL"
                                            href="main-colofull">MAIN-COLOFULL</a></li>
                                </ul>
                            </li>
                            <li><a class="transition" title="BỘ NHỚ RAM" href="bo-nho-ram">BỘ NHỚ RAM</a>
                                <ul>
                                    <li><a class="transition" title="DDR4 PC" href="ddr4-pc">DDR4 PC</a></li>
                                    <li><a class="transition" title="DDR3-PC" href="ddr3-pc">DDR3-PC</a></li>
                                    <li><a class="transition" title="DDR3 SEVER" href="ddr3-sever">DDR3 SEVER</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="transition" title="VGA-CARD MÀNG HÌNH" href="vga-card-mang-hinh">VGA-CARD
                                    MÀNG HÌNH</a>
                                <ul>
                                    <li><a class="transition" title="VGA-GIGABYTE NEW"
                                            href="vga-gigabyte-new">VGA-GIGABYTE NEW</a></li>
                                    <li><a class="transition" title="VGA-ASUS NEW" href="vga-asus-new">VGA-ASUS
                                            NEW</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="transition" title="Linh Kiện Cũ" href="linh-kien-cu">Linh Kiện Cũ</a>
                        <ul>
                            <li><a class="transition" title="CPU-BỘ XỬ LÝ CPU-BỘ XỬ LÝ"
                                    href="cpu-bo-xu-ly-cpu-bo-xu-ly">CPU-BỘ XỬ LÝ CPU-BỘ XỬ LÝ</a>
                                <ul>
                                    <li><a class="transition" title="CPU-INTEL PENTIUM"
                                            href="cpu-intel-pentium">CPU-INTEL PENTIUM</a></li>
                                    <li><a class="transition" title="CPU-INTEL CORE I3"
                                            href="cpu-intel-core-i3">CPU-INTEL CORE I3</a></li>
                                    <li><a class="transition" title="CPU-INTEL CORE I5"
                                            href="cpu-intel-core-i5">CPU-INTEL CORE I5</a></li>
                                    <li><a class="transition" title="CPU-INTEL CORE I7"
                                            href="cpu-intel-core-i7">CPU-INTEL CORE I7</a></li>
                                </ul>
                            </li>
                            <li><a class="transition" title="MAINBOARD -BO MẠCH CHỦ CŨ"
                                    href="mainboard-bo-mach-chu-cu">MAINBOARD -BO MẠCH CHỦ CŨ</a>
                                <ul>
                                    <li><a class="transition" title="MAIN-GIGABYTE-CŨ"
                                            href="main-gigabyte-cu">MAIN-GIGABYTE-CŨ</a></li>
                                    <li><a class="transition" title="MAIN ASUS CŨ" href="main-asus-cu">MAIN ASUS
                                            CŨ</a></li>
                                    <li><a class="transition" title="MAIN MSI CŨ" href="main-msi-cu">MAIN MSI CŨ</a>
                                    </li>
                                    <li><a class="transition" title="MAIN COLOFULL CŨ" href="main-colofull-cu">MAIN
                                            COLOFULL CŨ</a></li>
                                </ul>
                            </li>
                            <li><a class="transition" title="BỘ NHỚ RAM CŨ" href="bo-nho-ram-cu">BỘ NHỚ RAM CŨ</a>
                                <ul>
                                    <li><a class="transition" title="RAM DDR4 PC" href="ram-ddr4-pc">RAM DDR4 PC</a>
                                    </li>
                                    <li><a class="transition" title="RAM DDR3 PC" href="ram-ddr3-pc">RAM DDR3 PC</a>
                                    </li>
                                    <li><a class="transition" title="RAM SEVER CŨ" href="ram-sever-cu">RAM SEVER
                                            CŨ</a></li>
                                </ul>
                            </li>
                            <li><a class="transition" title="VGA-CARD MÀNG HÌNH CŨ"
                                    href="vga-card-mang-hinh-cu">VGA-CARD MÀNG HÌNH CŨ</a>
                                <ul>
                                    <li><a class="transition" title="VGA-GIGABYTE"
                                            href="vga-gigabyte">VGA-GIGABYTE</a></li>
                                    <li><a class="transition" title="VGA-ASUS" href="vga-asus">VGA-ASUS</a></li>
                                    <li><a class="transition" title="VGA-MSI" href="vga-msi">VGA-MSI</a></li>
                                    <li><a class="transition" title="VGA-COLOFULL"
                                            href="vga-colofull">VGA-COLOFULL</a></li>
                                    <li><a class="transition" title="VGA-ZOTAC" href="vga-zotac">VGA-ZOTAC</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="transition" title="Thanh Lý Phòng Net" href="thanh-ly-phong-net">Thanh Lý Phòng
                            Net</a>
                    </li>
                    <li><a class="transition" title="Màn Hình Máy Tính" href="man-hinh-may-tinh">Màn Hình Máy
                            Tính</a>
                    </li>
                    <li><a class="transition" title="Laptop" href="laptop">Laptop</a>
                        <ul>
                            <li><a class="transition" title="LAPTOP DELL" href="laptop-dell">LAPTOP DELL</a>
                            </li>
                            <li><a class="transition" title="LAPTOP ASUS" href="laptop-asus">LAPTOP ASUS</a>
                            </li>
                            <li><a class="transition" title="LAPTOP HP" href="laptop-hp">LAPTOP HP</a>
                            </li>
                            <li><a class="transition" title="LINH KIỆN LAPTOP" href="linh-kien-laptop">LINH KIỆN
                                    LAPTOP</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="transition" title="Ổ Cứng PC" href="o-cung-pc">Ổ Cứng PC</a>
                    </li>
                    <li><a class="transition" title="Chuột, Bàn Phím" href="chuot-ban-phim">Chuột, Bàn Phím</a>
                    </li>
                    <li><a class="transition" title="Thiết Bị Âm Thanh" href="thiet-bi-am-thanh">Thiết Bị Âm
                            Thanh</a>
                        <ul>
                            <li><a class="transition" title="Thiết bị âm Thanh-Loa VI TÍNH"
                                    href="thiet-bi-am-thanh-loa-vi-tinh">Thiết bị âm Thanh-Loa VI TÍNH</a>
                            </li>
                            <li><a class="transition" title="Thiết bị âm Thanh-TAI NGHE"
                                    href="thiet-bi-am-thanh-tai-nghe">Thiết bị âm Thanh-TAI NGHE</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="transition active" href="" title="Trang chủ">Trang chủ</a></li>
                    <li><a class="transition " href="bang-gia" title="Bảng báo giá">Bảng báo giá</a></li>
                    <li><a class="transition " href="gioi-thieu" title="Giới thiệu">Giới thiệu</a></li>
                    <li><a class="transition " href="san-pham" title="Sản phẩm">Sản phẩm</a>
                    </li>
                    <li><a class="transition " href="thanh-ly-phong-net" title="Thanh lý phòng net">Thanh lý phòng
                            net</a></li>
                    <li><a class="transition " href="tin-tuc" title="Tin công nghệ">Tin công nghệ</a></li>
                    <li><a class="transition " href="video" title="Video">Video</a></li>
                    <li><a class="transition " href="lien-he" title="Liên hệ">Liên hệ</a></li>
                </ul>
            </nav>
        </div>
        <div class="khungsl">
            <div class="slideshow">
                <p class="control-slideshow prev-slideshow transition"><i class="fas fa-chevron-left"></i></p>
                <div class="owl-carousel owl-theme owl-slideshow">
                    <div>
                        <a href="" target="_blank" title=""><img
                                onerror="this.src='thumbs/958x384x1/assets/images/noimage.png';"
                                src="thumbs/958x384x1/upload/photo/slider-4501.jpg" alt="" /></a>
                    </div>
                    <div>
                        <a href="" target="_blank" title=""><img
                                onerror="this.src='thumbs/958x384x1/assets/images/noimage.png';"
                                src="thumbs/958x384x1/upload/photo/829f46d195c25f9c06d3-7017.jpg"
                                alt="" /></a>
                    </div>
                    <div>
                        <a href="" target="_blank" title=""><img
                                onerror="this.src='thumbs/958x384x1/assets/images/noimage.png';"
                                src="thumbs/958x384x1/upload/photo/e1b61f2ef53d3f63662c-8766.jpg"
                                alt="" /></a>
                    </div>
                    <div>
                        <a href="" target="_blank" title=""><img
                                onerror="this.src='thumbs/958x384x1/assets/images/noimage.png';"
                                src="thumbs/958x384x1/upload/photo/3-21770.jpg" alt="" /></a>
                    </div>
                </div>
                <p class="control-slideshow next-slideshow transition"><i class="fas fa-chevron-right"></i></p>
            </div>
            <div class="mod_tieuchi">
                <div class="owl-carousel owl-theme owl-tieuchi">
                    <div class="item_tc d-flex flex-wrap justify-content-center align-items-center">
                        <a class="img text-decoration-none" title="Đổi Trả Dễ Dàng">
                            <img onerror="this.src='thumbs/30x39x1/assets/images/noimage.png';"
                                src="thumbs/30x39x2/upload/photo/icon201-15340.png" alt="Đổi Trả Dễ Dàng" />
                        </a>
                        <div class="tttc">
                            <p class="mb-0 ten motdong">Đổi Trả Dễ Dàng</p>
                            <p class="mb-0 mota text-split">Đổi trả sản phẩm lỗi</p>
                        </div>
                    </div>
                    <div class="item_tc d-flex flex-wrap justify-content-center align-items-center">
                        <a class="img text-decoration-none" title="Thanh Toán An Toàn">
                            <img onerror="this.src='thumbs/30x39x1/assets/images/noimage.png';"
                                src="thumbs/30x39x2/upload/photo/icon203-37571.png" alt="Thanh Toán An Toàn" />
                        </a>
                        <div class="tttc">
                            <p class="mb-0 ten motdong">Thanh Toán An Toàn</p>
                            <p class="mb-0 mota text-split">Bảo đảm an toàn 100%</p>
                        </div>
                    </div>
                    <div class="item_tc d-flex flex-wrap justify-content-center align-items-center">
                        <a class="img text-decoration-none" title="Hỗ Trợ 24/7">
                            <img onerror="this.src='thumbs/30x39x1/assets/images/noimage.png';"
                                src="thumbs/30x39x2/upload/photo/icon05-90902.png" alt="Hỗ Trợ 24/7" />
                        </a>
                        <div class="tttc">
                            <p class="mb-0 ten motdong">Hỗ Trợ 24/7</p>
                            <p class="mb-0 mota text-split">Hỗ trợ tư vấn nhiệt tình</p>
                        </div>
                    </div>
                    <div class="item_tc d-flex flex-wrap justify-content-center align-items-center">
                        <a class="img text-decoration-none" title="Giao Hàng Nhanh ">
                            <img onerror="this.src='thumbs/30x39x1/assets/images/noimage.png';"
                                src="thumbs/30x39x2/upload/photo/icon207-75013.png" alt="Giao Hàng Nhanh " />
                        </a>
                        <div class="tttc">
                            <p class="mb-0 ten motdong">Giao Hàng Nhanh </p>
                            <p class="mb-0 mota text-split">Giao hàng nhanh chóng</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrap-main wrap-home w-clear">

            <div class="wrap-product wrap-content">
                <div class="tieudetc d-flex flex-wrap align-items-center">
                    <a href="san-pham-moi" class="themsp text-decoration-none">Xem tất cả >></a>
                    <p class="clicksp mb-0" data-key="moi" data-ten="san-pham-moi">Sản phẩm mới</p>
                    <p class="clicksp mb-0" data-key="banchay" data-ten="san-pham-ban-chay">Sản phẩm bán chạy</p>
                </div>
                <div class="paging-product"></div>
            </div>
            <div class="khungsp">
                <div class="mod_danhmuc">
                    <div class="wrap-content">
                        <h2 class="title-main tc"><span>Linh Kiện Mới</span></h2>
                        <p class="sltc">Vi Tính Phát Năng chuyên cung cấp máy bộ vi tính, pc, laptop, pc gaming, all
                            in one, máy bộ xeon, máy AMD, linh kiện giá sỉ lẻ cực rẻ</p>
                        <div class="grid-page">
                            <div class="product animate__animated animate__zoomIn wow">
                                <a class="pic-product scale-img" href="gaming-headset-h120g-hp"
                                    title="GAMING HEADSET H120G HP"><img
                                        onerror="this.src='thumbs/600x577x1/assets/images/noimage.png';"
                                        src="thumbs/600x577x1/upload/product/hp-120g-7970.jpg?v=1701825946"
                                        alt="GAMING HEADSET H120G HP" /></a>
                                <p class="ma">Mã SP: GAMING HEADSET H120G</p>
                                <h3 class="name-product"><a class="text-split text-decoration-none"
                                        href="gaming-headset-h120g-hp" title="GAMING HEADSET H120G HP">GAMING HEADSET
                                        H120G HP</a></h3>
                                <p class="price-product">
                                    <span class="price-new">285.000đ</span>
                                    <span class="price-old">290.000đ</span>
                                    <span class="price-per">-2%</span>
                                </p>
                            </div>
                            <div class="product animate__animated animate__zoomIn wow">
                                <a class="pic-product scale-img" href="cpu-g5400" title="CPU G5400"><img
                                        onerror="this.src='thumbs/600x577x1/assets/images/noimage.png';"
                                        src="thumbs/600x577x1/upload/product/g5400v-6520.jpg?v=1701825946"
                                        alt="CPU G5400" /></a>
                                <p class="ma">Mã SP: G5400</p>
                                <h3 class="name-product"><a class="text-split text-decoration-none" href="cpu-g5400"
                                        title="CPU G5400">CPU G5400</a></h3>
                                <p class="price-product">
                                    <span class="price-new">Liên hệ</span>
                                </p>
                            </div>
                            <div class="product animate__animated animate__zoomIn wow">
                                <a class="pic-product scale-img" href="vision-gaming-vm01"
                                    title="VISION GAMING VM01"><img
                                        onerror="this.src='thumbs/600x577x1/assets/images/noimage.png';"
                                        src="thumbs/600x577x1/upload/product/400vm0105-7197.jpg?v=1701825946"
                                        alt="VISION GAMING VM01" /></a>
                                <p class="ma">Mã SP: VISION GAMING VM01 CƠ</p>
                                <h3 class="name-product"><a class="text-split text-decoration-none"
                                        href="vision-gaming-vm01" title="VISION GAMING VM01">VISION GAMING VM01</a>
                                </h3>
                                <p class="price-product">
                                    <span class="price-new">355.000đ</span>
                                    <span class="price-old">360.000đ</span>
                                    <span class="price-per">-1%</span>
                                </p>
                            </div>
                            <div class="product animate__animated animate__zoomIn wow">
                                <a class="pic-product scale-img" href="phat-wifi-pix-link-lv-wr08"
                                    title="Phát Wifi PIX-LINK LV-WR08"><img
                                        onerror="this.src='thumbs/600x577x1/assets/images/noimage.png';"
                                        src="thumbs/600x577x1/upload/product/6fe4382b7be81732a1300a1585429f391-1-5201.jpg?v=1701825946"
                                        alt="Phát Wifi PIX-LINK LV-WR08" /></a>
                                <p class="ma">Mã SP: Phát Wifi PIX-LINK LV-WR08</p>
                                <h3 class="name-product"><a class="text-split text-decoration-none"
                                        href="phat-wifi-pix-link-lv-wr08" title="Phát Wifi PIX-LINK LV-WR08">Phát Wifi
                                        PIX-LINK LV-WR08</a></h3>
                                <p class="price-product">
                                    <span class="price-new">295.000đ</span>
                                    <span class="price-old">360.000đ</span>
                                    <span class="price-per">-18%</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mod_danhmuc">
                    <div class="wrap-content">
                        <h2 class="title-main tc"><span>Linh Kiện Cũ</span></h2>
                        <p class="sltc"></p>
                        <div class="grid-page">
                            <div class="product animate__animated animate__zoomIn wow">
                                <a class="pic-product scale-img"
                                    href="nguon-fsp-power-supply-hydro-series-model-hd700-active-pfc-80-plus-bronze"
                                    title="Nguồn FSP Power Supply HYDRO Series Model HD700 Active PFC (80 Plus Bronze/Màu Đen)"><img
                                        onerror="this.src='thumbs/600x577x1/assets/images/noimage.png';"
                                        src="thumbs/600x577x1/upload/product/31136nguonfsphydroseries700wmodelhd70000001-8749.jpg?v=1701825946"
                                        alt="Nguồn FSP Power Supply HYDRO Series Model HD700 Active PFC (80 Plus Bronze/Màu Đen)" /></a>
                                <p class="ma">Mã SP: HD700 Active PFC</p>
                                <h3 class="name-product"><a class="text-split text-decoration-none"
                                        href="nguon-fsp-power-supply-hydro-series-model-hd700-active-pfc-80-plus-bronze"
                                        title="Nguồn FSP Power Supply HYDRO Series Model HD700 Active PFC (80 Plus Bronze/Màu Đen)">Nguồn
                                        FSP Power Supply HYDRO Series Model HD700 Active PFC (80 Plus Bronze/Màu
                                        Đen)</a></h3>
                                <p class="price-product">
                                    <span class="price-new">850.000đ</span>
                                </p>
                            </div>
                            <div class="product animate__animated animate__zoomIn wow">
                                <a class="pic-product scale-img" href="ddr4-gskill-value-8gb-ddr4-2666mhz"
                                    title="DDR4- G.SKILL Value 8GB DDR4 2666MHz"><img
                                        onerror="this.src='thumbs/600x577x1/assets/images/noimage.png';"
                                        src="thumbs/600x577x1/upload/product/4008834216f42666c19s8gisha1-9500.jpg?v=1701825946"
                                        alt="DDR4- G.SKILL Value 8GB DDR4 2666MHz" /></a>
                                <p class="ma">Mã SP: DDR4- G.SKILL Value 8GB DDR4 2</p>
                                <h3 class="name-product"><a class="text-split text-decoration-none"
                                        href="ddr4-gskill-value-8gb-ddr4-2666mhz"
                                        title="DDR4- G.SKILL Value 8GB DDR4 2666MHz">DDR4- G.SKILL Value 8GB DDR4
                                        2666MHz</a></h3>
                                <p class="price-product">
                                    <span class="price-new">Liên hệ</span>
                                </p>
                            </div>
                            <div class="product animate__animated animate__zoomIn wow">
                                <a class="pic-product scale-img"
                                    href="ddr4-team-elite-tan-nhiet-ddr4-8gb-bus-2666-con-bao-hanh-hang"
                                    title="DDR4-Team Elite Tản nhiệt DDR4 8GB Bus 2666 còn bảo hành hãng"><img
                                        onerror="this.src='thumbs/600x577x1/assets/images/noimage.png';"
                                        src="thumbs/600x577x1/upload/product/748337857a2af91175849a6cabfb5b70-9985.jpg?v=1701825946"
                                        alt="DDR4-Team Elite Tản nhiệt DDR4 8GB Bus 2666 còn bảo hành hãng" /></a>
                                <p class="ma">Mã SP: DDR4-Team Elite Tản nhiệt DDR4</p>
                                <h3 class="name-product"><a class="text-split text-decoration-none"
                                        href="ddr4-team-elite-tan-nhiet-ddr4-8gb-bus-2666-con-bao-hanh-hang"
                                        title="DDR4-Team Elite Tản nhiệt DDR4 8GB Bus 2666 còn bảo hành hãng">DDR4-Team
                                        Elite Tản nhiệt DDR4 8GB Bus 2666 còn bảo hành hãng</a></h3>
                                <p class="price-product">
                                    <span class="price-new">Liên hệ</span>
                                </p>
                            </div>
                            <div class="product animate__animated animate__zoomIn wow">
                                <a class="pic-product scale-img" href="cpu-i7-6700" title="CPU-I7 6700"><img
                                        onerror="this.src='thumbs/600x577x1/assets/images/noimage.png';"
                                        src="thumbs/600x577x1/upload/product/0f2d1506150d4b8ac129146d65077f33-2706.jpg?v=1701825946"
                                        alt="CPU-I7 6700" /></a>
                                <p class="ma">Mã SP: CPU-I7 6700</p>
                                <h3 class="name-product"><a class="text-split text-decoration-none"
                                        href="cpu-i7-6700" title="CPU-I7 6700">CPU-I7 6700</a></h3>
                                <p class="price-product">
                                    <span class="price-new">Liên hệ</span>
                                </p>
                            </div>
                            <div class="product animate__animated animate__zoomIn wow">
                                <a class="pic-product scale-img" href="cpu-i5-6500" title="CPU-I5 6500"><img
                                        onerror="this.src='thumbs/600x577x1/assets/images/noimage.png';"
                                        src="thumbs/600x577x1/upload/product/unnamed-1678.jpg?v=1701825946"
                                        alt="CPU-I5 6500" /></a>
                                <p class="ma">Mã SP: CPU-I5 6500</p>
                                <h3 class="name-product"><a class="text-split text-decoration-none"
                                        href="cpu-i5-6500" title="CPU-I5 6500">CPU-I5 6500</a></h3>
                                <p class="price-product">
                                    <span class="price-new">Liên hệ</span>
                                </p>
                            </div>
                            <div class="product animate__animated animate__zoomIn wow">
                                <a class="pic-product scale-img" href="cpu-i3-7100" title="CPU-I3 7100"><img
                                        onerror="this.src='thumbs/600x577x1/assets/images/noimage.png';"
                                        src="thumbs/600x577x1/upload/product/1514349528intel-7th-gen-core-i3-7100-cpu-300px-v1-6775.jpg?v=1701825946"
                                        alt="CPU-I3 7100" /></a>
                                <p class="ma">Mã SP: CPU-I3 7100</p>
                                <h3 class="name-product"><a class="text-split text-decoration-none"
                                        href="cpu-i3-7100" title="CPU-I3 7100">CPU-I3 7100</a></h3>
                                <p class="price-product">
                                    <span class="price-new">Liên hệ</span>
                                </p>
                            </div>
                            <div class="product animate__animated animate__zoomIn wow">
                                <a class="pic-product scale-img" href="cpu-g4600" title="CPU-G4600"><img
                                        onerror="this.src='thumbs/600x577x1/assets/images/noimage.png';"
                                        src="thumbs/600x577x1/upload/product/2b726091caf987c55c466e8013e8fe3b-5998.jpg?v=1701825946"
                                        alt="CPU-G4600" /></a>
                                <h3 class="name-product"><a class="text-split text-decoration-none" href="cpu-g4600"
                                        title="CPU-G4600">CPU-G4600</a></h3>
                                <p class="price-product">
                                    <span class="price-new">Liên hệ</span>
                                </p>
                            </div>
                            <div class="product animate__animated animate__zoomIn wow">
                                <a class="pic-product scale-img" href="main-colofull-h110m-t-plus-v20-cu"
                                    title="MAIN COLOFULL H110M-T PLUS V20 CŨ"><img
                                        onerror="this.src='thumbs/600x577x1/assets/images/noimage.png';"
                                        src="thumbs/600x577x1/upload/product/3975322colorfulh110v20-1-6676.jpg?v=1701825946"
                                        alt="MAIN COLOFULL H110M-T PLUS V20 CŨ" /></a>
                                <p class="ma">Mã SP: MAIN COLOFULL H110M-T PLUS V20</p>
                                <h3 class="name-product"><a class="text-split text-decoration-none"
                                        href="main-colofull-h110m-t-plus-v20-cu"
                                        title="MAIN COLOFULL H110M-T PLUS V20 CŨ">MAIN COLOFULL H110M-T PLUS V20 CŨ</a>
                                </h3>
                                <p class="price-product">
                                    <span class="price-new">Liên hệ</span>
                                </p>
                            </div>
                        </div>

                        <a href="linh-kien-cu" class="xemthemsp text-decoration-none">XEM THÊM</a>
                    </div>
                </div>
                <div class="mod_danhmuc">
                    <div class="wrap-content">
                        <h2 class="title-main tc"><span>Thanh Lý Phòng Net</span></h2>
                        <p class="sltc">VI TÍNH PHÁT NĂNG: CHUYÊN THANH LÝ NÉT, CƠ SỞ TRƯỜNG HỌC CÔNG TY. ĐIỆN THOẠI
                            LIÊN HỆ: 0938 948 862 Mr NHẪN</p>
                        <div class="grid-page">
                            <div class="product animate__animated animate__zoomIn wow">
                                <a class="pic-product scale-img" href="thanh-ly-phong-net-a-z"
                                    title="Thanh lý phòng net A- Z"><img
                                        onerror="this.src='thumbs/600x577x1/assets/images/noimage.png';"
                                        src="thumbs/600x577x1/upload/product/e1b61f2ef53d3f63662c-3714.jpg?v=1701825946"
                                        alt="Thanh lý phòng net A- Z" /></a>
                                <p class="ma">Mã SP: Thanh lý phòng net A- Z</p>
                                <h3 class="name-product"><a class="text-split text-decoration-none"
                                        href="thanh-ly-phong-net-a-z" title="Thanh lý phòng net A- Z">Thanh lý phòng
                                        net A- Z</a></h3>
                                <p class="price-product">
                                    <span class="price-new">Liên hệ</span>
                                </p>
                            </div>
                            <div class="product animate__animated animate__zoomIn wow">
                                <a class="pic-product scale-img" href="thanh-ly-phong-net-a-z-gia-cao"
                                    title="Thanh lý phòng net A- Z giá cao"><img
                                        onerror="this.src='thumbs/600x577x1/assets/images/noimage.png';"
                                        src="thumbs/600x577x1/upload/product/424be9b53ea6f4f8adb7-7989.jpg?v=1701825946"
                                        alt="Thanh lý phòng net A- Z giá cao" /></a>
                                <p class="ma">Mã SP: Thanh lý phòng net A- Z</p>
                                <h3 class="name-product"><a class="text-split text-decoration-none"
                                        href="thanh-ly-phong-net-a-z-gia-cao"
                                        title="Thanh lý phòng net A- Z giá cao">Thanh lý phòng net A- Z giá cao</a>
                                </h3>
                                <p class="price-product">
                                    <span class="price-new">Liên hệ</span>
                                </p>
                            </div>
                            <div class="product animate__animated animate__zoomIn wow">
                                <a class="pic-product scale-img" href="thanh-ly-phong-net-a-z-gia-cao-binh-duong"
                                    title="Thanh lý phòng net A- Z giá cao  bình dương"><img
                                        onerror="this.src='thumbs/600x577x1/assets/images/noimage.png';"
                                        src="thumbs/600x577x1/upload/product/16-7627.jpg?v=1701825946"
                                        alt="Thanh lý phòng net A- Z giá cao  bình dương" /></a>
                                <p class="ma">Mã SP: Thanh lý phòng net A- Z</p>
                                <h3 class="name-product"><a class="text-split text-decoration-none"
                                        href="thanh-ly-phong-net-a-z-gia-cao-binh-duong"
                                        title="Thanh lý phòng net A- Z giá cao  bình dương">Thanh lý phòng net A- Z giá
                                        cao bình dương</a></h3>
                                <p class="price-product">
                                    <span class="price-new">Liên hệ</span>
                                </p>
                            </div>
                            <div class="product animate__animated animate__zoomIn wow">
                                <a class="pic-product scale-img"
                                    href="thanh-ly-phong-net-a-z-gia-cao-khu-vuc-mien-nam"
                                    title="Thanh lý phòng net A- Z giá cao khu vực miền nam"><img
                                        onerror="this.src='thumbs/600x577x1/assets/images/noimage.png';"
                                        src="thumbs/600x577x1/upload/product/aeed8f8c5c9f96c1cf8e-4736.jpg?v=1701825946"
                                        alt="Thanh lý phòng net A- Z giá cao khu vực miền nam" /></a>
                                <p class="ma">Mã SP: Thanh lý phòng net A- Z</p>
                                <h3 class="name-product"><a class="text-split text-decoration-none"
                                        href="thanh-ly-phong-net-a-z-gia-cao-khu-vuc-mien-nam"
                                        title="Thanh lý phòng net A- Z giá cao khu vực miền nam">Thanh lý phòng net A-
                                        Z giá cao khu vực miền nam</a></h3>
                                <p class="price-product">
                                    <span class="price-new">Liên hệ</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mod_danhmuc">
                    <div class="wrap-content">
                        <h2 class="title-main tc"><span>Màn Hình Máy Tính</span></h2>
                        <p class="sltc"></p>
                        <div class="grid-page">
                            <div class="product animate__animated animate__zoomIn wow">
                                <a class="pic-product scale-img" href="lcd-19-vsp-ve19le1902-chinh-hang"
                                    title="LCD 19'' VSP VE19(LE1902) Chính hãng"><img
                                        onerror="this.src='thumbs/600x577x1/assets/images/noimage.png';"
                                        src="thumbs/600x577x1/upload/product/vsp-19-9843.jpg?v=1701825946"
                                        alt="LCD 19'' VSP VE19(LE1902) Chính hãng" /></a>
                                <h3 class="name-product"><a class="text-split text-decoration-none"
                                        href="lcd-19-vsp-ve19le1902-chinh-hang"
                                        title="LCD 19'' VSP VE19(LE1902) Chính hãng">LCD 19'' VSP VE19(LE1902) Chính
                                        hãng</a></h3>
                                <p class="price-product">
                                    <span class="price-new">Liên hệ</span>
                                </p>
                            </div>
                            <div class="product animate__animated animate__zoomIn wow">
                                <a class="pic-product scale-img" href="lcd-20-vsp-vs20"
                                    title="LCD 20'' VSP VS20"><img
                                        onerror="this.src='thumbs/600x577x1/assets/images/noimage.png';"
                                        src="thumbs/600x577x1/upload/product/vsp-20-5179.png?v=1701825946"
                                        alt="LCD 20'' VSP VS20" /></a>
                                <p class="ma">Mã SP: LCD 20'' VSP VS20</p>
                                <h3 class="name-product"><a class="text-split text-decoration-none"
                                        href="lcd-20-vsp-vs20" title="LCD 20'' VSP VS20">LCD 20'' VSP VS20</a></h3>
                                <p class="price-product">
                                    <span class="price-new">Liên hệ</span>
                                </p>
                            </div>
                            <div class="product animate__animated animate__zoomIn wow">
                                <a class="pic-product scale-img" href="lcd-vsp-22-inch-led-monitor-e2210h"
                                    title="LCD VSP 22 inch LED Monitor E2210H"><img
                                        onerror="this.src='thumbs/600x577x1/assets/images/noimage.png';"
                                        src="thumbs/600x577x1/upload/product/e2210h01-7272.jpg?v=1701825946"
                                        alt="LCD VSP 22 inch LED Monitor E2210H" /></a>
                                <p class="ma">Mã SP: E2210H</p>
                                <h3 class="name-product"><a class="text-split text-decoration-none"
                                        href="lcd-vsp-22-inch-led-monitor-e2210h"
                                        title="LCD VSP 22 inch LED Monitor E2210H">LCD VSP 22 inch LED Monitor
                                        E2210H</a></h3>
                                <p class="price-product">
                                    <span class="price-new">Liên hệ</span>
                                </p>
                            </div>
                            <div class="product animate__animated animate__zoomIn wow">
                                <a class="pic-product scale-img" href="man-hinh-led-monitor-vsp-22inch-v2205h"
                                    title="Màn hình LED monitor VSP 22inch V2205H"><img
                                        onerror="this.src='thumbs/600x577x1/assets/images/noimage.png';"
                                        src="thumbs/600x577x1/upload/product/v2205h03-3230.jpg?v=1701825946"
                                        alt="Màn hình LED monitor VSP 22inch V2205H" /></a>
                                <p class="ma">Mã SP: V2205H</p>
                                <h3 class="name-product"><a class="text-split text-decoration-none"
                                        href="man-hinh-led-monitor-vsp-22inch-v2205h"
                                        title="Màn hình LED monitor VSP 22inch V2205H">Màn hình LED monitor VSP 22inch
                                        V2205H</a></h3>
                                <p class="price-product">
                                    <span class="price-new">Liên hệ</span>
                                </p>
                            </div>
                            <div class="product animate__animated animate__zoomIn wow">
                                <a class="pic-product scale-img"
                                    href="man-hinh-phang-led-tran-vien-slim-bezel-vsp-v2408s"
                                    title="Màn hình phẳng LED tràn viền Slim Bezel VSP V2408S"><img
                                        onerror="this.src='thumbs/600x577x1/assets/images/noimage.png';"
                                        src="thumbs/600x577x1/upload/product/v2408s02-7749.jpg?v=1701825946"
                                        alt="Màn hình phẳng LED tràn viền Slim Bezel VSP V2408S" /></a>
                                <p class="ma">Mã SP: V2408S</p>
                                <h3 class="name-product"><a class="text-split text-decoration-none"
                                        href="man-hinh-phang-led-tran-vien-slim-bezel-vsp-v2408s"
                                        title="Màn hình phẳng LED tràn viền Slim Bezel VSP V2408S">Màn hình phẳng LED
                                        tràn viền Slim Bezel VSP V2408S</a></h3>
                                <p class="price-product">
                                    <span class="price-new">Liên hệ</span>
                                </p>
                            </div>
                            <div class="product animate__animated animate__zoomIn wow">
                                <a class="pic-product scale-img" href="man-hinh-viewsonic-va2408-h-24-ips-75hz"
                                    title="Màn hình ViewSonic VA2408-H 24&quot; IPS 75Hz"><img
                                        onerror="this.src='thumbs/600x577x1/assets/images/noimage.png';"
                                        src="thumbs/600x577x1/upload/product/aaaa-2490.jpg?v=1701825946"
                                        alt="Màn hình ViewSonic VA2408-H 24&quot; IPS 75Hz" /></a>
                                <p class="ma">Mã SP: VA2408-H 24&quot; IPS 75Hz</p>
                                <h3 class="name-product"><a class="text-split text-decoration-none"
                                        href="man-hinh-viewsonic-va2408-h-24-ips-75hz"
                                        title="Màn hình ViewSonic VA2408-H 24&quot; IPS 75Hz">Màn hình ViewSonic
                                        VA2408-H 24&quot; IPS 75Hz</a></h3>
                                <p class="price-product">
                                    <span class="price-new">Liên hệ</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mod_danhmuc">
                    <div class="wrap-content">
                        <h2 class="title-main tc"><span>Thiết Bị Âm Thanh</span></h2>
                        <p class="sltc"></p>
                        <div class="grid-page">
                            <div class="product animate__animated animate__zoomIn wow">
                                <a class="pic-product scale-img" href="phone-run-mus-k8-led-gaming"
                                    title="PHONE RUN MUS K8 LED GAMING"><img
                                        onerror="this.src='thumbs/600x577x1/assets/images/noimage.png';"
                                        src="thumbs/600x577x1/upload/product/heaphone-run-mus-k804-1-2320.jpg?v=1701825946"
                                        alt="PHONE RUN MUS K8 LED GAMING" /></a>
                                <p class="ma">Mã SP: TAI NGHE RUN MUS K8 LED GAMING</p>
                                <h3 class="name-product"><a class="text-split text-decoration-none"
                                        href="phone-run-mus-k8-led-gaming" title="PHONE RUN MUS K8 LED GAMING">PHONE
                                        RUN MUS K8 LED GAMING</a></h3>
                                <p class="price-product">
                                    <span class="price-new">255.000đ</span>
                                    <span class="price-old">260.000đ</span>
                                    <span class="price-per">-2%</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <a class="banner1 d-block w-100" href=""><img src="upload/photo/vi-tinh-phat-nang-2624.jpg"
                    class="d-block w-100" /></a>

            <div class="wrap-intro wrap-content">
                <h2 class="title-main tc"><span>TIN TỨC & VIDEO</span></h2>
                <p class="sltc"></p>
                <div class="d-flex flex-wrap align-items-start justify-content-between">
                    <div class="left-intro animate__animated animate__zoomIn wow">
                        <div class="tintuc_conlai">
                            <div class="item_ttcl  d-flex flex-wrap align-items-start justify-content-between">
                                <a class="img scale-img" href="5-laptop-ban-tot-gia-duoi-20-trieu-dong"
                                    title="5 laptop bán tốt giá dưới 20 triệu đồng"><img
                                        onerror="this.src='thumbs/140x120x1/assets/images/noimage.png';"
                                        src="thumbs/140x120x1/upload/news/a1-8554-1639990084-2212.jpg"
                                        alt="5 laptop bán tốt giá dưới 20 triệu đồng" /></a>
                                <div class="tttt">
                                    <span>Ngày 22/12/2021</span>
                                    <h3><a class="ten motdong text-decoration-none"
                                            href="5-laptop-ban-tot-gia-duoi-20-trieu-dong"
                                            title="5 laptop bán tốt giá dưới 20 triệu đồng">5 laptop bán tốt giá dưới
                                            20 triệu đồng</a></h3>
                                    <p class="mota text-split">Laptop dưới 20 triệu đồng là phân khúc bán chạy tại Việt
                                        Nam nhờ cấu hình tốt, đa dạng cổng kết nối, phù hợp nhu cầu họp học trực tuyến.

                                        Ghi nhận tại một số hệ thống bán lẻ cho thấy, máy tính xách tay bán chạy nhất là
                                        các dòng từ 12 triệu đến 20 triệu đồng, với mức tăng trưởng 50% so với năm
                                        ngoái. Trong đó, các phiên bản của Acer, Dell, Asus, HP, Lenovo được nhiều người
                                        quan tâm.</p>
                                </div>
                            </div>
                            <div
                                class="item_ttcl item_ttcl1 d-flex flex-wrap align-items-start justify-content-between">
                                <a class="img scale-img" href="5-mau-man-hinh-may-tinh-phu-hop-cho-cong-viec"
                                    title="5 mẫu màn hình máy tính phù hợp cho công việc"><img
                                        onerror="this.src='thumbs/140x120x1/assets/images/noimage.png';"
                                        src="thumbs/140x120x1/upload/news/top-man-hinh-tot-nhat-nam-2020-danh-cho-game-thu-nc-3703.jpg"
                                        alt="5 mẫu màn hình máy tính phù hợp cho công việc" /></a>
                                <div class="tttt">
                                    <span>Ngày 17/12/2021</span>
                                    <h3><a class="ten motdong text-decoration-none"
                                            href="5-mau-man-hinh-may-tinh-phu-hop-cho-cong-viec"
                                            title="5 mẫu màn hình máy tính phù hợp cho công việc">5 mẫu màn hình máy
                                            tính phù hợp cho công việc</a></h3>
                                    <p class="mota text-split">Dell UltraSharp, LG UltraFine, Huawei MateView là những
                                        mẫu màn hình chất lượng cao, giá tốt, phù hợp cho công việc văn phòng, thiết kế
                                        đồ họa và giải trí.</p>
                                </div>
                            </div>
                            <div class="item_ttcl  d-flex flex-wrap align-items-start justify-content-between">
                                <a class="img scale-img" href="tho-dao-da-khai-thac-het-90-bitcoin-tren-the-gioi"
                                    title="'Thợ đào' đã khai thác hết 90% Bitcoin trên thế giới"><img
                                        onerror="this.src='thumbs/140x120x1/assets/images/noimage.png';"
                                        src="thumbs/140x120x1/upload/news/download-4508.jpg"
                                        alt="'Thợ đào' đã khai thác hết 90% Bitcoin trên thế giới" /></a>
                                <div class="tttt">
                                    <span>Ngày 17/12/2021</span>
                                    <h3><a class="ten motdong text-decoration-none"
                                            href="tho-dao-da-khai-thac-het-90-bitcoin-tren-the-gioi"
                                            title="'Thợ đào' đã khai thác hết 90% Bitcoin trên thế giới">'Thợ đào' đã
                                            khai thác hết 90% Bitcoin trên thế giới</a></h3>
                                    <p class="mota text-split">Các &quot;thợ đào&quot; mất 12 năm để lấy được 90%
                                        trong tổng số 21 triệu Bitcoin, nhưng số còn lại phải đến năm 2140 mới khai thác
                                        hết.</p>
                                </div>
                            </div>
                            <div
                                class="item_ttcl item_ttcl1 d-flex flex-wrap align-items-start justify-content-between">
                                <a class="img scale-img" href="cap-quang-internet-mong-manh-the-nao"
                                    title="Cáp quang Internet 'mong manh' thế nào"><img
                                        onerror="this.src='thumbs/140x120x1/assets/images/noimage.png';"
                                        src="thumbs/140x120x1/upload/news/chnae6j2hnbegzfmvhgene-970-80-4252-1881-1639714018-7388.jpg"
                                        alt="Cáp quang Internet 'mong manh' thế nào" /></a>
                                <div class="tttt">
                                    <span>Ngày 17/12/2021</span>
                                    <h3><a class="ten motdong text-decoration-none"
                                            href="cap-quang-internet-mong-manh-the-nao"
                                            title="Cáp quang Internet 'mong manh' thế nào">Cáp quang Internet 'mong
                                            manh' thế nào</a></h3>
                                    <p class="mota text-split">Theo thống kê, trung bình cứ ba ngày lại có một sự cố
                                        đứt cáp ở đâu đó trên thế giới, khiến giai thoại &quot;cá mập cắn&quot; được lan
                                        truyền.

                                        Ngày nay, việc sử dụng Internet qua mạng di động hay Wi-Fi đã trở nên bình
                                        thường. Đằng sau nó là một hệ thống phức tạp gồm cáp ngầm, cáp dưới nước và mới
                                        đây là những &quot;chòm sao&quot; vệ tinh.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-intro animate__animated animate__zoomIn wow">
                        <div class="videohome-intro">
                            <div id="video-select"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="footer-article">
                <div class="wrap-content d-flex flex-wrap align-items-start justify-content-between">
                    <div class="footer-news animate__animated animate__zoomIn wow">
                        <h2 class="ten-footer">VI TÍNH PHÁT NĂNG BÌNH DƯƠNG</h2>
                        <div class="info-footer">
                            <p><span style="color:#f1c40f;"><strong>UY TÍN - NHANH CHÓNG - GIÁ TỐT</strong></span></p>

                            <p>- Địa Chỉ: 592 Phú Lợi, P. Phú Hoà, TP. TDM, Bình Dương</p>

                            <p>- Điện Thoại: <strong>0938 948 862</strong> <em>or</em><strong> 0982 223 762 Mr
                                    NHẪN</strong></p>

                            <p>- Email: ngodinhnhan82@gmail.com - Website: <a href="https://phatnang.com/"><span
                                        style="color:#ffffff;">https://phatnang.com/</span></a></p>

                            <hr />
                            <p><span style="color:#ffff33;"><u><strong>Lưu ý: Vi Tính Phát Năng chỉ sử dụng giao dịch
                                            với các tài khoản sau:</strong></u></span></p>

                            <table align="center" border="0" cellpadding="1" cellspacing="0"
                                style="width:95%;">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 755px; text-align: left;"><span
                                                style="font-size:12px;"><strong><span
                                                        style="font-family:Courier New,Courier,monospace;"><span
                                                            style="line-height:1;">- TK NGÂN HÀNG ACB-NGÔ ĐÌNH
                                                            NHẪN</span></span></strong></span></th>
                                        <th scope="col" style="width: 192px; text-align: right;">
                                            <font face="Courier New, Courier, monospace"><span
                                                    style="font-size: 12px;"><b>Số TK:</b></span></font>
                                        </th>
                                        <th scope="col" style="width: 113px; text-align: left;"><span
                                                style="font-size:12px;"><strong><span
                                                        style="font-family:Courier New,Courier,monospace;"><span
                                                            style="line-height:1;">165655709</span></span></strong></span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 755px;"><span style="font-size:12px;"><strong><span
                                                        style="font-family:Courier New,Courier,monospace;"><span
                                                            style="line-height:1;">- TK VIETCOMBANK-NGÔ ĐÌNH
                                                            NHẪN</span></span></strong></span></td>
                                        <td style="width: 192px; text-align: right;"><span
                                                style="font-family:Courier New,Courier,monospace;"><span
                                                    style="font-size:12px;"><strong>Số TK:</strong></span></span></td>
                                        <td style="width: 113px;"><span style="font-size:12px;"><strong><span
                                                        style="font-family:Courier New,Courier,monospace;"><span
                                                            style="line-height:1;">0281000305570
                                                        </span></span></strong></span></td>
                                    </tr>
                                </tbody>
                            </table>

                            <hr />
                            <p><span style="font-size:12px;"><span
                                        style="font-family:Lucida Sans Unicode,Lucida Grande,sans-serif;">- Thiết kế
                                        website <a href="https://www.facebook.com/trunghien.pham.33/"><span
                                                style="color:#ffffff;">Phạm Trung Hiền</span></a> -
                                        0909.137.499</span></span></p>

                            <table border="0" cellpadding="0" cellspacing="0" style="width: 427px;">
                                <tbody>
                                    <tr>
                                        <td style="width: 253px;"><span style="font-size:12px;"><span
                                                    style="font-family:Lucida Sans Unicode,Lucida Grande,sans-serif;">-
                                                    Website được chứng nhận và bảo vệ bởi: </span></span></td>
                                        <td style="width: 167px;"><a class="dmca-badge"
                                                href="//www.dmca.com/Protection/Status.aspx?ID=7dfcb530-7fee-42ab-8175-2daa4ed041ff"
                                                title="DMCA.com Protection Status"><img
                                                    alt="DMCA.com Protection Status"
                                                    src="https://images.dmca.com/Badges/dmca_protected_sml_120am.png?ID=7dfcb530-7fee-42ab-8175-2daa4ed041ff" /></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="footer-news animate__animated animate__zoomIn wow">
                        <div class="title-footer">Chính sách hỗ trợ</div>
                        <ul class="footer-ul">
                            <li><a class="text-decoration-none" href="chinh-sach-tra-hang"
                                    title="Chính sách thanh toán">Chính sách thanh toán</a></li>
                            <li><a class="text-decoration-none" href="chinh-sach-bao-hanh"
                                    title="Chính sách bảo hành">Chính sách bảo hành</a></li>
                            <li><a class="text-decoration-none" href="chinh-sach-nguoi-dung"
                                    title="Chính sách người dùng">Chính sách người dùng</a></li>
                            <li><a class="text-decoration-none" href="chinh-sach-mua-hang"
                                    title="Chính sách mua hàng">Chính sách mua hàng</a></li>
                        </ul>

                        <div class="social-footer d-flex flex-wrap">
                            <a href="" target="_blank"><img src="upload/photo/icon01-28940.png"
                                    alt=""></a>
                            <a href="" target="_blank"><img src="upload/photo/icon03-26051.png"
                                    alt=""></a>
                            <a href="" target="_blank"><img src="upload/photo/icon05-30622.png"
                                    alt=""></a>
                            <a href="" target="_blank"><img src="upload/photo/icon07-43933.png"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="footer-news animate__animated animate__zoomIn wow">
                        <div class="title-footer">Fanpage facebook</div>
                        <div id="fanpage-facebook"></div>
                    </div>
                </div>
            </div>
            <div class="footer-powered">
                <div class="wrap-content d-flex flex-wrap align-items-center justify-content-between">
                    <p class="copyright animate__animated animate__fadeInLeft wow">&copy; 2021 Vi Tính Phát Năng.
                        Design by NiNa Co.,Ltd</p>
                    <p class="statistic animate__animated animate__fadeInRight wow">
                        <span>Đang online: 4</span>
                        <b>|</b>
                        <span>Tuần: 604</span>
                        <b>|</b>
                        <span>Tháng: 1623</span>
                        <b>|</b>
                        <span>Tổng: 189376</span>
                    </p>
                </div>
            </div>
            <div id="footer-map"></div>
            <div id="messages-facebook"></div>
        </div>
        <div>
            <a class="btn-phone btn-frame" href="tel:0938948862">
                <div class="animated infinite zoomIn kenit-alo-circle"></div>
                <div class="animated infinite pulse kenit-alo-circle-fill"></div>
                <i><img src="assets/images/dienthoai.png" alt="Hotline"></i>
            </a>
            <a class="btn-zalo btn-frame" href="https://zalo.me/0938948862">
                <div class="animated infinite zoomIn kenit-alo-circle"></div>
                <div class="animated infinite pulse kenit-alo-circle-fill"></div>
                <i><img src="assets/images/chatzalo.png" alt="Hotline"></i>
            </a>
        </div>



        <!-- Modal notify -->
        <div class="modal modal-custom fade" id="popup-notify" tabindex="-1" role="dialog"
            aria-labelledby="popup-notify-label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-top modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="popup-notify-label">Thông báo</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Thoát</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal cart -->
        <div class="modal fade" id="popup-cart" tabindex="-1" role="dialog"
            aria-labelledby="popup-cart-label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-top modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="popup-cart-label">Giỏ hàng của bạn</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body"></div>
                </div>
            </div>
        </div>
        <!-- Js Config -->
        <script type="text/javascript">
            var NN_FRAMEWORK = NN_FRAMEWORK || {};
            var CONFIG_BASE = 'https://phatnang.com/';
            var WEBSITE_NAME = 'VI TÍNH PHÁT NĂNG';
            var TIMENOW = '06/12/2023';
            var SHIP_CART = false;
            var GOTOP = 'assets/images/top.png';
            var LANG = {
                'no_keywords': 'Chưa nhập từ khóa tìm kiếm',
                'delete_product_from_cart': 'Bạn muốn xóa sản phẩm này khỏi giỏ hàng ? ',
                'no_products_in_cart': 'Không tồn tại sản phẩm nào trong giỏ hàng !',
                'wards': 'Phường/xã',
                'back_to_home': 'Về trang chủ',
            };
        </script>
        <!-- Js Files -->
        <script type="text/javascript" src="./assets/js/jquery.min.js?v=7oh4UtMKDZ"></script>
        <script type="text/javascript" src="./assets/bootstrap/bootstrap.js?v=fq8WMJHWKw"></script>
        <script type="text/javascript" src="./assets/js/wow.min.js?v=jzI3GPHvm"></script>
        <script type="text/javascript" src="./assets/mmenu/mmenu.js?v=lQivq7CeCk"></script>
        <script type="text/javascript" src="./assets/owlcarousel2/owl.carousel.js?v=fB3GyDMSCi"></script>
        <script type="text/javascript" src="./assets/slick/slick.js?v=0yNtRrnbxN"></script>
        <script type="text/javascript" src="./assets/fancybox3/jquery.fancybox.js?v=IGkFcWpUcy"></script>
        <script type="text/javascript" src="./assets/js/functions.js?v=1iybtxphHD"></script>
        <script type="text/javascript" src="./assets/js/apps.js?v=AaRJFvx1vF"></script>
        <!-- Js Google Recaptcha V3 -->

        <!-- Js Structdata -->
        <!-- General -->
        <script type="application/ld+json">
    {
        "@context" : "https://schema.org",
        "@type" : "Organization",
        "name" : "VI TÍNH PHÁT NĂNG",
        "url" : "https://phatnang.com/",
        "sameAs" :
        [
                            "",                            "",                            "",                            ""                    ],
        "address":
        {
            "@type": "PostalAddress",
            "streetAddress": "592 Đường Phú Lợi, Phường Phú Hòa, Thành Phố Thủ Dầu Một, Bình Dương",
            "addressRegion": "BINH DUONG",
            "postalCode": "75000",
            "addressCountry": "vi"
        }
    }
</script>
        <!-- Js Addons -->
        <div id="script-main"></div>
        <script type="text/javascript">
            $(function() {
                var a = !1;
                $(window).scroll(function() {
                    $(window).scrollTop() > 10 && !a && ($("#video-select").load(
                        "ajax/ajax_addons.php?type=video-select"), a = !0)
                })
            });
        </script>
        <script type="text/javascript">
            $(function() {
                var a = !1;
                $(window).scroll(function() {
                    $(window).scrollTop() > 10 && !a && ($("#fanpage-facebook").load(
                        "ajax/ajax_addons.php?type=fanpage-facebook"), a = !0)
                })
            });
        </script>
        <script type="text/javascript">
            $(function() {
                var a = !1;
                $(window).scroll(function() {
                    $(window).scrollTop() > 10 && !a && ($("#footer-map").load(
                        "ajax/ajax_addons.php?type=footer-map"), a = !0)
                })
            });
        </script>
        <script type="text/javascript">
            $(function() {
                var a = !1;
                $(window).scroll(function() {
                    $(window).scrollTop() > 10 && !a && ($("#messages-facebook").load(
                        "ajax/ajax_addons.php?type=messages-facebook"), a = !0)
                })
            });
        </script>
        <script type="text/javascript">
            $(function() {
                var a = !1;
                $(window).scroll(function() {
                    $(window).scrollTop() > 0.5 && !a && ($("#script-main").load(
                        "ajax/ajax_addons.php?type=script-main"), a = !0)
                })
            });
        </script>
        <!-- Js Body -->
        <style>
            .mobile-hotline {
                display: none
            }

            .hotline {
                position: fixed;
                left: 10px;
                bottom: 10px;
                z-index: 9000;
                display: block;
                background: #fac100;
                color: red;
                padding-top: 5px;
                padding-bottom: 5px;
                padding-left: 12px;
                padding-right: 12px;
                border-radius: 99px;
            }

            .hotline .hotline-number {
                font-size: 20px;
                color: #b20000;
                font-weight: bold
            }

            @media (max-width: 767px) {

                .hotline {

                    display: none;

                }

                .mobile-hotline {
                    display: block;
                    bottom: 0;
                    width: 100%;
                    background: rgba(0, 0, 0, 0.8);
                    height: 60px;
                    position: fixed;
                    z-index: 9999999
                }

                .mobile-hotline .mobile-hotline-left {
                    width: 45%;
                    float: left;
                    text-align: center;
                    background: #00a502;
                    margin-left: 10px;
                    margin-right: 5px;
                    margin-top: 7px;
                    height: 45px;
                    border-radius: 4px
                }

                .mobile-hotline .mobile-hotline-left a {
                    color: white;
                    line-height: 46px;
                    font-size: 16px;
                    font-weight: bold
                }

                .mobile-hotline .mobile-hotline-right {
                    width: 45%;
                    float: right;
                    text-align: center;
                    background: #fac100;
                    margin-left: 5px;
                    margin-right: 10px;
                    margin-top: 7px;
                    height: 45px;
                    border-radius: 4px
                }

                .mobile-hotline .mobile-hotline-right a {
                    color: red;
                    line-height: 46px;
                    font-size: 16px;
                    font-weight: bold
                }
            }
        </style>
        <a href="tel:+84938 948 862">
            <div class="hotline">
                <span class="before-hotline">Hotline:</span>
                <span class="hotline-number">0938.948.862</span>
            </div>
        </a>
        <div class="mobile-hotline">
            <div class="mobile-hotline-left">
                <a href="https://phatnang.com/bang-gia" target="blank">Bảng Báo Giá</a>
            </div>
            <div class="mobile-hotline-right"><a href="tel:+84938 948 862" target="blank">Gọi điện ngay</a></div>
        </div>
        <div class="toolbar">
            <ul>
                <li>
                    <a id="goidien" href="tel:0938948862" title="title">
                        <img src="assets/images/icon-t1.png" alt="images" /><br>
                        <span>Gọi điện</span>
                    </a>
                </li>
                <li>
                    <a id="nhantin" href="sms:0938948862" title="title">
                        <img src="assets/images/icon-t2.png" alt="images" /><br>
                        <span>Nhắn tin</span>
                    </a>
                </li>
                <li>
                    <a id="chatfb"
                        href="https://www.google.com/maps/dir//592+D%C6%B0%E1%BB%9Dng+Ph%C3%BA+L%E1%BB%A3i,+Ph%C3%BA+Ho%C3%A0,+Th%E1%BB%A7+D%E1%BA%A7u+M%E1%BB%99t,+B%C3%ACnh+D%C6%B0%C6%A1ng,+Vietnam/@10.9879362,106.6926757,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x3174d0e9981e4175:0x4b296bf27a496b6d!2m2!1d106.6926754!2d10.9879375!3e0"
                        title="title">
                        <img src="assets/images/chiduong.png" alt="images" /><br>
                        <span>Chỉ đưởng</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</body>

</html>
