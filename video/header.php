<style>
  .navbar {
    position: fixed;
    width: 100%;
    z-index: 20;
    background-color: black;
    padding: 0 2% 0 2%;
    top: 0;
  }

  .collapse{
    margin-left: 20px;

  }

  .dropbtn {
    background-color: #F8F9FA;
    color: #1d1d1d;
    padding: 30px;
    font-size: 20px;
    font-weight: 600;
    border: none;
  }

  .dropbtn:hover {
    color: #FF823B!important;
    background-color: #F8F9FA!important;
  }

  .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    z-index: 1;
    transition: 1s;
  }

  #drop {
    color: white!important;
    font-size: 16px;
    font-weight: 600;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  #drop:hover {
    background-color: black!important;
    color: #FF823B!important;
  }

  .dropdown:hover .dropdown-content {
    display: block;
    background-color: black!important;
  }

  .dropdown:hover .dropbtn {
    background-color: #F8F9FA!important;
  }

  .contact{
    margin-left: 55%;
  }

  @media only screen and (max-width: 960px) {
  .contact{
    display: none;
  }
  }

</style>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="logo.png" alt="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
    aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <div class="dropdown">
      <button class="dropbtn">VIDEOS</button>
      <div class="dropdown-content">
        <a id="drop" href="#">SPORT</a>
        <a id="drop" href="#">YOGA</a>
        <a id="drop" href="#">AUTRES VIDEOS</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">BLABLA</button>
      <div class="dropdown-content">
        <a id="drop" href="#">LINK 1</a>
        <a id="drop" href="#">LINK 2</a>
        <a id="drop" href="#">LINK 3</a>
      </div>
    </div>
    <input class="form-control mr-sm-2" type="search" placeholder="Recherche" aria-label="Search">
    <button class="btn btn-outline-dark  my-2 my-sm-0" type="submit">Recherche</button>
    <div class="contact">
      <p>+33 (0)3 24 58 13 43 &amp; bonjour@ete-indien-editions.fr</p>
    </div>
  </div>
</nav>
