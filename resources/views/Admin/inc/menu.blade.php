<ul class="sidebar navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="{{ route('admin.dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
      </a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.class') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Class List</span></a>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.attendance') }}">
        <i class="fas fa-fw fa-table"></i>
        <span>Attendance</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.library') }}">
        <i class="fas fa-book-open"></i>
        <span>Library</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.teachers') }}">
        <i class="fas fa-graduation-cap"></i>
        <span>Teachers</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.students') }}">
        <i class="fas fa-graduation-cap"></i>
        <span>Students</span></a>
    </li>
  </ul>