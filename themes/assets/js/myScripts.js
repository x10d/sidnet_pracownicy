function xValidateForm(formName) {
	$(formName).validate({
		messages: {
			email: {
				required: 'Pole nie może pozostać puste',
				email: 'Pole musi zawierać prawidłowy adres mailowy'
			},
			username: {
				required: 'Pole nie może pozostać puste'
			},
			password: {
				required: 'Pole nie może pozostać puste'
			},
			passwordchecker: {
				required: 'Pole nie może pozostać puste'
			},
			oldpassword: {
				required: 'Pole nie może pozostać puste'
			}
		}

	});
}

function scrollDownAjax() {
	if ( ! page ) {
		var page = 1;
	}
	var isLoading = false;
	$(window).scroll(function() {
		if (isLoading) {
			return;
		}
		if ($(window).scrollTop()+document.body.clientHeight == $(document).height()) {
			isLoading = true;
			page = page + 1;
	        $.ajax({
	            url: "/sidnet_pracownicy/pracownicy/appendToLongList/?page="+page,
	            beforeSend: function() {
	            	$('#spinner').show();
	            },

	            success : function(json_content) {
	            	$('#spinner').hide();
	                var parsed = jQuery.parseJSON(json_content);
	                $.each(parsed, function(key, value){
	                    $('#workerLongListPage')
	                        .find('tbody:last')
	                        .append('<tr>'
	                            + '<td>' + value.id + '</td>'
	                            + '<td>' + value.imie + '</td>'
	                            + '<td>' + value.nazwisko + '</td>'
	                            + '<td>' + value.stanowisko + '</td>'
	                            + '<td>' + value.pesel + '</td>'
	                            + '</tr>'
	                    );
	                });
	                isLoading = false;
	            },
	            error: function(err) {
	                console.log(err);
	            }
	        });
		}
	});
};
