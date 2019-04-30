/* 项目自定义js */

// iframe高度自适应
function iframe_height_fix(iframe_obj) {
	$(iframe_obj).height(0);
	var mainheight = $(iframe_obj).contents().find("body").height()+30;
	$(iframe_obj).height(mainheight);
}

// 在iframe内关闭modal弹层
function iframe_modal_close() {
	window.parent.$('.modal').modal('hide');
}