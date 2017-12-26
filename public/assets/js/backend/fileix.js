require.config({
    baseUrl: "js",
    paths: {
        'webix': '/assets/libs/webix/codebase/webix',
        'filemanager': '/assets/libs/webix/codebase/filemanager',
    },
    shim: {
        "filemanager": {
            deps: ["webix"],
            exports: "filemanager"
        }
    }
})


require(['webix','jquery','filemanager'],function ($,jq,filemanager) {


	jq.getJSON('/admin/fileix/parms',function(data){
		h = data.ix_height;
		d = jq.getJSON('/admin/fileix/lst');
	
		webix.ready(function(){

			webix.ui({
				view:"filemanager",
				id:"files", height:h, container:"my_box",
				handlers:{
					"files"     : "/admin/fileix/data",
					"search" 	: "/admin/fileix/data",
					"upload" 	: "/admin/fileix/data",
					"download"	: "/admin/fileix/data",
					"copy"		: "/admin/fileix/data",
					"move"		: "/admin/fileix/data",
					"remove"	: "/admin/fileix/data",
					"rename"	: "/admin/fileix/data",
					"create"	: "/admin/fileix/data"
				}
			}).show();
			$$("files").parse(d);

			$$("files").attachEvent("onBeforeRun",function(id){
				webix.confirm({
					text:"您要下载本文件么?",
					ok:"下载",
					cancel:"取消",
					callback:function(result){
						if(result)
							$$("files").download(id);
					}
				});
				return false;
			});
		});
	});
});
