<?php

include('../system/inc.php');
include('cms_check.php');
error_reporting(0);
include('model/pay.php');
?>
<?php include('inc_header.php') ?>
<script type="text/javascript">
KindEditor.ready(function(K) {
	K.create('#s_copyright');
	var editor = K.editor();
	K('#appewm').click(function() {
		editor.loadPlugin('image', function() {
			editor.plugin.imageDialog({
			imageUrl : K('#s_appewm').val(),
			clickFn : function(url, title, width, height, border, align) {
				K('#s_appewm').val(url);
				editor.hideDialog();
				}
			});
		});
	});
	K('#appbt').click(function() {
		editor.loadPlugin('image', function() {
			editor.plugin.imageDialog({
			imageUrl : K('#s_appbt').val(),
			clickFn : function(url, title, width, height, border, align) {
				K('#s_appbt').val(url);
				editor.hideDialog();
				}
			});
		});
	});
	K('#apppic').click(function() {
		editor.loadPlugin('image', function() {
			editor.plugin.imageDialog({
			imageUrl : K('#s_apppic').val(),
			clickFn : function(url, title, width, height, border, align) {
				K('#s_apppic').val(url);
				editor.hideDialog();
				}
			});
		});
	});
});
</script>
		<!-- Start: Content -->
		<div class="container-fluid content">	
			<div class="row">
<?php include('inc_left.php') ?>
				<!-- Main Page -->
				<div class="main ">
					<!-- Page Header -->
					<div class="page-header">
						<div class="pull-left">
							<ol class="breadcrumb visible-sm visible-md visible-lg">								
								<li><a href="cms_welcome.php"><i class="icon fa fa-home"></i>首页</a></li>
							</ol>						
						</div>
						<div class="pull-right">
							<h2>支付接口配置</h2>
						</div>					
					</div>
					<!-- End Page Header -->								
										
<div class="row">						
						<div class="col-lg-12">
							<div class="panel bk-bg-white">
								<div class="panel-heading bk-bg-primary">
									<h6><i class="fa fa-tags red"></i>支付接口配置</h6>
								</div>
								<div class="panel-body">
									<div class="wizard-type1">
									
										<?php
					$result = mysqli_query($conn,'select * from mkcms_system where id = 1');
					if( $row = mysqli_fetch_array($result)){
					?><form method="post">
					<div class="tab-content">

											<div class="tab-pane1">
												<div class="row">
													<div class="col-md-12">
													<label for="name-w1">是否开启</label>
													<div class="form-group has-feedback">
<input type="radio" name="s_zhifu" value="0" <?php echo ( $row['s_zhifu'] == 0 ) ? 'checked="checked"' : '' ; ?> />关闭&nbsp;
		<input type="radio" name="s_zhifu" value="1" <?php echo ( $row['s_zhifu'] == 1 ) ? 'checked="checked"' : '' ; ?> />开启&nbsp;
													</div></div>
												</div>
<div class="row">
													<div class="col-md-12">
													<label for="name-w1">彩虹易支付接入商</label>
<div class="form-group has-feedback">
<select class="form-control" name="s_alipay" default="4">
<option value="1" <?php echo ($row['s_alipay']=='1' ? 'selected="selected"':'');?>>风火云(推荐) http://www.fenghug.cn/</option>
<option value="2" <?php echo ($row['s_alipay']=='2' ? 'selected="selected"':'');?>>QQ乐支付     http://pay.qqlepay.cn</option>
<option value="3" <?php echo ($row['s_alipay']=='3' ? 'selected="selected"':'');?>>沐白亿支付   http://pay.axmyzf.cn</option>
<option value="4" <?php echo ($row['s_alipay']=='4' ? 'selected="selected"':'');?>>乐讯云支付   http://pay.lxypay.cn</option>
<option value="5" <?php echo ($row['s_alipay']=='5' ? 'selected="selected"':'');?>>微极速支付   https://pay.v8jisu.cn/</option>
<option value="6" <?php echo ($row['s_alipay']=='6' ? 'selected="selected"':'');?>>汇想易支付   https://pay.v8jisu.cn/</option>
<option value="7" <?php echo ($row['s_alipay']=='7' ? 'selected="selected"':'');?>>fateqq码支付 https://codepay.fateqq.com</option>
</select>

													</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
													<label for="name-w1">商户ID</label>
									<div class="form-group has-feedback">
									<input id="s_appid" class="form-control" name="s_appid" type="text" size="60" data-validate="required:请填写商户ID" value="<?php echo $row['s_appid']?>" />
													</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
													<label for="name-w1">密钥KEY</label>
														<div class="form-group has-feedback">
															<input id="s_appkey" class="form-control" name="s_appkey" type="text" size="60" data-validate="required:请填写密钥KEY" value="<?php echo $row['s_appkey']?>" />
														</div>
													</div>
												</div>
											</div>
											
											
										</div>
										<div class="actions">
											<input type="submit" class="btn btn-info button-previous" name="save" value="提交" />
										</div>
				</form><?php
						}
					?>
									</div>
								</div>
							</div>
						</div>
					</div>

					
				</div>
				<!-- End Main Page -->			
		
<?php include('inc_footer.php') ?>