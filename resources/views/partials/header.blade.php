<header>
    <div class="container">
        <div class="logo">
            <img src="{{ asset('img/dc-logo.png') }}" alt="Dc Comics logo">
        </div>

        @php
            $links =
            [
                [
                    'text' => 'CHARACTERS',
                    'url' => '#',
                ],
                [
                    'text' => 'COMICS',
                    'url' => '#',
                ],
                [
                    'text' => 'MOVIES',
                    'url' => '#',
                ],
                [
                    'text' => 'TV',
                    'url' => '#',
                ],
                [
                    'text' => 'GAMES',
                    'url' => '#',
                ],
                [
                    'text' => 'COLLECTIBLES',
                    'url' => '#',
                ],
                [
                    'text' => 'VIDEOS',
                    'url' => '#',
                ],
                [
                    'text' => 'FANS',
                    'url' => '#',
                ],
                [
                    'text' => 'NEWS',
                    'url' => '#',
                ],
                [
                    'text' => 'SHOP',
                    'url' => '#',
                ],
            ];
        @endphp

        <nav class="nav">
            <ul>
                @foreach ($links as $link)
                
                <li class="{{ $loop->first ? 'active' : '' }}">
                    <a href="#">{{ $link['text']}}</a>
                </li>
                @endforeach

            </ul>

        </nav>
    </div>
    <div class="hero">
    </div>
</header>
