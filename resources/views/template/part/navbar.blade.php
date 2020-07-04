<nav class="navbar navbar-expand-lg navbar-light bg-custom" style="background-color: rgb(69, 151, 245)">
  <img class="navbar-brand" href="index.html" id="logo" src= {{ asset("/img/logo.png")}} width="200px" />
  <button class="navbar-toggler navbar-toggler-right" 
        type="button" data-toggle="collapse" 
        data-target="#navbarNav" aria-controls="navbarNav" 
        aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
              <a class="nav-link" href="../../">Home <span class="sr-only">(current)</span></a>
          </li>
          
          <li class="nav-item">
              <a class="nav-link" href="/pertanyaan">Forum</a>
          </li>

          <li class="nav-item">
              <a class="nav-link" href="/pertanyaan/create">New Question</a>
          </li>
      </ul>
  </div>
</nav>