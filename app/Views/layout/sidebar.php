<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="" class="brand-link"><span class="brand-text font-weight-light">Jalpano</span></a>
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
        <a href="" class="d-block"><?= session()->get('username'); ?> (<?= session()->get('role'); ?>)</a>
      </div>
    </div>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column">
        <?php if (session()->get('role') == 'admin') : ?>
          <li class="nav-item"><a href="/admin" class="nav-link"><i class="nav-icon fas fa-tachometer-alt"></i><p>Dashboard Admin</p></a></li>
          <li class="nav-item">
            <a href="#to-do-list" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                To do List
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/logout" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        <?php else: ?>
          <li class="nav-item"><a href="/user" class="nav-link"><i class="nav-icon fas fa-user"></i><p>Dashboard User</p></a></li>
          <li class="nav-item">
            <a href="#social" class="nav-link">
              <i class="nav-icon far fa-comments"></i>
              <p>
                Social
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/logout" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        <?php endif ?>
      </ul>
    </nav>
  </div>
</aside>
