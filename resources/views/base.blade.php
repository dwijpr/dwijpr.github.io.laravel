@php
$tags = [
  "BelajarMenulis", "Blogging", "Programming",
  "Komputer", "Koding", "Game",
];

$posts = [
  [
    'Aug 24, 2015',
    '24/8 2015',
    'menambah-ukuran-file-upload-pada-aplikasi-berbasis-php-dan-nginx',
    'Menambah Ukuran File Upload Pada Aplikasi Berbasis PHP dan Nginx',
  ],
  [
    'Aug 23, 2015',
    '23/8 2015',
    'error-rvm-install-ruby',
    'Error RVM Install Ruby',
  ],
  [
    'Aug 22, 2015',
    '22/8 2015',
    'mengetahui-ukuran-sebuah-halaman-web',
    'Mengetahui Ukuran Sebuah Halaman Web Menggunakan Google Chrome',
  ],
  [
    'Aug 21, 2015',
    '21/8 2015',
    'template-cv',
    'Template CV',
  ],
  [
    'Aug 20, 2015',
    '20/8 2015',
    'meringkas-javascript-console-log',
    'Meringkas JavaScript Web console.log',
  ],
  [
    'Aug 19, 2015',
    '19/8 2015',
    'breakout-game',
    'Breakout Game',
  ],
  [
    'Aug 18, 2015',
    '18/8 2015',
    'dasar-git',
    'Dasar Git',
  ],
  [
    'Aug 17, 2015',
    '17/8 2015',
    'membuat-rumah-baru-di-ubuntu',
    'Membuat Rumah Baru di Ubuntu',
  ],
  [
    'Aug 16, 2015',
    '16/8 2015',
    'flat-color-picker',
    'Flat Color Picker',
  ],
  [
    'Aug 15, 2015',
    '15/8 2015',
    'terminal-output-menjadi-html-menggunakan-aha',
    'Terminal Output Menjadi HTML Menggunakan AHA',
  ],
  [
    'Aug 14, 2015',
    '14/8 2015',
    'timer-app',
    'Timer App',
  ],
  [
    'Aug 13, 2015',
    '13/8 2015',
    'bermain-tictactoe',
    'Bermain TicTacToe',
  ],
  [
    'Aug 12, 2015',
    '12/8 2015',
    'permainan-tictactoe',
    'Permainan TicTacToe',
  ],
  [
    'Aug 11, 2015',
    '11/8 2015',
    'tahap-demi-tahap-menambahkan-navigation-drawer-membuat-aplikasi-android',
    'Tahap Demi Tahap Menambahkan Navigation Drawer - Membuat Aplikasi Android',
  ],
  [
    'Aug 10, 2015',
    '10/8 2015',
    'menggunakan-redcarpet-pada-jekyll',
    'Menggunakan RedCarpet Pada Jekyll',
  ],
  [
    'Aug 09, 2015',
    '9/8 2015',
    'cara-cepat-memulai-pemrograman-komputer',
    'Cara Cepat Memulai Pemrograman Komputer',
  ],
  [
    'Jul 30, 2015',
    '30/7 2015',
    'script-bash-untuk-integrasi-dengan-git',
    'Script Bash untuk Integrasi dengan Git',
  ],
  [
    'Jul 28, 2015',
    '28/7 2015',
    'mencoba-bit-field',
    'iMencoba Bit Field',
  ],
  [
    'Jul 17, 2015',
    '17/7 2015',
    'menggunakan-text-editor-vim',
    'Menggunakan Penyunting Teks VIM',
  ],
  [
    'May 27, 2015',
    '27/5 2015',
    'mulai-menulis',
    'Mulai Menulis',
  ],
];
@endphp

<!DOCTYPE html>
<html lang="id-ID">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/old/assets/img/dwi.png"/>
    <link rel="shortcut icon" type="image/png" href="/old/assets/img/dwi.png"/>
    <title>

            Catatan dwijpr

    </title>
    <meta
        name="description"
        content="
                Sedikit demi sedikit lama-lama menjadi bukit

            "
    >
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu+Mono:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="/old/css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!--
    <link
        rel="stylesheet"
        href="assets/thirdparty/twbs-bootstrap/css/bootstrap.min.css"
    >
    -->
    <link rel="stylesheet" href="/old/css/global.css">
    <link
        rel="stylesheet"
        href="/old/assets/thirdparty/smiley.js/smileys.css"
    >
    <link rel="stylesheet" href="/old/css/font.css">

    <link
        rel="canonical"
        href="/"
    >
    <link
        rel="alternate"
        type="application/rss+xml"
        title="Catatan dwijpr"
        href="feed.xml"
    />

    <script src="/old/assets/thirdparty/jquery-1.11.2.js"></script>
    <script src="/old/assets/thirdparty/twbs-bootstrap/js/bootstrap.min.js"></script>
    <script src="/old/assets/thirdparty/smiley.js/smileys.js"></script>

    <style>@include('index.style')</style>
  </head>

  <body id="top">

    <div class="hidden-xs">
      <div
        class="container container-front-page"
        id="useless-front"
      >
        <div class="wrapper">
          <div class="row">
            <div class="col-xs-12">
              <div class="row">
                <div
                  class="col-sm-12 text-right"
                >
                  <h1 class="mainHeader">Catatan dwijpr</h1>
                  <div id="main-image-wrapper">
                    @foreach ($tags as $tag)
                    <div class="fade-big-wrapper">
                      <span class="fade-big text-muted">
                      #{{ $tag }}
                      </span>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div style="padding-top: 128px;"></div>
    </div>

    <div id="the-blog">

      <div class="visible-xs">
        <header class="site-header">
          <a href="/">
            <div class="hidden-xs wrapper">
              <div class="home">~</div>
              <div class="site-title">Catatan dwijpr</div>
            </div>
            <div class="visible-xs wrapper">
              <div class="site-title">Catatan dwijpr</div>
            </div>
          </a>
        </header>
      </div>

      <div class="page-content">
        <div class="wrapper">

          <div class="toc">
          @foreach ($posts as $post)
            <div class="row">
              <div
                class="
                  monospace
                  col-sm-3 visible-sm-offset-3 hidden-xs text-muted
                ">
                {{ $post[0] }}
              </div>
              <div class="monospace col-xs-4 visible-xs text-muted">
                {{ $post[1] }}
              </div>
              <div class="col-xs-8 col-sm-9">
              <a href="{{ $post[2] }}">{{ $post[3] }}</a>
              </div>
            </div>
          @endforeach
          </div>

        </div>
      </div>

      <footer class="site-footer">
        <div class="wrapper">
          <div class="footer-col-wrapper">
            <div class="footer-col  footer-col-1">
              <ul class="contact-list">
                <li>
                  <a href="mailto:dwijpr@gmail.com">
                    dwijpr@gmail.com
                  </a>
                </li>
              </ul>
            </div>
            <div class="footer-col  footer-col-2">
              <ul class="social-media-list">
                <li>
                  <a
                    href="https://github.com/dwijpr"
                  >
                    <span class="icon  icon--github">
                      <svg viewBox="0 0 16 16">
                        <path
                          fill="#828282"
                          d="M7.999,0.431c-4.285,0-7.76,3.474-7.76,7.761 c0,3.428,2.223,6.337,5.307,7.363c0.388,0.071,0.53-0.168,0.53-0.374c0-0.184-0.007-0.672-0.01-1.32 c-2.159,0.469-2.614-1.04-2.614-1.04c-0.353-0.896-0.862-1.135-0.862-1.135c-0.705-0.481,0.053-0.472,0.053-0.472 c0.779,0.055,1.189,0.8,1.189,0.8c0.692,1.186,1.816,0.843,2.258,0.645c0.071-0.502,0.271-0.843,0.493-1.037 C4.86,11.425,3.049,10.76,3.049,7.786c0-0.847,0.302-1.54,0.799-2.082C3.768,5.507,3.501,4.718,3.924,3.65 c0,0,0.652-0.209,2.134,0.796C6.677,4.273,7.34,4.187,8,4.184c0.659,0.003,1.323,0.089,1.943,0.261 c1.482-1.004,2.132-0.796,2.132-0.796c0.423,1.068,0.157,1.857,0.077,2.054c0.497,0.542,0.798,1.235,0.798,2.082 c0,2.981-1.814,3.637-3.543,3.829c0.279,0.24,0.527,0.713,0.527,1.437c0,1.037-0.01,1.874-0.01,2.129 c0,0.208,0.14,0.449,0.534,0.373c3.081-1.028,5.302-3.935,5.302-7.362C15.76,3.906,12.285,0.431,7.999,0.431z"
                        />
                      </svg>
                    </span>
                    <span class="username">
                      dwijpr
                    </span>
                  </a>
                </li>

                <li>
                  <a
                    href="https://twitter.com/dwjpr"
                  >
                    <span class="icon  icon--twitter">
                      <svg viewBox="0 0 16 16">
                        <path fill="#828282" d="M15.969,3.058c-0.586,0.26-1.217,0.436-1.878,0.515c0.675-0.405,1.194-1.045,1.438-1.809
                        c-0.632,0.375-1.332,0.647-2.076,0.793c-0.596-0.636-1.446-1.033-2.387-1.033c-1.806,0-3.27,1.464-3.27,3.27 c0,0.256,0.029,0.506,0.085,0.745C5.163,5.404,2.753,4.102,1.14,2.124C0.859,2.607,0.698,3.168,0.698,3.767 c0,1.134,0.577,2.135,1.455,2.722C1.616,6.472,1.112,6.325,0.671,6.08c0,0.014,0,0.027,0,0.041c0,1.584,1.127,2.906,2.623,3.206 C3.02,9.402,2.731,9.442,2.433,9.442c-0.211,0-0.416-0.021-0.615-0.059c0.416,1.299,1.624,2.245,3.055,2.271 c-1.119,0.877-2.529,1.4-4.061,1.4c-0.264,0-0.524-0.015-0.78-0.046c1.447,0.928,3.166,1.469,5.013,1.469 c6.015,0,9.304-4.983,9.304-9.304c0-0.142-0.003-0.283-0.009-0.423C14.976,4.29,15.531,3.714,15.969,3.058z"/>
                      </svg>
                    </span>
                    <span class="username">
                      dwjpr
                    </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>

    </div>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-72074825-1', 'auto');
      ga('send', 'pageview');
    </script>
  </body>
</html>
