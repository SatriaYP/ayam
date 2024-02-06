<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">PT. SMS</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">PT. SMS</a>
        </div>
        <ul class="sidebar-menu">
            <!-- single -->
            <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ url('dashboard') }}"><i class="far fa-square"></i> <span>Dashboard</span></a>
            </li>
            <li class="nav-item dropdown {{ $type_menu === 'Data Master' ? 'active' : '' }}">
                <a href="#"
                    class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Data Master</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('data_pakan') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('data_pakan') }}">Data Pakan</a>
                    </li>
                    <li class="{{ Request::is('data_obat') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('data_obat') }}">Data Obat</a>
                    </li>
                    <li class="{{ Request::is('data_sopir') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('data_sopir') }}">Data Sopir</a>
                    </li>
                    <li class="{{ Request::is('data_peternakan') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('data_peternakan') }}">Data Peternakan</a>
                    </li>
                    <li class="{{ Request::is('dataartikel') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('dataartikel') }}">Data Artikel</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown {{ $type_menu === 'manajemen' ? 'active' : '' }}">
                <a href="#"
                    class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Manajemen</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('manajemenbibitayammasuk') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('manajemenbibitayammasuk') }}">Bibit Ayam Masuk</a>
                    </li>
                    <li class="{{ Request::is('manajemenpakan') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('manajemenpakan') }}">Pakan</a>
                    </li>
                    <li class="{{ Request::is('manajemenobat') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('manajemenobat') }}">Obat</a>
                    </li>
                    <li class="{{ Request::is('perkembangan') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('perkembangan') }}">Perkembangan</a>
                    </li>
                    <li class="{{ Request::is('hasilpanen') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('hasilpanen') }}">Hasil Panen</a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::is('users') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ url('users') }}"><i class="far fa-square"></i> <span>Manajemen User</span></a>
            </li>
            <li class="{{ Request::is('admins') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ url('admins') }}"><i class="far fa-square"></i> <span>Manajemen Admin</span></a>
            </li>
            <!-- 111single -->
            
            
        </ul>

        
    </aside>
</div>
