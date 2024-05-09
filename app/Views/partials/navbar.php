<nav class="navbar navbar-light navbar-toggler" id="navbar">
      <div class="container-fluid icon">
        <a href="<?= base_url() ?>" class="word"> 
          <p><span style="color: #4285F4; font-size: 40px;">W</span><span  style="color: #EA4335; font-size: 30px;">o</span><span style="color: #FBBC05; font-size: 30px;">r</span><span style="color: #4285F4; font-size: 30px;">l</span><span style="color: #34A853; font-size: 30px;">d</span></p> 
        </a>
        <div class="input">
          <input class="form-control me-2" type="search" value="Tentang saya" aria-label="Search" disabled>
        </div>
        <form class="d-flex form">
              <a href="/">
                <img src="aset/img/menubutton.png" alt="menubutton">
            </a>
            <a href="<?= base_url() ?>contact">
              <button type="button" class="btn btn-primary">Contact</button>
            </a>
        </form>
      </div>
    </nav>

    
    <div class="container menu" id="menu">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
      </svg>
      <a href="<?= base_url() ?>all" class="all">
        <p>All</p>
      </a>

      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-image-alt" viewBox="0 0 16 16">
        <path d="M7 2.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0zm4.225 4.053a.5.5 0 0 0-.577.093l-3.71 4.71-2.66-2.772a.5.5 0 0 0-.63.062L.002 13v2a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-4.5l-4.777-3.947z"/>
      </svg>
      <a href="<?= base_url() ?>images" class="images">
        <p>Images</p>
      </a>

      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
      </svg>
      <button class="more-button" onclick="more()">
        <p>more</p>
      </button>
    </div>

    <div class="more" id="more">
      <div class="pilihan">
        <p>Nyari apa hayoo..</p>
      </div>
    </div>
    <hr>