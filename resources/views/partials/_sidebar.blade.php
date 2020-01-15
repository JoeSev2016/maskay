            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Maskay
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="/home">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#mantenimientos" class="collapsed">
                            <i class="material-icons">build</i>
                            <p>Mantenimiento <b class="caret"></b></p>

                        </a>
                        <div class="collapse" id="mantenimientos">
                            <ul class="nav">
                                <li>
                                    <a href="{{ route('tags.index') }}">Etiquetas</a>
                                </li>
                                <li>
                                    <a href="{{ route('users.index') }}">Usuarios</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#comercial" class="collapsed">
                            <i class="material-icons">store</i>
                            <p>Comercial <b class="caret"></b></p>

                        </a>
                        <div class="collapse" id="comercial">
                            <ul class="nav">
                                <li>
                                    <a href="{{ route('customers.index') }}">Clientes</a>
                                </li>
                                <li>
                                    <a href="{{ route('adverts.index') }}">Anuncios</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    {{-- <li>
                        <a href="./table.html">
                            <i class="material-icons">content_paste</i>
                            <p>Table List</p>
                        </a>
                    </li>
                    <li>
                        <a href="./typography.html">
                            <i class="material-icons">library_books</i>
                            <p>Typography</p>
                        </a>
                    </li>
                    <li>
                        <a href="./icons.html">
                            <i class="material-icons">bubble_chart</i>
                            <p>Icons</p>
                        </a>
                    </li>
                    <li>
                        <a href="./maps.html">
                            <i class="material-icons">location_on</i>
                            <p>Maps</p>
                        </a>
                    </li>
                    <li>
                        <a href="./notifications.html">
                            <i class="material-icons text-gray">notifications</i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <li class="active-pro">
                        <a href="upgrade.html">
                            <i class="material-icons">unarchive</i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li> --}}
                </ul>
            </div>