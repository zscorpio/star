<div class="container">
	<ul class="breadcrumb">
		<li><a href="#">star后台</a><span class="divider">/</span></li>
		<li class="active"><a href="#">修改店铺</a></li>
	</ul>		
	<div class="main">
		<div class="row">
			<div class="span9">	
				<div id="edit_shop" class="part">
					<form action="#" method="post" class="" id="">
						<div class="clearfix">
							<label></label>
							<div class="input">
								<h3>修改店铺</h3>
							</div>
						</div>					
						<div class="clearfix">
							<label for="shop_name">店名</label>
							<div class="input">
								<input class="span3" name="shop_name" type="text" placeholder="店名">
							</div>
						</div>
						<div class="clearfix">
							<label for="location">地理位置</label>
							<div class="input">
								<input class="span3" name="location" type="text" placeholder="地理位置">
							</div>
						</div>						
						<div class="clearfix">
							<label for="phone">手机号码</label>
							<div class="input">
								<input class="span3" name="phone" type="text" placeholder="手机号码">
							</div>
						</div>													
						<div class="clearfix">
							<label for="shop_info">简单介绍</label>
							<div class="input">
								<textarea class="span4" name="shop_info" type="text" placeholder="简单介绍"></textarea>
							</div>
						</div>							
						<div class="clearfix">
							<label for="add_pic">修改图片</label>
							<div class="input">
								<img src="<?=base_url()?>img/upload.png"/>
								<button type="submit" name="add_pic" class="btn btn-primary pull-left">添加图片</button>	
							</div>
						</div>
						<div class="clearfix">
							<label></label>
							<div class="input">
								<input type="submit" name="submit" value="确定修改" class="btn btn-primary">	
							</div>						
						</div>												
					</form>
				</div>							
			</div>