@extends('layouts.dashboard')

@section('content')

    <main class="page-content d-flex flex-column flex-row-fluid">

        <!--Main Search Modal-->
        <!-- Modal -->
        <div class="modal" id="modal_search" tabindex="-1" aria-labelledby="modal_searchLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <!--Search inner-->
                        <div class="">

                            <!--Search form-->
                            <form>
                                <div class="position-relative mb-4">
                                    <div class="text-muted">
                            <span class="material-symbols-rounded position-absolute start-0 top-50 translate-middle-y ms-2">
                              search
                              </span>
                                    </div>
                                    <input type="text" autofocus class="form-control form-control-lg border-2 border-primary border ps-6"
                                           placeholder="Search App...">
                                </div>
                            </form>

                            <!--Recently searched-->
                            <div class="d-flex mb-2 align-items-center">
                                <h6 class="d-block mb-0 me-3 flex-grow-1">
                          <span class="material-symbols-rounded align-middle me-1 fs-5 opacity-50">
                            history
                            </span>
                                    Recent
                                </h6>
                                <a href="#!" class="small flex-shrink-0 d-block">Clear All</a>
                            </div>
                            <div class="list-group">
                                <!--Recently searched item-->
                                <a href="#" class="list-group-item px-3 d-flex overflow-hidden align-items-center list-group-item-action">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <span class="text-truncate">Campaign reports</span>
                                    </div>
                                </a>
                                <!--Recently searched item-->
                                <a href="#" class="list-group-item px-3 d-flex overflow-hidden align-items-center list-group-item-action">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <span class="text-truncate">Funnel reports</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="pt-0 border-top-0 modal-footer">
                           <span class="small">Press ESC or
                           <span class="badge bg-secondary" role="button" data-bs-dismiss="modal">Click me</span> to close
                           </span>
                    </div>
                </div>
            </div>
        </div>


        <!--//Page content//-->
        <div class="content d-flex flex-column-fluid">
            <div class="container-fluid px-0">
                <!--Profile-->
                <div class="pt-3 px-3 px-lg-6 overflow-hidden">
                    <img src="assets/media/cover/2.jpg" class="img-fluid rounded-5 mb-3 mb-lg-0 shadow-lg"
                         alt="">
                    <div class="row align-items-lg-end align-items-center mx-lg-0 mb-4 mb-lg-0">
                        <div class="col-auto px-lg-5">

                            <!-- Avatar -->
                            <div
                                class="avatar xxl rounded-4 p-1 bg-body overflow-hidden position-relative mt-lg-n5">
                                <img src="assets/media/avatars/01.jpg" alt="..."
                                     class="img-fluid rounded-4">
                            </div>

                        </div>
                        <div class="col mb-3 px-lg-5">
                            <div class="row align-items-md-end">
                                <div class="col-12 col-md">

                                    <!-- Profile Subtitle -->
                                    <span class="text-muted small d-block pt-3 mb-1">
                                                    Member Since 2014
                                                </span>

                                    <!--Profile Title -->
                                    <h3 class="profile-title mb-0">
                                        Noah Pierre
                                    </h3>
                                </div>

                                <div class="col-12 col-md-auto mt-3 mt-md-0">

                                    <!-- Subscribe Button -->
                                    <a href="#!" class="btn btn-primary d-block d-md-inline-block lift">
                                        Follow
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Profile content-->
                    <div class="pt-md-3">

                        <!--Profile Nav Tabs-->
                        <ul class="nav mb-3 nav-tabs nav-overflow">
                            <li class="nav-item">
                                <a href="#!profile-feed.html" class="nav-link active">
                                    Feed
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#!profile-friends.html" class="nav-link">
                                    Friends
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#!profile-projects.html" class="nav-link">
                                    Projects
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#!profile-photos.html" class="nav-link">
                                    Photos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#!profile-followers.html" class="nav-link">
                                    Followers
                                </a>
                            </li>
                        </ul>

                        <!--Content-->
                        <div class="row">
                            <div class="col-lg-4">

                                <!--Card-->
                                <div class="card mb-3 mb-lg-5">

                                    <!--Card body-->
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <div class="mb-2 small text-muted">
                                                            <span
                                                                class="align-middle material-symbols-rounded me-2 fs-4">info</span>About
                                            </div>
                                            <p class="mb-0">Lorem ipsum is placeholder text commonly used in
                                                the graphic, print, and publishing industries for previewing
                                                layouts and visual mockups. </p>
                                        </div>
                                        <div class="mt-3">
                                            <div class="mb-2 small text-muted">
                                                            <span
                                                                class="align-middle material-symbols-rounded me-2 fs-4">account_circle</span>Member
                                                since
                                            </div>
                                            <p class="mb-0"> Dec 15, 2014 </p>
                                        </div>
                                        <div class="mt-3">
                                            <div class="mb-1 small text-muted">
                                                            <span
                                                                class="align-middle material-symbols-rounded me-2 fs-4">language</span>Live
                                            </div>
                                            <p class="mb-0"> New York, USA </p>
                                        </div>
                                        <div class="mt-3">
                                            <div class="mb-1 small text-muted">
                                                            <span
                                                                class="align-middle material-symbols-rounded me-2 fs-4">mail</span>Email
                                            </div>
                                            <p class="mb-0"> yourmail@yourdoamin.com </p>
                                        </div>
                                        <div class="mt-3">
                                            <div class="mb-1 small text-muted">
                                                            <span
                                                                class="align-middle material-symbols-rounded me-2 fs-4">open_in_new</span>Site
                                            </div>
                                            <p class="mb-0"> www.yoursite.com </p>
                                        </div>
                                    </div>
                                </div>
                                <!--Card-->
                                <div class="card mb-3 mb-lg-5">
                                    <div class="d-flex p-3 pb-0 align-items-center jsutify-content-between">
                                        <h5 class="mb-0 me-1">Suggested Users</h5>
                                    </div>
                                    <!--Card body-->
                                    <div class="card-body">
                                        <ul class="list-group list-group-flush">

                                            <!--User List item-->
                                            <li class="list-group-item">
                                                <div class="row g-2 align-items-center">
                                                    <div class="col-auto">
                                                        <div
                                                            class="avatar-status status-offline me-2 avatar sm">
                                                            <img src="assets/media/avatars/02.jpg"
                                                                 class="rounded-circle img-fluid" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="mb-0">Milana Myles</h6>
                                                        <small>milana@mail.com</small>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="dropdown">
                                                            <a href="#" class="text-muted"
                                                               data-bs-toggle="dropdown">
                                                                            <span
                                                                                class="material-symbols-rounded align-middle">
                                                                                more_vert
                                                                            </span>
                                                            </a>
                                                            <div
                                                                class="dropdown-menu dropdown-menu-end mt-2">
                                                                <a href="#!" class="dropdown-item">
                                                                    <small>Follow</small>
                                                                </a>
                                                                <a href="#!" class="dropdown-item">
                                                                    <small>Hide this user</small>
                                                                </a>
                                                                <a href="#!" class="dropdown-item">
                                                                    <small>Block this user</small>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <!--User List item-->
                                            <li class="list-group-item">
                                                <div class="row g-2 align-items-center">
                                                    <div class="col-auto">
                                                        <div
                                                            class="avatar-status status-online me-2 avatar sm">
                                                            <img src="assets/media/avatars/03.jpg"
                                                                 class="rounded-circle img-fluid" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="mb-0">Larry Lin</h6>
                                                        <small>larry@mail.com</small>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="dropdown">
                                                            <a href="#" class="text-muted"
                                                               data-bs-toggle="dropdown">
                                                                            <span
                                                                                class="material-symbols-rounded align-middle">
                                                                                more_vert
                                                                            </span>
                                                            </a>
                                                            <div
                                                                class="dropdown-menu dropdown-menu-end mt-2">
                                                                <a href="#!" class="dropdown-item">
                                                                    <small>Follow</small>
                                                                </a>
                                                                <a href="#!" class="dropdown-item">
                                                                    <small>Hide this user</small>
                                                                </a>
                                                                <a href="#!" class="dropdown-item">
                                                                    <small>Block this user</small>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <!--User List item-->
                                            <li class="list-group-item">
                                                <div class="row g-2 align-items-center">
                                                    <div class="col-auto">
                                                        <div
                                                            class="avatar-status status-online me-2 avatar sm">
                                                            <img src="assets/media/avatars/04.jpg"
                                                                 class="rounded-circle img-fluid" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="mb-0">Korbyn Colon</h6>
                                                        <small>kobryn@mail.com</small>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="dropdown">
                                                            <a href="#" class="text-muted"
                                                               data-bs-toggle="dropdown">
                                                                            <span
                                                                                class="material-symbols-rounded align-middle">
                                                                                more_vert
                                                                            </span>
                                                            </a>
                                                            <div
                                                                class="dropdown-menu dropdown-menu-end mt-2">
                                                                <a href="#!" class="dropdown-item">
                                                                    <small>Follow</small>
                                                                </a>
                                                                <a href="#!" class="dropdown-item">
                                                                    <small>Hide this user</small>
                                                                </a>
                                                                <a href="#!" class="dropdown-item">
                                                                    <small>Block this user</small>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <!--User List item-->
                                            <li class="list-group-item">
                                                <div class="row g-2 align-items-center">
                                                    <div class="col-auto">
                                                        <div
                                                            class="avatar-status status-away me-2 avatar sm">
                                                            <img src="assets/media/avatars/05.jpg"
                                                                 class="rounded-circle img-fluid" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="mb-0">Alisa Hester</h6>
                                                        <small>alisa@mail.com</small>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="dropdown">
                                                            <a href="#" class="text-muted"
                                                               data-bs-toggle="dropdown">
                                                                            <span
                                                                                class="material-symbols-rounded align-middle">
                                                                                more_vert
                                                                            </span>
                                                            </a>
                                                            <div
                                                                class="dropdown-menu dropdown-menu-end mt-2">
                                                                <a href="#!" class="dropdown-item">
                                                                    <small>Follow</small>
                                                                </a>
                                                                <a href="#!" class="dropdown-item">
                                                                    <small>Hide this user</small>
                                                                </a>
                                                                <a href="#!" class="dropdown-item">
                                                                    <small>Block this user</small>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <!--User List item-->
                                            <li class="list-group-item">
                                                <div class="row g-2 align-items-center">
                                                    <div class="col-auto">
                                                        <div
                                                            class="avatar-status status-dnd me-2 avatar sm">
                                                            <img src="assets/media/avatars/06.jpg"
                                                                 class="rounded-circle img-fluid" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="mb-0">Becky George</h6>
                                                        <small>becky@mail.com</small>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="dropdown">
                                                            <a href="#" class="text-muted"
                                                               data-bs-toggle="dropdown">
                                                                            <span
                                                                                class="material-symbols-rounded align-middle">
                                                                                more_vert
                                                                            </span>
                                                            </a>
                                                            <div
                                                                class="dropdown-menu dropdown-menu-end mt-2">
                                                                <a href="#!" class="dropdown-item">
                                                                    <small>Follow</small>
                                                                </a>
                                                                <a href="#!" class="dropdown-item">
                                                                    <small>Hide this user</small>
                                                                </a>
                                                                <a href="#!" class="dropdown-item">
                                                                    <small>Block this user</small>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <!--User List item-->
                                            <li class="list-group-item">
                                                <div class="row g-2 align-items-center">
                                                    <div class="col-auto">
                                                        <div
                                                            class="avatar-status status-online me-2 avatar sm">
                                                            <img src="assets/media/avatars/07.jpg"
                                                                 class="rounded-circle img-fluid" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="mb-0">Aaiden Savage</h6>
                                                        <small>aaiden@mail.com</small>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="dropdown">
                                                            <a href="#" class="text-muted"
                                                               data-bs-toggle="dropdown">
                                                                            <span
                                                                                class="material-symbols-rounded align-middle">
                                                                                more_vert
                                                                            </span>
                                                            </a>
                                                            <div
                                                                class="dropdown-menu dropdown-menu-end mt-2">
                                                                <a href="#!" class="dropdown-item">
                                                                    <small>Follow</small>
                                                                </a>
                                                                <a href="#!" class="dropdown-item">
                                                                    <small>Hide this user</small>
                                                                </a>
                                                                <a href="#!" class="dropdown-item">
                                                                    <small>Block this user</small>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">

                                <!--Post card start-->
                                <div class="card mb-3 mb-lg-5">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-start align-items-center mb-3">
                                                        <span
                                                            class="avatar flex-shrink-0 rounded-circle d-inline-block">
                                                            <img src="assets/media/avatars/01.jpg" alt="avatar"
                                                                 class="img-fluid rounded-circle">
                                                        </span>
                                            <div class="ps-3">
                                                <h6 class="mb-0">Noah Pierre</h6>
                                                <small class="text-muted">04 August 2021 at 11:03 AM</small>
                                            </div>
                                        </div>
                                        <p>
                                            Lorem ipsum, or lipsum as it is sometimes known, is dummy text
                                            used in laying out print, graphic or web designs. The passage is
                                            attributed to an unknown typesetter in the 15th century who is
                                            thought to have scrambled parts of Cicero's De Finibus Bonorum
                                            et Malorum for use in a type specimen book...
                                        </p>
                                        <img src="assets/media/900x600/5.jpg"
                                             class="img-fluid mb-3 rounded-3 shadow" alt="">


                                        <!--Reaction list-->

                                        <!--Likes-->
                                        <div class="d-flex mb-3 align-items-center small">
                                            <a href="#!"
                                               class="d-flex me-1 align-items-center btn btn-sm btn-white border rounded-2 px-2 border">
                                                            <span
                                                                class="fs-5 align-middle me-1 material-symbols-rounded">
                                                                    thumb_up
                                                                </span>
                                                <span>239</span>
                                            </a>

                                            <!--Comments-->
                                            <a href="#!"
                                               class="d-flex align-items-center btn btn-sm btn-white border rounded-2 px-2 ms-auto">
                                                            <span
                                                                class="fs-5 align-middle me-1 material-symbols-rounded">
                                                                comment
                                                            </span>
                                                <span>34</span>
                                            </a>

                                            <!--Shares-->
                                            <a href="#!"
                                               class="d-flex align-items-center btn btn-sm btn-white border rounded-2 px-2 ms-1">
                                                            <span
                                                                class="fs-5 align-middle me-1 material-symbols-rounded">
                                                                share
                                                            </span>
                                                <span>4</span>
                                            </a>
                                        </div>

                                        <!--Comments list-->
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <div class="d-flex align-items-stretch">
                                                    <a href="#!" class="flex-shrink-0 d-block me-2">
                                                        <img src="assets/media/avatars/01.jpg"
                                                             class="avatar sm rounded-circle" alt="">
                                                    </a>
                                                    <!--Coomments and replies-->
                                                    <div>
                                                        <div class="py-2 mb-1 px-3 bg-body rounded-3">
                                                            <div class="d-flex justify-content-between">
                                                                <h6 class="mb-0">Noah Pierre</h6>
                                                                <small class="text-muted">12:43 PM</small>
                                                            </div>
                                                            <p class="mb-0">
                                                                Lorem ipsum, or lipsum as it is sometimes
                                                                known, is dummy text used in laying out
                                                                print, graphic or web designs.
                                                            </p>
                                                        </div>
                                                        <!--Reply link-->
                                                        <div class="mb-2 small">
                                                            <a href="#!" class="text-reset">Reply</a>
                                                        </div>
                                                        <!--Reply-->
                                                        <div class="d-flex align-items-stretch">
                                                            <a href="#!" class="flex-shrink-0 d-block me-2">
                                                                <img src="assets/media/avatars/02.jpg"
                                                                     class="avatar xs rounded-circle" alt="">
                                                            </a>
                                                            <!--Reply-->
                                                            <div>
                                                                <div
                                                                    class="py-2 mb-1 px-3 bg-body rounded-3">
                                                                    <div
                                                                        class="d-flex justify-content-between">
                                                                        <h6 class="mb-0">Milana Myles</h6>
                                                                        <small class="text-muted">12:43
                                                                            PM</small>
                                                                    </div>
                                                                    <p class="mb-0">
                                                                        Lorem ipsum, or lipsum as it is
                                                                        sometimes known.
                                                                    </p>
                                                                </div>
                                                                <!--Reply link-->
                                                                <div class="mb-0 small">
                                                                    <a href="#!"
                                                                       class="text-reset">Reply</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="d-flex align-items-stretch">
                                                    <a href="#!" class="flex-shrink-0 d-block me-2">
                                                        <img src="assets/media/avatars/03.jpg"
                                                             class="avatar sm rounded-circle" alt="">
                                                    </a>
                                                    <!--Coomments and replies-->
                                                    <div>
                                                        <div class="py-2 mb-1 px-3 bg-body rounded-3">
                                                            <div class="d-flex justify-content-between">
                                                                <h6 class="mb-0">Larry Lin</h6>
                                                                <small class="text-muted">12:43 PM</small>
                                                            </div>
                                                            <p class="mb-0">
                                                                Lorem ipsum is dummy text. 😀
                                                            </p>
                                                        </div>
                                                        <!--Reply link-->
                                                        <div class="mb-2 small">
                                                            <a href="#!" class="text-reset">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item bg-body">
                                                <!--Add comment-->
                                                <h6>Add new comment</h6>
                                                <form action="#!">
                                                                <textarea name="addComment" rows="2"
                                                                          class="form-control mb-2"></textarea>
                                                    <div class="text-end">
                                                        <button type="button"
                                                                class="btn btn-primary btn-sm">Add
                                                            Comment</button>
                                                    </div>
                                                </form>
                                            </li>
                                        </ul>


                                    </div>
                                </div>
                                <!--/.Post card end-->

                                <!--Post card start-->
                                <div class="card mb-3 mb-lg-5">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-start align-items-center mb-3">
                                                        <span
                                                            class="avatar flex-shrink-0 rounded-circle d-inline-block">
                                                            <img src="assets/media/avatars/01.jpg" alt="avatar"
                                                                 class="img-fluid rounded-circle">
                                                        </span>
                                            <div class="ps-3">
                                                <h6 class="mb-0">Noah Pierre</h6>
                                                <small class="text-muted">12 August 2021 at 13:43 PM</small>
                                            </div>
                                        </div>
                                        <p>
                                            Lorem ipsum, or lipsum as it is sometimes known, is dummy text
                                            used in laying out print, graphic or web designs. The passage is
                                            attributed to an unknown typesetter in the 15th century who is
                                            thought to have scrambled parts of Cicero's De Finibus Bonorum
                                            et Malorum for use in a type specimen book...
                                        </p>
                                        <img src="assets/media/900x600/7.jpg"
                                             class="img-fluid mb-3 rounded-3 shadow" alt="">

                                        <!--Reaction list-->

                                        <!--Likes-->
                                        <div class="d-flex mb-3 align-items-center small">
                                            <a href="#!"
                                               class="d-flex me-1 align-items-center btn btn-sm btn-white border rounded-2 px-2 border">
                                                            <span class="me-1"><span
                                                                    class="fs-5 align-middle me-1 material-symbols-rounded">
                                                                    thumb_up
                                                                </span></span>
                                                <span>239</span>
                                            </a>

                                            <!--Comments-->
                                            <a href="#!"
                                               class="d-flex align-items-center btn btn-sm btn-white border rounded-2 px-2 ms-auto">
                                                            <span
                                                                class="fs-5 align-middle me-1 material-symbols-rounded">
                                                                comment
                                                            </span>
                                                <span>34</span>
                                            </a>

                                            <!--Shares-->
                                            <a href="#!"
                                               class="d-flex align-items-center btn btn-sm btn-white border rounded-2 px-2 ms-1">
                                                            <span
                                                                class="fs-5 align-middle me-1 material-symbols-rounded">
                                                                share
                                                            </span>
                                                <span>4</span>
                                            </a>
                                        </div>

                                        <!--Comments list-->
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <div class="d-flex align-items-stretch">
                                                    <a href="#!" class="flex-shrink-0 d-block me-2">
                                                        <img src="assets/media/avatars/03.jpg"
                                                             class="avatar sm rounded-circle" alt="">
                                                    </a>
                                                    <!--Coomments and replies-->
                                                    <div>
                                                        <div class="py-2 mb-1 px-3 bg-body rounded-3">
                                                            <div class="d-flex justify-content-between">
                                                                <h6 class="mb-0">Larry Lin</h6>
                                                                <small class="text-muted">12:43 PM</small>
                                                            </div>
                                                            <p class="mb-0">
                                                                Lorem ipsum is dummy text. 😀
                                                            </p>
                                                        </div>
                                                        <!--Reply link-->
                                                        <div class="mb-2 small">
                                                            <a href="#!" class="text-reset">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item bg-body">
                                                <!--Add comment-->
                                                <h6>Add new comment</h6>
                                                <form action="#!">
                                                                <textarea name="addComment" rows="2"
                                                                          class="form-control mb-2"></textarea>
                                                    <div class="text-end">
                                                        <button type="button"
                                                                class="btn btn-primary btn-sm">Add
                                                            Comment</button>
                                                    </div>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/.Post card end-->

                                <!--Post card start-->
                                <div class="card mb-3 mb-lg-5">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-start align-items-center mb-3">
                                                        <span
                                                            class="avatar flex-shrink-0 rounded-circle d-inline-block">
                                                            <img src="assets/media/avatars/01.jpg" alt="avatar"
                                                                 class="img-fluid rounded-circle">
                                                        </span>
                                            <div class="ps-3">
                                                <h6 class="mb-0">Noah Pierre</h6>
                                                <small class="text-muted">16 August 2021 at 9:43 AM</small>
                                            </div>
                                        </div>
                                        <p>
                                            Lorem ipsum, or lipsum as it is sometimes known, is dummy text
                                            used in laying out print, graphic or web designs. The passage is
                                            attributed to an unknown typesetter in the 15th century who is
                                            thought to have scrambled parts of Cicero's De Finibus Bonorum
                                            et Malorum for use in a type specimen book...
                                        </p>
                                        <div class="ratio ratio-21x9 mb-3"><iframe
                                                src="https://www.youtube.com/embed/6stlCkUDG_s"
                                                allowfullscreen="allowfullscreen"
                                                class="w-100 rounded-3"></iframe></div>

                                        <!--Reaction list-->

                                        <!--Likes-->
                                        <div
                                            class="d-flex pb-3 mb-3 border-bottom align-items-center small">
                                            <a href="#!"
                                               class="d-flex me-1 align-items-center btn btn-sm btn-white border rounded-2 px-2 border">
                                                            <span class="me-1">
                                                                <span
                                                                    class="fs-5 align-middle me-1 material-symbols-rounded">
                                                                    thumb_up
                                                                </span>
                                                            </span>
                                                <span>239</span>
                                            </a>

                                            <!--Comments-->
                                            <a href="#!"
                                               class="d-flex align-items-center btn btn-sm btn-white border rounded-2 px-2 ms-auto">
                                                            <span
                                                                class="fs-5 align-middle me-1 material-symbols-rounded">
                                                                comment
                                                            </span>
                                                <span>34</span>
                                            </a>

                                            <!--Shares-->
                                            <a href="#!"
                                               class="d-flex align-items-center btn btn-sm btn-white border rounded-2 px-2 ms-1">
                                                            <span
                                                                class="fs-5 align-middle me-1 material-symbols-rounded">
                                                                share
                                                            </span>
                                                <span>4</span>
                                            </a>
                                        </div>
                                        <!--Comments list-->
                                        <ul class="list-group">
                                            <li class="list-group-item text-muted">No Comments</li>
                                            <li class="list-group-item bg-body">
                                                <!--Add comment-->
                                                <h6>Add new comment</h6>
                                                <form action="#!">
                                                                <textarea name="addComment" rows="2"
                                                                          class="form-control mb-2"></textarea>
                                                    <div class="text-end">
                                                        <button type="button"
                                                                class="btn btn-primary btn-sm">Add
                                                            Comment</button>
                                                    </div>
                                                </form>
                                            </li>
                                        </ul>
                                        <hr>
                                    </div>
                                </div>
                                <!--/.Post card end-->
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!--//Page content End//-->

        <!--//Page-footer//-->
        <footer class="pb-3 pb-lg-5 px-3 px-lg-6">
            <div class="container-fluid px-0">
                          <span class="d-block lh-sm small text-muted text-end">&copy;
                            <script>
                              document.write(new Date().getFullYear())
                            </script>. Copyright
                          </span>
            </div>
        </footer>
        <!--/.Page Footer End-->
    </main>

@endsection
