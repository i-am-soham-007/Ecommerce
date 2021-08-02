var instantSearchQueries = [];
$(document).ready(function()
{
	/* TODO Ids aa blocksearch_type need to be removed*/
	
	if (typeof ajaxsearch != 'undefined' && ajaxsearch && typeof blocksearch_type !== 'undefined' && blocksearch_type){
		
		var width_ac_results = 	$("#cz_search_query_" + blocksearch_type).parents('form').width();
		$("#cz_search_query_" + blocksearch_type).autocomplete(
			cz_search_url,
			{
				minChars: 3,
				max: 10,
				width: (width_ac_results > 0 ? width_ac_results : 500),
				selectFirst: false,
				scroll: false,
				dataType: "json",
				formatItem: function(data, i, max, value, term) {
					return value;
				},
				parse: function(data) {
					// console.log(data.products);
					var result = data.products;
					var mytab = new Array();
					for (var i = 0; i < result.length; i++)
						mytab[mytab.length] = { data: result[i], value: '<IMG align = "center" width = "40px" SRC=' + result[i].cover.bySize.small_default.url + '>' + '  ' + result[i].name };
					return mytab;
				},
				extraParams: {
					ajaxSearch: 1,
					id_lang: prestashop.language.id
				}
			}
		)
		.result(function(event, data, formatted) {
			$('#cz_search_query_' + blocksearch_type).val(data.name);
			document.location.href = data.url;
		});
	}
	
	$('.cateSingleItem').click(function(){
		if (!$(this).hasClass('active'))
		{
			$('.cateSingleItem.active').removeClass('active');
			var cate_id = $(this).data('cate-id');
			var cate_name = $(this).data('cate-name');
			$('#czsearch-cate-id').val(cate_id);
			$('#czsearchtop-cate-id').val(cate_id);
			$('#dropdownListCate span').text(cate_name);
			$('#categoryDropList span').text(cate_name);
			$(this).addClass('active');
		}
		$('#dropdownListCate').trigger('click');
		$('#categoryDropList').trigger('click');
		var e = jQuery.Event("keydown");
		e.keyCode = 40;
		$(this).parents('form').find('.search_query').focus().trigger(e); 
		return false;
	});
		
});

$(window).resize(function(){

	if ($('.ac_results').length)
	{	
		width_ac_results = $("#cz_search_query_" + blocksearch_type).parents('form').width();		
		//DONGND:: update option js libary option when resize
		$("#cz_search_query_" + blocksearch_type).setOptions(
			{
				width: width_ac_results
			}
		);	
		//DONGND:: update position and with of block result when resize
		var o_top = $("#cz_search_query_" + blocksearch_type).offset().top;
		var o_left = $("#cz_search_query_" + blocksearch_type).offset().left;
		var f_height = $("#cz_search_query_" + blocksearch_type).outerHeight();
		
		$('.ac_results').width(width_ac_results);
		$('.ac_results').css({
			'top': o_top+f_height,
			'left' : o_left,
		})	
	}
});

function tryToCloseInstantSearch()
{
	if ($('#old_center_column').length > 0)
	{
		$('#center_column').remove();
		$('#old_center_column').attr('id', 'center_column');
		$('#center_column').show();
		return false;
	}
}

function stopInstantSearchQueries()
{
	for(i=0;i<instantSearchQueries.length;i++)
		instantSearchQueries[i].abort();
	instantSearchQueries = new Array();
}
