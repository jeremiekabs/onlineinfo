<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link active" href="{{route('dashboard')}}">
        <i class="bi bi-grid"></i>
        <span>Tableau de bord</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>Catégorie</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{route('categorie.create')}}">
            <i class="bi bi-circle"></i><span>Création</span>
          </a>
        </li>
        <li>
          <a href="{{route('categorie.index')}}">
            <i class="bi bi-circle"></i><span>Voir</span>
          </a>
        </li>
      </ul>
    </li><!-- End Forms Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layout-text-window-reverse"></i><span>Articles</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{route('article.create')}}">
            <i class="bi bi-circle"></i><span>Création</span>
          </a>
        </li>
        <li>
          <a href="{{route('article.index')}}">
            <i class="bi bi-circle"></i><span>Voir</span>
          </a>
        </li>
      </ul>
    </li><!-- End Tables Nav -->
  </ul>

</aside><!-- End Sidebar-->