<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/home/style.css">
    <link rel="stylesheet" href="/css/home/fontello/css/facebook.css">
    <title>Del Sector Social</title>
  </head>
  <body>

    <div class="container">

      <div class="logo">
        <img src="https://cdn.discordapp.com/attachments/691019020345933906/703707632082485408/logo2.png" alt="logo">
      </div>


      <aside class="social-media">
        <ul>
          <li id="fb"><a href="https://facebook.com/ceroaladerecha"><i class="icon-facebook-rect "></i></a></li>
          <li id="tw"><a href="https://twitter.com/ceroaladerecha"><i class="icon-twitter-bird"></i></a></li>
          <li id="ig"><a href="https://instagram.com/ceroaladerecha"><i class="icon-instagram"></i></a></li>
        </ul>
      </aside>


      <section class="searcher">
        <p>
          <input type="search" name="searcher" placeholder="Buscar...">
        </p>
      </section>


      <section class="countrys">
        @forelse($languages as $language)

          <article class="{{ $language->name }}">
            <p>{{ $language->text }}</p>
            @foreach($countries as $country)
              @if($country->language_id == $language->id)
                <div class="{{ $country->name }}">
                  <a href="#"><img src="{{ $country->flag }}" alt="Bandera de {{ $country->name }}"></a>
                  <br>
                  <span>{{ $country->name }}</span>
                </div>
              @endif
            @endforeach
          </article>

        @empty
        NO HAY ENTRADAS DISPONIBLES

        @endforelse
      </section>

    </div>

  </body>
</html>
