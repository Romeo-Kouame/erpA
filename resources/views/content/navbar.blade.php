<div class="main-nav">
     <!-- Sidebar Logo -->
     <div class="logo-box">
          <a href="{{route('index')}}" class="logo-dark">
               <img src="{{asset('assets/images/logo-sm.png')}}" class="logo-sm" alt="logo sm">
               <img src="{{asset('assets/images/logo-dark.png')}}" class="logo-lg" alt="logo dark">
          </a>

          <a href="{{route('index')}}" class="logo-light">
               <img src="{{asset('assets/images/logo-sm.png')}}" class="logo-sm" alt="logo sm">
               <img src="{{asset('assets/images/logo-light.png')}}" class="logo-lg" alt="logo light">
          </a>
     </div>

     <!-- Menu Toggle Button (sm-hover) -->
     <button type="button" class="button-sm-hover" aria-label="Show Full Sidebar">
          <iconify-icon icon="solar:double-alt-arrow-right-bold-duotone" class="button-sm-hover-icon"></iconify-icon>
     </button>

     <div class="scrollbar" data-simplebar>
          <ul class="navbar-nav" id="navbar-nav">

               <li class="menu-title">General</li>

               <li class="nav-item">
                    <a class="nav-link" href="#">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:widget-5-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text"> Dashboard </span>
                    </a>
               </li>

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarProducts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProducts">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:t-shirt-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text"> Products </span>
                    </a>
                    <div class="collapse" id="sidebarProducts">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('product-list')}}">List</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{('product-grid')}}">Grid</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('product-details')}}">Details</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('product-edit')}}">Edit</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('product-add')}}">Create</a> --}}
                              </li>
                         </ul>
                    </div>
               </li>

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarCategory" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCategory">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:clipboard-list-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text"> Category </span>
                    </a>
                    <div class="collapse" id="sidebarCategory">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('category-list')}}">List</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('category-edit')}}">Edit</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('category-add')}}">Create</a> --}}
                              </li>
                         </ul>
                    </div>
               </li>

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarInventory" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarInventory">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:box-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text"> Inventory </span>
                    </a>
                    <div class="collapse" id="sidebarInventory">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('inventory-warehouse')}}">Warehouse</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('inventory-warehouse')}}">Warehouse</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('inventory-received-orders')}}">Received Orders</a> --}}
                              </li>
                         </ul>
                    </div>
               </li>

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarOrders" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarOrders">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:bag-smile-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text"> Orders </span>
                    </a>
                    <div class="collapse" id="sidebarOrders">
                         <ul class="nav sub-navbar-nav">

                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('orders-list')}}">List</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('order-detail')}}">Details</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('order-cart')}}">Cart</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('order-checkout')}}">Check Out</a> --}}
                              </li>
                         </ul>
                    </div>
               </li>

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarPurchases" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPurchases">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:card-send-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text"> Purchases </span>
                    </a>
                    <div class="collapse" id="sidebarPurchases">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('purchase-list')}}">List</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('purchase-order')}}">Order</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('purchase-returns')}}">Return</a> --}}
                              </li>
                         </ul>
                    </div>
               </li>

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarAttributes" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAttributes">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:confetti-minimalistic-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text"> Attributes </span>
                    </a>
                    <div class="collapse" id="sidebarAttributes">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('attributes-list')}}">List</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('attributes-edit')}}">Edit</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('attributes-add')}}">Create</a> --}}
                              </li>
                         </ul>
                    </div>
               </li>

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarInvoice" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarInvoice">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:bill-list-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text"> Invoices </span>
                    </a>
                    <div class="collapse" id="sidebarInvoice">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('invoice-list')}}">List</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('invoice-details')}}">Details</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('invoice-add')}}">Create</a> --}}
                              </li>
                         </ul>
                    </div>
               </li>

               <li class="nav-item">
                    {{-- <a class="nav-link" href="{{route('settings')}}"> --}}
                         <span class="nav-icon">
                              <iconify-icon icon="solar:settings-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text"> Settings </span>
                    {{-- </a> --}}
               </li>

               <li class="menu-title mt-2">Gestion Utilisateur</li>


                <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarDepart" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDepart">
                         <span class="nav-icon">
                              <iconify-icon icon="fluent:building-24-regular"></iconify-icon>
                         </span>
                         <span class="nav-text"> Départements </span>
                    </a>
                    <div class="collapse" id="sidebarDepart">
                        <ul class="nav sub-navbar-nav">
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="{{('ajouter_departement')}}">Ajouter</a>
                            </li>
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="{{route('lister_departement')}}">Liste</a>
                            </li>
                         </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarPoste" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPoste">
                         <span class="nav-icon">
                              <iconify-icon icon="fluent:briefcase-24-regular"></iconify-icon>
                         </span>
                         <span class="nav-text"> Postes </span>
                    </a>
                    <div class="collapse" id="sidebarPoste">
                        <ul class="nav sub-navbar-nav">
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="{{('ajouter_poste')}}">Ajouter</a>
                            </li>
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="{{route('lister_poste')}}">Liste</a>
                            </li>
                         </ul>
                    </div>
                </li>
               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarRole" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarRole">
                         <span class="nav-icon">
                              <iconify-icon icon="mdi:shield-account-outline"></iconify-icon>
                         </span>
                         <span class="nav-text"> Rôle </span>
                    </a>
                    <div class="collapse" id="sidebarRole">
                        <ul class="nav sub-navbar-nav">
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="{{('ajouter_role')}}">Ajouter</a>
                            </li>
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="{{route('lister_role')}}">Liste</a>
                            </li>
                         </ul>
                    </div>
               </li>
                <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarPermis" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPermis">
                         <span class="nav-icon">
                              <iconify-icon icon="mdi:lock-check-outline"></iconify-icon>
                         </span>
                         <span class="nav-text"> Permission </span>
                    </a>
                    <div class="collapse" id="sidebarPermis">
                        <ul class="nav sub-navbar-nav">
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="{{('ajouter_permission')}}">Ajouter</a>
                            </li>
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="{{route('lister_permission')}}">Liste</a>
                            </li>
                         </ul>
                    </div>
               </li>

               <li class="nav-item">
                    {{-- <a class="nav-link" href="{{route('pages-profile') }}"> --}}
                         <span class="nav-icon">
                              <iconify-icon icon="solar:chat-square-like-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text"> Profile </span>
                    </a>
               </li>

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarRoles" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarRoles">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:user-speak-rounded-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text"> Roles </span>
                    </a>
                    <div class="collapse" id="sidebarRoles">
                         <ul class="nav sub-navbar-nav">
                              <ul class="nav sub-navbar-nav">
                                   <li class="sub-nav-item">
                                        {{-- <a class="sub-nav-link" href="{{route('role-list')}}">List</a> --}}
                                   </li>
                                   <li class="sub-nav-item">
                                        {{-- <a class="sub-nav-link" href="{{route('role-edit')}}">Edit</a> --}}
                                   </li>
                                   <li class="sub-nav-item">
                                        {{-- <a class="sub-nav-link" href="{{route('role-add')}}">Create</a> --}}
                                   </li>
                              </ul>
                         </ul>
                    </div>
               </li>

               <li class="nav-item">
                    {{-- <a class="nav-link" href="{{ route('pages-permissions') }}"> --}}
                         <span class="nav-icon">
                              <iconify-icon icon="solar:checklist-minimalistic-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text"> Permissions </span>
                    </a>
               </li>

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarCustomers" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCustomers">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:users-group-two-rounded-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text"> Customers </span>
                    </a>
                    <div class="collapse" id="sidebarCustomers">
                         <ul class="nav sub-navbar-nav">

                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('customer-list')}}">List</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('customer-detail')}}">Details</a> --}}
                              </li>
                         </ul>
                    </div>
               </li>

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarSellers" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSellers">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:shop-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text"> Sellers </span>
                    </a>
                    <div class="collapse" id="sidebarSellers">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('seller-list')}}">List</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('seller-details')}}">Details</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('seller-edit')}}">Edit</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('seller-add')}}">Create</a> --}}
                              </li>
                         </ul>
                    </div>
               </li>

               <li class="menu-title mt-2">Other</li>

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarCoupons" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCoupons">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:leaf-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text"> Coupons </span>
                    </a>
                    <div class="collapse" id="sidebarCoupons">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('coupons-list')}}">List</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('coupons-add')}}">Add</a> --}}
                              </li>
                         </ul>
                    </div>
               </li>

               <li class="nav-item">
                    {{-- <a class="nav-link" href="{{ route('pages-review') }}"> --}}
                         <span class="nav-icon">
                              <iconify-icon icon="solar:chat-square-like-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text"> Reviews </span>
                    </a>
               </li>

               <li class="menu-title mt-2">Other Apps</li>

               <li class="nav-item">
                    {{-- <a class="nav-link" href="{{route('apps-chat')}}"> --}}
                         <span class="nav-icon">
                              <iconify-icon icon="solar:chat-round-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text"> Chat </span>
                    {{-- </a> --}}
               </li>

               <li class="nav-item">
                    {{-- <a class="nav-link" href="{{route('apps-email')}}"> --}}
                         <span class="nav-icon">
                              <iconify-icon icon="solar:mailbox-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text"> Email </span>
                    {{-- </a> --}}
               </li>

               <li class="nav-item">
                    {{-- <a class="nav-link" href="{{route('apps-calendar')}}"> --}}
                         <span class="nav-icon">
                              <iconify-icon icon="solar:calendar-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text"> Calendar </span>
                    {{-- </a> --}}
               </li>

               <li class="nav-item">
                    {{-- <a class="nav-link" href="{{route('apps-todo')}}"> --}}
                         <span class="nav-icon">
                              <iconify-icon icon="solar:checklist-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text"> Todo </span>
                    {{-- </a> --}}
               </li>

               <li class="menu-title mt-2">Support</li>

               <li class="nav-item">
                    {{-- <a class="nav-link" href="{{route('help-center')}}"> --}}
                         <span class="nav-icon">
                              <iconify-icon icon="solar:help-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text"> Help Center </span>
                    {{-- </a> --}}
               </li>

               <li class="nav-item">
                    <a class="nav-link" href="pages-faqs.php">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:question-circle-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text"> FAQs </span>
                    </a>
               </li>

               <li class="nav-item">
                    {{-- <a class="nav-link" href="{{route('privacy-policy')}}"> --}}
                         <span class="nav-icon">
                              <iconify-icon icon="solar:document-text-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text"> Privacy Policy </span>
                    {{-- </a> --}}
               </li>

               <li class="menu-title mt-2">Custom</li>

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:gift-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text"> Pages </span>
                    </a>
                    <div class="collapse" id="sidebarPages">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('pages-starter') }}">Welcome</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('pages-comingsoon')}}">Coming Soon</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('pages-timeline')}}">Timeline</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('pages-pricing')}}">Pricing</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('pages-maintenance')}}">Maintenance</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('pages-404')}}">404 Error</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('pages-404-alt') }}">404 Error (alt)</a> --}}
                              </li>
                         </ul>
                    </div>
               </li>

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarAuthentication" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuthentication">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:lock-keyhole-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text"> Authentication </span>
                    </a>
                    <div class="collapse" id="sidebarAuthentication">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('signIn')}}">Sign In</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('signUp')}}">Sign Up</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('password')}}">Reset Password</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('lock-screen')}}">Lock Screen</a> --}}
                              </li>
                         </ul>
                    </div>
               </li>

               <li class="nav-item">
                    {{-- <a class="nav-link" href="{{route('widgets')}}"> --}}
                         <span class="nav-icon">
                              <iconify-icon icon="solar:atom-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text">Widgets</span>
                         <span class="badge bg-info badge-pill text-end">9+</span>
                    </a>
               </li>

               <li class="menu-title mt-2">Components</li>

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarBaseUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarBaseUI">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:bookmark-square-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text"> Base UI </span>
                    </a>
                    <div class="collapse" id="sidebarBaseUI">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('ui-accordion')}}">Accordion</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('ui-alerts')}}">Alerts</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('ui-avatar')}}">Avatar</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('ui-badge')}}">Badge</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('ui-breadcrumb')}}">Breadcrumb</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('ui-buttons')}}">Buttons</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('ui-card')}}">Card</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('ui-carousel')}}">Carousel</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('ui-collapse')}}">Collapse</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('ui-dropdown')}}">Dropdown</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{ route('ui-list-group') }}">List Group</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('ui-modal')}}">Modal</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('ui-tabs')}}">Tabs</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('ui-offcanvas')}}">Offcanvas</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('ui-pagination')}}">Pagination</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('ui-placeholders')}}">Placeholders</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('ui-popovers')}}">Popovers</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('ui-progress')}}">Progress</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('ui-scrollspy')}}">Scrollspy</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('ui-spinners')}}">Spinners</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('ui-toasts')}}">Toasts</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{ route('ui-tooltips') }}">Tooltips</a> --}}
                              </li>
                         </ul>
                    </div>
               </li>

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarExtendedUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarExtendedUI">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:case-round-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text"> Advanced UI </span>
                    </a>
                    <div class="collapse" id="sidebarExtendedUI">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('extended-ratings')}}">Ratings</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('extended-sweetalert')}}">Sweet Alert</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('extended-swiper-silder')}}">Swiper Slider</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('extended-scrollbar')}}">Scrollbar</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('extended-toastify')}}">Toastify</a> --}}
                              </li>
                         </ul>
                    </div>
               </li>

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarCharts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCharts">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:pie-chart-2-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text"> Charts </span>
                    </a>
                    <div class="collapse" id="sidebarCharts">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('charts-apex-area')}}">Area</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('charts-apex-bar')}}">Bar</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('charts-apex-bubble')}}">Bubble</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('charts-apex-candlestick')}}">Candlestick</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('charts-apex-column')}}">Column</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('charts-apex-heatmap')}}">Heatmap</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('charts-apex-line')}}">Line</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('charts-apex-mixed')}}">Mixed</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('charts-apex-timeline')}}">Timeline</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('charts-apex-boxplot')}}">Boxplot</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('charts-apex-treemap')}}">Treemap</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('charts-apex-pie')}}">Pie</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('charts-apex-radar')}}">Radar</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('charts-apex-radialbar')}}">RadialBar</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('charts-apex-scatter')}}">Scatter</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('chart-apex-polar-area')}}">Polar Area</a> --}}
                              </li>
                         </ul>
                    </div>
               </li>

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarForms" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarForms">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:book-bookmark-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text"> Forms </span>
                    </a>
                    <div class="collapse" id="sidebarForms">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('forms-basic')}}">Basic Elements</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('forms-checkbox-radio')}}">Checkbox &amp; Radio</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('forms-choices')}}">Choice Select</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('forms-clipboard')}}">Clipboard</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('forms-flatepicker')}}">Flatepicker</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('forms-validation')}}">Validation</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('forms-wizard')}}">Wizard</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('forms-fileuploads')}}">File Upload</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('forms-editors')}}">Editors</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('forms-input-mask')}}">Input Mask</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('forms-range-slider')}}">Slider</a> --}}
                              </li>
                         </ul>
                    </div>
               </li>

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarTables" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTables">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:tuning-2-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text"> Tables </span>
                    </a>
                    <div class="collapse" id="sidebarTables">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('tables-basic')}}">Basic Tables</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('tables-gridjs')}}">Grid Js</a> --}}
                              </li>
                         </ul>
                    </div>
               </li>

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarIcons" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarIcons">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:ufo-2-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text"> Icons </span>
                    </a>
                    <div class="collapse" id="sidebarIcons">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('icons-boxicons')}}">Boxicons</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('icons-solar')}}">Solar Icons</a> --}}
                              </li>
                         </ul>
                    </div>
               </li>

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarMaps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMaps">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:streets-map-point-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text"> Maps </span>
                    </a>
                    <div class="collapse" id="sidebarMaps">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('maps-google')}}">Google Maps</a> --}}
                              </li>
                              <li class="sub-nav-item">
                                   {{-- <a class="sub-nav-link" href="{{route('maps-vector')}}">Vector Maps</a> --}}
                              </li>
                         </ul>
                    </div>
               </li>

               <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:volleyball-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text">Badge Menu</span>
                         <span class="badge bg-danger badge-pill text-end">1</span>
                    </a>
               </li>

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarMultiLevelDemo" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMultiLevelDemo">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:share-circle-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text"> Menu Item </span>
                    </a>
                    <div class="collapse" id="sidebarMultiLevelDemo">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="javascript:void(0);">Menu Item 1</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link  menu-arrow" href="#sidebarItemDemoSubItem" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarItemDemoSubItem">
                                        <span> Menu Item 2 </span>
                                   </a>
                                   <div class="collapse" id="sidebarItemDemoSubItem">
                                        <ul class="nav sub-navbar-nav">
                                             <li class="sub-nav-item">
                                                  <a class="sub-nav-link" href="javascript:void(0);">Menu Sub item</a>
                                             </li>
                                        </ul>
                                   </div>
                              </li>
                         </ul>
                    </div>
               </li>

               <li class="nav-item">
                    <a class="nav-link disabled" href="javascript:void(0);">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:user-block-rounded-bold-duotone"></iconify-icon>
                         </span>
                         <span class="nav-text"> Disable Item </span>
                    </a>
               </li>
          </ul>
     </div>
</div>
