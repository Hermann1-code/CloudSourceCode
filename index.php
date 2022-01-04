<!-- Based on Build a Responsive Website by Brad Traversy (2020)
 see: https://www.youtube.com/watch?v=p0bGHP-PXD4 -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="styles/0133a29LOGO/cloudsourcecode.png" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles/0133a29CSS/CloudCode01.css">
    <link rel="stylesheet" href="styles/0133a29CSS/CloudCode02.css">
    <title>CloudSourceCode | Cloud Source Code For Everyone</title>
  </head>
  <body>
    <!-- Navbar -->
      <?php require_once("includes/header01.php") ?>

    <!-- showcase -->
    <section class="showcase" id="demo">
      <div class="container grid">
        <div class="showcase-text">
          <h1>Easy source code</h1>
          <p>
            Design large-scale content creation web applications of all kinds, from large-scale enterprise APIs to dynamic or static websites.
            We deliver the content to you with its source code. Fill out the form to request a project with source code.
          </p>
          <a href="#features" class="btn btn-outline">Learn More</a>
        </div>
        <div class="showcase-form card">
          <h2>Request source code ..</h2>
          <form onsubmit="event.preventDefault()">
            <div class="form-control">
              <input type="text" name="name" placeholder="Name" required />
            </div>
            <div class="form-control">
              <input
                type="text"
                name="company"
                placeholder="Company Name"
                required
              />
            </div>
            <div class="form-control">
              <input type="email" name="email" placeholder="Email" required />
            </div>
            <input type="submit" value="Send" class="btn btn-primary" />
          </form>
        </div>
      </div>
    </section>
<style>

</style>
    <!-- stats -->
    <section class="stats">
      <div class="container">
        <h3 class="text-center my-1 text-animated">
          <p id="text"> loading ...</p>
        </h3>
        <div style="display: none;">
          <label for="speed">Speed:</label>
          <input
            type="number"
            name="speed"
            id="speed"
            value="2"
            min="1"
            max="5"
            step="1"
          />
        </div>
        <div class="grid grid-3 text-center my-4">
          <div>
            <i class="fas fa-server fa-3x"></i>
            <h3 class="number" data-target-number="510">0</h3>
            <p class="text-secondary">Deployed Source Code</p>
          </div>
          <div>
            <i class="fas fa-upload fa-3x"></i>
            <h3 class="number" data-target-number="934">0</h3>
            <p class="text-secondary">Downloaded</p>
          </div>
          <div>
            <i class="fas fa-project-diagram fa-3x"></i>
            <h3 class="number" data-target-number="12000">0</h3>
            <p class="text-secondary">Projects</p>
          </div>
        </div>
      </div>
    </section>

    <!-- cli -->
    <section class="cli">
      <div class="container grid">
        <div class="slidComput">
          <div class="rowHeader">
            <div class="codeColorLeft">
              <span class="dot-1x uniqDot"></span>
              <span class="dot-2x uniqDot"></span>
              <span class="dot-3x uniqDot"></span>
            </div>
            <div class="rightcode">
              <svg class="iconCode" width="44" height="22" viewBox="0 0 44 22" fill="none">
                  <circle opacity="0.5" cx="11" cy="11" r="11" fill="#f4f4f4" />
                  <circle opacity="0.5" cx="22" cy="11" r="11" fill="#f4f4f4" />
                  <circle opacity="0.5" cx="33" cy="11" r="11" fill="#f4f4f4" />
              </svg>CloudSourceCode..
            </div>
          </div>
          <div class="iframeImage">
            <img src="styles/0133a29IMG/0133a29PHOTO/telechargement4.jpg" alt="">
          </div>
        </div>
        <!-- <img
          src="https://github.com/bradtraversy/loruki-website/blob/master/images/cli.png?raw=true"
          alt=""
        /> -->
        <div class="card">
          <h3>easy to use cross-platform</h3>
        </div>
        <div class="card">
          <h3>Download your source code in seconds</h3>
        </div>
      </div>
    </section>

    <!-- cloud -->
    <section class="cloud my-2 py-2">
      <div class="container grid bg-secondary">
        <div class="text-center">
          <h2 class="lg">Extreme Cloud Hosting</h2>
          <p class="lead my-1">
            Cloud hosting like you've never seen. Fast, efficient and scalable
          </p>
          <a href="#features" class="btn btn-dark">Read More</a>
        </div>
        <img
          src="https://github.com/bradtraversy/loruki-website/blob/master/images/cloud.png?raw=true"
          alt=""
        />
      </div>
    </section>

    <!-- languages -->
    <section class="languages">
      <h2 class="md text-center my-2">Languages ​​used</h2>
      <div class="container flex">
        <div class="card">
          <h4>Node.js</h4>
          <img
            src="styles/0133a29LOGO/node.png"
            alt=""
          />
        </div>
        <div class="card">
          <h4>Python</h4>
          <img
            src="styles/0133a29LOGO/python.png"
            alt=""
          />
        </div>
        <div class="card">
          <h4>C#</h4>
          <img
            src="styles/0133a29LOGO/csharp.png"
            alt=""
          />
        </div>
        <div class="card">
          <h4>Ruby</h4>
          <img
            src="styles/0133a29LOGO/ruby.png"
            alt=""
          />
        </div>
        <div class="card">
          <h4>PHP</h4>
          <img
            src="styles/0133a29LOGO/php.png"
            alt=""
          />
        </div>
        <div class="card">
          <h4>Scala</h4>
          <img
            src="styles/0133a29LOGO/scala.png"
            alt=""
          />
        </div>
        <div class="card">
          <h4>Clojure</h4>
          <img
            src="styles/0133a29LOGO/clojure.png"
            alt=""
          />
        </div>
        <div class="card" style="width: 151px;height: 186px;">
          <h4>VueJs</h4>
          <img
            src="styles/0133a29LOGO/vueJs.png"
            alt=""
          />
        </div>
        <div class="card" style="width: 151px;height: 186px;">
          <h4>Html5</h4>
          <img
            src="styles/0133a29LOGO/html.jpg"
            alt=""
          />
        </div>
        <div class="card" style="width: 151px;height: 186px;">
          <h4>Css3</h4>
          <img
            src="styles/0133a29LOGO/css.png"
            alt=""
          />
        </div>
        <div class="card" style="width: 151px;height: 186px;">
          <h4>Less</h4>
          <img
            src="styles/0133a29LOGO/less.png"
            alt=""
          />
        </div>
        <div class="card" style="width: 151px;height: 186px;">
          <h4>JSon</h4>
          <img
            src="styles/0133a29LOGO/json.png"
            alt=""
          />
        </div>
        <div class="card" style="width: 151px;height: 186px;">
          <h4>React</h4>
          <img
            src="styles/0133a29LOGO/react.png"
            alt=""
          />
        </div>
        <div class="card" style="width: 151px;height: 186px;">
          <h4>MySql</h4>
          <img
            src="styles/0133a29LOGO/mysql.png"
            alt=""
          />
        </div>
      </div>
    </section>

    <!-- features -->
    <section id="features">
      <!-- head -->
      <div class="features-head bg-primary py-3">
        <div class="container grid">
          <div>
            <h1 class="xl">Features</h1>
            <p class="lead">
              Check out the features of Loruki that separate us from the
              competition
            </p>
          </div>
          <img
            src="styles/0133a29IMG/0133a29PHOTO/server.png"
            alt=""
          />
        </div>
      </div>

      <!-- sub head -->
      <div class="features-sub-head bg-light py-3">
        <div class="container grid">
          <div>
            <h1 class="md">The Loruki Platform</h1>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor
              cupiditate dignissimos temporibus perspiciatis quae! Suscipit qui,
              consectetur ea consequatur, doloribus repellendus quasi, aut
              corporis nam alias culpa. Nostrum, inventore accusantium!
            </p>
          </div>
          <img
            src="styles/0133a29IMG/0133a29PHOTO/server2.png"
            alt=""
          />
        </div>
      </div>
      <!-- main features -->
      <div class="features-main my-2">
        <div class="container grid grid-3">
          <div class="card flex">
            <i class="fas fa-server fa-3x"></i>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas
              nemo saepe corrupti et dolorem voluptate at, nostrum rem
              voluptatem ab alias quia molestiae ea, libero nihil deserunt.
              Molestias, eum? Necessitatibus!
            </p>
          </div>
          <div class="card flex">
            <i class="fas fa-network-wired fa-3x"></i>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus
              recusandae perferendis culpa, reiciendis a itaque debitis qui vel
              dignissimos ipsum!
            </p>
          </div>
          <div class="card flex">
            <i class="fas fa-laptop-code fa-3x"></i>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis,
              magnam.
            </p>
          </div>
          <div class="card flex">
            <i class="fas fa-database fa-3x"></i>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, a!
            </p>
          </div>
          <div class="card flex">
            <i class="fas fa-power-off fa-3x"></i>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis,
              magnam.
            </p>
          </div>
          <div class="card flex">
            <i class="fas fa-upload fa-3x"></i>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis,
              magnam.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- docs -->
    <section id="docs">
      <!-- head -->
      <div class="docs-head bg-primary py-3">
        <div class="container grid">
          <div>
            <h1 class="xl">Docs</h1>
            <p class="lead">Learn how to work with the Loruki platform</p>
          </div>
          <img
            src="styles/0133a29IMG/0133a29PHOTO/docs.png"
            alt=""
          />
        </div>
      </div>


      <!-- main docs -->
      <div class="docs-main my-4">
        <div class="container grid">
          <div class="card bg-light p-3">
            <h3 class="my-2">Essentials</h3>
            <nav>
              <ul>
                <li><a class="btnTabs active" data-target-tab="#Introduction">Introduction</a></li>
                <li><a class="btnTabs" data-target-tab="#About">Our lines code</a></li>
                <li><a class="btnTabs" data-target-tab="#Installation">Installation</a></li>
              </ul>
            </nav>

            <h3 class="my-2">Deployment</h3>
            <nav>
              <ul>
                <li><a href="#">Setting up content</a></li>
                <li><a href="#">Use of source code</a></li>
                <li><a href="#">Managing resources</a></li>
                <li><a href="#">Upgrade & downgrade</a></li>
              </ul>
            </nav>
          </div>
          <!-- introduction item -->
          <div class="card item active" id="Introduction">
            <h2>Introduction</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Distinctio illo facere perferendis laborum? Similique recusandae
              incidunt eos dolorum aliquam ipsam unde perspiciatis laudantium
              totam quam laborum velit, at maxime minus?
            </p>

            <div class="alert alert-success">
              <i class="fas fa-info"></i> Lorem ipsum dolor sit amet consectetur
              adipisicing elit. Quae, animi?
            </div>

            <h3>Lorem, ipsum dolor.</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima
              totam magni eius vitae velit id, atque veritatis! At, vero porro.
            </p>
            <a href="#" class="btn btn-primary">Install CLI</a>

            <h3>Requirements</h3>
            <ul>
              <li>Windows 10, Mac OSX, Linux</li>
              <li>Node.js v14 or higher</li>
            </ul>

            <h3>Install</h3>
            <p>Mac (Homebrew)</p>
            <pre><code>$ brew install loruki-cli</code></pre>
            <p>NPM</p>
            <pre><code>$ npm install loruki-cli</code></pre>
            <p>Yarn</p>
            <pre><code>$ yarn install loruki-cli</code></pre>
          </div>
          <!-- Our lines code item -->
          <div class="card animatedName item" id="About">
            <h2>Our lines code</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Distinctio illo facere perferendis laborum? Similique recusandae
              incidunt eos dolorum aliquam ipsam unde perspiciatis laudantium
              totam quam laborum velit, at maxime minus?
            </p>

            <div class="alert alert-success">
              <i class="fas fa-info"></i> Lorem ipsum dolor sit amet consectetur
              adipisicing elit. Quae, animi?
            </div>

            <h3>Lorem, ipsum dolor.</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima
              totam magni eius vitae velit id, atque veritatis! At, vero porro.
            </p>
            <a href="#" class="btn btn-primary">Install CLI</a>
          </div>
          <!-- installation item -->
          <div class="card animatedName item" id="Installation">
            <h3>Install</h3>
            <p>Mac (Homebrew)</p>
            <pre><code>$ brew install loruki-cli</code></pre>
            <p>NPM</p>
            <pre><code>$ npm install loruki-cli</code></pre>
            <p>Yarn</p>
            <pre><code>$ yarn install loruki-cli</code></pre>
          </div>
        </div>
      </div>
    </section>
    <!-- footer -->
    <?php require_once("includes/footer01.php") ?>
    
    <script src="styles/0133a29JS/CloudCode01.js"></script>
  </body>
</html>
