<style>
	.blob {
		background: red;
		border-radius: 50%;
		margin: 0, auto;
		height: 9px;
		width: 9px;

		box-shadow: 0 0 0 0 rgba(0, 0, 0, 1);
		transform: scale(1);
		animation: pulse 2s infinite;
	}

	@keyframes pulse {
		0% {
			transform: scale(0.95);
			box-shadow: 0 0 0 0 rgb(153, 0, 51);
		}

		70% {
			transform: scale(1);
			box-shadow: 0 0 0 10px rgba(0, 0, 0, 0);
		}

		100% {
			transform: scale(0.95);
			box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
		}
	}
</style>

<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

	<div class="container-fluid">
		<div class="d-flex align-items-center">
			<div class="site-logo"><img src="./asset/images/KU-logo2.png"width = "75" height = "85"></div>
			<div class="ml-auto">
				<nav class="site-navigation position-relative text-right" role="navigation">
					<ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
						<li><a href="#home-section" class="nav-link" style = "color: black;">หน้าแรก</a></li>
						<li><a href="#all-section" class="nav-link"style = "color: black;">ภาพรวม</a></li>
						<li><a href="#group-section" class="nav-link"style = "color: black;">แยกตามกลุ่ม</a></li>
						<li><a href="#area-section" class="nav-link"style = "color: black;">แยกตามพื้นที่</a></li>
						<li><a href="#relation-section" class="nav-link"style = "color: black;">ความสัมพันธ์</a></li>
						<li><a href="#world-section" class="nav-link"style = "color: black;">ทั่วโลก</a></li>
						<li>
							<div class="blob"></div>
						</li>
						<li><a style = "color: black;">อัปเดตล่าสุด 26/04/63</a></li>
					</ul>
				</nav>
				<a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>
			</div>

		</div>
	</div>

</header>