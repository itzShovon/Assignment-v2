<template>
    <aside class="left-sidebar bg-sidebar">
        <div id="sidebar" class="sidebar">
            <div class="app-brand">
                <router-link to='/' :title="app_title_abbreviation" exact>
                    <svg
                        class="brand-icon"
                        xmlns="http://www.w3.org/2000/svg"
                        preserveAspectRatio="xMidYMid"
                        width="30"
                        height="33"
                        viewBox="0 0 30 33"
                    >
                        <g fill="none" fill-rule="evenodd">
                            <path
                                class="logo-fill-blue"
                                fill="#7DBCFF"
                                d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
                            />
                            <path
                                class="logo-fill-white"
                                fill="#FFF"
                                d="M11 4v25l8 4V0z"
                            />
                        </g>
                    </svg>
                    <span class="brand-name text-truncate"
                        >{{ app_title_short }}</span
                    >
                </router-link>
            </div>
            <div class="sidebar-scrollbar">
                <ul class="nav sidebar-inner" id="sidebar-menu">
                    <li class="has-sub" v-bind:class="{ 'active': $route.path == '/' }">
                        <a
                            class="sidenav-item-link"
                            href="javascript:void(0)"
                            data-toggle="collapse"
                            data-target="#dashboard"
                            aria-expanded="false"
                            aria-controls="dashboard"
                        >
                            <i class="mdi mdi-view-dashboard-outline"></i>
                            <span class="nav-text">Dashboard</span>
                            <b class="caret"></b>
                        </a>
                        <ul
                            class="collapse"
                            id="dashboard"
                            data-parent="#sidebar-menu"
                        >
                            <div class="sub-menu">
                                <li>
                                    <router-link to='/' title="Home" exact>
                                        <span class="nav-text">Home</span>
                                    </router-link>
                                </li>

                                <li>
                                    <router-link to='/login' title="Login" exact>
                                        <span class="nav-text">Login</span>
                                    </router-link>
                                </li>
                            </div>
                        </ul>
                    </li>

                    <li class="has-sub" v-bind:class="{ 'active' : $route.path.match('/login/.*')}">
                        <a
                            class="sidenav-item-link"
                            href="javascript:void(0)"
                            data-toggle="collapse"
                            data-target="#app"
                            aria-expanded="false"
                            aria-controls="app"
                        >
                            <i class="mdi mdi-pencil-box-multiple"></i>
                            <span class="nav-text">App</span>
                            <b class="caret"></b>
                        </a>
                        <ul
                            class="collapse"
                            id="app"
                            data-parent="#sidebar-menu"
                        >
                            <div class="sub-menu">
                                <li>
                                    <a
                                        class="sidenav-item-link"
                                        href="chat.html"
                                    >
                                        <span class="nav-text">Chat</span>
                                    </a>
                                </li>

                                <li>
                                    <a
                                        class="sidenav-item-link"
                                        href="contacts.html"
                                    >
                                        <span class="nav-text">Contacts</span>
                                    </a>
                                </li>

                                <li>
                                    <a
                                        class="sidenav-item-link"
                                        href="team.html"
                                    >
                                        <span class="nav-text">Team</span>
                                    </a>
                                </li>

                                <li>
                                    <a
                                        class="sidenav-item-link"
                                        href="calendar.html"
                                    >
                                        <span class="nav-text">Calendar</span>
                                    </a>
                                </li>
                            </div>
                        </ul>
                    </li>

                    <li class="has-sub active expand">
                        <a
                            class="sidenav-item-link"
                            href="javascript:void(0)"
                            data-toggle="collapse"
                            data-target="#components"
                            aria-expanded="false"
                            aria-controls="components"
                        >
                            <i class="mdi mdi-folder-multiple-outline"></i>
                            <span class="nav-text">Components</span>
                            <b class="caret"></b>
                        </a>
                        <ul
                            class="collapse show"
                            id="components"
                            data-parent="#sidebar-menu"
                        >
                            <div class="sub-menu">
                                <li class="active">
                                    <a
                                        class="sidenav-item-link"
                                        href="alert.html"
                                    >
                                        <span class="nav-text">Alert</span>
                                    </a>
                                </li>

                                <li>
                                    <a
                                        class="sidenav-item-link"
                                        href="badge.html"
                                    >
                                        <span class="nav-text">Badge</span>
                                    </a>
                                </li>

                                <li>
                                    <a
                                        class="sidenav-item-link"
                                        href="breadcrumb.html"
                                    >
                                        <span class="nav-text">Breadcrumb</span>
                                    </a>
                                </li>

                                <li>
                                    <a
                                        class="sidenav-item-link"
                                        href="button-default.html"
                                    >
                                        <span class="nav-text"
                                            >Button Default</span
                                        >
                                    </a>
                                </li>

                                <li>
                                    <a
                                        class="sidenav-item-link"
                                        href="button-dropdown.html"
                                    >
                                        <span class="nav-text"
                                            >Button Dropdown</span
                                        >
                                    </a>
                                </li>

                                <li>
                                    <a
                                        class="sidenav-item-link"
                                        href="button-group.html"
                                    >
                                        <span class="nav-text"
                                            >Button Group</span
                                        >
                                    </a>
                                </li>

                                <li>
                                    <a
                                        class="sidenav-item-link"
                                        href="button-social.html"
                                    >
                                        <span class="nav-text"
                                            >Button Social</span
                                        >
                                    </a>
                                </li>

                                <li>
                                    <a
                                        class="sidenav-item-link"
                                        href="button-loading.html"
                                    >
                                        <span class="nav-text"
                                            >Button Loading</span
                                        >
                                    </a>
                                </li>

                                <li>
                                    <a
                                        class="sidenav-item-link"
                                        href="card.html"
                                    >
                                        <span class="nav-text">Card</span>
                                    </a>
                                </li>

                                <li>
                                    <a
                                        class="sidenav-item-link"
                                        href="carousel.html"
                                    >
                                        <span class="nav-text">Carousel</span>
                                    </a>
                                </li>

                                <li>
                                    <a
                                        class="sidenav-item-link"
                                        href="collapse.html"
                                    >
                                        <span class="nav-text">Collapse</span>
                                    </a>
                                </li>

                                <li>
                                    <a
                                        class="sidenav-item-link"
                                        href="list-group.html"
                                    >
                                        <span class="nav-text">List Group</span>
                                    </a>
                                </li>

                                <li>
                                    <a
                                        class="sidenav-item-link"
                                        href="modal.html"
                                    >
                                        <span class="nav-text">Modal</span>
                                    </a>
                                </li>

                                <li>
                                    <a
                                        class="sidenav-item-link"
                                        href="pagination.html"
                                    >
                                        <span class="nav-text">Pagination</span>
                                    </a>
                                </li>

                                <li>
                                    <a
                                        class="sidenav-item-link"
                                        href="popover-tooltip.html"
                                    >
                                        <span class="nav-text"
                                            >Popover & Tooltip</span
                                        >
                                    </a>
                                </li>

                                <li>
                                    <a
                                        class="sidenav-item-link"
                                        href="progress-bar.html"
                                    >
                                        <span class="nav-text"
                                            >Progress Bar</span
                                        >
                                    </a>
                                </li>

                                <li>
                                    <a
                                        class="sidenav-item-link"
                                        href="spinner.html"
                                    >
                                        <span class="nav-text">Spinner</span>
                                    </a>
                                </li>

                                <li>
                                    <a
                                        class="sidenav-item-link"
                                        href="switcher.html"
                                    >
                                        <span class="nav-text">Switcher</span>
                                    </a>
                                </li>

                                <li>
                                    <a
                                        class="sidenav-item-link"
                                        href="tab.html"
                                    >
                                        <span class="nav-text">Tab</span>
                                    </a>
                                </li>
                            </div>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </aside>
</template>

<script>
export default {
    data () {
        return {
            app_subtitle : process.env.MIX_APP_SUBTITLE,
            app_title : process.env.MIX_APP_TITLE,
            app_title_short : process.env.MIX_APP_TITLE_SHORT,
            app_title_abbreviation : process.env.MIX_APP_TITLE_ABBREVIATION,
        }
    },
    mounted() {
    }
};
</script>
