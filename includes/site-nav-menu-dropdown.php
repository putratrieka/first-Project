<!--Site-Navigation Menu Dropdown Categories-->
<?php
	$sql="SELECT * FROM categories WHERE parent=0";
	$cate_1 = $db->query($sql);
?>
			<div class="site-nav-menu-dropdown">
					<ul class="site-menu-root">
						<?php while ($parent = mysqli_fetch_assoc($cate_1)):?>
						<?php 
							$parent_id = $parent['id'];
							$sql2="SELECT * FROM categories WHERE parent='$parent_id'";
							$cate_2 =$db->query($sql2);
						?>
						<li class="site-menu-root-item" id="level-1-category-no1">
							<a href="#" ><span><?php echo $parent['category']; ?></span></a>
							<ul class="site-menu-root-level-2">
								<?php while ($child = mysqli_fetch_assoc($cate_2)):?>
								<li><a href="#"><?php echo $child['category']; ?></a></li>
								<?php endwhile;?>
							</ul>
						</li>
					<?php endwhile;?>
				</ul>
				</div>
				<!--end of site-nav-menu-dropdown-->			
		<!-- end of slider-and-nav-menu-->
		</div>