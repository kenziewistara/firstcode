$(function () {

	$("#formPulsa").validate({
		errorClass: 'text-danger text-monospace is-invalid',
		validClass: 'text-monospace is-valid',
		rules: {
			telepon: {
				required: true,
				number: true
			},
			provider: {
				required: true
			}
		},
		messages: {
			telepon: {
				required: "Nomor Telepon wajib diisi",
				number: "Nomor Telepon hanya boleh diisi angka"
			},
			provider: {
				required: "Provider wajib diisi!"
			}
		}
	});
});
