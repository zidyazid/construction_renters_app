<aside class="sidebar offcanvas-lg offcanvas-start">
    <div class="d-flex justify-content-end m-4 d-block d-lg-none">
      <button
        data-bs-dismiss="offcanvas"
        data-bs-target=".sidebar"
        class="btn p-0 border-0 fs-4"
        aria-label="Button Close"
      >
        <i class="fas fa-close"></i>
      </button>
    </div>
    <div class="logo-brand mt-lg-5">
      <img
        src="{{ asset('/assets/images/logo.png') }}"
        alt="Logo Shoso"
        width="52"
        height="50"
      />
      <div>
        <h6 class="title-store">Shoe Store</h6>
        <p class="tagline-store">Comfortable on the feet</p>
      </div>
    </div>
    <hr />
    @include('components.navbar')
    <footer>
      {{-- <div class="d-flex gap-3 align-items-center mb-4">
        <img src="./assets/icons/ic_mode.svg" alt="Mode Display" />
        <p id="label-mode" class="flex-fill label-mode">Light Mode</p>
        <div>
          <input
            id="checkbox"
            type="checkbox"
            class="toggle-theme"
            aria-label="Toggle Theme"
          />
          <label for="checkbox" class="label-toggle">
            <img
              src="./assets/icons/ic_moon.svg"
              width="50%"
              class="ic-theme"
              id="ic-dark"
              alt="Icon Dark"
            />
            <img
              src="./assets/icons/ic_sun.svg"
              width="50%"
              class="ic-theme"
              id="ic-light"
              alt="Icon Light"
            />
          </label>
        </div>
      </div>
      <p>©2022 Shoe Store. All rights reserved.</p> --}}
    </footer>
  </aside>