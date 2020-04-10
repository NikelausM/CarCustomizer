
<!------Navigation Bar------>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
    <div class="container">
      <p><a class="navbar-brand" href="#"><img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/e5c52d70-f8f4-4a4f-9a64-bbccdf20e6b3/d4rjoo8-6f250675-59aa-4cc8-a9ad-c8146d533a19.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwic3ViIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsImF1ZCI6WyJ1cm46c2VydmljZTpmaWxlLmRvd25sb2FkIl0sIm9iaiI6W1t7InBhdGgiOiIvZi9lNWM1MmQ3MC1mOGY0LTRhNGYtOWE2NC1iYmNjZGYyMGU2YjMvZDRyam9vOC02ZjI1MDY3NS01OWFhLTRjYzgtYTlhZC1jODE0NmQ1MzNhMTkuanBnIn1dXX0.H9c77RhycURhSWER0WpOVwZXOpC0U_b36pkuAoEJvXE"
        ></a><big style="font-weight:bold;">Car Customizer</big></p>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('search.index') }}">Search Cars</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('user/') }}">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('user/logout') }}">Logout</a>
          </li>
        </ul>
      </div>
    </div>
</nav>
