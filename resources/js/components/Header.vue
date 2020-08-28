<template>
    <header class="main-header " id="header">
        <nav class="navbar navbar-static-top navbar-expand-lg pr-0">
            <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
            </button>
            <div class="search-form d-none d-lg-inline-block"></div>

            <div class="navbar-right ">
                <ul class="nav navbar-nav">
                    <li class="dropdown user-menu">
                        <button
                            href="#"
                            class="dropdown-toggle nav-link"
                            data-toggle="dropdown"
                        >
                            <img
                                src="https://s2.vndb.org/ch/39/64739.jpg"
                                class="user-image"
                                alt="User Image"
                            />
                            <span class="d-none d-lg-inline-block">Shovon</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-header">
                                <img
                                    src="https://s2.vndb.org/ch/39/64739.jpg"
                                    class="img-circle"
                                    alt="User Image"
                                />
                                <div class="d-inline-block">
                                    Shovon
                                    <small class="pt-1">hoho@muda.com</small>
                                </div>
                            </li>

                            <li>
                                <a href="user-profile.html">
                                    <i class="mdi mdi-account"></i> My Profile
                                </a>
                            </li>

                            <li class="dropdown-footer">
                                <a href="index.html">
                                    <i class="mdi mdi-logout"></i> Log Out
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</template>
