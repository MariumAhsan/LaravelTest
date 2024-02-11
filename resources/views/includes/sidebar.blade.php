<aside class="sidebar">

    <div class="s-layout">
    <!-- Sidebar -->
        <div class="s-layout__sidebar">
            <a class="s-sidebar__trigger" href="">
                 <i class="fa fa-bars"></i>
             </a>

        <nav class="s-sidebar__nav">
            <ul>
                <li>
                    <a class="s-sidebar__nav-link" href="">
                        <i class="fa fa-home" href="{{route('dashboard')}}"></i><em>Home</em>
                    </a>
                </li>
                <li>
                    <a class="s-sidebar__nav-link" href="{{route('marks.input')}}">
                         <i class="fa fa-user"></i><em>Input Marks</em>
                    </a>
                </li>
                <li>
                    <a class="s-sidebar__nav-link" href="{{route('marks.view')}}">
                        <i class="fa fa-user"></i><em>View Marksheet</em>
                    </a>
                 </li>
                 <li>
                    <a class="s-sidebar__nav-link" href="{{route('marks.all')}}">
                        <i class="fa fa-user"></i><em>Grade Calculation</em>
                    </a>
                 </li>
                 <li>
                    <a class="s-sidebar__nav-link" href="{{route('signout')}}">
                        <i class="fa fa-user"></i><em>Log Out</em>
                    </a>
                 </li>
            </ul>
        </nav>
        </div>
        
    </div>
</aside>