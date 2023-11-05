<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                @can('general_document_access')
                <li class="menu-title" key="t-menu">@lang('translation.Menu')</li>
                <li>
                    <a href="{{ route('users.dashboard') }}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">@lang('translation.Dashboards')</span>
                    </a>
                </li>
                @endcan
                @can('user_management_access')
                    <li class="menu-title" key="t-apps">Admin</li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-user"></i>
                            <span>User management</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            {{-- @can('permission_access')
                                <li><a href="{{ route('admin.permissions.index') }}" key="t-products">Permissions</a></li>
                            @endcan
                            @can('role_access')
                                <li><a href="{{ route('admin.roles.index') }}" key="t-product-detail">Roles</a></li>
                            @endcan --}}
                            @can('user_access')
                                <li><a href="{{ route('admin.users.index') }}" key="t-product-detail">Users</a></li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('content_management_access')
                    <li class="menu-title" key="t-apps">Manage Content</li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="fas fa-keyboard"></i>
                            <span>Content management</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('admin.news-updates.index') }}" key="t-products">News And Updates</a></li>
                        </ul>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('admin.page-listing-for-content') }}" key="t-products">Content For All
                                    Pages</a></li>
                        </ul>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('admin.page-listing-for-intro') }}" key="t-products">Introduction For
                                    Pages</a></li>
                        </ul>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('admin.forms.index') }}" key="t-products">Forms</a></li>
                        </ul>
                    </li>
                @endcan
                @can('user_request_access')
                <li>
                    <a href="{{ route('users.document-request') }}"
                        class="waves-effect">
                        <i class="fas fa-file-signature"></i>
                        <span>Document Request</span>
                    </a>
                </li>
                @endcan
                @can('user_request_admin_access')
                <li>
                    <a href="{{ route('admin.document-request.index') }}"
                        class="waves-effect">
                        {{-- <i class="bx bx-cog"></i> --}}
                        <i class="fas fa-share-square"></i>
                        <span>Document Requests</span>
                    </a>
                </li>
                @endcan
                @can('general_document_access')
                <li>
                    <a href="{{ route('users.general-documents') }}"
                        class="waves-effect">
                        <i class="fas fa-paste"></i>
                        <span>General Documents</span>
                    </a>
                </li>
                @endcan
                {{-- @endcan --}}
                {{-- @can('user_request_document_create') --}}

                {{-- @can('user_request_document_create') --}}

                @can('user_request_document_create')
                <li>
                    <a href="{{ route('users.eduactional-documents') }}"
                        class="waves-effect">
                        <i class="fas fa-book"></i>
                        <span>Education Documents</span>
                    </a>
                </li>
                @endcan
                @can('slider_managment_access')
                    <li class="menu-title" key="t-apps">Manage Sliders</li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="fas fa-sliders-h"></i>
                            <span>Sliders</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('admin.sliders.index') }}" key="t-products">View All Sliders</a></li>
                        </ul>
                    </li>
                @endcan
                @can('card_managment_access')
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="fas fa-th-large"></i>
                            <span>Cards</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('admin.cards.index') }}" key="t-products">View All Cards</a></li>
                        </ul>
                    </li>
                @endcan
                @can('setting_edit')
                    <li>
                        <a href="{{ route('admin.front-setting.edit', App\Models\FrontSetting::first()->id) }}"
                            class="waves-effect">
                            <i class="bx bx-cog"></i>
                            <span>Settings</span>
                        </a>
                    </li>
                @endcan
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
