<header>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="/"><?= isset($_SESSION['user']) ? $_SESSION['user']['full_name'] : "Thuis" ?></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="/me">Profiel</a>
          <a class="nav-link" href="/user/">Users</a>
          <a class="nav-link" href="/jobs">Banen</a>
          <a class="nav-link" href="/educations">Opleidingen</a>
          <a class="nav-link" href="/hobbies">Hobbies</a>
          <a class="nav-link" href="/skills">Vaardigheden</a>
          <a class="nav-link" href="/register">Register</a>
          <a class="nav-link" href="/logout">Logout</a>

        </div>
      </div>
    </div>
  </nav>
</header>