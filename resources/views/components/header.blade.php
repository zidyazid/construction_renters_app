<section>
    <button
      aria-controls="sidebar"
      data-bs-toggle="offcanvas"
      data-bs-target=".sidebar"
      aria-label="Button Hamburger"
      class="sidebarOffcanvas mb-5 btn p-0 border-0 d-flex d-lg-none"
    >
      <i class="fa-solid fa-bars"></i>
    </button>
    <nav class="nav-content gap-5">
      <div class="d-flex gap-3 align-items-center">
        <img
          src="{{ asset('/assets/images/photo.webp') }}"
          alt="Photo Profile"
          class="photo-profile"
        />
        <div>
          <p class="title-content mb-2">Hi, {{ Auth::user()->name }}</p>
          <p class="subtitle-content">
            Selamat Datang
          </p>
        </div>
      </div>
    </nav>
  </section>