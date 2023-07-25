<style>
    .bordertransform{
        background-color: rgba(255, 255, 255, 0.1);
    }
</style>

<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{Request::is('dashboard') ? 'active' : ''}} "aria-current="page" href="/dashboard">
            <span data-feather="home" class="align-text-bottom"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  {{Request::is('dashboard/posts*') ? 'active' : ''}} " href="/admin/posts">
            <span data-feather="file-text" class="align-text-bottom"></span>
            My Post
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link  {{Request::is('dashboard/posts*') ? 'active' : ''}} " href="/admin/customer">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Creatre Menu
            </a>
          </li>
          <li class="nav-item">
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="nav-link border-0 bordertransform">
                  <span data-feather = "log-out"  class="align-text-bottom border-0">Logout</span>
                </button>
              </form>
          </li>
      </ul>
    </div>
  </nav>
