  <style>
      .main-menu.menu-dark .main-menu-header .menu-search {
          background: #fff;
      }
  </style>
  <div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
      <!-- main menu header-->
      <div class="main-menu-header">
          <input type="text" placeholder="Search" class="menu-search form-control round" />
      </div>
      <!-- / main menu header-->
      <!-- main menu content-->
      <div class="main-menu-content">
          <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
              <li class=" nav-item"><a href="#"><i class="icon-home3"></i><span
                          data-i18n="nav.support_documentation.main" class="menu-title">Dashboard</span></a>
              </li>
              <li class=" nav-item"><a href="#"><i class="icon-ios-albums-outline"></i><span
                          data-i18n="nav.cards.main" class="menu-title">Academics</span></a>
                  <ul class="menu-content">
                    <li><a href="{{ url('dashboard/add-student') }}" data-i18n="nav.cards.card_actions" class="menu-item">Academic years</a>
                      </li>
                      <li><a href="#" data-i18n="nav.cards.card_bootstrap" class="menu-item">Classes</a>
                      </li>
                      <li><a href="#" data-i18n="nav.cards.card_actions" class="menu-item">Sections</a>
                      </li>


                  </ul>
              </li>
              <li class=" nav-item"><a href="#"><i class="icon-ios-albums-outline"></i><span
                          data-i18n="nav.cards.main" class="menu-title">Student Information</span></a>
                  <ul class="menu-content">
                      <li><a href="{{ url('dashboard/add-student') }}" data-i18n="nav.cards.card_actions" class="menu-item">Admit Student</a>
                      </li>
                        <li><a href="#" data-i18n="nav.cards.card_actions" class="menu-item">Student List</a>
                      </li>
                  </ul>
              </li>
              <li class="nav-item">
                  <a href="#"><i class="icon-android-funnel"></i><span data-i18n="nav.menu_levels.main"
                          class="menu-title">Menu levels</span></a>
                  <ul class="menu-content">
                      <li>
                          <a href="#" data-i18n="nav.menu_levels.second_level" class="menu-item">Second level</a>
                      </li>
                      <li>
                          <a href="#" data-i18n="nav.menu_levels.second_level_child.main" class="menu-item">Second
                              level child</a>
                          <ul class="menu-content">
                              <li>
                                  <a href="#" data-i18n="nav.menu_levels.second_level_child.third_level"
                                      class="menu-item">Third level</a>
                              </li>
                              <li>
                                  <a href="#"
                                      data-i18n="nav.menu_levels.second_level_child.third_level_child.main"
                                      class="menu-item">Third level child</a>
                                  <ul class="menu-content">
                                      <li>
                                          <a href="#"
                                              data-i18n="nav.menu_levels.second_level_child.third_level_child.fourth_level1"
                                              class="menu-item">Fourth level</a>
                                      </li>
                                      <li>
                                          <a href="#"
                                              data-i18n="nav.menu_levels.second_level_child.third_level_child.fourth_level2"
                                              class="menu-item">Fourth level</a>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                  </ul>
              </li>
              <li class=" navigation-header"><span data-i18n="nav.category.support">Support</span><i
                      data-toggle="tooltip" data-placement="right" data-original-title="Support"
                      class="icon-ellipsis icon-ellipsis"></i>
              </li>

              <li class=" nav-item"><a href="#"><i class="icon-document-text"></i><span
                          data-i18n="nav.support_documentation.main" class="menu-title">Documentation</span></a>
              </li>
          </ul>
      </div>
      <!-- /main menu content-->
      <!-- main menu footer-->
      <!-- include includes/menu-footer-->
      <!-- main menu footer-->
  </div>
