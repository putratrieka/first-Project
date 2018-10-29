<?php
	$sql="SELECT * FROM favorite WHERE parent=0";
	$fav = $db->query($sql);
?>	
	<header>
		<div class="wrapper">
		<div class="nav-wrapper-container">
			<div class="container-navbar">
				<div class="container-navbar-left">
					<ul>
						<li><a href="#">Jual</a></li>
						<li class="with-border"><a href="#">Download</a></li>
						<li><a href="#">Kunjungi kami di</a></li>
						<li><a href="#" title="Kunjungi kami di line"><i class="fab fa-line"></i></a></li>
						<li><a href="#" title="Kunjungi kami di facebook"><i class="fab fa-facebook"></i></a></li>
						<li><a href="https://www.instagram.com/triekaputra/" title="Kunjungi kami di instaram"><i class="fab fa-instagram"></i></a></li>
					</ul>					
				</div>
				<div class="container-navbar-right">
					<ul>
						<li><a href="#">Notifikasi <i class="far fa-bell"></i></a></li>
						<li><a href="#">Bantuan <i class="far fa-question-circle"></i></a></li>
					</ul>						
				</div>
			<!--end of container-navbar-->
			</div>
		<!-- end of nav-wrapper-container-->
		</div>
		<div class="navigation-bar">
			<div class="container">
				<div class="logo">
					<a href="index.php"><img src="images/TEP-Logo.png"></a>
				</div>	
			<div class="search-area">
				<input class="search-box" type="text" name="" placeholder="Cari produk, merek dan toko" >
				<button class="search_btn btn btn-white"><i class="fas fa-search"></i></button>
				<div class="hot-words">
					<?php while ($parent = mysqli_fetch_assoc($fav)):?>
						<?php $parent_id = $parent['id'];?>
						<li><a href="#"><?php echo $parent['favorite']; ?></a></li>	
					<?php endwhile;?>		
				</div>		
			</div>
			<div class="user-menu">
				<ul>
					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-hoshpopup="true" aria-expaded="false"><i class="fas fa-user"></i> My Account</a>
						<!--===Dropdown-Box===-->
						<div class="dropdown-menu" dropdown-menu-right bg-dark" style="width: 250px;">
							<a href="#"><button type="button" class="dropdown-item"><i class="fas fa-user"></i> Your Account</button></a>
							<a href="#"><button type="button" class="dropdown-item"><i class="fas fa-cube"></i> Your order</button></a>
							<a href="#"><button type="button" class="dropdown-item"><i class="fas fa-heart"></i> Wishlist</button></a>
							<div class="dropdown-divider"></div>
							<p class="text-center text-white" style="height: 15px; line-height: 2px;"><small>if you are a new user</small></p>
							<a href="register.php"><button type="button" class="dropdown-item text-center"><i class="fas fa-user"></i> Register</button></a>
							<a href="#"><button type="button" class="dropdown-item text-center" style="background: #cc0e4e;"><i class="fas fa-user"></i> LOGIN</button></a>
						</div>
					</li>
					<li><a href="#"><i class="fas fa-shopping-cart"></i> Cart</a></li>
				</ul>
				
			</div>
			<!-- end of container-->
			</div>
		<!-- end of navigation-bar-->
		</div>
	</div>
	</header>