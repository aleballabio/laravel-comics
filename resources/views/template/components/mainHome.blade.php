<main>
    <div class="first-section">
        <!-- Jumbo -->
        <div class="jumbo">
            <img src="../assets/img/jumbotron.jpg" alt="Jumbo" />
        </div>
        <!-- Cards -->
        <div class="container-slide-noheight">
            <h1 class="current-series">Current Series</h1>

            <div class="container-cards">
                @foreach ($comics as $comic)
                    <div class="card">
                        <div class="container-image">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}" />
                        </div>

                        <h3 class="subtitle">{{ $comic['series'] }}</h3>
                    </div>
                @endforeach
            </div>

            <div class="cont-load-more">
                <button class="load-more">Load More</button>
            </div>
        </div>
    </div>

    <div class="second-section">
        <div class="container-slide">
            <ul>
                @foreach ($sections as $section)
                    <li>
                        <a href="#!">
                            <span><img src="{{ $section['img'] }}" alt="{{ $section['text'] }}" /></span>
                            {{ $section['text'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</main>
