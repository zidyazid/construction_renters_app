<nav class="menu flex-fill">
    <div class="section-menu">
      {{-- button dark mode start --}}
      <p id="label-mode" class="flex-fill label-mode">Light Mode</p>
      <div class="item-menu d-flex gap-3 align-items-center mb-4 ml-3">
        <div>
          <input
            id="checkbox"
            type="checkbox"
            class="toggle-theme"
            aria-label="Toggle Theme"
          />
          <label for="checkbox" class="label-toggle">
            <img
              src="{{ asset('/assets/icons/ic_moon.svg') }}"
              width="50%"
              class="ic-theme"
              id="ic-dark"
              alt="Icon Dark"
            />
            <img
              src="{{ asset('/assets/icons/ic_sun.svg') }}"
              width="50%"
              class="ic-theme"
              id="ic-light"
              alt="Icon Light"
            />
          </label>
        </div>
      </div>
      {{-- button dark mode end --}}
      @if (Auth::user()->is_admin)
        <p class="fs-18 fw-500 mb-2 text-primary">Dashboard</p>
        <a href="{{ route('dashboard') }}" class="item-menu" onclick="handleClickMenu(this)">
          <span class="iconify" data-icon="ant-design:dashboard-filled"></span>
          <p class="flex-fill">Dashboard</p>       
        </a>
        <a href="{{ route('location') }}" class="item-menu" onclick="handleClickMenu(this)">
          <iconify-icon icon="ep:add-location" width="24px"></iconify-icon>
          <p class="flex-fill">Lokasi</p>       
        </a>
        <a href="{{ route('tool') }}" class="item-menu" onclick="handleClickMenu(this)">
          <span class="iconify" data-icon="ic:baseline-construction"></span>
          <p class="flex-fill">Alat Berat</p>       
        </a>
        <a href="{{ route('renter') }}" class="item-menu" onclick="handleClickMenu(this)">
          <span class="iconify" data-icon="ri:parent-line"></span>
          <p class="flex-fill">Penyewa</p>      
        </a>
        <a href="{{ route('expenditure') }}" class="item-menu" onclick="handleClickMenu(this)">
          <span class="iconify" data-icon="heroicons-solid:cash"></span>
          <p class="flex-fill">Pengeluaran</p>      
        </a>
        <a href="{{ route('income') }}" class="item-menu" onclick="handleClickMenu(this)">
          <span class="iconify" data-icon="heroicons-solid:cash"></span>
          <p class="flex-fill">Penghasilan</p>      
        </a>
      @endif
      <div class="item-menu">
      <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit" class="btn btn-danger btn-sm">Logout</button>
      </form>
      </div>
    </div>
  </nav>