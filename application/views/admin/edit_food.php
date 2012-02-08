<div class="container">
	<ul class="breadcrumb">
		<li><a href="#">后台</a><span class="divider">/</span></li>
		<li><a href="#">店名</a><span class="divider">/</span></li>		
		<li class="active"><a href="#">食品修改</a></li>
	</ul>		
	<div class="main">
		<div class="row">
			<div class="span9">	
				<div id="add_food" class="part">
					<form action="#" method="post" class="" id="">
						<div class="clearfix">
							<label></label>
							<div class="input">
								<h3>食品修改</h3>
							</div>
						</div>					
						<div class="clearfix">
							<label for="food_name">菜名</label>
							<div class="input">
								<input class="span3" name="food_name" type="text" placeholder="菜名">
							</div>
						</div>												
						<div class="clearfix">
							<label for="food_info">简单介绍</label>
							<div class="input">
								<textarea class="span4" name="food_info" type="text" placeholder="简单介绍"></textarea>
							</div>
						</div>							
						<div class="clearfix">
							<label for="add_pic">添加图片</label>
							<div class="input">
								<img src="<?=base_url()?>img/upload.png"/>
								<button type="submit" name="add_pic" class="btn btn-primary pull-left">添加图片</button>	
							</div>
						</div>
						<div class="clearfix">
							<label></label>
							<div class="input">
								<input type="submit" name="submit" value="确认修改" class="btn btn-primary">	
							</div>						
						</div>												
					</form>
				</div>							
			</div>