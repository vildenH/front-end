function myFunction(id,text){
	var size=document.getElementById("log").getElementsByTagName("p").length ;
	
	if (size >= 1) {
	if (!checkrep(id)) {
		arr
				.push("<p><label><input type='hidden'   name='memberId'  class='memberId'  value='"
						+ id
						+ "' ><input  type='hidden' name='memberName' value='"
						+ text
						+ "' ><span>"
						+ text
						+ "</span></label><b>移除</b></p>");
		var boxHtml="";
		for(var i=0;i<arr.length;i++){
			alert(arr[i]+i);
			boxHtml=boxHtml+arr[i];
			
		}
		$("#box").html(boxHtml);
		  $("#log").hide();
	} else {
		alert("该用户已经选择或已分配给其他业务员");
	}
	}
}