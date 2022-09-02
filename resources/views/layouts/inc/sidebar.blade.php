  <style>
      .main-menu.menu-dark .main-menu-header .menu-search {
          background: #fff;
      }
  </style>
  <div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">

      <div class="main-menu-content">
          <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
              <li class=" navigation-header"><span data-i18n="nav.category.support">Menu</span><i data-toggle="tooltip"
                      data-placement="right" data-original-title="Support" class="icon-ellipsis icon-ellipsis"></i>
              </li>
              <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}"><a href="{{ url('dashboard') }}"><i
                          class="icon-home3"></i><span data-i18n="nav.support_documentation.main"
                          class="menu-title">Dashboard</span></a>
              </li>
              <li
                  class="nav-item {{ Request::is('academic/academic-years') || Request::is('academic/classes') || Request::is('academic/sessions') ? 'open' : '' }}">
                  <a href="#"><i class="icon-ios-albums-outline"></i><span data-i18n="nav.cards.main"
                          class="menu-title">Academics</span></a>
                  <ul class="menu-content">
                      <li><a href="{{ url('academic/academic-years') }}"
                              class="menu-item {{ Request::is('academic/academic-years') ? 'active' : '' }}">Academic
                              years</a>
                      </li>
                      <li><a href="{{ url('academic/classes') }}"
                              class="menu-item {{ Request::is('academic/classes') ? 'active' : '' }}">Classes</a>
                      </li>
                      <li><a href="{{ url('academic/sessions') }}"
                              class="menu-item {{ Request::is('academic/sessions') ? 'active' : '' }}">Sections</a>
                      </li>
                  </ul>
              </li>
              <li
                  class="nav-item {{ Request::is('student/add-student') || Request::is('student/view-students') ? 'open' : '' }}">
                  <a href="#"><i class="icon-ios-albums-outline"></i><span data-i18n="nav.cards.main"
                          class="menu-title">Student Information</span></a>
                  <ul class="menu-content">
                      <li><a href="{{ url('student/add-student') }}"
                              class="menu-item {{ Request::is('student/add-student') ? 'active' : '' }}">Admit
                              Student</a>
                      </li>
                      <li><a href="{{ url('student/view-students') }}"
                              class="menu-item {{ Request::is('student/view-students') ? 'active' : '' }}">Student
                              List</a>
                      </li>
                  </ul>
              </li>

              <li
                  class="nav-item {{ Request::is('inventory/units') || Request::is('inventory/categories') || Request::is('inventory/stock/add') || Request::is('inventory/supplier/all') || Request::is('inventory/supplier/add') || Request::is('inventory/stock/all') || Request::is('inventory/stock/add') ? 'open' : '' }}">
                  <a href="{{ url('student/add-student') }}"><i class="icon-ios-albums-outline"></i><span
                          data-i18n="nav.menu_levels.main" class="menu-title">Inventory</span></a>
                  <ul class="menu-content">
                      <li>
                          <a href="{{ url('inventory/units') }}" data-i18n="nav.menu_levels.second_level"
                              class="menu-item {{ Request::is('inventory/units') ? 'active' : '' }}">Units</a>
                      </li>
                      <li>
                          <a href="{{ url('inventory/categories') }}" data-i18n="nav.menu_levels.second_level"
                              class="menu-item {{ Request::is('inventory/categories') ? 'active' : '' }}">
                              Categories</a>
                      </li>

                      <li class="nav-item  {{ Request::is('inventory/supplier/add') || Request::is('inventory/supplier/all')  ? 'open' : '' }}">
                          <a href="#" data-i18n="nav.menu_levels.second_level_child.main" class="nav-item">Manage
                              suppliers</a>
                          <ul class="menu-content">
                              <li>
                                  <a href="{{ url('inventory/supplier/add') }}"
                                      data-i18n="nav.menu_levels.second_level_child.third_level" class="menu-item {{ Request::is('inventory/supplier/add') ? 'active' : '' }}">Add
                                      supplier</a>
                              </li>
                              <li>
                                  <a href="{{ url('inventory/supplier/all') }}"
                                      data-i18n="nav.menu_levels.second_level_child.third_level" class="menu-item {{ Request::is('inventory/supplier/all') ? 'active' : '' }}">View
                                      Suppliers</a>
                              </li>

                          </ul>
                      </li>
                      <li class="nav-item  {{ Request::is('inventory/stock/add') || Request::is('inventory/stock/all')  ? 'open' : '' }}">
                          <a href="#" data-i18n="nav.menu_levels.second_level_child.main" class="menu-item">Manage
                              stock</a>
                          <ul class="menu-content">
                              <li>
                                  <a href="{{ url('inventory/stock/add') }}"
                                      data-i18n="nav.menu_levels.second_level_child.third_level"
                                      class="menu-item {{ Request::is('inventory/stock/add') ? 'active' : '' }}">Add
                                      Stock</a>
                              </li>
                              <li>
                                  <a href="{{ url('inventory/stock/all') }}"
                                      data-i18n="nav.menu_levels.second_level_child.third_level" class="menu-item {{ Request::is('inventory/stock/all') ? 'active' : '' }}">All
                                      Stock</a>
                              </li>
                              <li>
                                  <a href="#" data-i18n="nav.menu_levels.second_level_child.third_level"
                                      class="menu-item">Stock report</a>
                              </li>
                              <li>
                                  <a href="#" data-i18n="nav.menu_levels.second_level_child.third_level"
                                      class="menu-item">Supplier/product wise</a>
                              </li>
                          </ul>
                      </li>
                     <li class="nav-item  {{ Request::is('inventory/purchase/purchase_all') || Request::is('inventory/purchase/add')  ? 'open' : '' }}">
                          <a href="#" data-i18n="nav.menu_levels.second_level_child.main" class="menu-item">Manage
                              purchases</a>
                          <ul class="menu-content">
                              <li>
                                  <a href="{{ url('inventory/purchase/add') }}"
                                      data-i18n="nav.menu_levels.second_level_child.third_level"
                                      class="menu-item {{ Request::is('inventory/purchase/add') ? 'active' : '' }}">Add
                                      </a>
                              </li>
                              <li>
                                  <a href="{{ url('inventory/purchase/pending') }}"
                                      data-i18n="nav.menu_levels.second_level_child.third_level" class="menu-item {{ Request::is('inventory/purchase/all') ? 'active' : '' }}">Approval
                                      </a>
                              </li>
                              <li>
                                  <a href="#" data-i18n="nav.menu_levels.second_level_child.third_level"
                                      class="menu-item">Daily report</a>
                              </li>

                          </ul>
                      </li>
                      <li>
                          <a href="#" data-i18n="nav.menu_levels.second_level_child.main" class="menu-item">Manage
                              invoice</a>
                          <ul class="menu-content">
                              <li>
                                  <a href="#" data-i18n="nav.menu_levels.second_level_child.third_level"
                                      class="menu-item">All</a>
                              </li>
                              <li>
                                  <a href="#" data-i18n="nav.menu_levels.second_level_child.third_level"
                                      class="menu-item">Approval</a>
                              </li>
                              <li>
                                  <a href="#" data-i18n="nav.menu_levels.second_level_child.third_level"
                                      class="menu-item">Invoice List</a>
                              </li>
                              <li>
                                  <a href="#" data-i18n="nav.menu_levels.second_level_child.third_level"
                                      class="menu-item">Daily report</a>
                              </li>
                          </ul>
                      </li>

                  </ul>
              </li>
              {{-- <li
                  class="nav-item {{ Request::is('student/add-student') || Request::is('student/view-students') ? 'open' : '' }}">
                  <a href="#"><i class="icon-ios-albums-outline"></i><span data-i18n="nav.cards.main"
                          class="menu-title">Accounts</span></a>
                  <ul class="menu-content">
                      <li><a href="{{ url('student/add-student') }}"
                              class="menu-item {{ Request::is('student/add-student') ? 'active' : '' }}">Admit
                              Fee Category</a>
                      </li>
                      <li><a href="{{ url('student/view-students') }}"
                              class="menu-item {{ Request::is('student/view-students') ? 'active' : '' }}">Fee
                              Category Amount</a>
                      </li>
                  </ul>
              </li>
              <li
                  class="nav-item {{ Request::is('student/add-student') || Request::is('student/view-students') ? 'open' : '' }}">
                  <a href="#"><i class="icon-ios-albums-outline"></i><span data-i18n="nav.cards.main"
                          class="menu-title">HR Management</span></a>
                  <ul class="menu-content">
                      <li><a href="{{ url('student/add-student') }}"
                              class="menu-item {{ Request::is('student/add-student') ? 'active' : '' }}">Admit
                              Fee Category</a>
                      </li>
                      <li><a href="{{ url('student/view-students') }}"
                              class="menu-item {{ Request::is('student/view-students') ? 'active' : '' }}">Fee
                              Category Amount</a>
                      </li>
                  </ul>
              </li> --}}
              {{-- <li class=" nav-item"><a href="#"><i class="icon-document-text"></i><span
                          data-i18n="nav.support_documentation.main" class="menu-title">Documentation</span></a>
              </li> --}}
          </ul>
      </div>

  </div>
