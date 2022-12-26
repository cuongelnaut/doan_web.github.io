<?php
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}else{
		$id = '';
	}
	$sql_cate = mysqli_query($con,"SELECT * FROM danhmuc,sanpham WHERE danhmuc.MaDM=sanpham.MaDM AND sanpham.MaDM='$id' ORDER BY sanpham.MaSP DESC");	
	$sql_category = mysqli_query($con,"SELECT * FROM danhmuc,sanpham WHERE danhmuc.MaDM=sanpham.MaDM AND sanpham.MaDM='$id' ORDER BY sanpham.MaSP DESC");		

	$row_title = mysqli_fetch_array($sql_category);
	$title = $row_title['TenDM'];		
	?>
<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container ">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3"><?php echo $title ?></h3>
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<div class="row">
								<?php
								while($row_sanpham = mysqli_fetch_array($sql_cate)){ 
								?>
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img class="size-pic"src="images/<?php echo $row_sanpham['AnhSP'] ?>" alt="" class="img-fluid">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="?quanly=chitietsp&id=<?php echo $row_sanpham['MaSP'] ?>" class="link-product-add-cart">Xem sản phẩm</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1 height_60">
												<a href="?quanly=chitietsp&id=<?php echo $row_sanpham['MaSP'] ?>"class="img-fluid"><b><?php echo $row_sanpham['TenSP'] ?></b></a>
											</h4>
											<div class="info-product-price my-2 height_30">
												<span class="item_price"><?php echo number_format($row_sanpham['Gia']).'vnđ' ?></span>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form action="?quanly=giohang" method="post">
												<fieldset>
													<input type="hidden" name="tensanpham" value="<?php echo $row_sanpham['TenSP'] ?>" />
													<input type="hidden" name="sanpham_id" value="<?php echo $row_sanpham['MaSP'] ?>" />
													<input type="hidden" name="giasanpham" value="<?php echo $row_sanpham['Gia'] ?>" />
													<input type="hidden" name="hinhanh" value="<?php echo $row_sanpham['AnhSP'] ?>" />
													<input type="hidden" name="soluong" value="1" />			
													<input type="submit" name="themgiohang" value="Thêm giỏ hàng" class="button" />
												</fieldset>
											</form>
											</div>
										</div>
									</div>
								</div>
								<?php
								} 
								?>
							</div>
						</div>
						<!-- //first section -->
					</div>
				</div>
				<!-- //product left -->
				<!-- product right -->
				<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0 border-15">
					<div class="side-bar p-sm-4 p-3">
						<div class="search-hotel border-bottom py-2">

						<div class="range border-bottom py-2">
							<h3 class="agileits-sear-head mb-3  text-center">MỨC GIÁ</h3>
							<div class="w3l-range">
								<ul>
									<li class="text-center linetb">
										<a href="#">Dưới 1 triệu</a>
									</li>
									<br>
									<li class="text-center linetb">
										<a href="#">1 triệu - 5 triệu</a>
									</li>
									<br>
									<li class="text-center linetb">
										<a href="#">5 triệu - 10 triệu</a>
									</li>
									<br>
									<li class="text-center linetb">
										<a href="#">10 triệu - 20 triệu</a>
									</li>
									<br>
									<li class="text-center linetb">
										<a href="#">20 triệu - 30 triệu</a>
									</li>
									<br>
									<li class="text-center linetb">
										<a href="#">Trên 30 triệu</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- //arrivals -->
					</div>
					<!-- //product right -->
				</div>
			</div>
		</div>
	</div>
	<!-- //top products -->