<nav class="navbar navbar-default">
    <div class="container-fluid">

        <div class="navbar-header">
            <button id="pushRight" class="btn navbar-btn my-btn">
                <i class="glyphicon glyphicon-align-left"></i>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Service</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
  <script src="/js/sidebar-menu.js"></script>
  <script>
    $.sidebarMenu($('.sidebar-menu'))
    $.sidebarMenu($('.sidebar-menu-rtl'))
    $('body').addClass('animate-menu-push');
    $('body').toggleClass('animate-menu-push-right')
    $('.animate-menu-left').addClass('animate-menu-open')

    $('#pushRight').click(function () {
      $('body').addClass('animate-menu-push');
      $('body').toggleClass('animate-menu-push-right')
      $('.animate-menu-left').toggleClass('animate-menu-open')
    })
  </script>