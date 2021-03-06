 
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <!--<h3>MENU</h3>-->
                <ul class="nav side-menu" style="font-size: 12px;">
                  <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> DASHBOARD </a></li>
                </ul>
              </div>
              
              <div class="menu_section">
                <hr style="opacity: 0.2;">
                <h3 style="font-size: 14px; opacity: 0.6;">MENU MODULES</h3>
                <hr style="opacity: 0.2;">
                <ul class="nav side-menu">
                  <!--<li><a><i class="fa fa-sitemap"></i> Manage Cooperatives<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('/cooperatives') }}"><i class="fa fa-building"></i> View Cooperatives </a>
                      </li>
                      <li><a href="{{ url('/cooperative/create') }}"><i class="fa fa-sitemap"></i> Add New Cooperative </a></li>
                    </ul>
                  </li>-->

                  @if (Auth::check())
                    @if (Auth::user()->privilege_id > 1)
                      <li style="font-size: 11px;">
                        <a>
                          <i class="fa fa-users"></i> MEMBER MANAGEMENT 
                          <span class="fa fa-chevron-down"></span>
                        </a>
                        <ul class="nav child_menu">
                          <li><a href="{{ url('/members') }}"><i class="fa fa-users"></i> View All Members </a></li>
                          </li>
                            @if (Auth::user()->privilege_id > 4)
                                <li><a href="{{ url('/member/create') }}"><i class="fa fa-user"></i> Add new member </a></li>
                            @endif

                        </ul>
                      </li> 

                    <li style="font-size: 11px;">
                       <a>
                        <i class="fa fa-newspaper-o"></i> LOAN MANAGEMENT 
                        <span class="fa fa-chevron-down"></span>
                      </a>
                      <ul class="nav child_menu">
                        <li><a href="{{ url('/loans/approve') }}"><i class="fa fa-circle"></i> Approve Loans </a></li>
                        <li><a href="{{ url('/loans/treated') }}"><i class="fa fa-circle-o"></i> My Approved Loans </a></li>
                      </ul>
                    </li> 

                    @endif

                   

                    <li style="font-size: 11px;">
                      <a>
                        <i class="fa fa-money"></i> MY CONTRIBUTIONS 
                        <span class="fa fa-chevron-down"></span>
                      </a>
                      <ul class="nav child_menu">
                        <li><a href="{{ url('/user/payments') }}"><i class="fa fa-credit-card"></i> View Payments </a>
                        </li>
                      
                      </ul>
                    </li> 

                    <li style="font-size: 11px;">
                      <a>
                        <i class="fa fa-money"></i> MY LOANS 
                        <span class="fa fa-chevron-down"></span>
                      </a>
                      <ul class="nav child_menu">
                        <li><a href="{{ url('user/loans') }}"><i class="fa fa-history"></i> View Loans </a>
                        <li><a href="{{ url('user/loan') }}"><i class="fa fa-list-alt"></i> Apply For Loan </a>
                        </li>
                      
                      </ul>
                    </li>

                    <li style="font-size: 11px;">
                      <a href="{{ url('user/loans') }}">
                        <i class="fa fa-newspaper-o"></i> REPORTS
                      </a>
                      <!-- <ul class="nav child_menu">
                        <li><a href="{{ url('user/loans') }}"><i class="fa fa-history"></i> View Loans </a>
                        <li><a href="{{ url('user/loan') }}"><i class="fa fa-list-alt"></i> Apply For Loan </a>
                        </li>
                      
                      </ul> -->
                    </li>
                    
                    <li style="font-size: 11px;">
                      <a target="_blank" href="{{ url('../mall') }}">
                        <i class="fa fa-shopping-cart"></i> SHOPPING MALL
                      </a>
                    </li>

                    <!--<li><a><i class="fa fa-steam-square"></i> Stakeholders <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="local-governments.html"><i class="fa fa-building"></i> Local Governments </a>
                        </li>
                        <li><a href="cooperatives.html"><i class="fa fa-sitemap"></i> Cooperatives </a></li>
                        <li><a href="members.html"><i class="fa fa-users"></i> Members </a></li>
                      </ul>
                    </li>-->

                    <!--<li><a><i class="fa fa-calculator"></i> Premium Calculator <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="premiums/cooperatives.html"><i class="fa fa-sitemap"></i> Cooperatives </a></li>
                      </ul>
                    </li>

                    <li><a><i class="fa fa-users"></i> User Management <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{ url('/users') }}"><i class="fa fa-users"></i> All Users </a></li>
                        <li><a href="{{ url('/user/create') }}"><i class="fa fa-user"></i> Add New User </a></li>
                      </ul>
                    </li>-->

                    <li style="font-size: 11px;">
                      <a>
                        <i class="fa fa-cog"></i> SETTINGS 
                        <span class="fa fa-chevron-down"></span>
                      </a>
                      <ul class="nav child_menu">
                      <?php $user_id = Auth::user()->user_id; ?>
                        <li><a href="{{url("/member/$user_id")}}"><i class="fa fa-user"></i> Profile</a></li>
                        <li><a href="{{url("/user/changepassword")}}"><i class="fa fa-lock"></i> Change Password</a></li>
                        <!--<li><a href="profile/edit.html"> Edit Profile</a></li>-->
                      </ul>
                    </li>

                  @endif
                </ul>
              </div>

            </div>
            