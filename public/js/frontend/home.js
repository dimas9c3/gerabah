function init() {
	initComponent();
}

function initComponent() {
	wow = new WOW(
	{
		animateClass: 'animated',
		offset:       100,
		/*callback:     function(box) {
			console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
		}*/
	}
	);
	wow.init();

	var table_donasi =  $('#table-donasi').DataTable
	({
		ajax            : 
		{
			url         : base_url + '/getDonasi',
			type        : 'POST',
			data 		: {_token: token},
			dataSrc     : 'data',
		},
		initComplete 	: function(settings, json){
			$('#table-foot').html(json.tot);
		},
		fixedHeader     : true,
		paging          : true,
		pageLength      : 5,
		lengthChange    : false,
		searching       : true,
		search          : 
		{
			smart       : false,
			regex       : true,
			caseInsen       : true,
		},
		aaSorting       : [],
		ordering        : true,
		info            : true,
	})

	$('div.dataTables_filter input').addClass('form-control input-sm');
}
