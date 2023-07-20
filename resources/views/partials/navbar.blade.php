<nav class="navbar navbar-expand-lg navbar-light fs-6" style="font-weight: 600">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="img/logo.png" alt="" height="50px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse mx-5" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item mx-3">
            <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link {{ $title === 'About' ? 'active' : '' }}" href="/about">About</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link {{ $title === 'Posts' ? 'active' : '' }}" href="/posts">Blog</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>