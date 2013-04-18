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
