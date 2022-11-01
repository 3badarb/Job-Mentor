<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Job Mentor</title>
    <link rel="stylesheet" href="./style/st1.css" />
      <link rel="stylesheet" href="./style/st5.css" />
  </head>
  <body>

    <div class="layout">
     @include('old.upbar')
      <main class="main">

        <section class="main-sec">
          <div>
            @auth
                <h1>hey  {{Auth()->user()->name}}.</h1>
                <h1>You have been login</h1>
              @endauth
            <h1>Analysis CV</h1>
            <h1>Fast and Nice</h1>
            <p>
              If you want to know how strong your cs just sent to us and we will
              do it for you, we make things easy
            </p>
              @guest
            <a href="/sign-up">SIGN UP</a>
              @endguest
          </div>
          <div><img src="./img/header-software-app.png" alt="" /></div>
        </section>
        <section class="main-decs">
          <h1>DESCRIPTION</h1>
          <h2>Marketing Automation Will Bring More Qualified Leads</h2>
          <div class="main-decs-sec">
            <div class="div1">
              <img src="./img/description-1.png" alt="" class="allimgs" />

              <h1>Lists Builder</h1>
              <p>
                It's very easy to start creating email lists for your marketing
                actions. Just create your Tivo account
              </p>
            </div>
            <div class="div2">
              <img src="./img/description-2.png" alt="" class="allimgs" />

              <h1>Campaign Tracker</h1>
              <p>
                Campaigns is a feature we've developed since the beginning
                because it's at the core of Tivo's functionalities
              </p>
            </div>
            <div class="div3">
              <img src="./img/description-3.png" alt="" class="allimgs" />

              <h1>Analytics Tool</h1>
              <p>
                Tivo collects customer data in order to help you analyse
                different situations and take required action
              </p>
            </div>
          </div>
        </section>
      </main>
      <section class="features" id="feture">
        <div class="features-div1">
          <div>
            <h1>FEATURES</h1>
            <p>
              Take your business strategy to the next level and automatize your
              marketing tasks to save time for product development. Tivo can
              provide results in less than 2 weeks
            </p>
            <ul>
              <li>Take your business strategy to the next lev</li>
              <li>marketing tasks to save time</li>
              <li>product development. Tivo can provide</li>
            </ul>
          </div>
          <img src="./img/description-1.png" alt="" />
        </div>
      </section>
      <section class="team" id="team">
        <div class="team-div1">
          <img src="./img/description-2.png" alt="" />
          <div>
            <h1>OUR TEAM</h1>
            <ul>
              <li>Mohammad Almasri</li>
              <li>Muhammad Alkhubbi</li>
              <li>Badei Ayasso</li>
              <li>Obada Rajab</li>
            </ul>
            <h3>Guided by <span>Mehdy Aliewe</span></h3>
          </div>
        </div>
      </section>
      <footer class="contact" id="contact">
        <h1>Follow Us On</h1>
        <img src="./img/fa.png" alt="" />
        <img src="./img/in.png" alt="" />
        <img src="./img/tw.png" alt="" />
        <img src="./img/li.png" alt="" />
        <p>© Copyright 2022 Job Mentor</p>
      </footer>
    </div>

  </body>
</html>
