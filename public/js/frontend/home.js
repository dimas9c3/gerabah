function init() {
	initComponent();
}

function initComponent() {

	owlGallery();

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

	var table_realisasi_anggaran =  $('#table-realisasi-anggaran').DataTable
	({
		ajax            : 
		{
			url         : base_url + '/getAnggaran',
			type        : 'POST',
			data 		: {_token: token},
			dataSrc     : 'data',
		},
		fixedHeader     : true,
		paging          : true,
		pageLength      : 15,
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

	function owlGallery() {
		$('.owl-carousel').owlCarousel({
			margin:10,
			loop:true,
			center:true,
			autoWidth:true,
			autoHeight:true,
			items:4,
			//responsiveClass:true,
			// responsive:{
			// 	480:{
			// 		items:1,
			// 		autoWidth:false,
			// 	},
			// 	768:{
			// 		items:1,
			// 		autoWidth:false,
			// 	}
			// }
		})
	}
}

function showModalGallery(id) {
	// Get the modal
	var modal = document.getElementById("myModalGallery");

	// Get the image and insert it inside the modal - use its "alt" text as a caption
	var img = document.getElementById("myImgGallery" +id);
	var modalImg = document.getElementById("modal-contentGallery");
	var captionText = document.getElementById("captionGallery");

	modal.style.display = "block";
	modalImg.src = document.getElementById("myImgGallery" + id).src;
	captionText.innerHTML = document.getElementById("myImgGallery" + id).alt;

  	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() { 
  		modal.style.display = "none";
	}
}

	