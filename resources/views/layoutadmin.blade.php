{{-- <?php
 session_start();
?> --}}
<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>admin</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>

		<!-- Site favicon -->
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
		<!-- Google Font -->

		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="{{ asset('css\core.css') }}" />
		<link
			rel="stylesheet"
			type="text/css"
			href="{{ asset('css\icon-font.min.css') }}"
		/>
		<!-- switchery css -->
		<link
			rel="stylesheet"
			type="text/css"
			href="{{ asset('css\switchery.min.css') }}"
		/>
		<!-- bootstrap-tagsinput css -->
		<link
			rel="stylesheet"
			type="text/css"
			href="{{ asset('css\bootstrap-tagsinput.css') }}"
		/>
		<!-- bootstrap-touchspin css -->
		<link
			rel="stylesheet"
			type="text/css"
			href="{{ asset('css\jquery.bootstrap-touchspin.css') }}"
		/>
		<link rel="stylesheet" type="text/css" href="{{ asset('css\style-admin.css') }}" />
        <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet"
      />

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script
			async
			src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
		></script>
		<script
			async
			src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
			crossorigin="anonymous"
		></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());

			gtag("config", "G-GBZ3SGGX85");
		</script>
		<!-- Google Tag Manager -->
		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>
		<!-- End Google Tag Manager -->
	</head>
	<body>


		<div class="header">
			<div class="header-left">
				<div class="menu-icon bi bi-list"></div>
				<div
					class="search-toggle-icon bi bi-search"
					data-toggle="header_search"
				></div>
				<div class="header-search">
					<form>
						<div class="form-group mb-0">
							<i class="bi bi-search search-icon"></i>
							<input
								type="text"
								class="form-control search-input"
								placeholder="Search Here"
							/>
							<div class="dropdown">
								<a
									class="dropdown-toggle no-arrow"
									href="#"
									role="button"
									data-toggle="dropdown"
								>
									<i class="bi bi-arrow-down"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label"
											>From</label
										>
										<div class="col-sm-12 col-md-10">
											<input
												class="form-control form-control-sm form-control-line"
												type="text"
											/>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label">To</label>
										<div class="col-sm-12 col-md-10">
											<input
												class="form-control form-control-sm form-control-line"
												type="text"
											/>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label"
											>Subject</label
										>
										<div class="col-sm-12 col-md-10">
											<input
												class="form-control form-control-sm form-control-line"
												type="text"
											/>
										</div>
									</div>
									<div class="text-right">
										<button class="btn btn-primary">Search</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="header-right">
				<div class="dashboard-setting user-notification">
					<div class="dropdown">
						<a
							class="dropdown-toggle no-arrow"
							href="javascript:;"
							data-toggle="right-sidebar"
						>
							<i class="bi bi-gear"></i>
						</a>
					</div>
				</div>
				<div class="user-notification">
					<div class="dropdown">
						<a
							class="dropdown-toggle no-arrow"
							href="#"
							role="button"
							data-toggle="dropdown"
						>
							<i class="icon-copy bi bi-bell"></i>
							<span class="badge notification-active"></span>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<div class="notification-list mx-h-350 customscroll">
								<ul>
									<li>
										<a href="#">
											<img src="vendors/images/img.jpg" alt="" />
											<h3>John Doe</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed...
											</p>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="vendors/images/photo1.jpg" alt="" />
											<h3>Lea R. Frith</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed...
											</p>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="vendors/images/photo2.jpg" alt="" />
											<h3>Erik L. Richards</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed...
											</p>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="vendors/images/photo3.jpg" alt="" />
											<h3>John Doe</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed...
											</p>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="vendors/images/photo4.jpg" alt="" />
											<h3>Renee I. Hansen</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed...
											</p>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="vendors/images/img.jpg" alt="" />
											<h3>Vicki M. Coleman</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed...
											</p>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
                @if ( !isset($_SESSION['userprofide']))
                     <a href="{{ route('login') }}" style="back"> login</a>
                     @else
				<div class="user-info-dropdown">

					<div class="dropdown">
						<a
							class="dropdown-toggle"
							href="#"
							role="button"
							data-toggle="dropdown"
						>
							<span class="user-icon">
								<img src="vendors/images/photo1.jpg" alt="" />
							</span>

                                <span class="user-name">{{ $_SESSION['userprofide'][ 'usernames'] }}</span>




						</a>
						<div
							class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
						>
							<a class="dropdown-item" href="{{ route('profile', ['id'=>  $_SESSION['userprofide'][ 'nameIdentifiers']]) }}"
								><i class="bi bi-person-circle"></i> Profile</a
							>
							<a class="dropdown-item" href="{{ route('home') }}"
								><i class="bi bi-house"></i> back home</a
							>
							<a class="dropdown-item" href="{{ route('logout') }}"
								><i class="bi bi-box-arrow-in-right"></i> Log Out</a
							>
						</div>
					</div>
				</div>
    @endif
				<div class="github-link">
					<a href="https://github.com/dropways/deskapp" target="_blank"
						><img src="vendors/images/github.svg" alt=""
					/></a>
				</div>
			</div>
		</div>

		<div class="right-sidebar">
			<div class="sidebar-title">
				<h3 class="weight-600 font-16 text-blue">
					Layout Settings
					<span class="btn-block font-weight-400 font-12"
						>User Interface Settings</span
					>
				</h3>
				<div class="close-sidebar" data-toggle="right-sidebar-close">
					<i class="bi bi-x-lg"></i>
				</div>
			</div>
			<div class="right-sidebar-body customscroll">
				<div class="right-sidebar-body-content">
					<h4 class="weight-600 font-18 pb-10">Header Background</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary header-white active"
							>White</a
						>
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary header-dark"
							>Dark</a
						>
					</div>

					<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary sidebar-light"
							>White</a
						>
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary sidebar-dark active"
							>Dark</a
						>
					</div>
{{--
					<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
					<div class="sidebar-radio-group pb-10 mb-10">
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-1"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-1"
								checked=""
							/>
							<label class="custom-control-label" for="sidebaricon-1"
								><i class="fa fa-angle-down"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-2"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-2"
							/>
							<label class="custom-control-label" for="sidebaricon-2"
								><i class="ion-plus-round"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-3"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-3"
							/>
							<label class="custom-control-label" for="sidebaricon-3"
								><i class="fa fa-angle-double-right"></i
							></label>
						</div>
					</div>

					<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
					<div class="sidebar-radio-group pb-30 mb-10">
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-1"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-1"
								checked=""
							/>
							<label class="custom-control-label" for="sidebariconlist-1"
								><i class="ion-minus-round"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-2"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-2"
							/>
							<label class="custom-control-label" for="sidebariconlist-2"
								><i class="fa fa-circle-o" aria-hidden="true"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-3"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-3"
							/>
							<label class="custom-control-label" for="sidebariconlist-3"
								><i class="dw dw-check"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-4"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-4"
								checked=""
							/>
							<label class="custom-control-label" for="sidebariconlist-4"
								><i class="icon-copy dw dw-next-2"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-5"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-5"
							/>
							<label class="custom-control-label" for="sidebariconlist-5"
								><i class="dw dw-fast-forward-1"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-6"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-6"
							/>
							<label class="custom-control-label" for="sidebariconlist-6"
								><i class="dw dw-next"></i
							></label>
						</div>
					</div>

					<div class="reset-options pt-30 text-center">
						<button class="btn btn-danger" id="reset-settings">
							Reset Settings
						</button>
					</div> --}}
				</div>
			</div>
		</div>

        <div class="left-side-bar">
            <div class="brand-logo">
              <a href="index.html">
               <div style="color: black;">
				admin
			   </div>
              </a>
              <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
              </div>
            </div>
            <div class="menu-block customscroll">
              <div class="sidebar-menu">
                <ul id="accordion-menu">
                  <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle no-arrow">
                      <span class="micon bi bi-house"></span
                      ><span class="mtext">Home</span>
                    </a>
                  </li>
                  <li class="dropdown">
                      <a href="{{ route('useradmin') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-person"></span
                        ><span class="mtext">User</span>
                      </a>
                    </li>
                  <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                      <span class="micon bi bi-textarea-resize"></span
                      ><span class="mtext">Edit</span>
                    </a>
                    <ul class="submenu">
                      {{-- <li><a href="{{ route('editblog') }}">Blog Editor</a></li> --}}
                      <li><a href="{{ route('image') }}">Image Cropper</a></li>
                      <li><a href="{{ route('waitlist') }}">Waitlist</a></li>
                      {{-- <li><a href="{{ route('edituser') }}">edituser</a></li> --}}
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                      <span class="micon bi bi-bug"></span
                      ><span class="mtext">Error Pages</span>
                    </a>
                    <ul class="submenu">
                      <li><a href="400.html">400</a></li>
                    </ul>
                  </li>

                  <li class="dropdown">
                    <a href="{{ route('admin') }}" class="dropdown-toggle no-arrow">
                      <span class="micon bi bi bi-card-list"></span
                      ><span class="mtext">Blog</span>
                    </a>
                    <ul class="submenu">
                      <li><a href=""></a></li>
                    </ul>
                  </li>

                  {{-- <li>
                    <a href="chat.html" class="dropdown-toggle no-arrow">
                      <span class="micon bi bi-chat-right-dots"></span
                      ><span class="mtext">Chat</span>
                    </a>
                  </li> --}}

                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li></li>
                </ul>
              </div>
            </div>
          </div>
		<div class="mobile-menu-overlay"></div>

@section('main')

@show

		<!-- welcome modal start -->

		<!-- welcome modal end -->
		<!-- js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"></script>
		<script src="{{ asset('js\core.js') }}"></script>
		<script src="{{ asset('js\script.min.js') }}"></script>
		<script src="{{ asset('js\process.js') }}"></script>
		<script src="{{ asset('js\layout-settings.js') }}"></script>
        <script src="{{ asset('js\advanced-components.js') }}"></script>
		<!-- switchery js -->
		<script src="{{ asset('js\switchery.min.js') }}"></script>
		<!-- bootstrap-tagsinput js -->
		<script src="{{ asset('js\bootstrap-tagsinput.js') }}"></script>
		<!-- bootstrap-touchspin js -->
		<script src="{{ asset('js\jquery.bootstrap-touchspin.js') }}"></script>

		<!-- Google Tag Manager (noscript) -->
		<noscript
			><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>
	</body>
</html>
