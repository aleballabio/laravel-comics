<footer>
    <div class="first-section">
        <div class="container-slide-noheight">
            <div class="container-links">
                @foreach ($navigationList as $category)
                    <div class="link">
                        <h1>{{ $category['category'] }}</h1>
                        @foreach ($category['links'] as $links)
                            <ul>
                                <li><a href="#!">{{ $links['text'] }}</a></li>
                            </ul>
                        @endforeach
                    </div>
                @endforeach
            </div>
            <img src="{{ asset('img/dc-logo-bg.png') }}" alt="dcLogoBg" class="dclogo" />
        </div>
    </div>

    <div class="second-section">
        <div class="container-slide">
            <div class="sign-up">
                <button>Sign-UP Now</button>
            </div>
            <div class="social">
                <h1>Follow Us</h1>

                <div class="icons">
                    @foreach ($socials as $social)
                        <img src="{{ $social['img'] }}" alt="{{ $social['nome'] }}" class="icon-image" />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</footer>
