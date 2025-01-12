<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
	<title>Qerza - Job Portal Admin Dashboard | Bootstrap HTML Template</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="">
	<meta name="keywords" content="job portal, admin dashboard, Bootstrap HTML template, job listings, applicants, user-friendly interface, powerful functionalities">
	<meta name="description" content="Qerza is a versatile job portal admin dashboard powered by Bootstrap HTML. Streamline job listings, applicants, and enhance your recruitment process. User-friendly interface with powerful functionalities. Job portal, admin dashboard, Bootstrap HTML template.">
	<meta property="og:title" content="Qerza - Job Portal Admin Dashboard | Bootstrap HTML Template">
	<meta property="og:description" content="Qerza is a versatile job portal admin dashboard powered by Bootstrap HTML. Streamline job listings, applicants, and enhance your recruitment process. User-friendly interface with powerful functionalities. Job portal, admin dashboard, Bootstrap HTML template.">
	<meta property="og:image" content="https://qerza.dexignzone.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon icon -->
	<link rel="icon" type="image/png" href="images/favicon.png">
    <link href="vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="./vendor/chartist/css/chartist.min.css">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
				<svg class="logo-abbr" width="64px" height="64px">
					<path class="svg-logo-path" fill-rule="evenodd"  fill="rgb(135, 67, 223)"
					d="M21.000,-0.000 L42.999,-0.000 C54.598,-0.000 64.000,9.402 64.000,21.000 L64.000,43.000 C64.000,54.598 54.598,64.000 42.999,64.000 L21.000,64.000 C9.402,64.000 -0.000,54.598 -0.000,43.000 L-0.000,21.000 C-0.000,9.402 9.402,-0.000 21.000,-0.000 Z"/>
					<path class="svg-logo-path-text" fill-rule="evenodd"  fill="rgb(255, 255, 255)"
					d="M39.090,43.394 L44.818,52.000 L34.684,52.000 L31.405,46.279 C30.182,46.471 28.908,46.567 27.587,46.567 C18.775,46.567 12.999,40.798 12.999,32.385 C12.999,20.413 21.419,12.000 33.314,12.000 C42.272,12.000 47.999,17.673 47.999,26.038 C47.999,33.635 44.622,39.885 39.090,43.394 ZM32.237,19.548 C25.531,19.548 21.370,25.077 21.370,31.519 C21.370,36.087 24.013,38.971 28.860,38.971 C35.517,38.971 39.678,33.346 39.678,26.952 C39.678,22.385 36.985,19.548 32.237,19.548 Z"/>
				</svg>
				<svg class="brand-title"  width="101" height="47" fill-rule="evenodd" fill="#272727">
					<path class="svg-logo-text-path" d="M95.253 22.25l-.635-3.875H86.3l-2.033 3.875h-5.683L90.586.312h6.286L101 22.25h-5.747zM92.682 6.187l-4.256 8.125h5.557l-1.301-8.125zm-24.82 11.688h9.589l-.794 4.375H60.91l.729-4.063 11.938-13.5h-9.524l.793-4.375h15.748l-.73 4.063-12.002 13.5zm-13.218-4.313l3.587 8.688h-6.127l-3.143-8.281h-1.302l-1.493 8.281h-5.429L44.674.312h9.112c5.461 0 7.652 3.094 6.954 6.907-.476 2.75-2.476 5.343-6.096 6.343zm-1.969-8.875H49.31l-.984 5.5h3.365c2.032 0 3.175-1.031 3.493-2.75.317-1.656-.477-2.75-2.509-2.75zm-20.352-.156l-.793 4.563h7.27l-.73 4.031h-7.271l-.888 4.906h8.223l-.762 4.219H23.719L27.656.312h13.653l-.762 4.219h-8.224zM20.637 26h-6.573l-2.126-3.719c-.795.125-1.619.188-2.477.188C3.746 22.469 0 18.719 0 13.25 0 5.469 5.461 0 13.176 0c5.81 0 9.524 3.687 9.524 9.125 0 4.937-2.19 9-5.778 11.281L20.637 26zM17.303 9.719c0-2.969-1.746-4.813-4.826-4.813-4.35 0-7.048 3.594-7.048 7.781 0 2.969 1.714 4.844 4.857 4.844 4.318 0 7.017-3.656 7.017-7.812zM73.255 44.49c-1.056 0-1.806-.54-2.165-1.1V47h-.96v-8.08h.96v1.01c.349-.58 1.109-1.1 2.165-1.1 1.552 0 2.744 1.1 2.744 2.81 0 1.7-1.192 2.85-2.744 2.85zm-.201-4.87c-1.046 0-1.964.76-1.964 2.03 0 1.29.918 2.04 1.964 2.04 1.067 0 1.964-.76 1.964-2.05s-.897-2.02-1.964-2.02zm-6.934 4.87c-1.056 0-1.805-.54-2.164-1.1V47h-.961v-8.08h.961v1.01c.348-.58 1.108-1.1 2.164-1.1 1.552 0 2.744 1.1 2.744 2.81 0 1.7-1.192 2.85-2.744 2.85zm-.201-4.87c-1.045 0-1.963.76-1.963 2.03 0 1.29.918 2.04 1.963 2.04 1.067 0 1.964-.76 1.964-2.05s-.897-2.02-1.964-2.02zm-5.689 3.23h-3.209l-.592 1.55h-1.013l2.66-6.93h1.109l2.65 6.93h-1.013l-.592-1.55zm-1.604-4.26l-1.331 3.52h2.661l-1.33-3.52zM50.467 37h.961v7.4h-.961V37zm-2.594 6.38c-.349.59-1.098 1.11-2.165 1.11-1.541 0-2.734-1.15-2.734-2.85 0-1.71 1.193-2.81 2.745-2.81 1.077 0 1.816.52 2.154 1.09v-1h.971v5.48h-.971v-1.02zm-1.964-3.76c-1.056 0-1.954.73-1.954 2.02s.898 2.05 1.954 2.05 1.964-.75 1.964-2.04c0-1.27-.908-2.03-1.964-2.03zm-6.211 3.28v-3.23h-.749v-.75h.749v-1.38h.961v1.38h1.51v.75h-1.51v3.23c0 .54.211.73.803.73h.707v.77h-.866c-1.024 0-1.605-.4-1.605-1.5zm-3.189-1.48v2.98h-.96v-5.48h.96v.89c.327-.61.951-.99 1.869-.99v.94h-.254c-.918 0-1.615.39-1.615 1.66zm-5.191 3.07c-1.636 0-2.882-1.1-2.882-2.84 0-1.73 1.288-2.82 2.925-2.82 1.647 0 2.925 1.09 2.925 2.82 0 1.74-1.321 2.84-2.968 2.84zm.032-4.87c-1.014 0-1.932.65-1.932 2.03 0 1.39.898 2.04 1.9 2.04s1.985-.65 1.985-2.04c0-1.38-.961-2.03-1.953-2.03zm-6.293 1.87h-1.416v2.91h-.96v-6.97h2.376c1.731 0 2.544.9 2.544 2.04 0 1.06-.718 2.02-2.544 2.02zm0-3.31h-1.416v2.56h1.416c1.097 0 1.562-.49 1.562-1.27 0-.81-.465-1.29-1.562-1.29zm-9.2 6.31c-1.056 0-1.806-.5-2.165-1.1v1.01h-.961V37h.961v2.94c.37-.61 1.14-1.11 2.165-1.11 1.562 0 2.745 1.1 2.745 2.81 0 1.7-1.193 2.85-2.745 2.85zm-.201-4.87c-1.045 0-1.964.76-1.964 2.03 0 1.29.919 2.04 1.964 2.04 1.066 0 1.963-.76 1.963-2.05s-.897-2.02-1.963-2.02zm-7.154 4.87c-1.637 0-2.882-1.1-2.882-2.84 0-1.73 1.287-2.82 2.924-2.82 1.646 0 2.924 1.09 2.924 2.82 0 1.74-1.319 2.84-2.966 2.84zm.031-4.87c-1.013 0-1.932.65-1.932 2.03 0 1.39.897 2.04 1.901 2.04s1.985-.65 1.985-2.04c0-1.38-.961-2.03-1.954-2.03zm-6.485 4.85C.823 44.47 0 43.73 0 42.51h.96c.011.64.328 1.15 1.088 1.15s1.066-.5 1.066-1.08v-5.15h.971v5.15c0 1.16-.823 1.89-2.037 1.89z"/>
				</svg>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Chat box start
        ***********************************-->
		<div class="chatbox">
			<div class="chatbox-close"></div>
			<div class="custom-tab-1">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" data-bs-toggle="tab" href="#chat">Chat</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade active show" id="chat" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card dz-chat-user-box">
							<div class="card-header chat-list-header text-center">
								<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">Chat List</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll  " id="DZ_W_Contacts_Body">
								<ul class="contacts">
									<li class="name-first-letter">A</li>
									<li class="active dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Archie Parker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Alfie Mason</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>AharlieKane</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">B</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Bashid Samim</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Breddie Ronan</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Ceorge Carson</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">D</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Darry Parker</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Denry Hunter</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">J</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Jack Ronan</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Jacob Tucker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>James Logan</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Joshua Weston</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">O</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Oliver Acker</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Oscar Weston</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="card chat dz-chat-history-box d-none">
							<div class="card-header chat-list-header text-center">
								<a href="#" class="dz-chat-history-back">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1"/><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "/></g></svg>
								</a>
								<div>
									<h6 class="mb-1">Chat with Khelesh</h6>
									<p class="mb-0 text-success">Online</p>
								</div>							
								<div class="dropdown">
									<a href="#" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
									<ul class="dropdown-menu dropdown-menu-end">
										<li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i> View profile</li>
										<li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to close friends</li>
										<li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to group</li>
										<li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li>
									</ul>
								</div>
							</div>
							<div class="card-body msg_card_body dz-scroll" id="DZ_W_Contacts_Body3">
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										You are welcome
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										I am looking for your next templates
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Ok, thank you have a good day
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										You are welcome
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										I am looking for your next templates
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Ok, thank you have a good day
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
							</div>
							<div class="card-footer type_msg">
								<div class="input-group">
									<textarea class="form-control" placeholder="Type your message..."></textarea>
									<div class="input-group-append">
										<button type="button" class="btn btn-primary"><i class="fa fa-location-arrow"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="alerts" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card">
							<div class="card-header chat-list-header text-center">
								<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
								<div>
									<h6 class="mb-1">Notications</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body1">
								<ul class="contacts">
									<li class="name-first-letter">SEVER STATUS</li>
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">KK</div>
											<div class="user_info">
												<span>David Nester Birthday</span>
												<p class="text-primary">Today</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">SOCIAL</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont success">RU<i class="icon fa-birthday-cake"></i></div>
											<div class="user_info">
												<span>Perfection Simplified</span>
												<p>Jame Smith commented on your status</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">SEVER STATUS</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">AU<i class="icon fa fa-user-plus"></i></div>
											<div class="user_info">
												<span>AharlieKane</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont info">MO<i class="icon fa fa-user-plus"></i></div>
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="card-footer"></div>
						</div>
					</div>
					<div class="tab-pane fade" id="notes">
						<div class="card mb-sm-3 mb-md-0 note_card">
							<div class="card-header chat-list-header text-center">
								<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">Notes</h6>
									<p class="mb-0">Add New Nots</p>
								</div>
								<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body2">
								<ul class="contacts">
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>New order placed..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="#" class="btn btn-primary btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
												<a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Youtube, a video-sharing website..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="#" class="btn btn-primary btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
												<a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>john just buy your product..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="#" class="btn btn-primary btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
												<a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="#" class="btn btn-primary btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
												<a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--**********************************
            Chat box End
        ***********************************-->
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
								Dashboard
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
							<li class="nav-item">
								<div class="input-group search-area d-xl-inline-flex d-none">
								  <input type="text" class="form-control" placeholder="Search here" aria-label="Username" aria-describedby="header-search">
								  <span class="input-group-text" id="header-search">
										<a href="javascript:void(0);">
											<i class="flaticon-381-search-2"></i>
										</a>
								  </span>
								</div>
							</li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell dz-theme-mode p-0" href="javascript:void(0);">
									<i id="icon-light" class="fas fa-sun"></i>
                                    <i id="icon-dark" class="fas fa-moon"></i>
									
                                </a>
							</li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link  ai-icon" href="javascript:void(0)" role="button" data-bs-toggle="dropdown">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M10.4525 25.6682C11.0606 27.0357 12.4091 28 14.0006 28C15.5922 28 16.9407 27.0357 17.5488 25.6682C16.4266 25.7231 15.2596 25.76 14.0006 25.76C12.7418 25.76 11.5748 25.7231 10.4525 25.6682Z" fill="#3E4954"/>
										<path d="M26.3531 19.74C24.8769 17.8785 22.3995 14.2195 22.3995 10.64C22.3995 7.09073 20.1192 3.89758 16.7995 2.72382C16.7592 1.21406 15.5183 0 14.0006 0C12.4819 0 11.2421 1.21406 11.2017 2.72382C7.88095 3.89758 5.60064 7.09073 5.60064 10.64C5.60064 14.2207 3.12434 17.8785 1.64706 19.74C1.15427 20.3616 1.00191 21.1825 1.24051 21.9363C1.47348 22.6721 2.05361 23.2422 2.79282 23.4595C4.08755 23.8415 6.20991 24.2715 9.44676 24.491C10.8479 24.5851 12.3543 24.64 14.0007 24.64C15.646 24.64 17.1524 24.5851 18.5535 24.491C21.7914 24.2715 23.9127 23.8415 25.2085 23.4595C25.9477 23.2422 26.5268 22.6722 26.7597 21.9363C26.9983 21.1825 26.8448 20.3616 26.3531 19.74Z" fill="#3E4954"/>
									</svg>
									<span class="badge light text-white bg-primary">3</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3 height380">
										<ul class="timeline">
											<li>
												<div class="timeline-panel">
													<div class="media me-2">
														<img alt="image" width="50" src="images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-info">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-success">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											 <li>
												<div class="timeline-panel">
													<div class="media me-2">
														<img alt="image" width="50" src="images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-danger">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-primary">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
										</ul>
									</div>
                                    <a class="all-notification" href="javascript:void(0)">See all notifications <i class="ti-arrow-right"></i></a>
                                </div>
                            </li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell bell-link" href="javascript:void(0)">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M22.4605 3.84888H5.31688C4.64748 3.84961 4.00571 4.11586 3.53237 4.58919C3.05903 5.06253 2.79279 5.7043 2.79205 6.3737V18.1562C2.79279 18.8256 3.05903 19.4674 3.53237 19.9407C4.00571 20.4141 4.64748 20.6803 5.31688 20.6811C5.54005 20.6812 5.75404 20.7699 5.91184 20.9277C6.06964 21.0855 6.15836 21.2995 6.15849 21.5227V23.3168C6.15849 23.6215 6.24118 23.9204 6.39774 24.1818C6.5543 24.4431 6.77886 24.6571 7.04747 24.8009C7.31608 24.9446 7.61867 25.0128 7.92298 24.9981C8.22729 24.9834 8.52189 24.8863 8.77539 24.7173L14.6173 20.8224C14.7554 20.7299 14.918 20.6807 15.0842 20.6811H19.187C19.7383 20.68 20.2743 20.4994 20.7137 20.1664C21.1531 19.8335 21.4721 19.3664 21.6222 18.8359L24.8966 7.05011C24.9999 6.67481 25.0152 6.28074 24.9414 5.89856C24.8675 5.51637 24.7064 5.15639 24.4707 4.84663C24.235 4.53687 23.931 4.28568 23.5823 4.11263C23.2336 3.93957 22.8497 3.84931 22.4605 3.84888ZM23.2733 6.60304L20.0006 18.3847C19.95 18.5614 19.8432 18.7168 19.6964 18.8275C19.5496 18.9381 19.3708 18.9979 19.187 18.9978H15.0842C14.5856 18.9972 14.0981 19.1448 13.6837 19.4219L7.84171 23.3168V21.5227C7.84097 20.8533 7.57473 20.2115 7.10139 19.7382C6.62805 19.2648 5.98628 18.9986 5.31688 18.9978C5.09371 18.9977 4.87972 18.909 4.72192 18.7512C4.56412 18.5934 4.4754 18.3794 4.47527 18.1562V6.3737C4.4754 6.15054 4.56412 5.93655 4.72192 5.77874C4.87972 5.62094 5.09371 5.53223 5.31688 5.5321H22.4605C22.5905 5.53243 22.7188 5.56277 22.8353 5.62076C22.9517 5.67875 23.0532 5.76283 23.1318 5.86646C23.2105 5.97008 23.2642 6.09045 23.2887 6.21821C23.3132 6.34597 23.308 6.47766 23.2733 6.60304Z" fill="#3E4954"/>
										<path d="M7.84173 11.4233H12.0498C12.273 11.4233 12.4871 11.3347 12.6449 11.1768C12.8027 11.019 12.8914 10.8049 12.8914 10.5817C12.8914 10.3585 12.8027 10.1444 12.6449 9.98661C12.4871 9.82878 12.273 9.74011 12.0498 9.74011H7.84173C7.61852 9.74011 7.40446 9.82878 7.24662 9.98661C7.08879 10.1444 7.00012 10.3585 7.00012 10.5817C7.00012 10.8049 7.08879 11.019 7.24662 11.1768C7.40446 11.3347 7.61852 11.4233 7.84173 11.4233Z" fill="#3E4954"/>
										<path d="M15.4162 13.1066H7.84173C7.61852 13.1066 7.40446 13.1952 7.24662 13.3531C7.08879 13.5109 7.00012 13.725 7.00012 13.9482C7.00012 14.1714 7.08879 14.3855 7.24662 14.5433C7.40446 14.7011 7.61852 14.7898 7.84173 14.7898H15.4162C15.6394 14.7898 15.8535 14.7011 16.0113 14.5433C16.1692 14.3855 16.2578 14.1714 16.2578 13.9482C16.2578 13.725 16.1692 13.5109 16.0113 13.3531C15.8535 13.1952 15.6394 13.1066 15.4162 13.1066Z" fill="#3E4954"/>
									</svg>
									<span class="badge light text-white bg-primary">3</span>
                                </a>
							</li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0)" role="button" data-bs-toggle="dropdown">
									<div class="header-info">
										<span class="text-black"><strong>David Heree</strong></span>
										<p class="fs-12 mb-0">Super Admin</p>
									</div>
                                    <img src="images/profile/17.jpg" width="20" alt="">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ms-2">Profile </span>
                                    </a>
                                    <a href="email-inbox.html" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <span class="ms-2">Inbox </span>
                                    </a>
                                    <a href="page-login.html" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ms-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="index.html">Dashboard Light</a></li>
							<li><a href="index2.html">Dashboard Dark</a></li>
							<li><a href="search-job.html">Search Job</a></li>
							<li><a href="application.html">Application</a></li>
							<li><a href="profile.html">Profile</a></li>
							<li><a href="statistics.html">Statistics</a></li>
							<li><a href="companies.html">Companies</a></li>
						</ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-television"></i>
							<span class="nav-text">Apps</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="app-profile.html">Profile</a></li>
							<li><a href="post-details.html">Post Details</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                                <ul aria-expanded="false">
                                    <li><a href="email-compose.html">Compose</a></li>
                                    <li><a href="email-inbox.html">Inbox</a></li>
                                    <li><a href="email-read.html">Read</a></li>
                                </ul>
                            </li>
                            <li><a href="app-calender.html">Calendar</a></li>
							<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                                <ul aria-expanded="false">
                                    <li><a href="ecom-product-grid.html">Product Grid</a></li>
									<li><a href="ecom-product-list.html">Product List</a></li>
									<li><a href="ecom-product-detail.html">Product Details</a></li>
									<li><a href="ecom-product-order.html">Order</a></li>
									<li><a href="ecom-checkout.html">Checkout</a></li>
									<li><a href="ecom-invoice.html">Invoice</a></li>
									<li><a href="ecom-customers.html">Customers</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-controls-3"></i>
							<span class="nav-text">Charts</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="chart-flot.html">Flot</a></li>
                            <li><a href="chart-morris.html">Morris</a></li>
                            <li><a href="chart-chartjs.html">Chartjs</a></li>
                            <li><a href="chart-chartist.html">Chartist</a></li>
                            <li><a href="chart-sparkline.html">Sparkline</a></li>
                            <li><a href="chart-peity.html">Peity</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-internet"></i>
							<span class="nav-text">Bootstrap</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="ui-accordion.html">Accordion</a></li>
                            <li><a href="ui-alert.html">Alert</a></li>
                            <li><a href="ui-badge.html">Badge</a></li>
                            <li><a href="ui-button.html">Button</a></li>
                            <li><a href="ui-modal.html">Modal</a></li>
                            <li><a href="ui-button-group.html">Button Group</a></li>
                            <li><a href="ui-list-group.html">List Group</a></li>
                            <li><a href="ui-media-object.html">Media Object</a></li>
                            <li><a href="ui-card.html">Cards</a></li>
                            <li><a href="ui-carousel.html">Carousel</a></li>
                            <li><a href="ui-dropdown.html">Dropdown</a></li>
                            <li><a href="ui-popover.html">Popover</a></li>
                            <li><a href="ui-progressbar.html">Progressbar</a></li>
                            <li><a href="ui-tab.html">Tab</a></li>
                            <li><a href="ui-typography.html">Typography</a></li>
                            <li><a href="ui-pagination.html">Pagination</a></li>
                            <li><a href="ui-grid.html">Grid</a></li>

                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-heart"></i>
							<span class="nav-text">Plugins</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="uc-select2.html">Select 2</a></li>
                            <li><a href="uc-nestable.html">Nestedable</a></li>
                            <li><a href="uc-noui-slider.html">Noui Slider</a></li>
                            <li><a href="uc-sweetalert.html">Sweet Alert</a></li>
                            <li><a href="uc-toastr.html">Toastr</a></li>
                            <li><a href="map-jqvmap.html">Jqv Map</a></li>
                            <li><a href="uc-lightgallery.html">Lightgallery</a></li>
                        </ul>
                    </li>
                    <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-settings-2"></i>
							<span class="nav-text">Widget</span>
						</a>
					</li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-notepad"></i>
							<span class="nav-text">Forms</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="form-element.html">Form Elements</a></li>
                            <li><a href="form-wizard.html">Wizard</a></li>
                            <li><a href="form-editor-summernote.html">Summernote</a></li>
                            <li><a href="form-pickers.html">Pickers</a></li>
                            <li><a href="form-validation-jquery.html">Jquery Validate</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-network"></i>
							<span class="nav-text">Table</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                            <li><a href="table-datatable-basic.html">Datatable</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-layer-1"></i>
							<span class="nav-text">Pages</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="page-register.html">Register</a></li>
                            <li><a href="page-login.html">Login</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="page-error-400.html">Error 400</a></li>
                                    <li><a href="page-error-403.html">Error 403</a></li>
                                    <li><a href="page-error-404.html">Error 404</a></li>
                                    <li><a href="page-error-500.html">Error 500</a></li>
                                    <li><a href="page-error-503.html">Error 503</a></li>
                                </ul>
                            </li>
                            <li><a href="page-lock-screen.html">Lock Screen</a></li>
                        </ul>
                    </li>
                </ul>
				
				<div class="copyright">
					<p><strong>Qerza Job Portal Admin Dashboard</strong> © 2023 All Rights Reserved</p>
					<p>Made with <span class="heart"></span> by DexignZone</p>
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-9 col-xxl-8">	
						<div class="row">
							<div class="col-xl-4 col-xxl-6 col-lg-4 col-sm-6">
								<div class="card border-card">
									<div class="card-body">
										<div class="media">
											<div class="media-body me-3">
												<h2 class="text-success">43</h2>
												<span class="position">Application Sent</span>
											</div>
											<span class="cd-icon bgl-success">
												<svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M38.4998 10.4995H35.0002V38.4999H38.4998C40.4245 38.4999 42 36.9238 42 34.9992V13.9992C42 12.075 40.4245 10.4995 38.4998 10.4995Z" fill="#2BC155"/>
													<path d="M27.9998 10.4995V6.9998C27.9998 5.07515 26.4243 3.49963 24.5001 3.49963H17.4998C15.5757 3.49963 14.0001 5.07515 14.0001 6.9998V10.4995H10.5V38.4998H31.5V10.4995H27.9998ZM24.5001 10.4995H17.4998V6.99929H24.5001V10.4995Z" fill="#2BC155"/>
													<path d="M3.50017 10.4995C1.57551 10.4995 0 12.075 0 13.9997V34.9997C0 36.9243 1.57551 38.5004 3.50017 38.5004H6.99983V10.4995H3.50017Z" fill="#2BC155"/>
												</svg>
											</span>
										</div>
									</div>
									<span class="line bg-success"></span>
								</div>
							</div>
							<div class="col-xl-4 col-xxl-6 col-lg-4 col-sm-6">
								<div class="card border-card">
									<div class="card-body">
										<div class="media">
											<div class="media-body me-3">
												<h2 class="text-secondary">27</h2>
												<span class="position">Interviews Schedule</span>
											</div>
											<span class="cd-icon bgl-secondary">
												<svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M33.25 8.75H31.5V5.25C31.5 4.78587 31.3156 4.34075 30.9874 4.01256C30.6593 3.68437 30.2141 3.5 29.75 3.5C29.2859 3.5 28.8407 3.68437 28.5126 4.01256C28.1844 4.34075 28 4.78587 28 5.25V8.75H14V5.25C14 4.78587 13.8156 4.34075 13.4874 4.01256C13.1592 3.68437 12.7141 3.5 12.25 3.5C11.7859 3.5 11.3408 3.68437 11.0126 4.01256C10.6844 4.34075 10.5 4.78587 10.5 5.25V8.75H8.75C7.35761 8.75 6.02226 9.30312 5.03769 10.2877C4.05312 11.2723 3.5 12.6076 3.5 14V15.75H38.5V14C38.5 12.6076 37.9469 11.2723 36.9623 10.2877C35.9777 9.30312 34.6424 8.75 33.25 8.75Z" fill="#3F9AE0"/>
													<path d="M3.5 33.25C3.5 34.6424 4.05312 35.9777 5.03769 36.9623C6.02226 37.9469 7.35761 38.5 8.75 38.5H33.25C34.6424 38.5 35.9777 37.9469 36.9623 36.9623C37.9469 35.9777 38.5 34.6424 38.5 33.25V19.25H3.5V33.25Z" fill="#3F9AE0"/>
												</svg>
											</span>
										</div>
									</div>
									<span class="line bg-secondary"></span>
								</div>
							</div>
							<div class="col-xl-4 col-xxl-12 col-lg-4 col-md-12">
								<div class="card border-card">
									<div class="card-body">
										<div class="media">
											<div class="media-body me-3">
												<h2 class="text-warning">52k</h2>
												<span class="position">Profile Viewed</span>
											</div>
											<span class="cd-icon bgl-warning">
												<svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M15.1812 22.0083C15.0651 21.9063 14.7969 21.6695 14.7015 21.5799C12.3755 19.3941 10.8517 15.9712 10.8517 12.1138C10.8517 5.37813 15.4869 0.0410156 21.0011 0.0410156C26.5152 0.0410156 31.1503 5.37813 31.1503 12.1138C31.1503 15.9679 29.6292 19.3884 27.3094 21.5778C27.2118 21.6699 26.9385 21.9116 26.8238 22.0125L26.8139 22.1799C26.8789 23.1847 27.5541 24.0553 28.5233 24.3626C35.7277 26.641 40.9507 32.0853 41.8277 38.538C41.9484 39.3988 41.6902 40.2696 41.1198 40.9254C40.5495 41.5813 39.723 41.9579 38.8541 41.9579C32.4956 41.9591 9.50675 41.9591 3.14821 41.9591C2.27873 41.9591 1.45183 41.5824 0.881272 40.9263C0.310711 40.2701 0.0524068 39.3989 0.172348 38.5437C1.05148 32.0851 6.27447 26.641 13.4778 24.3628C14.4504 24.0544 15.1263 23.1802 15.1885 22.1722L15.1812 22.0083Z" fill="#FF9B52"/>
												</svg>
											</span>
										</div>
									</div>
									<span class="line bg-warning"></span>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header border-0 pb-0 flex-wrap">
										<h4 class="fs-20 text-black me-4 mb-2">Vacancy Stats</h4>
										<div class="form-check custom-switch toggle-switch text-end me-3 mb-2">
											<input type="checkbox" class="form-check-input" id="customSwitch1">
											<label class="form-check-label" for="customSwitch1">Application Sent</label>
										</div>
										<div class="form-check custom-switch toggle-switch text-end me-3 mb-2">
											<input type="checkbox" class="form-check-input" id="customSwitch2">
											<label class="form-check-label" for="customSwitch2">Interviews</label>
										</div>
										<div class="form-check custom-switch toggle-switch text-end me-3 mb-2">
											<input type="checkbox" class="form-check-input" id="customSwitch3">
											<label class="form-check-label" for="customSwitch3">Rejected</label>
										</div>
										
										<div>
											<select class="default-select w-auto style-1" aria-label="Default select example">
											  <option selected>Month</option>
											  <option value="1">Week</option>
											  <option value="2">Today</option>
											 
											</select>
										</div>
									</div>
									<div class="card-body">	
										<div id="lineChart" class="line-chart"></div>
										<div class="d-flex flex-wrap align-items-center justify-content-center mt-3">
											<div class="fs-14 text-black me-4">
												<svg class="me-2" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="19" height="19" rx="9.5" fill="#2BC155"/>
												</svg>
												Application Sent
											</div>
											<div class="fs-14 text-black me-4">
												<svg class="me-2" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="19" height="19" rx="9.5" fill="#3F9AE0"/>
												</svg>
												Interviews
											</div>
											<div class="fs-14 text-black">
												<svg class="me-2" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="19" height="19" rx="9.5" fill="#FF424D"/>
												</svg>
												Rejected
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4">
						<div class="row">
							<div class="col-xl-12">
								<div class="card d-flex flex-xl-column flex-sm-column flex-md-row flex-column">
									<div class="card-body text-center border-bottom profile-bx">
										<div class="profile-image mb-4">
											<img src="images/avatar/1.jpg" class="rounded-circle" alt="">
										</div>
										<h4 class="fs-22 text-black mb-1">David Heree</h4>
										<p class="mb-4">UX Designer</p>
										<div class="row">
											<div class="col-4 p-0">
												<div class="d-inline-block mb-2 relative donut-chart-sale">
													<span class="donut" data-peity='{ "fill": ["rgb(255, 224, 194)", "rgba(236, 236, 236, 0)"],   "innerRadius": 24, "radius": 10}'>7/9</span>
													<small class="text-white">66%</small>
													<span class="circle bg-warning"></span>
												</div>
												<span class="d-block">Research</span>
											</div>
											<div class="col-4 p-0">
												<div class="d-inline-block mb-2 relative donut-chart-sale">
													<span class="donut" data-peity='{ "fill": ["rgb(130, 255, 165)", "rgba(236, 236, 236, 0)"],   "innerRadius": 24, "radius": 10}'>4/9</span>
													<small class="text-white">31%</small>
													<span class="circle bg-success"></span>
												</div>
												<span class="d-block">Figma</span>
											</div>
											<div class="col-4 p-0">
												<div class="d-inline-block mb-2 relative donut-chart-sale">
													<span class="donut" data-peity='{ "fill": ["rgb(133, 211, 255)", "rgba(236, 236, 236, 0)"],   "innerRadius": 24, "radius": 10}'>2/9</span>
													<small class="text-white">3%</small>
													<span class="circle bg-secondary"></span>
												</div>
												<span class="d-block">Photoshop</span>
											</div>
										</div>
									</div>
									<div class="card-body col-xl-12 col-md-6 col-sm-12 pb-0">
										<h4 class="fs-18 text-black mb-3">Recent Activities</h4>
										<div class="media mb-4">
											<span class="p-3 bgl-primary me-3 rounded">
												<svg class="primary-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<g clip-path="url(#clip1)">
													<path d="M20.3955 10.8038C19.9733 10.8038 19.5767 10.8742 19.2057 11.0213V4.79104H12.9883C13.1226 4.42004 13.193 4.01066 13.193 3.58849C13.193 1.60554 11.5874 0 9.60447 0C7.62152 0 6.01598 1.60554 6.01598 3.58849C6.01598 4.01066 6.08634 4.41365 6.22067 4.79104H0.00958252V11.7441C0.642845 11.1684 1.48719 10.8102 2.4083 10.8102C4.39125 10.8102 5.99679 12.4158 5.99679 14.3987C5.99679 16.3817 4.39125 17.9872 2.4083 17.9872C1.48719 17.9872 0.642845 17.629 0.00958252 17.0533V24H19.2121V17.7697C19.5831 17.9104 19.9797 17.9872 20.4019 17.9872C22.3912 17.9872 23.9904 16.3817 23.9904 14.3987C23.9904 12.4158 22.3912 10.8038 20.3955 10.8038Z" fill="#8743DF"/>
													</g>
													<defs>
													<clipPath id="clip1">
													<rect width="24" height="24" fill="white"/>
													</clipPath>
													</defs>
												</svg>
											</span>
											<div class="media-body">
												<p class="fs-14 mb-1 text-black font-w500">Your application has accepted in <strong>3 Vacancy</strong></p>
												<span class="fs-14">12h ago</span>
											</div>
										</div>
										<div class="media mb-4">
											<span class="p-3 bgl-primary me-3 rounded">
												<svg class="primary-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<g clip-path="url(#clip2)">
													<path d="M20.3955 10.8038C19.9733 10.8038 19.5767 10.8742 19.2057 11.0213V4.79104H12.9883C13.1226 4.42004 13.193 4.01066 13.193 3.58849C13.193 1.60554 11.5874 0 9.60447 0C7.62152 0 6.01598 1.60554 6.01598 3.58849C6.01598 4.01066 6.08634 4.41365 6.22067 4.79104H0.00958252V11.7441C0.642845 11.1684 1.48719 10.8102 2.4083 10.8102C4.39125 10.8102 5.99679 12.4158 5.99679 14.3987C5.99679 16.3817 4.39125 17.9872 2.4083 17.9872C1.48719 17.9872 0.642845 17.629 0.00958252 17.0533V24H19.2121V17.7697C19.5831 17.9104 19.9797 17.9872 20.4019 17.9872C22.3912 17.9872 23.9904 16.3817 23.9904 14.3987C23.9904 12.4158 22.3912 10.8038 20.3955 10.8038Z" fill="#8743DF"/>
													</g>
													<defs>
													<clipPath id="clip2">
													<rect width="24" height="24" fill="white"/>
													</clipPath>
													</defs>
												</svg>
											</span>
											<div class="media-body">
												<p class="fs-14 mb-1 text-black font-w500">Your application has accepted in <strong>3 Vacancy</strong></p>
												<span class="fs-14">12h ago</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12">
						<div class="d-sm-flex align-items-center mb-sm-3 mt-sm-2 mt-2  mb-2">
							<h4 class="fs-20 text-black me-auto mb-sm-0 mb-2">Recomended Jobs</h4>
							<a href="companies.html" class="btn btn-outline-primary rounded mb-sm-0 mb-1">View More</a>
						</div>
						<div class="testimonial-one owl-carousel">
							<div class="items">
								<div class="card">
									<div class="card-body">	
										<div class="media pb-4 border-bottom mb-4 align-items-center">
											<svg class="me-3" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#3144F3"/>
												<path d="M20.6216 20.6219C23.142 18.1015 26.1342 16.1022 29.4273 14.7381C32.7205 13.374 36.25 12.672 39.8145 12.672C43.3789 12.672 46.9085 13.374 50.2016 14.7381C53.4947 16.1022 56.4869 18.1015 59.0074 20.6219C61.5278 23.1424 63.5271 26.1346 64.8912 29.4277C66.2552 32.7208 66.9573 36.2504 66.9573 39.8148C66.9573 43.3793 66.2552 46.9088 64.8912 50.202C63.5271 53.4951 61.5278 56.4873 59.0074 59.0077L49.4109 49.4113C50.6711 48.1511 51.6708 46.655 52.3528 45.0084C53.0348 43.3618 53.3859 41.5971 53.3859 39.8148C53.3859 38.0326 53.0348 36.2678 52.3528 34.6213C51.6708 32.9747 50.6711 31.4786 49.4109 30.2184C48.1507 28.9582 46.6546 27.9585 45.008 27.2765C43.3615 26.5944 41.5967 26.2434 39.8145 26.2434C38.0322 26.2434 36.2675 26.5944 34.6209 27.2765C32.9743 27.9585 31.4782 28.9582 30.218 30.2184L20.6216 20.6219Z" fill="#8FD7FF"/>
												<path d="M20.6215 59.0077C15.5312 53.9174 12.6715 47.0135 12.6715 39.8148C12.6715 32.6161 15.5312 25.7122 20.6215 20.6219C25.7118 15.5316 32.6157 12.6719 39.8144 12.6719C47.0131 12.6719 53.917 15.5316 59.0073 20.6219L49.4108 30.2183C46.8657 27.6732 43.4138 26.2434 39.8144 26.2434C36.215 26.2434 32.7631 27.6732 30.2179 30.2183C27.6728 32.7635 26.243 36.2154 26.243 39.8148C26.243 43.4142 27.6728 46.8661 30.2179 49.4112L20.6215 59.0077Z" fill="white"/>
											</svg>
											<div class="media-body">
												<h4 class="fs-20"><a href="search-job.html" class="text-black">Intern UX Designer</a></h4>
												<div class="d-flex">
													<p class="mb-0 me-auto">Maximoz Team</p>
													<a href="companies.html" class="btn-link">+Follow</a>
												</div>
											</div>
										</div>
										<div class="d-flex mb-3">
											<span class="text-black me-auto font-w500">
												<svg class="me-3" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
													<g clip-path="url(#clip3)">
													<path d="M14.0001 7.83997C10.5987 7.83997 7.65356 10.2024 6.91568 13.5229L4.49921 24.397C4.48149 24.4768 4.47254 24.5583 4.47254 24.64C4.47254 25.2585 4.97398 25.76 5.59254 25.76H22.4077C22.4894 25.76 22.5709 25.751 22.6507 25.7333C23.2545 25.5991 23.6352 25.0008 23.501 24.397L21.0846 13.5229C20.3467 10.2024 17.4016 7.83997 14.0001 7.83997ZM14.0001 5.59997C18.4515 5.59997 22.3056 8.69164 23.2712 13.037L25.6877 23.9111C26.0902 25.7226 24.9481 27.5174 23.1366 27.92C22.8973 27.9731 22.6529 28 22.4077 28H5.59254C3.73687 28 2.23254 26.4956 2.23254 24.64C2.23254 24.3948 2.25937 24.1504 2.31256 23.9111L4.72902 13.037C5.69466 8.69164 9.54877 5.59997 14.0001 5.59997Z" fill="#A9A9A9"/>
													<path d="M16.2402 12.32C16.8588 12.32 17.3602 12.8214 17.3602 13.44C17.3602 14.0585 16.8588 14.56 16.2402 14.56H13.4402C13.1309 14.56 12.8802 14.8107 12.8802 15.12C12.8802 15.4292 13.1309 15.68 13.4402 15.68H14.5602C16.1066 15.68 17.3602 16.9336 17.3602 18.48C17.3602 20.0264 16.1066 21.28 14.5602 21.28H11.7602C11.1416 21.28 10.6402 20.7785 10.6402 20.16C10.6402 19.5414 11.1416 19.04 11.7602 19.04H14.5602C14.8695 19.04 15.1202 18.7892 15.1202 18.48C15.1202 18.1707 14.8695 17.92 14.5602 17.92H13.4402C11.8938 17.92 10.6402 16.6664 10.6402 15.12C10.6402 13.5736 11.8938 12.32 13.4402 12.32H16.2402Z" fill="#A9A9A9"/>
													<path d="M12.8802 11.2C12.8802 10.5814 13.3817 10.08 14.0002 10.08C14.6188 10.08 15.1203 10.5814 15.1203 11.2V13.44C15.1203 14.0586 14.6188 14.56 14.0002 14.56C13.3817 14.56 12.8802 14.0586 12.8802 13.44V11.2Z" fill="#A9A9A9"/>
													<path d="M15.1203 22.4C15.1203 23.0186 14.6188 23.52 14.0002 23.52C13.3817 23.52 12.8802 23.0186 12.8802 22.4V20.16C12.8802 19.5414 13.3817 19.04 14.0002 19.04C14.6188 19.04 15.1203 19.5414 15.1203 20.16V22.4Z" fill="#A9A9A9"/>
													<path d="M12.8001 6.30404C13.0298 6.87836 12.7504 7.53017 12.1761 7.75989C11.6018 7.98962 10.95 7.71027 10.7203 7.13596L8.48027 1.53596C8.11627 0.625951 9.01409 -0.279605 9.92718 0.0765737C10.7659 0.403728 11.391 0.56 11.7602 0.56C11.8521 0.56 11.9283 0.540358 12.0946 0.469683C12.1387 0.450919 12.1906 0.428012 12.3122 0.374186C12.8915 0.12032 13.3491 -3.76254e-07 14.0002 -3.76254e-07C14.6497 -3.76254e-07 15.1146 0.12064 15.6957 0.372056C15.8432 0.43663 15.9021 0.462313 15.9542 0.483786C16.0978 0.542916 16.1669 0.56 16.2402 0.56C16.5878 0.56 17.2185 0.402322 18.0812 0.0734544C18.9932 -0.274175 19.8825 0.629785 19.5201 1.53596L17.2801 7.13596C17.0503 7.71027 16.3985 7.98962 15.8242 7.75989C15.2499 7.53017 14.9705 6.87836 15.2003 6.30404L16.6096 2.78073C16.4808 2.79355 16.3578 2.8 16.2402 2.8C15.8314 2.8 15.4927 2.7162 15.1013 2.55506C15.0241 2.52324 14.9394 2.4863 14.8064 2.42794C14.4822 2.28767 14.2985 2.24 14.0002 2.24C13.7048 2.24 13.5313 2.28561 13.2114 2.42581C13.1015 2.47449 13.0319 2.50524 12.9706 2.53126C12.5512 2.70952 12.2002 2.8 11.7602 2.8C11.6419 2.8 11.5189 2.79386 11.3911 2.78165L12.8001 6.30404Z" fill="#A9A9A9"/>
													</g>
													<defs>
													<clipPath id="clip3">
													<rect width="28" height="28" fill="white"/>
													</clipPath>
													</defs>
												</svg>
											$14,000 - $25,000</span>
											<span>/monthly</span>
										</div>
										<div class="d-flex mb-3">
											<span class="text-black me-auto font-w500">
												<svg class="me-3" width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M12 0C6.93398 0 2.8125 4.12148 2.8125 9.1875C2.8125 10.8091 3.24094 12.4034 4.05145 13.7979C4.24041 14.123 4.45162 14.4398 4.67934 14.7396L11.6008 24H12.3991L19.3207 14.7397C19.5483 14.4398 19.7595 14.1231 19.9485 13.7979C20.7591 12.4034 21.1875 10.8091 21.1875 9.1875C21.1875 4.12148 17.066 0 12 0ZM12 12.2344C10.32 12.2344 8.95312 10.8675 8.95312 9.1875C8.95312 7.50745 10.32 6.14062 12 6.14062C13.68 6.14062 15.0469 7.50745 15.0469 9.1875C15.0469 10.8675 13.68 12.2344 12 12.2344Z" fill="#A9A9A9"/>
												</svg>
											London, England</span>
											<span>View Maps</span>
										</div>
										<div>
											<span class="text-black me-auto font-w500">
												<svg class="me-3" width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M21.9999 5.99971H20.0001V21.9999H21.9999C23.0997 21.9999 24 21.0993 24 19.9995V7.99951C24 6.9 23.0997 5.99971 21.9999 5.99971Z" fill="#A9A9A9"/>
													<path d="M15.9999 5.9997V3.9999C15.9999 2.90009 15.0996 1.9998 14.0001 1.9998H9.9999C8.90039 1.9998 8.0001 2.90009 8.0001 3.9999V5.9997H6V21.9999H18V5.9997H15.9999ZM14.0001 5.9997H9.9999V3.99961H14.0001V5.9997Z" fill="#A9A9A9"/>
													<path d="M2.0001 5.99971C0.900293 5.99971 0 6.9 0 7.99981V19.9998C0 21.0996 0.900293 22.0002 2.0001 22.0002H3.9999V5.99971H2.0001Z" fill="#A9A9A9"/>
												</svg>
											FULTIME</span>
										</div>
									</div>
								</div>
							</div>
							<div class="items">
								<div class="card">
									<div class="card-body">	
										<div class="media pb-4 border-bottom mb-4 align-items-center">
											<svg class="me-3" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#31B9F3"/>
												<path d="M20.6216 20.6219C23.142 18.1015 26.1342 16.1021 29.4273 14.7381C32.7205 13.374 36.25 12.6719 39.8145 12.6719C43.3789 12.6719 46.9085 13.374 50.2016 14.7381C53.4947 16.1021 56.4869 18.1015 59.0074 20.6219C61.5278 23.1424 63.5271 26.1346 64.8912 29.4277C66.2552 32.7208 66.9573 36.2504 66.9573 39.8148C66.9573 43.3793 66.2552 46.9088 64.8912 50.2019C63.5271 53.495 61.5278 56.4873 59.0074 59.0077L49.4109 49.4113C50.6711 48.151 51.6708 46.6549 52.3528 45.0084C53.0348 43.3618 53.3859 41.597 53.3859 39.8148C53.3859 38.0326 53.0348 36.2678 52.3528 34.6212C51.6708 32.9747 50.6711 31.4786 49.4109 30.2184C48.1507 28.9581 46.6546 27.9585 45.008 27.2764C43.3615 26.5944 41.5967 26.2434 39.8145 26.2434C38.0322 26.2434 36.2675 26.5944 34.6209 27.2764C32.9743 27.9585 31.4782 28.9581 30.218 30.2184L20.6216 20.6219Z" fill="#31B9F3"/>
												<path d="M64 34.5C64 41.263 61.3661 47.749 56.6777 52.5312C51.9893 57.3134 45.6304 60 39 60C32.3696 60 26.0107 57.3134 21.3223 52.5312C16.6339 47.7491 14 41.263 14 34.5L26.5 34.5C26.5 37.8815 27.817 41.1245 30.1612 43.5156C32.5054 45.9067 35.6848 47.25 39 47.25C42.3152 47.25 45.4946 45.9067 47.8388 43.5156C50.183 41.1245 51.5 37.8815 51.5 34.5L64 34.5Z" fill="#00FFF0"/>
											</svg>
											<div class="media-body">
												<h4 class="fs-20"><a href="search-job.html" class="text-black">Senior UX Designer</a></h4>
												<div class="d-flex">
													<p class="mb-0 me-auto">Inacyx Studios</p>
													<a href="companies.html" class="btn-link">+Follow</a>
												</div>
											</div>
										</div>
										<div class="d-flex mb-3">
											<span class="text-black me-auto font-w500">
												<svg class="me-3" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
													<g clip-path="url(#clip4)">
													<path d="M14.0001 7.83997C10.5987 7.83997 7.65356 10.2024 6.91568 13.5229L4.49921 24.397C4.48149 24.4768 4.47254 24.5583 4.47254 24.64C4.47254 25.2585 4.97398 25.76 5.59254 25.76H22.4077C22.4894 25.76 22.5709 25.751 22.6507 25.7333C23.2545 25.5991 23.6352 25.0008 23.501 24.397L21.0846 13.5229C20.3467 10.2024 17.4016 7.83997 14.0001 7.83997ZM14.0001 5.59997C18.4515 5.59997 22.3056 8.69164 23.2712 13.037L25.6877 23.9111C26.0902 25.7226 24.9481 27.5174 23.1366 27.92C22.8973 27.9731 22.6529 28 22.4077 28H5.59254C3.73687 28 2.23254 26.4956 2.23254 24.64C2.23254 24.3948 2.25937 24.1504 2.31256 23.9111L4.72902 13.037C5.69466 8.69164 9.54877 5.59997 14.0001 5.59997Z" fill="#A9A9A9"/>
													<path d="M16.2402 12.32C16.8588 12.32 17.3602 12.8214 17.3602 13.44C17.3602 14.0585 16.8588 14.56 16.2402 14.56H13.4402C13.1309 14.56 12.8802 14.8107 12.8802 15.12C12.8802 15.4292 13.1309 15.68 13.4402 15.68H14.5602C16.1066 15.68 17.3602 16.9336 17.3602 18.48C17.3602 20.0264 16.1066 21.28 14.5602 21.28H11.7602C11.1416 21.28 10.6402 20.7785 10.6402 20.16C10.6402 19.5414 11.1416 19.04 11.7602 19.04H14.5602C14.8695 19.04 15.1202 18.7892 15.1202 18.48C15.1202 18.1707 14.8695 17.92 14.5602 17.92H13.4402C11.8938 17.92 10.6402 16.6664 10.6402 15.12C10.6402 13.5736 11.8938 12.32 13.4402 12.32H16.2402Z" fill="#A9A9A9"/>
													<path d="M12.8802 11.2C12.8802 10.5814 13.3817 10.08 14.0002 10.08C14.6188 10.08 15.1203 10.5814 15.1203 11.2V13.44C15.1203 14.0586 14.6188 14.56 14.0002 14.56C13.3817 14.56 12.8802 14.0586 12.8802 13.44V11.2Z" fill="#A9A9A9"/>
													<path d="M15.1203 22.4C15.1203 23.0186 14.6188 23.52 14.0002 23.52C13.3817 23.52 12.8802 23.0186 12.8802 22.4V20.16C12.8802 19.5414 13.3817 19.04 14.0002 19.04C14.6188 19.04 15.1203 19.5414 15.1203 20.16V22.4Z" fill="#A9A9A9"/>
													<path d="M12.8001 6.30404C13.0298 6.87836 12.7504 7.53017 12.1761 7.75989C11.6018 7.98962 10.95 7.71027 10.7203 7.13596L8.48027 1.53596C8.11627 0.625951 9.01409 -0.279605 9.92718 0.0765737C10.7659 0.403728 11.391 0.56 11.7602 0.56C11.8521 0.56 11.9283 0.540358 12.0946 0.469683C12.1387 0.450919 12.1906 0.428012 12.3122 0.374186C12.8915 0.12032 13.3491 -3.76254e-07 14.0002 -3.76254e-07C14.6497 -3.76254e-07 15.1146 0.12064 15.6957 0.372056C15.8432 0.43663 15.9021 0.462313 15.9542 0.483786C16.0978 0.542916 16.1669 0.56 16.2402 0.56C16.5878 0.56 17.2185 0.402322 18.0812 0.0734544C18.9932 -0.274175 19.8825 0.629785 19.5201 1.53596L17.2801 7.13596C17.0503 7.71027 16.3985 7.98962 15.8242 7.75989C15.2499 7.53017 14.9705 6.87836 15.2003 6.30404L16.6096 2.78073C16.4808 2.79355 16.3578 2.8 16.2402 2.8C15.8314 2.8 15.4927 2.7162 15.1013 2.55506C15.0241 2.52324 14.9394 2.4863 14.8064 2.42794C14.4822 2.28767 14.2985 2.24 14.0002 2.24C13.7048 2.24 13.5313 2.28561 13.2114 2.42581C13.1015 2.47449 13.0319 2.50524 12.9706 2.53126C12.5512 2.70952 12.2002 2.8 11.7602 2.8C11.6419 2.8 11.5189 2.79386 11.3911 2.78165L12.8001 6.30404Z" fill="#A9A9A9"/>
													</g>
													<defs>
													<clipPath id="clip4">
													<rect width="28" height="28" fill="white"/>
													</clipPath>
													</defs>
												</svg>
											$21,000 - $25,000</span>
											<span>/monthly</span>
										</div>
										<div class="d-flex mb-3">
											<span class="text-black me-auto font-w500">
												<svg class="me-3" width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M12 0C6.93398 0 2.8125 4.12148 2.8125 9.1875C2.8125 10.8091 3.24094 12.4034 4.05145 13.7979C4.24041 14.123 4.45162 14.4398 4.67934 14.7396L11.6008 24H12.3991L19.3207 14.7397C19.5483 14.4398 19.7595 14.1231 19.9485 13.7979C20.7591 12.4034 21.1875 10.8091 21.1875 9.1875C21.1875 4.12148 17.066 0 12 0ZM12 12.2344C10.32 12.2344 8.95312 10.8675 8.95312 9.1875C8.95312 7.50745 10.32 6.14062 12 6.14062C13.68 6.14062 15.0469 7.50745 15.0469 9.1875C15.0469 10.8675 13.68 12.2344 12 12.2344Z" fill="#A9A9A9"/>
												</svg>
											Manchester, England</span>
											<span>View Maps</span>
										</div>
										<div>
											<span class="text-black me-auto font-w500">
												<svg class="me-3" width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M21.9999 5.99971H20.0001V21.9999H21.9999C23.0997 21.9999 24 21.0993 24 19.9995V7.99951C24 6.9 23.0997 5.99971 21.9999 5.99971Z" fill="#A9A9A9"/>
													<path d="M15.9999 5.9997V3.9999C15.9999 2.90009 15.0996 1.9998 14.0001 1.9998H9.9999C8.90039 1.9998 8.0001 2.90009 8.0001 3.9999V5.9997H6V21.9999H18V5.9997H15.9999ZM14.0001 5.9997H9.9999V3.99961H14.0001V5.9997Z" fill="#A9A9A9"/>
													<path d="M2.0001 5.99971C0.900293 5.99971 0 6.9 0 7.99981V19.9998C0 21.0996 0.900293 22.0002 2.0001 22.0002H3.9999V5.99971H2.0001Z" fill="#A9A9A9"/>
												</svg>
											FREELANCE, PART TIME</span>
										</div>
									</div>
								</div>
							</div>
							<div class="items">
								<div class="card">
									<div class="card-body">	
										<div class="media pb-4 border-bottom mb-4 align-items-center">
											<svg class="me-3" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#EFF331"/>
												<path d="M66.9573 39.8148C66.9573 43.3792 66.2552 46.9088 64.8912 50.2019C63.5271 53.495 61.5278 56.4872 59.0073 59.0077C56.4869 61.5281 53.4947 63.5275 50.2015 64.8915C46.9084 66.2556 43.3789 66.9576 39.8144 66.9576C36.25 66.9576 32.7204 66.2556 29.4273 64.8915C26.1342 63.5275 23.142 61.5281 20.6215 59.0077C18.1011 56.4872 16.1018 53.495 14.7377 50.2019C13.3736 46.9088 12.6716 43.3792 12.6716 39.8148L26.243 39.8148C26.243 41.597 26.594 43.3618 27.2761 45.0083C27.9581 46.6549 28.9578 48.151 30.218 49.4112C31.4782 50.6715 32.9743 51.6711 34.6209 52.3531C36.2674 53.0352 38.0322 53.3862 39.8144 53.3862C41.5966 53.3862 43.3614 53.0352 45.008 52.3531C46.6545 51.6711 48.1506 50.6715 49.4109 49.4112C50.6711 48.151 51.6708 46.6549 52.3528 45.0083C53.0348 43.3618 53.3859 41.597 53.3859 39.8148L66.9573 39.8148Z" fill="#F0FF49"/>
												<path d="M12.6717 39.8148C12.6717 32.616 15.5313 25.7121 20.6216 20.6219C25.7119 15.5316 32.6158 12.6719 39.8145 12.6719C47.0132 12.6719 53.9171 15.5316 59.0074 20.6219C64.0977 25.7121 66.9574 32.616 66.9574 39.8148L53.3859 39.8148C53.3859 36.2154 51.9561 32.7635 49.411 30.2183C46.8658 27.6732 43.4139 26.2433 39.8145 26.2433C36.2151 26.2433 32.7632 27.6732 30.2181 30.2183C27.6729 32.7635 26.2431 36.2154 26.2431 39.8148L12.6717 39.8148Z" fill="#1E1E1E"/>
											</svg>
											<div class="media-body">
												<h4 class="fs-20"><a href="search-job.html" class="text-black">Freelance UI Designer</a></h4>
												<div class="d-flex">
													<p class="mb-0 me-auto">Naonatu Team</p>
													<a href="companies.html" class="btn-link">+Follow</a>
												</div>
											</div>
										</div>
										<div class="d-flex mb-3">
											<span class="text-black me-auto font-w500">
												<svg class="me-3" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
													<g clip-path="url(#clip5)">
													<path d="M14.0001 7.83997C10.5987 7.83997 7.65356 10.2024 6.91568 13.5229L4.49921 24.397C4.48149 24.4768 4.47254 24.5583 4.47254 24.64C4.47254 25.2585 4.97398 25.76 5.59254 25.76H22.4077C22.4894 25.76 22.5709 25.751 22.6507 25.7333C23.2545 25.5991 23.6352 25.0008 23.501 24.397L21.0846 13.5229C20.3467 10.2024 17.4016 7.83997 14.0001 7.83997ZM14.0001 5.59997C18.4515 5.59997 22.3056 8.69164 23.2712 13.037L25.6877 23.9111C26.0902 25.7226 24.9481 27.5174 23.1366 27.92C22.8973 27.9731 22.6529 28 22.4077 28H5.59254C3.73687 28 2.23254 26.4956 2.23254 24.64C2.23254 24.3948 2.25937 24.1504 2.31256 23.9111L4.72902 13.037C5.69466 8.69164 9.54877 5.59997 14.0001 5.59997Z" fill="#A9A9A9"/>
													<path d="M16.2402 12.32C16.8588 12.32 17.3602 12.8214 17.3602 13.44C17.3602 14.0585 16.8588 14.56 16.2402 14.56H13.4402C13.1309 14.56 12.8802 14.8107 12.8802 15.12C12.8802 15.4292 13.1309 15.68 13.4402 15.68H14.5602C16.1066 15.68 17.3602 16.9336 17.3602 18.48C17.3602 20.0264 16.1066 21.28 14.5602 21.28H11.7602C11.1416 21.28 10.6402 20.7785 10.6402 20.16C10.6402 19.5414 11.1416 19.04 11.7602 19.04H14.5602C14.8695 19.04 15.1202 18.7892 15.1202 18.48C15.1202 18.1707 14.8695 17.92 14.5602 17.92H13.4402C11.8938 17.92 10.6402 16.6664 10.6402 15.12C10.6402 13.5736 11.8938 12.32 13.4402 12.32H16.2402Z" fill="#A9A9A9"/>
													<path d="M12.8802 11.2C12.8802 10.5814 13.3817 10.08 14.0002 10.08C14.6188 10.08 15.1203 10.5814 15.1203 11.2V13.44C15.1203 14.0586 14.6188 14.56 14.0002 14.56C13.3817 14.56 12.8802 14.0586 12.8802 13.44V11.2Z" fill="#A9A9A9"/>
													<path d="M15.1203 22.4C15.1203 23.0186 14.6188 23.52 14.0002 23.52C13.3817 23.52 12.8802 23.0186 12.8802 22.4V20.16C12.8802 19.5414 13.3817 19.04 14.0002 19.04C14.6188 19.04 15.1203 19.5414 15.1203 20.16V22.4Z" fill="#A9A9A9"/>
													<path d="M12.8001 6.30404C13.0298 6.87836 12.7504 7.53017 12.1761 7.75989C11.6018 7.98962 10.95 7.71027 10.7203 7.13596L8.48027 1.53596C8.11627 0.625951 9.01409 -0.279605 9.92718 0.0765737C10.7659 0.403728 11.391 0.56 11.7602 0.56C11.8521 0.56 11.9283 0.540358 12.0946 0.469683C12.1387 0.450919 12.1906 0.428012 12.3122 0.374186C12.8915 0.12032 13.3491 -3.76254e-07 14.0002 -3.76254e-07C14.6497 -3.76254e-07 15.1146 0.12064 15.6957 0.372056C15.8432 0.43663 15.9021 0.462313 15.9542 0.483786C16.0978 0.542916 16.1669 0.56 16.2402 0.56C16.5878 0.56 17.2185 0.402322 18.0812 0.0734544C18.9932 -0.274175 19.8825 0.629785 19.5201 1.53596L17.2801 7.13596C17.0503 7.71027 16.3985 7.98962 15.8242 7.75989C15.2499 7.53017 14.9705 6.87836 15.2003 6.30404L16.6096 2.78073C16.4808 2.79355 16.3578 2.8 16.2402 2.8C15.8314 2.8 15.4927 2.7162 15.1013 2.55506C15.0241 2.52324 14.9394 2.4863 14.8064 2.42794C14.4822 2.28767 14.2985 2.24 14.0002 2.24C13.7048 2.24 13.5313 2.28561 13.2114 2.42581C13.1015 2.47449 13.0319 2.50524 12.9706 2.53126C12.5512 2.70952 12.2002 2.8 11.7602 2.8C11.6419 2.8 11.5189 2.79386 11.3911 2.78165L12.8001 6.30404Z" fill="#A9A9A9"/>
													</g>
													<defs>
													<clipPath id="clip5">
													<rect width="28" height="28" fill="white"/>
													</clipPath>
													</defs>
												</svg>
											$21,000 - $25,000</span>
											<span>/monthly</span>
										</div>
										<div class="d-flex mb-3">
											<span class="text-black me-auto font-w500">
												<svg class="me-3" width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M12 0C6.93398 0 2.8125 4.12148 2.8125 9.1875C2.8125 10.8091 3.24094 12.4034 4.05145 13.7979C4.24041 14.123 4.45162 14.4398 4.67934 14.7396L11.6008 24H12.3991L19.3207 14.7397C19.5483 14.4398 19.7595 14.1231 19.9485 13.7979C20.7591 12.4034 21.1875 10.8091 21.1875 9.1875C21.1875 4.12148 17.066 0 12 0ZM12 12.2344C10.32 12.2344 8.95312 10.8675 8.95312 9.1875C8.95312 7.50745 10.32 6.14062 12 6.14062C13.68 6.14062 15.0469 7.50745 15.0469 9.1875C15.0469 10.8675 13.68 12.2344 12 12.2344Z" fill="#A9A9A9"/>
												</svg>
											Manchester, England</span>
											<span>View Maps</span>
										</div>
										<div>
											<span class="text-black me-auto font-w500">
												<svg class="me-3" width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M21.9999 5.99971H20.0001V21.9999H21.9999C23.0997 21.9999 24 21.0993 24 19.9995V7.99951C24 6.9 23.0997 5.99971 21.9999 5.99971Z" fill="#A9A9A9"/>
													<path d="M15.9999 5.9997V3.9999C15.9999 2.90009 15.0996 1.9998 14.0001 1.9998H9.9999C8.90039 1.9998 8.0001 2.90009 8.0001 3.9999V5.9997H6V21.9999H18V5.9997H15.9999ZM14.0001 5.9997H9.9999V3.99961H14.0001V5.9997Z" fill="#A9A9A9"/>
													<path d="M2.0001 5.99971C0.900293 5.99971 0 6.9 0 7.99981V19.9998C0 21.0996 0.900293 22.0002 2.0001 22.0002H3.9999V5.99971H2.0001Z" fill="#A9A9A9"/>
												</svg>
											FREELANCE, PART TIME</span>
										</div>
									</div>
								</div>
							</div>
							<div class="items">
								<div class="card">
									<div class="card-body">	
										<div class="media pb-4 border-bottom mb-4 align-items-center">
											<svg class="me-3" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#D3D3D3"/>
												<path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#F35F31"/>
												<path d="M20.6216 20.6219C23.142 18.1015 26.1342 16.1022 29.4273 14.7381C32.7205 13.374 36.25 12.672 39.8145 12.672C43.3789 12.672 46.9085 13.374 50.2016 14.7381C53.4947 16.1022 56.4869 18.1015 59.0074 20.6219C61.5278 23.1424 63.5271 26.1346 64.8912 29.4277C66.2552 32.7208 66.9573 36.2504 66.9573 39.8148C66.9573 43.3793 66.2552 46.9088 64.8912 50.202C63.5271 53.4951 61.5278 56.4873 59.0074 59.0077L49.4109 49.4113C50.6711 48.1511 51.6708 46.655 52.3528 45.0084C53.0348 43.3618 53.3859 41.5971 53.3859 39.8148C53.3859 38.0326 53.0348 36.2678 52.3528 34.6213C51.6708 32.9747 50.6711 31.4786 49.4109 30.2184C48.1507 28.9582 46.6546 27.9585 45.008 27.2765C43.3615 26.5944 41.5967 26.2434 39.8145 26.2434C38.0322 26.2434 36.2675 26.5944 34.6209 27.2765C32.9743 27.9585 31.4782 28.9582 30.218 30.2184L20.6216 20.6219Z" fill="white"/>
												<path d="M59.0073 59.0077C53.917 64.0979 47.0131 66.9576 39.8144 66.9576C32.6157 66.9576 25.7118 64.098 20.6215 59.0077C15.5312 53.9174 12.6715 47.0135 12.6715 39.8148C12.6715 32.6161 15.5312 25.7122 20.6215 20.6219L30.2179 30.2183C27.6728 32.7635 26.243 36.2154 26.243 39.8148C26.243 43.4141 27.6728 46.8661 30.2179 49.4112C32.7631 51.9564 36.215 53.3862 39.8144 53.3862C43.4138 53.3862 46.8657 51.9564 49.4108 49.4112L59.0073 59.0077Z" fill="#FFCF23"/>
											</svg>
											<div class="media-body">
												<h4 class="fs-20"><a href="search-job.html" class="text-black">Senior UX Designer</a></h4>
												<div class="d-flex">
													<p class="mb-0 me-auto">Inacyx Studios</p>
													<a href="companies.html" class="btn-link">+Follow</a>
												</div>
											</div>
										</div>
										<div class="d-flex mb-3">
											<span class="text-black me-auto font-w500">
												<svg class="me-3" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
													<g clip-path="url(#clip6)">
													<path d="M14.0001 7.83997C10.5987 7.83997 7.65356 10.2024 6.91568 13.5229L4.49921 24.397C4.48149 24.4768 4.47254 24.5583 4.47254 24.64C4.47254 25.2585 4.97398 25.76 5.59254 25.76H22.4077C22.4894 25.76 22.5709 25.751 22.6507 25.7333C23.2545 25.5991 23.6352 25.0008 23.501 24.397L21.0846 13.5229C20.3467 10.2024 17.4016 7.83997 14.0001 7.83997ZM14.0001 5.59997C18.4515 5.59997 22.3056 8.69164 23.2712 13.037L25.6877 23.9111C26.0902 25.7226 24.9481 27.5174 23.1366 27.92C22.8973 27.9731 22.6529 28 22.4077 28H5.59254C3.73687 28 2.23254 26.4956 2.23254 24.64C2.23254 24.3948 2.25937 24.1504 2.31256 23.9111L4.72902 13.037C5.69466 8.69164 9.54877 5.59997 14.0001 5.59997Z" fill="#A9A9A9"/>
													<path d="M16.2402 12.32C16.8588 12.32 17.3602 12.8214 17.3602 13.44C17.3602 14.0585 16.8588 14.56 16.2402 14.56H13.4402C13.1309 14.56 12.8802 14.8107 12.8802 15.12C12.8802 15.4292 13.1309 15.68 13.4402 15.68H14.5602C16.1066 15.68 17.3602 16.9336 17.3602 18.48C17.3602 20.0264 16.1066 21.28 14.5602 21.28H11.7602C11.1416 21.28 10.6402 20.7785 10.6402 20.16C10.6402 19.5414 11.1416 19.04 11.7602 19.04H14.5602C14.8695 19.04 15.1202 18.7892 15.1202 18.48C15.1202 18.1707 14.8695 17.92 14.5602 17.92H13.4402C11.8938 17.92 10.6402 16.6664 10.6402 15.12C10.6402 13.5736 11.8938 12.32 13.4402 12.32H16.2402Z" fill="#A9A9A9"/>
													<path d="M12.8802 11.2C12.8802 10.5814 13.3817 10.08 14.0002 10.08C14.6188 10.08 15.1203 10.5814 15.1203 11.2V13.44C15.1203 14.0586 14.6188 14.56 14.0002 14.56C13.3817 14.56 12.8802 14.0586 12.8802 13.44V11.2Z" fill="#A9A9A9"/>
													<path d="M15.1203 22.4C15.1203 23.0186 14.6188 23.52 14.0002 23.52C13.3817 23.52 12.8802 23.0186 12.8802 22.4V20.16C12.8802 19.5414 13.3817 19.04 14.0002 19.04C14.6188 19.04 15.1203 19.5414 15.1203 20.16V22.4Z" fill="#A9A9A9"/>
													<path d="M12.8001 6.30404C13.0298 6.87836 12.7504 7.53017 12.1761 7.75989C11.6018 7.98962 10.95 7.71027 10.7203 7.13596L8.48027 1.53596C8.11627 0.625951 9.01409 -0.279605 9.92718 0.0765737C10.7659 0.403728 11.391 0.56 11.7602 0.56C11.8521 0.56 11.9283 0.540358 12.0946 0.469683C12.1387 0.450919 12.1906 0.428012 12.3122 0.374186C12.8915 0.12032 13.3491 -3.76254e-07 14.0002 -3.76254e-07C14.6497 -3.76254e-07 15.1146 0.12064 15.6957 0.372056C15.8432 0.43663 15.9021 0.462313 15.9542 0.483786C16.0978 0.542916 16.1669 0.56 16.2402 0.56C16.5878 0.56 17.2185 0.402322 18.0812 0.0734544C18.9932 -0.274175 19.8825 0.629785 19.5201 1.53596L17.2801 7.13596C17.0503 7.71027 16.3985 7.98962 15.8242 7.75989C15.2499 7.53017 14.9705 6.87836 15.2003 6.30404L16.6096 2.78073C16.4808 2.79355 16.3578 2.8 16.2402 2.8C15.8314 2.8 15.4927 2.7162 15.1013 2.55506C15.0241 2.52324 14.9394 2.4863 14.8064 2.42794C14.4822 2.28767 14.2985 2.24 14.0002 2.24C13.7048 2.24 13.5313 2.28561 13.2114 2.42581C13.1015 2.47449 13.0319 2.50524 12.9706 2.53126C12.5512 2.70952 12.2002 2.8 11.7602 2.8C11.6419 2.8 11.5189 2.79386 11.3911 2.78165L12.8001 6.30404Z" fill="#A9A9A9"/>
													</g>
													<defs>
													<clipPath id="clip6">
													<rect width="28" height="28" fill="white"/>
													</clipPath>
													</defs>
												</svg>
											$21,000 - $25,000</span>
											<span>/monthly</span>
										</div>
										<div class="d-flex mb-3">
											<span class="text-black me-auto font-w500">
												<svg class="me-3" width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M12 0C6.93398 0 2.8125 4.12148 2.8125 9.1875C2.8125 10.8091 3.24094 12.4034 4.05145 13.7979C4.24041 14.123 4.45162 14.4398 4.67934 14.7396L11.6008 24H12.3991L19.3207 14.7397C19.5483 14.4398 19.7595 14.1231 19.9485 13.7979C20.7591 12.4034 21.1875 10.8091 21.1875 9.1875C21.1875 4.12148 17.066 0 12 0ZM12 12.2344C10.32 12.2344 8.95312 10.8675 8.95312 9.1875C8.95312 7.50745 10.32 6.14062 12 6.14062C13.68 6.14062 15.0469 7.50745 15.0469 9.1875C15.0469 10.8675 13.68 12.2344 12 12.2344Z" fill="#A9A9A9"/>
												</svg>
											Manchester, England</span>
											<span>View Maps</span>
										</div>
										<div>
											<span class="text-black me-auto font-w500">
												<svg class="me-3" width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M21.9999 5.99971H20.0001V21.9999H21.9999C23.0997 21.9999 24 21.0993 24 19.9995V7.99951C24 6.9 23.0997 5.99971 21.9999 5.99971Z" fill="#A9A9A9"/>
													<path d="M15.9999 5.9997V3.9999C15.9999 2.90009 15.0996 1.9998 14.0001 1.9998H9.9999C8.90039 1.9998 8.0001 2.90009 8.0001 3.9999V5.9997H6V21.9999H18V5.9997H15.9999ZM14.0001 5.9997H9.9999V3.99961H14.0001V5.9997Z" fill="#A9A9A9"/>
													<path d="M2.0001 5.99971C0.900293 5.99971 0 6.9 0 7.99981V19.9998C0 21.0996 0.900293 22.0002 2.0001 22.0002H3.9999V5.99971H2.0001Z" fill="#A9A9A9"/>
												</svg>
											FREELANCE, PART TIME</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12">
						<div class="d-sm-flex align-items-center mb-sm-3 mt-sm-2 mt-2  mb-2">
							<h4 class="fs-20 text-black me-auto mb-sm-0 mb-2">Featured Companies</h4>
							<a href="companies.html" class="btn btn-outline-primary rounded mb-sm-0 mb-1">View More</a>
						</div>
					</div>
					<div class="col-xl-12">
						<div class="row sp-sm-15">
							<div class="col-xl-2 col-xxl-3 col-lg-3 col-md-4 col-6">
								<div class="card text-center">
									<div class="card-body">
										<svg class="mb-sm-4 mb-3" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#D3D3D3"/>
											<path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#40C7CF"/>
											<path d="M20.6216 20.6219C23.142 18.1015 26.1342 16.1022 29.4273 14.7381C32.7205 13.374 36.25 12.672 39.8145 12.672C43.3789 12.672 46.9085 13.374 50.2016 14.7381C53.4947 16.1022 56.4869 18.1015 59.0074 20.6219C61.5278 23.1424 63.5271 26.1346 64.8912 29.4277C66.2552 32.7208 66.9573 36.2504 66.9573 39.8148C66.9573 43.3793 66.2552 46.9088 64.8912 50.202C63.5271 53.4951 61.5278 56.4873 59.0074 59.0077L49.4109 49.4113C50.6711 48.1511 51.6708 46.6549 52.3528 45.0084C53.0348 43.3618 53.3859 41.5971 53.3859 39.8148C53.3859 38.0326 53.0348 36.2678 52.3528 34.6213C51.6708 32.9747 50.6711 31.4786 49.4109 30.2184C48.1507 28.9582 46.6546 27.9585 45.008 27.2765C43.3615 26.5944 41.5967 26.2434 39.8145 26.2434C38.0322 26.2434 36.2675 26.5944 34.6209 27.2765C32.9743 27.9585 31.4782 28.9582 30.218 30.2184L20.6216 20.6219Z" fill="#8FD7FF"/>
											<path d="M20.6215 59.0077C15.5312 53.9174 12.6715 47.0135 12.6715 39.8148C12.6715 32.6161 15.5312 25.7122 20.6215 20.6219C25.7118 15.5316 32.6157 12.6719 39.8144 12.6719C47.0131 12.6719 53.917 15.5316 59.0073 20.6219L49.4108 30.2183C46.8657 27.6732 43.4138 26.2434 39.8144 26.2434C36.215 26.2434 32.7631 27.6732 30.2179 30.2183C27.6728 32.7635 26.243 36.2154 26.243 39.8148C26.243 43.4141 27.6728 46.8661 30.2179 49.4112L20.6215 59.0077Z" fill="white"/>
										</svg>
										<h6 class="font-w600 fs-16 mb-1"><a href="application.html" class="text-black">Herman-Carter</a></h6>
										<span class="text-primary">21 Vacancy</span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-xxl-3 col-lg-3 col-md-4 col-6">
								<div class="card text-center">
									<div class="card-body">
										<svg class="mb-sm-4 mb-3" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#D3D3D3"/>
											<path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#4B58CF"/>
											<path d="M20.6216 20.6219C23.142 18.1015 26.1342 16.1022 29.4273 14.7381C32.7205 13.374 36.25 12.672 39.8145 12.672C43.3789 12.672 46.9085 13.374 50.2016 14.7381C53.4947 16.1022 56.4869 18.1015 59.0074 20.6219C61.5278 23.1424 63.5271 26.1346 64.8912 29.4277C66.2552 32.7208 66.9573 36.2504 66.9573 39.8148C66.9573 43.3793 66.2552 46.9088 64.8912 50.202C63.5271 53.4951 61.5278 56.4873 59.0074 59.0077L49.4109 49.4113C50.6711 48.1511 51.6708 46.6549 52.3528 45.0084C53.0348 43.3618 53.3859 41.5971 53.3859 39.8148C53.3859 38.0326 53.0348 36.2678 52.3528 34.6213C51.6708 32.9747 50.6711 31.4786 49.4109 30.2184C48.1507 28.9582 46.6546 27.9585 45.008 27.2765C43.3615 26.5944 41.5967 26.2434 39.8145 26.2434C38.0322 26.2434 36.2675 26.5944 34.6209 27.2765C32.9743 27.9585 31.4782 28.9582 30.218 30.2184L20.6216 20.6219Z" fill="#8FD7FF"/>
											<path d="M20.6215 59.0077C15.5312 53.9174 12.6715 47.0135 12.6715 39.8148C12.6715 32.6161 15.5312 25.7122 20.6215 20.6219C25.7118 15.5316 32.6157 12.6719 39.8144 12.6719C47.0131 12.6719 53.917 15.5316 59.0073 20.6219L49.4108 30.2183C46.8657 27.6732 43.4138 26.2434 39.8144 26.2434C36.215 26.2434 32.7631 27.6732 30.2179 30.2183C27.6728 32.7635 26.243 36.2154 26.243 39.8148C26.243 43.4141 27.6728 46.8661 30.2179 49.4112L20.6215 59.0077Z" fill="white"/>
										</svg>
										<h6 class="font-w600 fs-16 mb-1"><a href="application.html" class="text-black">Funk Inc</a></h6>
										<span class="text-primary">17 Vacancy</span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-xxl-3 col-lg-3 col-md-4 col-6">
								<div class="card text-center">
									<div class="card-body">
										<svg class="mb-sm-4 mb-3" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#D3D3D3"/>
											<path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#5D3387"/>
											<path d="M20.6216 20.6219C23.142 18.1015 26.1342 16.1022 29.4273 14.7381C32.7205 13.374 36.25 12.672 39.8145 12.672C43.3789 12.672 46.9085 13.374 50.2016 14.7381C53.4947 16.1022 56.4869 18.1015 59.0074 20.6219C61.5278 23.1424 63.5271 26.1346 64.8912 29.4277C66.2552 32.7208 66.9573 36.2504 66.9573 39.8148C66.9573 43.3793 66.2552 46.9088 64.8912 50.202C63.5271 53.4951 61.5278 56.4873 59.0074 59.0077L49.4109 49.4113C50.6711 48.1511 51.6708 46.6549 52.3528 45.0084C53.0348 43.3618 53.3859 41.5971 53.3859 39.8148C53.3859 38.0326 53.0348 36.2678 52.3528 34.6213C51.6708 32.9747 50.6711 31.4786 49.4109 30.2184C48.1507 28.9582 46.6546 27.9585 45.008 27.2765C43.3615 26.5944 41.5967 26.2434 39.8145 26.2434C38.0322 26.2434 36.2675 26.5944 34.6209 27.2765C32.9743 27.9585 31.4782 28.9582 30.218 30.2184L20.6216 20.6219Z" fill="#8FD7FF"/>
											<path d="M20.6215 59.0077C15.5312 53.9174 12.6715 47.0135 12.6715 39.8148C12.6715 32.6161 15.5312 25.7122 20.6215 20.6219C25.7118 15.5316 32.6156 12.6719 39.8144 12.6719C47.0131 12.6719 53.917 15.5316 59.0073 20.6219L49.4108 30.2183C46.8657 27.6732 43.4137 26.2434 39.8144 26.2434C36.215 26.2434 32.7631 27.6732 30.2179 30.2183C27.6728 32.7635 26.243 36.2154 26.243 39.8148C26.243 43.4141 27.6728 46.8661 30.2179 49.4112L20.6215 59.0077Z" fill="white"/>
										</svg>
										<h6 class="font-w600 fs-16 mb-1"><a href="application.html" class="text-black">Simonis Ltd</a></h6>
										<span class="text-primary">31 Vacancy</span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-xxl-3 col-lg-3 col-md-4 col-6">
								<div class="card text-center">
									<div class="card-body">
										<svg class="mb-sm-4 mb-3" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#D3D3D3"/>
											<path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#FF4848"/>
											<path d="M20.6216 20.6219C23.142 18.1015 26.1342 16.1022 29.4273 14.7381C32.7205 13.374 36.25 12.672 39.8145 12.672C43.3789 12.672 46.9085 13.374 50.2016 14.7381C53.4947 16.1022 56.4869 18.1015 59.0074 20.6219C61.5278 23.1424 63.5271 26.1346 64.8912 29.4277C66.2552 32.7208 66.9573 36.2504 66.9573 39.8148C66.9573 43.3793 66.2552 46.9088 64.8912 50.202C63.5271 53.4951 61.5278 56.4873 59.0074 59.0077L49.4109 49.4113C50.6711 48.1511 51.6708 46.6549 52.3528 45.0084C53.0348 43.3618 53.3859 41.5971 53.3859 39.8148C53.3859 38.0326 53.0348 36.2678 52.3528 34.6213C51.6708 32.9747 50.6711 31.4786 49.4109 30.2184C48.1507 28.9582 46.6546 27.9585 45.008 27.2765C43.3615 26.5944 41.5967 26.2434 39.8145 26.2434C38.0322 26.2434 36.2675 26.5944 34.6209 27.2765C32.9743 27.9585 31.4782 28.9582 30.218 30.2184L20.6216 20.6219Z" fill="#8FD7FF"/>
											<path d="M20.6215 59.0077C15.5312 53.9174 12.6715 47.0135 12.6715 39.8148C12.6715 32.6161 15.5312 25.7122 20.6215 20.6219C25.7118 15.5316 32.6157 12.6719 39.8144 12.6719C47.0131 12.6719 53.917 15.5316 59.0073 20.6219L49.4108 30.2183C46.8657 27.6732 43.4138 26.2434 39.8144 26.2434C36.215 26.2434 32.7631 27.6732 30.2179 30.2183C27.6728 32.7635 26.243 36.2154 26.243 39.8148C26.243 43.4141 27.6728 46.8661 30.2179 49.4112L20.6215 59.0077Z" fill="white"/>
										</svg>
										<h6 class="font-w600 fs-16 mb-1"><a href="application.html" class="text-black">Mosciski Inc</a></h6>
										<span class="text-primary">7 Vacancy</span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-xxl-3 col-lg-3 col-md-4 col-6">
								<div class="card text-center">
									<div class="card-body">
										<svg class="mb-sm-4 mb-3" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#D3D3D3"/>
											<path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#3869E8"/>
											<path d="M20.6216 20.6219C23.142 18.1015 26.1342 16.1022 29.4273 14.7381C32.7205 13.374 36.25 12.672 39.8145 12.672C43.3789 12.672 46.9085 13.374 50.2016 14.7381C53.4947 16.1022 56.4869 18.1015 59.0074 20.6219C61.5278 23.1424 63.5271 26.1346 64.8912 29.4277C66.2552 32.7208 66.9573 36.2504 66.9573 39.8148C66.9573 43.3793 66.2552 46.9088 64.8912 50.202C63.5271 53.4951 61.5278 56.4873 59.0074 59.0077L49.4109 49.4113C50.6711 48.1511 51.6708 46.6549 52.3528 45.0084C53.0348 43.3618 53.3859 41.5971 53.3859 39.8148C53.3859 38.0326 53.0348 36.2678 52.3528 34.6213C51.6708 32.9747 50.6711 31.4786 49.4109 30.2184C48.1507 28.9582 46.6546 27.9585 45.008 27.2765C43.3615 26.5944 41.5967 26.2434 39.8145 26.2434C38.0322 26.2434 36.2675 26.5944 34.6209 27.2765C32.9743 27.9585 31.4782 28.9582 30.218 30.2184L20.6216 20.6219Z" fill="#8FD7FF"/>
											<path d="M20.6215 59.0077C15.5312 53.9174 12.6715 47.0135 12.6715 39.8148C12.6715 32.6161 15.5312 25.7122 20.6215 20.6219C25.7118 15.5316 32.6157 12.6719 39.8144 12.6719C47.0131 12.6719 53.917 15.5316 59.0073 20.6219L49.4108 30.2183C46.8657 27.6732 43.4138 26.2434 39.8144 26.2434C36.215 26.2434 32.7631 27.6732 30.2179 30.2183C27.6728 32.7635 26.243 36.2154 26.243 39.8148C26.243 43.4141 27.6728 46.8661 30.2179 49.4112L20.6215 59.0077Z" fill="white"/>
										</svg>
										<h6 class="font-w600 fs-16 mb-1"><a href="application.html" class="text-black">Williamson Inc</a></h6>
										<span class="text-primary">4 Vacancy</span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-xxl-3 col-lg-3 col-md-4 col-6">
								<div class="card text-center">
									<div class="card-body">
										<svg class="mb-sm-4 mb-3" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#D3D3D3"/>
											<path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#81EF4D"/>
											<path d="M20.6216 20.6219C23.142 18.1015 26.1342 16.1022 29.4273 14.7381C32.7205 13.374 36.25 12.672 39.8145 12.672C43.3789 12.672 46.9085 13.374 50.2016 14.7381C53.4947 16.1022 56.4869 18.1015 59.0074 20.6219C61.5278 23.1424 63.5271 26.1346 64.8912 29.4277C66.2552 32.7208 66.9573 36.2504 66.9573 39.8148C66.9573 43.3793 66.2552 46.9088 64.8912 50.202C63.5271 53.4951 61.5278 56.4873 59.0074 59.0077L49.4109 49.4113C50.6711 48.1511 51.6708 46.6549 52.3528 45.0084C53.0348 43.3618 53.3859 41.5971 53.3859 39.8148C53.3859 38.0326 53.0348 36.2678 52.3528 34.6213C51.6708 32.9747 50.6711 31.4786 49.4109 30.2184C48.1507 28.9582 46.6546 27.9585 45.008 27.2765C43.3615 26.5944 41.5967 26.2434 39.8145 26.2434C38.0322 26.2434 36.2675 26.5944 34.6209 27.2765C32.9743 27.9585 31.4782 28.9582 30.218 30.2184L20.6216 20.6219Z" fill="#8FD7FF"/>
											<path d="M20.6215 59.0077C15.5312 53.9174 12.6715 47.0135 12.6715 39.8148C12.6715 32.6161 15.5312 25.7122 20.6215 20.6219C25.7118 15.5316 32.6157 12.6719 39.8144 12.6719C47.0131 12.6719 53.917 15.5316 59.0073 20.6219L49.4108 30.2183C46.8657 27.6732 43.4138 26.2434 39.8144 26.2434C36.215 26.2434 32.7631 27.6732 30.2179 30.2183C27.6728 32.7635 26.243 36.2154 26.243 39.8148C26.243 43.4141 27.6728 46.8661 30.2179 49.4112L20.6215 59.0077Z" fill="white"/>
										</svg>
										<h6 class="font-w600 fs-16 mb-1"><a href="application.html" class="text-black">Donnelly Ltd</a></h6>
										<span class="text-primary">7 Vacancy</span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-xxl-3 col-lg-3 col-md-4 col-6">
								<div class="card text-center">
									<div class="card-body">
										<svg class="mb-sm-4 mb-3" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#D3D3D3"/>
											<path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#986E48"/>
											<path d="M20.6216 20.6219C23.142 18.1015 26.1342 16.1022 29.4273 14.7381C32.7205 13.374 36.25 12.672 39.8145 12.672C43.3789 12.672 46.9085 13.374 50.2016 14.7381C53.4947 16.1022 56.4869 18.1015 59.0074 20.6219C61.5278 23.1424 63.5271 26.1346 64.8912 29.4277C66.2552 32.7208 66.9573 36.2504 66.9573 39.8148C66.9573 43.3793 66.2552 46.9088 64.8912 50.202C63.5271 53.4951 61.5278 56.4873 59.0074 59.0077L49.4109 49.4113C50.6711 48.1511 51.6708 46.6549 52.3528 45.0084C53.0348 43.3618 53.3859 41.5971 53.3859 39.8148C53.3859 38.0326 53.0348 36.2678 52.3528 34.6213C51.6708 32.9747 50.6711 31.4786 49.4109 30.2184C48.1507 28.9582 46.6546 27.9585 45.008 27.2765C43.3615 26.5944 41.5967 26.2434 39.8145 26.2434C38.0322 26.2434 36.2675 26.5944 34.6209 27.2765C32.9743 27.9585 31.4782 28.9582 30.218 30.2184L20.6216 20.6219Z" fill="#8FD7FF"/>
											<path d="M20.6215 59.0077C15.5312 53.9174 12.6715 47.0135 12.6715 39.8148C12.6715 32.6161 15.5312 25.7122 20.6215 20.6219C25.7118 15.5316 32.6157 12.672 39.8144 12.672C47.0131 12.672 53.917 15.5316 59.0073 20.6219L49.4108 30.2184C46.8657 27.6732 43.4138 26.2434 39.8144 26.2434C36.215 26.2434 32.7631 27.6732 30.2179 30.2184C27.6728 32.7635 26.243 36.2154 26.243 39.8148C26.243 43.4142 27.6728 46.8661 30.2179 49.4113L20.6215 59.0077Z" fill="white"/>
										</svg>
										<h6 class="font-w600 fs-16 mb-1"><a href="application.html" class="text-black">Bosco-Reilly</a></h6>
										<span class="text-primary">21 Vacancy</span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-xxl-3 col-lg-3 col-md-4 col-6">
								<div class="card text-center">
									<div class="card-body">
										<svg class="mb-sm-4 mb-3" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#D3D3D3"/>
											<path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#9B70A2"/>
											<path d="M20.6216 20.6219C23.142 18.1015 26.1342 16.1022 29.4273 14.7381C32.7205 13.374 36.25 12.672 39.8145 12.672C43.3789 12.672 46.9085 13.374 50.2016 14.7381C53.4947 16.1022 56.4869 18.1015 59.0074 20.6219C61.5278 23.1424 63.5271 26.1346 64.8912 29.4277C66.2552 32.7208 66.9573 36.2504 66.9573 39.8148C66.9573 43.3793 66.2552 46.9088 64.8912 50.202C63.5271 53.4951 61.5278 56.4873 59.0074 59.0077L49.4109 49.4113C50.6711 48.1511 51.6708 46.6549 52.3528 45.0084C53.0348 43.3618 53.3859 41.5971 53.3859 39.8148C53.3859 38.0326 53.0348 36.2678 52.3528 34.6213C51.6708 32.9747 50.6711 31.4786 49.4109 30.2184C48.1507 28.9582 46.6546 27.9585 45.008 27.2765C43.3615 26.5944 41.5967 26.2434 39.8145 26.2434C38.0322 26.2434 36.2675 26.5944 34.6209 27.2765C32.9743 27.9585 31.4782 28.9582 30.218 30.2184L20.6216 20.6219Z" fill="#8FD7FF"/>
											<path d="M20.6215 59.0077C15.5312 53.9174 12.6715 47.0135 12.6715 39.8148C12.6715 32.6161 15.5312 25.7122 20.6215 20.6219C25.7118 15.5316 32.6157 12.672 39.8144 12.672C47.0131 12.672 53.917 15.5316 59.0073 20.6219L49.4108 30.2184C46.8657 27.6732 43.4138 26.2434 39.8144 26.2434C36.215 26.2434 32.7631 27.6732 30.2179 30.2184C27.6728 32.7635 26.243 36.2154 26.243 39.8148C26.243 43.4142 27.6728 46.8661 30.2179 49.4113L20.6215 59.0077Z" fill="white"/>
										</svg>
										<h6 class="font-w600 fs-16 mb-1"><a href="application.html" class="text-black">Kerluke Inc</a></h6>
										<span class="text-primary">18 Vacancy</span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-xxl-3 col-lg-3 col-md-4 col-6">
								<div class="card text-center">
									<div class="card-body">
										<svg class="mb-sm-4 mb-3" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#D3D3D3"/>
											<path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#6EC061"/>
											<path d="M20.6216 20.6219C23.142 18.1015 26.1342 16.1022 29.4273 14.7381C32.7205 13.374 36.25 12.672 39.8145 12.672C43.3789 12.672 46.9085 13.374 50.2016 14.7381C53.4947 16.1022 56.4869 18.1015 59.0074 20.6219C61.5278 23.1424 63.5271 26.1346 64.8912 29.4277C66.2552 32.7208 66.9573 36.2504 66.9573 39.8148C66.9573 43.3793 66.2552 46.9088 64.8912 50.202C63.5271 53.4951 61.5278 56.4873 59.0074 59.0077L49.4109 49.4113C50.6711 48.1511 51.6708 46.6549 52.3528 45.0084C53.0348 43.3618 53.3859 41.5971 53.3859 39.8148C53.3859 38.0326 53.0348 36.2678 52.3528 34.6213C51.6708 32.9747 50.6711 31.4786 49.4109 30.2184C48.1507 28.9582 46.6546 27.9585 45.008 27.2765C43.3615 26.5944 41.5967 26.2434 39.8145 26.2434C38.0322 26.2434 36.2675 26.5944 34.6209 27.2765C32.9743 27.9585 31.4782 28.9582 30.218 30.2184L20.6216 20.6219Z" fill="#8FD7FF"/>
											<path d="M20.6215 59.0077C15.5312 53.9174 12.6715 47.0135 12.6715 39.8148C12.6715 32.6161 15.5312 25.7122 20.6215 20.6219C25.7118 15.5316 32.6156 12.672 39.8144 12.672C47.0131 12.672 53.917 15.5316 59.0073 20.6219L49.4108 30.2184C46.8657 27.6732 43.4137 26.2434 39.8144 26.2434C36.215 26.2434 32.7631 27.6732 30.2179 30.2184C27.6728 32.7635 26.243 36.2154 26.243 39.8148C26.243 43.4142 27.6728 46.8661 30.2179 49.4113L20.6215 59.0077Z" fill="white"/>
										</svg>
										<h6 class="font-w600 fs-16 mb-1"><a href="application.html" class="text-black">Ferry Inc</a></h6>
										<span class="text-primary">12 Vacancy</span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-xxl-3 col-lg-3 col-md-4 col-6">
								<div class="card text-center">
									<div class="card-body">
										<svg class="mb-sm-4 mb-3" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#D3D3D3"/>
											<path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#F3C831"/>
											<path d="M20.6216 20.6219C23.142 18.1015 26.1342 16.1022 29.4273 14.7381C32.7205 13.374 36.25 12.672 39.8145 12.672C43.3789 12.672 46.9085 13.374 50.2016 14.7381C53.4947 16.1022 56.4869 18.1015 59.0074 20.6219C61.5278 23.1424 63.5271 26.1346 64.8912 29.4277C66.2552 32.7208 66.9573 36.2504 66.9573 39.8148C66.9573 43.3793 66.2552 46.9088 64.8912 50.202C63.5271 53.4951 61.5278 56.4873 59.0074 59.0077L49.4109 49.4113C50.6711 48.1511 51.6708 46.6549 52.3528 45.0084C53.0348 43.3618 53.3859 41.5971 53.3859 39.8148C53.3859 38.0326 53.0348 36.2678 52.3528 34.6213C51.6708 32.9747 50.6711 31.4786 49.4109 30.2184C48.1507 28.9582 46.6546 27.9585 45.008 27.2765C43.3615 26.5944 41.5967 26.2434 39.8145 26.2434C38.0322 26.2434 36.2675 26.5944 34.6209 27.2765C32.9743 27.9585 31.4782 28.9582 30.218 30.2184L20.6216 20.6219Z" fill="#8FD7FF"/>
											<path d="M20.6215 59.0077C15.5312 53.9174 12.6715 47.0135 12.6715 39.8148C12.6715 32.6161 15.5312 25.7122 20.6215 20.6219C25.7118 15.5316 32.6157 12.672 39.8144 12.672C47.0131 12.672 53.917 15.5316 59.0073 20.6219L49.4108 30.2184C46.8657 27.6732 43.4138 26.2434 39.8144 26.2434C36.215 26.2434 32.7631 27.6732 30.2179 30.2184C27.6728 32.7635 26.243 36.2154 26.243 39.8148C26.243 43.4142 27.6728 46.8661 30.2179 49.4113L20.6215 59.0077Z" fill="white"/>
										</svg>
										<h6 class="font-w600 fs-16 mb-1"><a href="application.html" class="text-black">Carroll-Walker</a></h6>
										<span class="text-primary">5 Vacancy</span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-xxl-3 col-lg-3 col-md-4 col-6">
								<div class="card text-center">
									<div class="card-body">
										<svg class="mb-sm-4 mb-3" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#D3D3D3"/>
											<path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#F331E0"/>
											<path d="M20.6216 20.6219C23.142 18.1015 26.1342 16.1022 29.4273 14.7381C32.7205 13.374 36.25 12.672 39.8145 12.672C43.3789 12.672 46.9085 13.374 50.2016 14.7381C53.4947 16.1022 56.4869 18.1015 59.0074 20.6219C61.5278 23.1424 63.5271 26.1346 64.8912 29.4277C66.2552 32.7208 66.9573 36.2504 66.9573 39.8148C66.9573 43.3793 66.2552 46.9088 64.8912 50.202C63.5271 53.4951 61.5278 56.4873 59.0074 59.0077L49.4109 49.4113C50.6711 48.1511 51.6708 46.6549 52.3528 45.0084C53.0348 43.3618 53.3859 41.5971 53.3859 39.8148C53.3859 38.0326 53.0348 36.2678 52.3528 34.6213C51.6708 32.9747 50.6711 31.4786 49.4109 30.2184C48.1507 28.9582 46.6546 27.9585 45.008 27.2765C43.3615 26.5944 41.5967 26.2434 39.8145 26.2434C38.0322 26.2434 36.2675 26.5944 34.6209 27.2765C32.9743 27.9585 31.4782 28.9582 30.218 30.2184L20.6216 20.6219Z" fill="#8FD7FF"/>
											<path d="M20.6215 59.0077C15.5312 53.9174 12.6715 47.0135 12.6715 39.8148C12.6715 32.6161 15.5312 25.7122 20.6215 20.6219C25.7118 15.5316 32.6157 12.672 39.8144 12.672C47.0131 12.672 53.917 15.5316 59.0073 20.6219L49.4108 30.2184C46.8657 27.6732 43.4138 26.2434 39.8144 26.2434C36.215 26.2434 32.7631 27.6732 30.2179 30.2184C27.6728 32.7635 26.243 36.2154 26.243 39.8148C26.243 43.4142 27.6728 46.8661 30.2179 49.4113L20.6215 59.0077Z" fill="white"/>
										</svg>
										<h6 class="font-w600 fs-16 mb-1"><a href="application.html" class="text-black">Russel Ltd</a></h6>
										<span class="text-primary">53 Vacancy</span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-xxl-3 col-lg-3 col-md-4 col-6">
								<div class="card text-center">
									<div class="card-body">
										<svg class="mb-sm-4 mb-3" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#D3D3D3"/>
											<path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#1A205C"/>
											<path d="M20.6216 20.6219C23.142 18.1015 26.1342 16.1022 29.4273 14.7381C32.7205 13.374 36.25 12.672 39.8145 12.672C43.3789 12.672 46.9085 13.374 50.2016 14.7381C53.4947 16.1022 56.4869 18.1015 59.0074 20.6219C61.5278 23.1424 63.5271 26.1346 64.8912 29.4277C66.2552 32.7208 66.9573 36.2504 66.9573 39.8148C66.9573 43.3793 66.2552 46.9088 64.8912 50.202C63.5271 53.4951 61.5278 56.4873 59.0074 59.0077L49.4109 49.4113C50.6711 48.1511 51.6708 46.6549 52.3528 45.0084C53.0348 43.3618 53.3859 41.5971 53.3859 39.8148C53.3859 38.0326 53.0348 36.2678 52.3528 34.6213C51.6708 32.9747 50.6711 31.4786 49.4109 30.2184C48.1507 28.9582 46.6546 27.9585 45.008 27.2765C43.3615 26.5944 41.5967 26.2434 39.8145 26.2434C38.0322 26.2434 36.2675 26.5944 34.6209 27.2765C32.9743 27.9585 31.4782 28.9582 30.218 30.2184L20.6216 20.6219Z" fill="#8FD7FF"/>
											<path d="M20.6215 59.0077C15.5312 53.9174 12.6715 47.0135 12.6715 39.8148C12.6715 32.6161 15.5312 25.7122 20.6215 20.6219C25.7118 15.5316 32.6157 12.672 39.8144 12.672C47.0131 12.672 53.917 15.5316 59.0073 20.6219L49.4108 30.2184C46.8657 27.6732 43.4138 26.2434 39.8144 26.2434C36.215 26.2434 32.7631 27.6732 30.2179 30.2184C27.6728 32.7635 26.243 36.2154 26.243 39.8148C26.243 43.4142 27.6728 46.8661 30.2179 49.4113L20.6215 59.0077Z" fill="white"/>
										</svg>
										<h6 class="font-w600 fs-16 mb-1"><a href="application.html" class="text-black">Murray-Marvin</a></h6>
										<span class="text-primary">4 Vacancy</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a> 2023</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
     <script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="vendor/chart-js/chart.bundle.min.js"></script>
	<script src="vendor/owl-carousel/owl.carousel.js"></script>
	
	<!-- Chart piety plugin files -->
    <script src="vendor/peity/jquery.peity.min.js"></script>
	
	<!-- Apex Chart -->
	<script src="vendor/apexchart/apexchart.js"></script>
	
	<!-- Dashboard 1 -->
	<script src="js/dashboard/dashboard-1.js"></script>
	<script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
	

	<script>
		function carouselReview(){
			/*  testimonial one function by = owl.carousel.js */
			function checkDirection() {
				var htmlClassName = document.getElementsByTagName('html')[0].getAttribute('class');
				if(htmlClassName == 'rtl') {
					return true;
				} else {
					return false;
				
				}
			}
			
			jQuery('.testimonial-one').owlCarousel({
				loop:true,
				autoplay:true,
				margin:30,
				nav:false,
				dots: false,
				rtl: checkDirection(),
				left:true,
				navText: ['', ''],
				responsive:{
					0:{
						items:1
					},			
					1200:{
						items:2
					},
					1600:{
						items:3
					}
				}
			})			
		}
		jQuery(window).on('load',function(){
			setTimeout(function(){
				carouselReview();
			}, 1000); 
		});
	</script>
</body>
</html>