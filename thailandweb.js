( function($) {
  $.fn.thailandweb = function(options) {
    var Setting = $.extend( {
			selector:	$(this),
			tbname:	'webnews'
		}, options);
		//  console.log(Setting);

    return this.each(function() {
			var response;
			var dataUrl = 'thailandweb.json';

			$(function() {
				initialize();
			});

      function initialize(){
				$.ajax({
					type: "GET",
					url: dataUrl,
					dataType: "json",
					success: function(response) {
            // console.log(response);
            // console.log(response.webthailand[Setting.tbname].data);
            var dbConditon = ["webeducation","webnews","webprovinces"];
            if($.inArray( Setting.tbname, dbConditon ) == -1){
              $(Setting.selector).append('<option value="">'+response.webthailand[Setting.tbname].title+'</option>');
              $.each(response.webthailand[Setting.tbname].data, function(index, val) {
                $(Setting.selector).append('<option value="'+val.link+'">'+val.name+'</option>');
              });
            }
            else{
              $(Setting.selector).append('<option value="">'+response.webthailand[Setting.tbname].title+'</option>');
              $.each(response.webthailand[Setting.tbname].data, function(index, val) {
      					$(Setting.selector).append('<optgroup label="=='+val.type+'==">');
                $.each(val.data, function(index, val) {
                  $(Setting.selector).append('<option value="'+val.link+'">'+val.name+'</option>');
      				  });
      				});
            }

            $(Setting.selector).change(function(e) {
              var sval = $(this).val();
              if(sval !== "undefined"){
                window.location.href = sval;
              }
    				});
					},
					error: function() {
						console.log("Failed to get json");
					}
				});
			}

    });
  }
})(jQuery);
