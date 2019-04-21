<aside class="main-sidebar">
   <section class="sidebar">
      
      <ul class="sidebar-menu">
         <li><a href="backend/users"><i class="fa fa-users" aria-hidden="true"></i> <span>Quản lý tài khoản</span></a></li>
         <li class="treeview">
            <a href="#">
            <i class="fa fa-dashboard"></i> <span>Thiếp lập trang chủ</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
               <li><a href="backend/slider?type=slider"><i class="fa fa-align-justify" aria-hidden="true"></i> <span>Quản Lý Silder</span></a></li>
               <li><a href="backend/abouthome "><i class="fa fa-align-justify" aria-hidden="true"></i> <span>Quản Lý Khối Giới Thiệu</span></a></li>
            </ul>
         </li>
         <li class="treeview">
            <a href="#">
            <i class="fa fa-dashboard"></i> <span>Quản lý SP dịch vụ</span> <i class="fa fa-angle-left pull-right"></i>
            <ul class="treeview-menu">
               <li><a href="backend/post?type=sevices"><i class="fa fa-circle-o"></i> <span>Danh mục dịch vụ</span></a></li>
               <li><a href="backend/sevices"><i class="fa fa-circle-o"></i> <span>Dịch vụ</span></a></li>
            </ul>
            </a>
         </li>
         <li class="treeview" >
            <a href="#"> <i class="fa fa-edit"></i> <span>Quản lý bài viết</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
               <li><a href="backend/catenew"><i class="fa fa-circle-o"></i> <span>Danh mục bài viết</span></a></li>
               <li><a href="backend/new"><i class="fa fa-circle-o"></i> <span>Bài viết</span></a></li>
            </ul>
         </li>
       
         <li class="treeview">
            <a href="#">
            <i class="fa fa-picture-o" aria-hidden="true"></i> <span>QL Đối tác KH</span>
            <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
               <li><a href="backend/slider?type=doi-tac"><i class="fa fa-picture-o" aria-hidden="true"></i> <span>Đối tác</span></a></li>
            </ul>
         </li>
         
         <li class="treeview">
            <a href="#">
            <i class="fa fa-circle-o" aria-hidden="true"></i> <span>Quản lý giới thiệu</span>
            <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
               <li><a href="backend/about?type=gioi-thieu"><i class="fa fa-circle-o" aria-hidden="true"></i> <span>Giới thiệu</span></a></li>
            </ul>
         </li>
         <li class="treeview">
            <a href="backend/contact">
            <i class="fa fa-th"></i> 
               <span>Thư liên hệ</span>
               @if ($contac > 0 )
                  Mới({{ $contac }})
               @endif
            </a>
         </li>
         <li class="treeview">
            <a href="#">
            <i class="fa fa-gear" aria-hidden="true"></i> <span>Thiết lập hệ thống</span>
            <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
               <li><a href="{{ asset('backend/setting') }}"><i class="fa fa-gear" aria-hidden="true"></i> Quản lý thiết lập</a></li>
            </ul>
         </li>
      </ul>
   </section>
</aside>