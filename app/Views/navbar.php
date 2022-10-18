<nav class="navbar navbar-expand-lg" style="background-color:teal;">
  <div class="container-fluid">
    <a style ="color:aliceblue;" class="navbar-brand" href="#">Hymood</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php $isActivePade = fn($x) => uri_string() == $x ? 'active' : ''; ?>
        <li class="nav-item">
          <a style ="color:aliceblue;" style ="color:aliceblue;" class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a style ="color:aliceblue;" class="nav-link active" aria-current="Tugas1" href="/input">Tugas_1</a>
        </li>
        <li class="nav-item">
          <a style ="color:aliceblue;" class="nav-link active" aria-current="Tugas2" href="/biodata">Tugas_2</a>
        </li>
        <li class="nav-item">
          <a style ="color:aliceblue;" class="nav-link active" aria-current="Tugas4" href="/inputJS">Tugas_4.1</a>
        </li>
        <li class="nav-item">
          <a style ="color:aliceblue;" class="nav-link active" aria-current="Tugas4" href="/kalkulator">Tugas_4.2</a>
        </li>
        <li class="nav-item">
          <a style ="color:aliceblue;" class="nav-link active" aria-current="Tugas5" href="/form">Tugas_5.1</a>
        </li>
        <li class="nav-item">
          <a style ="color:aliceblue;" class="nav-link active" aria-current="Tugas5" href="/mahasiswa">Tugas_5.2</a>
        </li>
        <style>
          li a:hover {
            background-color:yellowgreen;
            color: white;
          }
        </style>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>