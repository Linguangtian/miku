<?php
include('../system/inc.php');
include('cms_check.php');
error_reporting(0);
include('model/system.php');?>
<?php include('inc_header.php') ?>
<script type='text/javascript'>
KindEditor.ready(function(K) {
	K.create('#s_copyright');
	var editor = K.editor();
	K('#picture').click(function() {
		editor.loadPlugin('image', function() {
			editor.plugin.imageDialog({
			imageUrl : K('#s_logo').val(),
			clickFn : function(url, title, width, height, border, align) {
				K('#s_logo').val(url);
				editor.hideDialog();
				}
			});
		});
	});
		K('#beijing').click(function() {
		editor.loadPlugin('image', function() {
			editor.plugin.imageDialog({
			imageUrl : K('#s_beijing').val(),
			clickFn : function(url, title, width, height, border, align) {
				K('#s_beijing').val(url);
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
							<h2>系统设置</h2>
						</div>					
					</div>
					<!-- End Page Header -->								
										
<div class="row">						
						<div class="col-lg-12">
							<div class="panel bk-bg-white">
								<div class="panel-heading bk-bg-primary">
									<h6><i class="fa fa-tags red"></i>系统设置</h6>
								</div>
								<div class="panel-body">
									<div class="wizard-type1">
									<?php
$result = mysqli_query($conn,'select * from mkcms_system where id = 1');
					if( $row = mysqli_fetch_array($result)){
					?>
										<form method="post"><div class="tab-content">

											<div class="tab-pane1">
												<div class="form-group">
												<div class="row">
													<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

														<div class="form-group has-feedback">
															<label for="name-w1">网站名称</label>
															<?php echo'<input id="s_name" class="form-control" name="s_name" type="text" size="60" value="'.$row['s_name'].'" />';?>
														</div>
													</div>

													<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

														<div class="form-group has-feedback">
															<label for="name-w1">域名</label>
															<div class="form-group has-feedback">
								<?php echo'<input id="s_domain" class="form-control" name="s_domain" type="text" size="60" value="'.$row['s_domain'].'" />';?>
	<span class="help-block">请填写当前域名：http://<?php echo $_SERVER['HTTP_HOST']?>/  一定要/结尾否则出错</span>

												</div>
														</div>
													</div>
														<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
														<div class="form-group has-feedback">
															<label for="name-w1">模板选择</label>
 <?php $fff=scandir('../template/');?>
												 <select class="form-control" name="s_bdyun">
                                               <?php for($m=2;$m<count($fff);$m++){$mname=file_get_contents('../template/'.$fff[$m].'/name.txt');if(empty($mname)){$mname=$fff[$m];}
                                               if($fff[$m]===$row['s_bdyun']){$sec='selected = "selected"';}echo '<option value="'.$fff[$m].'" '.$sec.'>'.$mname.'</option>';unset($sec);unset($mname);}?>
                                            </select>
														</div>
													</div>
												</div>
												<div class="form-group">
												<div class="row">
													<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
														<div class="form-group has-feedback">
															<label for="name-w1">优化标题</label>
															<?php echo'<input id="s_seoname" class="form-control" name="s_seoname" type="text" size="60" value="'.$row['s_seoname'].'" />';?>
														</div>
													</div>
									
													<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
														<div class="form-group has-feedback">
															<label for="name-w1">关键字</label>
															<?php echo'<input id="s_keywords" class="form-control" name="s_keywords" type="text" size="60" value="'.$row['s_keywords'].'" />';?>
														</div>
													</div>
									
													<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
														<div class="form-group has-feedback">
															<label for="name-w1">关键描述</label>
															<?php echo'<input id="s_description" class="form-control" name="s_description" type="text" size="60" value="'.$row['s_description'].'" />';?>
														</div>
													</div>
												</div>
												</div>
												
												<!--<div class="form-group">

												<div class="row">
												
													<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
													<label for="name-w1">网站缓存</label><br>
<?php 
echo'<div class="radio-custom radio-inline" style="float:left">
             <input type="radio" id="inline-radio1" name="s_cache" value="1"'; if( $row['s_cache'] == 1 ){ echo'checked="checked"' ;} echo'> 
			<label for="inline-radio1">开启</label>
			</div>
			<div class="radio-custom radio-inline" style="float:left">
             <input type="radio" id="inline-radio2" name="s_cache" value="0"'; if( $row['s_cache'] == 0 ){echo'checked="checked"';}  echo'> 
			<label for="inline-radio2">关闭</label>
			</div>';
?></div>
													<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
													<label for="name-w1">缓存时间(小时)</label>
														<?php echo'<input id="s_seoname" class="form-control" name="s_hctime" type="text" size="60" value="'.$row['s_hctime'].'" />';?>
													</div>
													<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
													<label for="name-w1">域名防红</label><br>
<?php 
echo'<div class="radio-custom radio-inline" style="float:left">
             <input type="radio" id="inline-radio5" name="s_hong" value="1"'; if( $row['s_hong'] == 1 ){ echo'checked="checked"' ;} echo'> 
			<label for="inline-radio5">开启</label>
			</div>
			<div class="radio-custom radio-inline" style="float:left">
             <input type="radio" id="inline-radio6" name="s_hong" value="0"'; if( $row['s_hong'] == 0 ){echo'checked="checked"';}  echo'> 
			<label for="inline-radio6">关闭</label>
			</div>';
?>
													</div>
												</div></div>-->
<div class="form-group">
												<div class="row">
													<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
													<label for="name-w1">播放前广告秒数</label>
												<?php echo'<input id="s_miaoshu" class="form-control" name="s_miaoshu" type="text" size="60" value="'.$row['s_miaoshu'].'" />';?>

													</div>
													<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
													<label for="name-w1">网站背景</label>
														<?php echo'<div class="input-group">
									<input id="s_beijing" class="form-control" name="s_beijing" type="text" size="40" value="'.$row['s_beijing'].'" />
													<span class="input-group-btn">
													<button type="button" class="btn btn-success" id="beijing">UP</button>
													</span>
												</div>';?>
													</div>
													<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
													<label for="name-w1">网站LOGO</label>
														<?php echo'<div class="input-group">
									<input id="s_logo" class="form-control" name="s_logo" type="text" size="40" value="'.$row['s_logo'].'" />
													<span class="input-group-btn">
													<button type="button" class="btn btn-success" id="picture">UP</button>
													</span>
												</div>';?>
													</div>
												</div>
</div>
<div class="form-group">
												<div class="row">
													<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
													<label for="name-w1">是否开启首页抢先看</label><br>
														<?php 
echo'<div class="radio-custom radio-inline" style="float:left">
             <input type="radio" id="inline-radio7" name="s_qianxian" value="1"'; if( $row['s_qianxian'] == 1 ){ echo'checked="checked"' ;} echo'> 
			<label for="inline-radio7">开启</label>
			</div>
			<div class="radio-custom radio-inline" style="float:left">
             <input type="radio" id="inline-radio8" name="s_qianxian" value="0"'; if( $row['s_qianxian'] == 0 ){echo'checked="checked"';}  echo'> 
			<label for="inline-radio8">关闭</label>
			</div>';
?>
													</div>
													<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
													<label for="name-w1">是否开启首页电影</label><br>
													<?php 
echo'<div class="radio-custom radio-inline" style="float:left">
             <input type="radio" id="inline-radio9" name="s_dianying" value="1"'; if( $row['s_dianying'] == 1 ){ echo'checked="checked"' ;} echo'> 
			<label for="inline-radio9">开启</label>
			</div>
			<div class="radio-custom radio-inline" style="float:left">
             <input type="radio" id="inline-radio10" name="s_dianying" value="0"'; if( $row['s_dianying'] == 0 ){echo'checked="checked"';}  echo'> 
			<label for="inline-radio10">关闭</label>
			</div>';
?>

													</div>
													<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
													<label for="name-w1">是否开启首页剧集</label><br>
														<?php 
echo'<div class="radio-custom radio-inline" style="float:left">
             <input type="radio" id="inline-radio13" name="s_dianshi" value="1"'; if( $row['s_dianshi'] == 1 ){ echo'checked="checked"' ;} echo'> 
			<label for="inline-radio13">开启</label>
			</div>
			<div class="radio-custom radio-inline" style="float:left">
             <input type="radio" id="inline-radio14" name="s_dianshi" value="0"'; if( $row['s_dianshi'] == 0 ){echo'checked="checked"';}  echo'> 
			<label for="inline-radio14">关闭</label>
			</div>';
?>
													</div>
												</div>
</div>
<div class="form-group">
												<div class="row">
													<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
													<label for="name-w1">是否开启首页MV</label><br>
														<?php 
echo'<div class="radio-custom radio-inline" style="float:left">
             <input type="radio" id="inline-radio35" name="s_mv" value="1"'; if( $row['s_mv'] == 1 ){ echo'checked="checked"' ;} echo'> 
			<label for="inline-radio35">开启</label>
			</div>
			<div class="radio-custom radio-inline" style="float:left">
             <input type="radio" id="inline-radio36" name="s_mv" value="0"'; if( $row['s_mv'] == 0 ){echo'checked="checked"';}  echo'> 
			<label for="inline-radio36">关闭</label>
			</div>';
?>
													</div>
													<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
													<label for="name-w1">是否开启首页娱乐资讯</label><br>
														<?php 
echo'<div class="radio-custom radio-inline" style="float:left">
             <input type="radio" id="inline-radio37" name="s_zixun" value="1"'; if( $row['s_zixun'] == 1 ){ echo'checked="checked"' ;} echo'> 
			<label for="inline-radio37">开启</label>
			</div>
			<div class="radio-custom radio-inline" style="float:left">
             <input type="radio" id="inline-radio38" name="s_zixun" value="0"'; if( $row['s_zixun'] == 0 ){echo'checked="checked"';}  echo'> 
			<label for="inline-radio38">关闭</label>
			</div>';
?>
													</div>
													<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
													<label for="name-w1">是否开启首页YY</label><br>
														<?php 
echo'<div class="radio-custom radio-inline" style="float:left">
             <input type="radio" id="inline-radio39" name="s_yy" value="1"'; if( $row['s_yy'] == 1 ){ echo'checked="checked"' ;} echo'> 
			<label for="inline-radio39">开启</label>
			</div>
			<div class="radio-custom radio-inline" style="float:left">
             <input type="radio" id="inline-radio40" name="s_yy" value="0"'; if( $row['s_yy'] == 0 ){echo'checked="checked"';}  echo'> 
			<label for="inline-radio40">关闭</label>
			</div>';
?>
													</div>
												</div>
</div>
<div class="form-group">
												<div class="row">
													<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
													<label for="name-w1">是否开启首页综艺</label><br>
														<?php 
echo'<div class="radio-custom radio-inline" style="float:left">
             <input type="radio" id="inline-radio15" name="s_zongyi" value="1"'; if( $row['s_zongyi'] == 1 ){ echo'checked="checked"' ;} echo'> 
			<label for="inline-radio15">开启</label>
			</div>
			<div class="radio-custom radio-inline" style="float:left">
             <input type="radio" id="inline-radio16" name="s_zongyi" value="0"'; if( $row['s_zongyi'] == 0 ){echo'checked="checked"';}  echo'> 
			<label for="inline-radio16">关闭</label>
			</div>';
?>
													</div>
													<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
													<label for="name-w1">是否开启首页动漫</label><br>
													<?php 
echo'<div class="radio-custom radio-inline" style="float:left">
             <input type="radio" id="inline-radio19" name="s_dongman" value="1"'; if( $row['s_dongman'] == 1 ){ echo'checked="checked"' ;} echo'> 
			<label for="inline-radio19">开启</label>
			</div>
			<div class="radio-custom radio-inline" style="float:left">
             <input type="radio" id="inline-radio20" name="s_dongman" value="0"'; if( $row['s_dongman'] == 0 ){echo'checked="checked"';}  echo'> 
			<label for="inline-radio20">关闭</label>
			</div>';
?>
													</div>
													<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
													<label for="name-w1">是否开启首页搞笑</label><br>
														<?php 
echo'<div class="radio-custom radio-inline" style="float:left">
             <input type="radio" id="inline-radio23" name="s_gx" value="1"'; if( $row['s_gx'] == 1 ){ echo'checked="checked"' ;} echo'> 
			<label for="inline-radio23">开启</label>
			</div>
			<div class="radio-custom radio-inline" style="float:left">
             <input type="radio" id="inline-radio24" name="s_gx" value="0"'; if( $row['s_gx'] == 0 ){echo'checked="checked"';}  echo'> 
			<label for="inline-radio24">关闭</label>
			</div>';
?>
													</div>
												</div>
</div>
<div class="form-group">
<div class="row">
													<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
													<label for="name-w1">是否开启首页合作伙伴</label><br>
														<?php 
echo'<div class="radio-custom radio-inline" style="float:left">
             <input type="radio" id="inline-radio25" name="s_hz" value="1"'; if( $row['s_hz'] == 1 ){ echo'checked="checked"' ;} echo'> 
			<label for="inline-radio25">开启</label>
			</div>
			<div class="radio-custom radio-inline" style="float:left">
             <input type="radio" id="inline-radio26" name="s_hz" value="0"'; if( $row['s_hz'] == 0 ){echo'checked="checked"';}  echo'> 
			<label for="inline-radio26">关闭</label>
			</div>';
?>
													</div>
													<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
													<label for="name-w1">是否开启首页友情链接</label><br>
														<?php 
echo'<div class="radio-custom radio-inline" style="float:left">
             <input type="radio" id="inline-radio27" name="s_yq" value="1"'; if( $row['s_yq'] == 1 ){ echo'checked="checked"' ;} echo'> 
			<label for="inline-radio27">开启</label>
			</div>
			<div class="radio-custom radio-inline" style="float:left">
             <input type="radio" id="inline-radio28" name="s_yq" value="0"'; if( $row['s_yq'] == 0 ){echo'checked="checked"';}  echo'> 
			<label for="inline-radio28">关闭</label>
			</div>';
?>
													</div>
													<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			<label for="name-w1">自动尝鲜列表</label>
			<div class="form-group has-feedback">
			<select class="form-control" name="s_cxzy" default="http://www.123ku.com/inc/feifei3.4/">
			<option value="http://www.123ku.com/inc/feifei3.4/" <?php echo ($row['s_cxzy']=='http://www.123ku.com/inc/feifei3.4/' ? 'selected="selected"':'');?>>123资源</option>
			<option value="http://cj.baiwanzy.com/inc/feifei3/" <?php echo ($row['s_cxzy']=='http://cj.baiwanzy.com/inc/feifei3/' ? 'selected="selected"':'');?>>百万资源</option>
			<option value="http://cj.wlzy.tv/api/ff/vod/" <?php echo ($row['s_cxzy']=='http://cj.wlzy.tv/api/ff/vod/' ? 'selected="selected"':'');?>>卧龙资源</option>
			<option value="http://api.kbzyapi.com/inc/feifei3.4/" <?php echo ($row['s_cxzy']=='http://api.kbzyapi.com/inc/feifei3.4/' ? 'selected="selected"':'');?>>酷播资源</option>
            <option value="http://cj.okzy.tv/inc/feifei3/" <?php echo ($row['s_cxzy']=='http://cj.okzy.tv/inc/feifei3/' ? 'selected="selected"':'');?>>OK资源</option>
			<option value="http://cj.131zy.net/inc/feifei3/" <?php echo ($row['s_cxzy']=='http://cj.131zy.net/inc/feifei3/' ? 'selected="selected"':'');?>>131资源</option>
			<option value="http://www.zdziyuan.com/inc/feifei3.4/" <?php echo ($row['s_cxzy']=='http://www.zdziyuan.com/inc/feifei3.4/' ? 'selected="selected"':'');?>>最大资源</option>
			<option value="http://cj.suboyun.net/inc/feifei/" <?php echo ($row['s_cxzy']=='http://cj.suboyun.net/inc/feifei/' ? 'selected="selected"':'');?>>速播资源</option>
			<option value="http://cj.zuikzy.co/inc/feifei3/" <?php echo ($row['s_cxzy']=='http://cj.zuikzy.co/inc/feifei3/' ? 'selected="selected"':'');?>>最快资源</option>
			<option value="http://www.caijizy.com/inc/feifei3/" <?php echo ($row['s_cxzy']=='http://www.caijizy.com/inc/feifei3/' ? 'selected="selected"':'');?>>极速云</option>
			<option value="http://www.apizyp.com/inc/feifei3/" <?php echo ($row['s_cxzy']=='http://www.apizyp.com/inc/feifei3/' ? 'selected="selected"':'');?>>值资资源</option>
			<option value="http://cj.yongjiuzyw.com/inc/feifei3/" <?php echo ($row['s_cxzy']=='http://cj.yongjiuzyw.com/inc/feifei3/' ? 'selected="selected"':'');?>>永久资源</option>
			</select>
			</div>
													</div>
													</div></div>
													<div class="form-group">
													
<div class="row">
													<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
													<label for="name-w1">是否开启大淘客</label><br>
														<?php 
echo'<div class="radio-custom radio-inline" style="float:left">
             <input type="radio" id="inline-radio29" name="s_tk" value="1"'; if( $row['s_tk'] == 1 ){ echo'checked="checked"' ;} echo'> 
			<label for="inline-radio29">开启</label>
			</div>
			<div class="radio-custom radio-inline" style="float:left">
             <input type="radio" id="inline-radio30" name="s_tk" value="0"'; if( $row['s_tk'] == 0 ){echo'checked="checked"';}  echo'> 
			<label for="inline-radio30">关闭</label>
			</div>';
?>
													</div>
													<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

														<div class="form-group has-feedback">
															<label for="name-w1">大淘客域名</label>
															<?php echo'<input id="s_dataoke" class="form-control" name="s_dataoke" type="text" size="60" placeholder="http://demo.dataoke.com/" value="'.$row['s_dataoke'].'" />';?>
														<span class="help-block">请填写大淘客域名,例：http://tao.micool.net/  一定要/结尾</span>
														</div>
													</div>

													<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

														<div class="form-group has-feedback">
															<label for="name-w1">大淘客ID</label>
															<div class="form-group has-feedback">
								<?php echo'<input id="s_dataokeid" class="form-control" name="s_dataokeid" type="text" size="60" laceholder="21263183" value="'.$row['s_dataokeid'].'" />';?>
												</div>
														</div>
													</div>
												</div></div>
												<div class="row">
													<div class="col-sm-12">
														<div class="form-group has-feedback">
															<label for="name-w1">默认接口</label>
							<?php echo'<input id="s_mjk" class="form-control" name="s_mjk" type="text" size="60" value="'.$row['s_mjk'].'" />
										<span class="help-block">自动播放时的接口</span>';?>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-12">
														<div class="form-group has-feedback">
															<label for="name-w1">解析接口</label>
<?php echo'<textarea class="form-control" name="s_jiekou" style="height:200px;" />'.$row['s_jiekou'].'</textarea>
										<span class="help-block">多个解析请用“回车”分开，如：<br>MM解析$http://xxx.com/jk.php?url=<br>MM解析$http://xxx.com/jk.php?url=</span>';?>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-12">
														<div class="form-group has-feedback">
															<label for="name-w1">侵权视频下架</label>
<?php echo'<textarea class="form-control" name="s_shoufei" />'.$row['s_shoufei'].'</textarea>
										<span class="help-block">这里输入全名称即可，多个请用逗号隔开 比如现在的战狼2 无法观看，输入战狼2
提交保存。</span>';?>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-12">
														<div class="form-group has-feedback">
															<label for="name-w1">公告</label>
<?php echo'<textarea id="s_gonggao" class="form-control" name="s_gonggao" />'.htmlspecialchars($row['s_gonggao']).'</textarea>';?>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-12">
														<div class="form-group has-feedback">
															<label for="name-w1">版权信息</label>
<?php echo'<textarea class="form-control" name="s_copyright" />'.htmlspecialchars($row['s_copyright']).'</textarea>';?>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-12">
														<div class="form-group has-feedback">
															<label for="name-w1">统计代码</label>
<?php echo'<textarea  class="form-control" name="s_tongji" size="60"/>'.$row['s_tongji'].'</textarea>';?>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="actions">								
											<input type="submit" class="btn btn-info button-previous" name="save" value="提交" />

										</div>
										</form>
										<?php
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