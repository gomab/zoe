<?php
/**
 * Created by PhpStorm.
 * User: gomab
 * Date: 3/16/19
 * Time: 8:00 AM
 */
?>

<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="{{ asset('assets/backend/images/user.png') }}" width="48" height="48" alt="User" />
        </div>

        <div class="info-container">
            {{ session('status') }}
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><strong>{{ Auth::user()->name }}</strong></div>
            <div class="email">{{ Auth::user()->email }} | {{ Auth::user()->role->name }}</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                    <li role="separator" class="divider"></li>

                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="material-icons">input</i> Déconnexion
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">NAVIGATION</li>



            @if(Request::is('admin*'))

                <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="material-icons">dashboard</i>
                        <span>Tableau de bord</span>
                    </a>
                </li>

            <li class="{{ Request::is('admin/espece*') ? 'active' : '' }}">
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">ac_unit</i>
                    <span>Gestion de la Taximonie</span>
                </a>

                <ul class="ml-menu">
                    <li class="{{ Request::is('admin/espece*') ? 'active' : '' }}">
                        <a href="{{ route('admin.espece.index') }}">Rattacher une espèce</a>
                    </li>


                    <li class="{{ Request::is('admin/embranchement*') ? 'active' : '' }}">
                        <a href="{{ route('admin.embranchement.index') }}">Embranchement</a>
                    </li>

                    <li class="{{ Request::is('admin/classe*') ? 'active' : '' }}">
                        <a href="{{ route('admin.classe.index') }}">Classe</a>
                    </li>

                    <li class="{{ Request::is('admin/ordre*') ? 'active' : '' }}">
                        <a href="{{ route('admin.ordre.index') }}">Ordre</a>
                    </li>


                    <li class="{{ Request::is('admin/famille*') ? 'active' : '' }}">
                        <a href="{{ route('admin.famille.index') }}">Famille</a>
                    </li>



                    <li class="{{ Request::is('admin/genre*') ? 'active' : '' }}">
                        <a href="{{ route('admin.genre.index') }}">Genre</a>
                    </li>





                </ul>
            </li>


            <li class="{{ Request::is('admin/site*') ? 'active' : '' }}">
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">domain</i>
                    <span>Gestion des sites de stockage</span>
                </a>

                <ul class="ml-menu">
                    <li class="{{ Request::is('admin/site*') ? 'active' : '' }}">
                        <a href="{{ route('admin.site.index') }}">Sites de stockage</a>
                    </li>


                    <li class="{{ Request::is('admin/stockage*') ? 'active' : '' }}">
                        <a href="{{ route('admin.stockage.index') }}">Structures de stockage</a>
                    </li>
                </ul>
            </li>



                <li class="{{ Request::is('admin/salarie') ? 'active' : '' }}">
                    <a href="{{ route('admin.salarie.index') }}">
                        <i class="material-icons">group</i>
                        <span>Gestion des salairées</span>
                    </a>
                </li>


                <li class="{{ Request::is('admin/lot') ? 'active' : '' }}">
                    <a href="{{ route('admin.lot.index') }}">
                        <i class="material-icons">wb_sunny</i>
                        <span>Gestion des lots</span>
                    </a>
                </li>

                <li class="{{ Request::is('admin/alerte') ? 'active' : '' }}">
                    <a href="{{ route('admin.alerte.index') }}">
                        <i class="material-icons">add_alert</i>
                        <span>Gestion des alertes</span>
                    </a>
                </li>








                <li class="header">System</li>

                <li class="{{ Request::is('admin/user') ? 'active' : '' }}">
                    <a href="{{ route('admin.user.index') }}">
                        <i class="material-icons">group</i>
                        <span>Administrer les uttilisateurs</span>
                    </a>
                </li>


                <li class="">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="material-icons">input</i>
                        <span>Déconnexion</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            @endif


            @if(Request::is('gestionnaire*'))
                <li class="{{ Request::is('gestionnaire/dashboard') ? 'active' : '' }}">
                    <a href="">
                        <i class="material-icons">dashboard</i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="{{ Request::is('gestionnaire/post*') ? 'active' : '' }}">
                    <a href="">
                        <i class="material-icons">library_books</i>
                        <span>Posts</span>
                    </a>
                </li>


                <li class="header">System</li>

                <li class="">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="material-icons">input</i>
                        <span>Déconnexion</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            @endif

        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; 2016 - 2017 <a href="javascript:void(0);">EGOMAB - Admin</a>.
        </div>
        <div class="version">
            <b>Version: </b> 1.0.5
        </div>
    </div>
    <!-- #Footer -->
</aside>
