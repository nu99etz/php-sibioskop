var id = 0;
$(document).ready(function(){
	$('.table-responsive-sm').on('click', '.btn-form-ubah', function(){
		id = $(this).data('id')
		$('#simpan').hide()
		$('#ubah').show()
		$('#exampleModalLabel').html('Ubah Data')
		var cari = $(this).closest('tr')
		var id_customer = cari.find('.id_customer-value').val()
		var nama_customer = cari.find('.nama_customer-value').val()
		var lahir = cari.find('.tgl_lahir-value').val()
		var email = cari.find('.email-value').val()
		var password = cari.find('.password-value').val()
		var no_telp = cari.find('.no_telp-value').val()
		var jk = cari.find('.jk-value').val()
		var foto = cari.find('.foto-value').val()
		var alamat = cari.find('.alamat-value').val()
		$('#id_customer').val(id_customer)
		$('#nama_customer').val(nama_customer)
		$('#lahir').val(lahir)
		$('#email').val(email)
		$('#password').val(password)
		$('#telp').val(no_telp)
		$('#jk').val(jk)
		$('#alamat').val(alamat)
		$('#foto').val(foto)
		$('#gambar').attr('src', base_url+'assets/img/customer/'+ val(foto))
	})
})
$('#ubah').click(function(){
	$.ajax({
		url: base_url+'Admin/editActioncus/',
		type: 'POST',
		data: $('.cok').serialize(),
		dataType: 'json',
	})
})