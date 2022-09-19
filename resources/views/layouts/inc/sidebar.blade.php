  <style>
      .main-menu.menu-dark .main-menu-header .menu-search {
          background: #fff;
      }
  </style>

  <div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">

      <div class="main-menu-content">

          @if (Auth::user()->hasRole('admin'))
              <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
                  <li class=" navigation-header"><span data-i18n="nav.category.support">Menu</span><i data-toggle="tooltip"
                          data-placement="right" data-original-title="Support" class="icon-ellipsis icon-ellipsis"></i>
                  </li>
                  <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}"><a
                          href="{{ url('dashboard') }}"><i class="icon-home3"></i><span
                              data-i18n="nav.support_documentation.main" class="menu-title">Dashboard</span></a>
                  </li>
                  <li class="nav-item {{ Request::is('academic/academic-years') || Request::is('academic/classes') || Request::is('academic/sessions') || Request::is('academic/fee/category/view') || Request::is('academic/fee/amount/view') || Request::is('academic/fee/amount/add') || Request::is('academic/fee/category/add') ? 'open' : '' }}">
                      <a href="#"><i class="icon-ios-gear-outline"></i><span data-i18n="nav.cards.main"
                              class="menu-title">Academic setup</span></a>
                      <ul class="menu-content">
                          <li><a href="{{ url('academic/academic-years') }}"
                                  class="menu-item {{ Request::is('academic/academic-years') ? 'active' : '' }}"><i class="icon-ios-gear-outline"></i>Academic
                                  years</a>
                          </li>
                          <li><a href="{{ url('academic/classes') }}"
                                  class="menu-item {{ Request::is('academic/classes') ? 'active' : '' }}"><i class="icon-ios-gear-outline"></i>Classes</a>
                          </li>
                          <li><a href="{{ url('academic/sessions') }}"
                                  class="menu-item {{ Request::is('academic/sessions') ? 'active' : '' }}"><i class="icon-ios-gear-outline"></i>Sections</a>
                          </li>
                          <li>
                              <a href="{{ url('academic/fee/category/view') }}"
                                  data-i18n="nav.menu_levels.second_level_child.third_level"
                                  class="menu-item {{ Request::is('academic/fee/category/view') || Request::is('academic/fee/category/add') || Request::is('academic/fee/category/edit') ? 'active' : '' }}">
                                  <i class="icon-ios-gear-outline"></i>FeeCategory</a>
                          </li>
                      </ul>
                  </li>
                  <li
                      class="nav-item {{ Request::is('student/add-student') || Request::is('student/view-students') ? 'open' : '' }}">
                      <a href="#"><i class="icon-ios-personadd-outline"></i><span data-i18n="nav.cards.main"
                              class="menu-title">Student Information</span></a>
                      <ul class="menu-content">
                          <li><a href="{{ url('student/add-student') }}"
                                  class="menu-item {{ Request::is('student/add-student') ? 'active' : '' }}"><i class="icon-ios-personadd-outline"></i>Admit
                                  Student</a>
                          </li>
                          <li><a href="{{ url('student/view-students') }}"
                                  class="menu-item {{ Request::is('student/view-students') ? 'active' : '' }}"><i class="icon-ios-people-outline"></i>Student
                                  List</a>
                          </li>
                      </ul>
                  </li>

                  <li
                      class="nav-item {{ Request::is('inventory/units') || Request::is('inventory/categories') || Request::is('inventory/stock/add') || Request::is('inventory/supplier/all') || Request::is('inventory/supplier/add') || Request::is('inventory/stock/all') || Request::is('inventory/stock/add') || Request::is('inventory/purchase/add') || Request::is('inventory/purchase/all') || Request::is('inventory/purchase/pending') || Request::is('inventory/invoice/add') || Request::is('inventory/invoice/pending') || Request::is('inventory/invoice/all') ? 'open' : '' }}">
                      <a href="{{ url('student/add-student') }}"><i class="icon-ios-pricetags-outline"></i><span
                              data-i18n="nav.menu_levels.main" class="menu-title">Inventory</span></a>
                      <ul class="menu-content">
                          <li>
                              <a href="{{ url('inventory/units') }}" data-i18n="nav.menu_levels.second_level"
                                  class="menu-item {{ Request::is('inventory/units') ? 'active' : '' }}"><i class="icon-ios-pricetags-outline"></i>Departments/Units</a>
                          </li>
                          <li>
                              <a href="{{ url('inventory/categories') }}" data-i18n="nav.menu_levels.second_level"
                                  class="menu-item {{ Request::is('inventory/categories') ? 'active' : '' }}">
                                  <i class="icon-ios-pricetags-outline"></i>Department Categories</a>
                          </li>
                          <li
                              class="nav-item  {{ Request::is('inventory/supplier/add') || Request::is('inventory/supplier/all') ? 'open' : '' }}">
                              <a href="#" data-i18n="nav.menu_levels.second_level_child.main"
                                  class="menu-item"><i class="icon-ios-personadd-outline"></i>Manage suppliers</a>
                              <ul class="menu-content">
                                  <li>
                                      <a href="{{ url('inventory/supplier/add') }}"
                                          data-i18n="nav.menu_levels.second_level_child.third_level"
                                          class="menu-item {{ Request::is('inventory/supplier/add') ? 'active' : '' }}"><i class="icon-ios-personadd-outline"></i>Add
                                          supplier</a>
                                  </li>
                                  <li>
                                      <a href="{{ url('inventory/supplier/all') }}"
                                          data-i18n="nav.menu_levels.second_level_child.third_level"
                                          class="menu-item {{ Request::is('inventory/supplier/all') ? 'active' : '' }}"><i class="icon-ios-personadd-outline"></i>View
                                          Suppliers</a>
                                  </li>

                              </ul>
                          </li>
                          <li
                              class="nav-item  {{ Request::is('inventory/stock/add') || Request::is('inventory/stock/all') ? 'open' : '' }}">
                              <a href="#" data-i18n="nav.menu_levels.second_level_child.main"
                                  class="menu-item"><i class="icon-ios-cloud-upload-outline"></i>Manage
                                  stock</a>
                              <ul class="menu-content">
                                  <li>
                                      <a href="{{ url('inventory/stock/add') }}"
                                          data-i18n="nav.menu_levels.second_level_child.third_level"
                                          class="menu-item {{ Request::is('inventory/stock/add') ? 'active' : '' }}"><i class="icon-ios-cloud-upload-outline"></i>Add
                                          Stock</a>
                                  </li>
                                  <li>
                                      <a href="{{ url('inventory/stock/all') }}"
                                          data-i18n="nav.menu_levels.second_level_child.third_level"
                                          class="menu-item {{ Request::is('inventory/stock/all') ? 'active' : '' }}"><i class="icon-ios-cloud-upload-outline"></i>All
                                          Stock</a>
                                  </li>

                              </ul>
                          </li>
                          <li
                              class="nav-item  {{ Request::is('inventory/purchase/all') || Request::is('inventory/purchase/add') || Request::is('inventory/purchase/pending') ? 'open' : '' }}">
                              <a href="#" data-i18n="nav.menu_levels.second_level_child.main"
                                  class="menu-item"><i class="icon-ios-cart-outline"></i>Manage
                                  purchases</a>
                              <ul class="menu-content">
                                  <li>
                                      <a href="{{ url('inventory/purchase/add') }}"
                                          data-i18n="nav.menu_levels.second_level_child.third_level"
                                          class="menu-item {{ Request::is('inventory/purchase/add') ? 'active' : '' }}"><i class="icon-ios-cart-outline"></i>Add
                                      </a>
                                  </li>
                                  <li>
                                      <a href="{{ url('inventory/purchase/pending') }}"
                                          data-i18n="nav.menu_levels.second_level_child.third_level"
                                          class="menu-item {{ Request::is('inventory/purchase/pending') ? 'active' : '' }}"><i class="icon-ios-cart-outline"></i>Waiting
                                          Approval
                                      </a>
                                  </li>
                                  <li>
                                      <a href="{{ url('inventory/purchase/all') }}"
                                          data-i18n="nav.menu_levels.second_level_child.third_level"
                                          class="menu-item {{ Request::is('inventory/purchase/all') ? 'active' : '' }}"><i class="icon-ios-cart-outline"></i>All
                                          purchase
                                      </a>
                                  </li>

                              </ul>
                          </li>
                           <li
                              class="nav-item  {{ Request::is('inventory/invoice/add') || Request::is('inventory/invoice/pending') || Request::is('inventory/invoice/all') ? 'open' : '' }}">
                              <a href="#" data-i18n="nav.menu_levels.second_level_child.main"
                                  class="menu-item"><i class="icon-ios-printer-outline"></i>Manage
                                  invoice</a>
                              <ul class="menu-content">
                                  <li>
                                      <a href="{{ url('inventory/invoice/add') }}"
                                          data-i18n="nav.menu_levels.second_level_child.third_level"
                                          class="menu-item {{ Request::is('inventory/invoice/add') ? 'active' : '' }}"><i class="icon-ios-printer-outline"></i>Add</a>
                                  </li>
                                  <li>
                                      <a href="{{ url('inventory/invoice/all') }}"
                                          data-i18n="nav.menu_levels.second_level_child.third_level"
                                          class="menu-item {{ Request::is('inventory/invoice/all') ? 'active' : '' }}"><i class="icon-ios-printer-outline"></i>Invoice
                                          List</a>
                                  </li>
                              </ul>
                          </li>
                      </ul>
                  </li>
                  <li
                      class="nav-item {{ Request::is('accounts/student/fee/add') || Request::is('accounts/student/fee/view') || Request::is('accounts/student/fee/getstudent') ? 'open' : '' }}">
                      <a href="#"><i class="icon-ios-calculator-outline"></i><span data-i18n="nav.cards.main"
                              class="menu-title">Student Fees</span></a>
                      <ul class="menu-content">
                          <li><a href="{{ url('accounts/student/fee/add') }}"
                                  class="menu-item {{ Request::is('accounts/student/fee/add') ? 'active' : '' }}"><i class="icon-ios-calculator-outline"></i>Add</a>
                          </li>
                          <li><a href="{{ url('accounts/student/fee/view') }}"
                                  class="menu-item {{ Request::is('accounts/student/fee/view') ? 'active' : '' }}"><i class="icon-ios-calculator-outline"></i>View</a>
                          </li>
                      </ul>

                  </li>
                  <li class="nav-item {{ Request::is('accounts/student/fee/keyin') ? 'open' : '' }}">
                      <a href="#"><i class="icon-ios-calculator-outline"></i><span data-i18n="nav.cards.main"
                              class="menu-title">Bursar</span></a>
                      <ul class="menu-content">
                          <li><a href="{{ url('accounts/student/fee/keyin') }}"
                                  class="menu-item {{ Request::is('accounts/student/fee/keyin') ? 'active' : '' }}"><i class="icon-ios-calculator-outline"></i>Key
                                  In</a>
                          </li>
                      </ul>
                  </li>

                  <li
                      class="nav-item {{ Request::is('resource/sub-category/add') || Request::is('resource/subcategories') || Request::is('resource/categories') || Request::is('resource/category/add') || Request::is('resource/all') || Request::is('resource/add') ? 'open' : '' }}">
                      <a href="{{ url('student/add-student') }}"><i class="icon-ios-paper-outline"></i><span
                              data-i18n="nav.menu_levels.main" class="menu-title">Resources</span></a>
                      <ul class="menu-content">
                          <li>
                              <a href="{{ url('resource/categories') }}" data-i18n="nav.menu_levels.second_level"
                                  class="menu-item {{ Request::is('resource/categories') || Request::is('resource/category/add') ? 'active' : '' }}"><i class="icon-ios-paper-outline"></i>Categories</a>
                          </li>
                          <li>
                              <a href="{{ url('resource/subcategories') }}" data-i18n="nav.menu_levels.second_level"
                                  class="menu-item {{ Request::is('resource/subcategories') || Request::is('resource/sub-category/add') ? 'active' : '' }}">
                                  <i class="icon-ios-paper-outline"></i>Sub Categories</a>
                          </li>
                                 <li>
                              <a href="{{ url('resource/add') }}" data-i18n="nav.menu_levels.second_level"
                                  class="menu-item {{ Request::is('resource/add') ? 'active' : '' }}"><i class="icon-ios-paper-outline"></i>Add Resource</a>
                          </li>
                          <li>
                              <a href="{{ url('resource/all') }}" data-i18n="nav.menu_levels.second_level"
                                  class="menu-item {{ Request::is('resource/all') ? 'active' : '' }}">
                                  <i class="icon-ios-paper-outline"></i>View All</a>
                          </li>

                      </ul>
                  </li>

              </ul>
          @endif
          {{-- teacher --}}
          @if (Auth::user()->hasRole('teacher'))
              <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
                  <li class=" navigation-header"><span data-i18n="nav.category.support">Menu</span><i
                          data-toggle="tooltip" data-placement="right" data-original-title="Support"
                          class="icon-ellipsis icon-ellipsis"></i>
                  </li>
                  <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}"><a
                          href="{{ url('dashboard') }}"><i class="icon-home3"></i><span
                              data-i18n="nav.support_documentation.main" class="menu-title">TDashboard</span></a>
                  </li>
              </ul>
          @endif
          {{-- student --}}
          @if (Auth::user()->hasRole('student'))
              <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
                  <li class=" navigation-header"><span data-i18n="nav.category.support">Menu</span><i
                          data-toggle="tooltip" data-placement="right" data-original-title="Support"
                          class="icon-ellipsis icon-ellipsis"></i>
                  </li>
                  <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}"><a
                          href="{{ url('dashboard') }}"><i class="icon-home3"></i><span
                              data-i18n="nav.support_documentation.main" class="menu-title">SDashboard</span></a>
                  </li>
              </ul>
          @endif
      </div>

  </div>
