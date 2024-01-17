<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
            <li class="{{ set_active(['home']) }}"> <a href="{{ route('home') }}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
                <li class="list-divider"></li>
                <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Customers </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a class="{{ set_active(['form/allcustomers/page']) }}" href="{{ route('form/allcustomers/page') }}"> All customers </a></li>
                        <li><a class="{{ request()->is('form/customer/edit/*') ? 'active' : '' }}"> Edit Customer </a></li>
                        <li><a class="{{ set_active(['form/addcustomer/page']) }}" href="{{ route('form/addcustomer/page') }}"> Add Customer </a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-key"></i> <span> Rooms </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a class="{{ set_active(['form/allrooms/page']) }}" href="{{ route('form/allrooms/page') }}">All Rooms </a></li>
                        <li><a class="{{ request()->is('form/room/edit/*') ? 'active' : '' }}"> Edit Rooms </a></li>
                        <li><a class="{{ set_active(['form/addroom/page']) }}" href="{{ route('form/addroom/page') }}"> Add Rooms </a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Employees </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a  class="{{ set_active(['form/emplyee/list']) }}" href="{{ route('form/emplyee/list') }}">Employees List </a></li>
                        <li><a  class="{{ set_active(['form/employee/add']) }}" href="{{ route('form/employee/add') }}">Employees Add </a></li>
                        <li><a  class="{{ set_active(['form/leaves/page']) }}" href="{{ route('form/leaves/page') }}">Leaves </a></li>
                        <li><a href="holidays.html">Holidays </a></li>
                        <li><a href="attendance.html">Attendance </a></li>
                    </ul>
                </li>
                
                 <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Tipe Kamar </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                         <li class="{{ set_active(['form/tpKamar/index']) }}"> <a href="{{ route('form/tpKamar/index') }}">
                            <span>Tipe Kamar</span></a> 
                         </li>
                        <li><a class="{{ set_active(['form/tpKamar/add']) }}" href="{{ route('form/tpKamar/add') }}"> Tambah Tipe Kamar </a></li>
                    </ul>
                </li>
                
                 <li class="submenu"> <a href="#"><i class="fas fa-key"></i> <span> Fasilitas Kamar </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                          <li class="{{ set_active(['form/fasilitas/index']) }}"> <a href="{{ route('form/fasilitas/index') }}">
                            <span>Fasilitas Hotel</span></a> 
                         </li>
                        <li><a class="{{ set_active(['form/fasilitas/add']) }}" href="{{ route('form/fasilitas/add') }}"> Tambah Fasilitas Kamar </a></li>
                    </ul>
                </li>

                 <li class="submenu"> <a href="#"><i class="fas fa-key"></i> <span> Kamar </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a class="{{ set_active(['form/kamar/index']) }}" href="{{ route('form/kamar/index') }}">Tabel Kamar </a></li>
                        <li><a class="{{ set_active(['form/kamar/add']) }}" href="{{ route('form/kamar/add') }}">Add Kamar</a></li>
                    </ul>
                </li>

                <li class="submenu"> <a href="#"><i class="fas fa-key"></i> <span> Staff </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a class="{{ set_active(['form/staff/index']) }}" href="{{ route('form/staff/index') }}">Tabel staff </a></li>
                        <li><a class="{{ set_active(['form/staff/add']) }}" href="{{ route('form/staff/add') }}">Add Staff</a></li>
                    </ul>
                </li>

                <li class="submenu"> <a href="#"><i class="fas fa-suitcase"></i> <span> Booking </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a class="{{ set_active(['form/booking/index'])}}" href="{{route('form/booking/index')}}">  Booking </a></li>
                        <li><a class=""> Edit Booking </a></li>
                        <li><a class="" href=""> Add Booking </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div> 