  <header>
      <div class="container-slide">
          <div>
              <img src="{{ asset('img/dc-logo.png') }}" alt="Logo Dc" />

              <nav>
                  <ul>
                      @foreach ($links as $value)
                          <li> <a href="#!">{{ $value->text }}</a>
                          </li>
                      @endforeach
                  </ul>
              </nav>
          </div>
      </div>
  </header>
