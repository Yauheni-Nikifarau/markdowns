<div class="container d-flex">
<aside class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px; height: 100vh">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4">My profile</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="/profile" class="nav-link link-dark">
            Me
        </a>
      </li>
      <li>
        <a href="/profile/orders" class="nav-link link-dark">
            My orders
        </a>
      </li>
      <li>
        <a href="/profile/messages" class="nav-link link-dark">
            My messages
        </a>
      </li>
    </ul>
    <hr>
    <a href="/" class="nav-link link-dark">
        Logout
    </a>
</aside>

<main class="p-5">
    @yield('profileContent')
</main>
</div>