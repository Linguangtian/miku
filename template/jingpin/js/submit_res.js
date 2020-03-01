function submit(){
	var str = document.getElementById('wd').value;
		if (str==""||str==null){
			alert("请输入影片关键词")
		}else{
			//var k= $('#mode').val();
			var s=$('#wd').val();
            s=s.replace(/\s/g,"");
			//window.open("/"+k+"-"+s+".html", '_blank');
			//var tempwindow=window.open('_blank'); // 先打开页面
            //tempwindow.location="/"+k+"-"+s+".html";

			window.location.href="/seacher-"+s+".html";

		}
}
function submv(){
	var str = document.getElementById('sousuo').value;
		if (str==""||str==null){
			alert("请输入明星、MV关键词")
		}else{
			var s=$('#sousuo').val();
            s=s.replace(/\s/g,"");
			window.location.href="./mv1.php?ac="+s+"";

		}
}
function sub2(){
	var str = document.getElementById('searchs').value;
		if (str==""||str==null){
			alert("请输入影片关键词")
		}else{
	var k= $('#mode').val();
			if (k==""||k==null){
			alert("请点击选择搜索源站")
			}else{

			var s=$('#searchs').val();
                s=s.replace(/\s/g,"");
			//window.open("/"+k+"-"+s+".html", '_blank');
			//var tempwindow=window.open('_blank'); // 先打开页面
            //tempwindow.location="/"+k+"-"+s+".html";
					
			window.location.href="/"+k+""+s+"";
			}
		}
}
function sub3(){
	var str = document.getElementById('searchs').value;
		if (str==""||str==null){
			alert("请输入明星名称")
		}else{
			var k= $('#mode').val();
			var s=$('#searchs').val();
                s=s.replace(/\s/g,"");
			//window.open("/"+k+"-"+s+".html", '_blank');
			//var tempwindow=window.open('_blank'); // 先打开页面
            //tempwindow.location="/"+k+"-"+s+".html";
					
			window.location.href="/"+k+"_"+s+"_dy_1.html";
		}
}