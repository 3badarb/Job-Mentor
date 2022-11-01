<link rel="stylesheet" href="./style/st1.css" />

    <ul class="nav">

        <li class="logo">
            <a href="/" class="allLinks" id="firstlink">Job Mentor</a>
        </li>

        <li><a href="/" class="allLinks">HOME</a></li>

        <li><a href="#feture" class="allLinks">FEATURES</a></li>
        <li><a href="#team" class="allLinks">TEAM</a></li>
        <li><a href="#contact" class="allLinks">CONTACT</a></li>
        @guest
            <li class="last">

                <a href="/log-in" class="allLinks" id="lastlink">LOG IN</a>

            </li>
        @endguest
        @auth
            <li class="last">
                <form method="POST" action="/log-out" class="allLinks" id="lastlink">
                    @csrf
                    <button type="submit" >LOG OUT</button>
                </form>
            </li>
        @endauth
    </ul>
