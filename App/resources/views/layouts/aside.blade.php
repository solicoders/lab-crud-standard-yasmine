<aside class="main-sidebar sidebar-dark-info elevation-4 position-fixed">
  <!-- Logo de la marque -->
  <a href="{{ route('chapitres.index')}}" class="brand-link">
   
    <span class="brand-text font-weight-light text-center">Gestion d'autoformations</span>
  </a>

  <!-- Barre latérale -->
  <div class="sidebar">
    <!-- Menu latéral -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        
          <li class="nav-item">
            <a href="{{ route('chapitres.index')}}" class="nav-link ">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
               Chapitres
              </p>
            </a>
          </li>
      
          
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>