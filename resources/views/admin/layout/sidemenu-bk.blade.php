
<!-- Sidebar Holder -->
<nav id="sidebar">
    <div class="sidebar-header">
        Bootstrap Sidebar
    </div>

    <ul class="list-unstyled components">
        <li class="active">
            <a href="#productSubmenu" data-toggle="collapse" aria-expanded="false" >
              <span class="glyphicon glyphicon-apple"></span> Products
            </a>
            <ul class="collapse list-unstyled">
                <li><a href="/products">Product List</a></li>
                <li><a href="/products/create">Add Product</a></li>
            </ul>
        </li>
        <li class="active">
            <a href="#categoriesSubmenu" data-toggle="collapse" aria-expanded="false" >
              <span class="glyphicon glyphicon-list-alt"></span> Categories
            </a>
            <ul class="collapse list-unstyled" id="categoriesSubmenu">
                <li><a href="/categories">Categories List</a></li>
                <li><a href="/categories/create">Add Category</a></li>
            </ul>
        </li>
    </ul>

</nav>

<!-- jQuery CDN -->
 <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
 <!-- Bootstrap Js CDN -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <script type="text/javascript">
     $(document).ready(function () {
         $('#sidebarCollapse').on('click', function () {
             $('#sidebar').toggleClass('active');
         });
     });
 </script>
