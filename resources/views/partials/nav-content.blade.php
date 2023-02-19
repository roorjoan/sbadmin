<nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
    <div class="container-fluid">
        <button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i
                class="fas fa-bars"></i>
        </button>

        <!--form search desktop-->
        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input class="bg-light form-control border-0 small" type="text" name="name"
                    placeholder="Search for ...">
                <button class="btn btn-primary py-0" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form>

        <ul class="navbar-nav flex-nowrap ms-auto">

            <!--form search mobile-->
            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false"
                    data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">

                    <form class="me-auto navbar-search w-100">
                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text"
                                placeholder="Search for ...">
                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i
                                        class="fas fa-search"></i></button></div>
                        </div>
                    </form>

                </div>
            </li>

            <!--alert center (bell)-->
            <li class="nav-item dropdown no-arrow mx-1">
                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false"
                        data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">3+</span><i
                            class="fas fa-bell fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center"
                            href="#">
                            <div class="me-3">
                                <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                            </div>
                            <div><span class="small text-gray-500">December 12, 2019</span>
                                <p>A new monthly report is ready to download!</p>
                            </div>
                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="me-3">
                                <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                            </div>
                            <div><span class="small text-gray-500">December 7, 2019</span>
                                <p>$290.29 has been deposited into your account!</p>
                            </div>
                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="me-3">
                                <div class="bg-warning icon-circle"><i
                                        class="fas fa-exclamation-triangle text-white"></i></div>
                            </div>
                            <div><span class="small text-gray-500">December 2, 2019</span>
                                <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                            </div>
                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                    </div>
                </div>
            </li>

            <!--alert center (email)-->
            <li class="nav-item dropdown no-arrow mx-1">
                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false"
                        data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">1</span><i
                            class="fas fa-envelope fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center"
                            href="#">
                            <div class="dropdown-list-image me-3"><img class="rounded-circle"
                                    src="{{ asset('img/avatars/avatar4.jpeg') }}">
                                <div class="bg-success status-indicator"></div>
                            </div>
                            <div class="fw-bold">
                                <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a
                                        problem I've been having.</span></div>
                                <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                            </div>
                        </a>
                        <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                    </div>
                </div>
                <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown">
                </div>
            </li>

            <div class="d-none d-sm-block topbar-divider"></div>

            <!--profile menu-->

            <li class="nav-item dropdown no-arrow">
                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false"
                        data-bs-toggle="dropdown" href="#"><span
                            class="d-none d-lg-inline me-2 text-gray-600 small">{{ Auth::user()->name }}</span><img
                            class="border rounded-circle img-profile" src="{{ asset('img/avatars/avatar1.jpeg') }}"></a>

                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">
                        <a class="dropdown-item" href="{{ route('users.profile') }}"><i
                                class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;
                            Profile
                        </a>
                        <a class="dropdown-item" href="{{ route('employees.create') }}">
                            <i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;
                            Add employee
                        </a>

                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            <i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;
                            Import data
                        </a>

                        <div class="dropdown-divider"></div>

                        <form action="{{ route('logout') }}" method="post">
                            @csrf

                            <a class="dropdown-item" href="#" onclick="this.closest('form').submit()">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;
                                Logout
                            </a>
                        </form>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>

<!--modal import excel-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Import employee data from excel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <!--formulario para importar excel-->
                @include('employees.form-import-excel')

            </div>
        </div>
    </div>
</div>
