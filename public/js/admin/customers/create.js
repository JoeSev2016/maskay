$(function(){

	$('#select-department').on('change', getProvincesChange);

	$('#select-province').on('change', getDistrictChange);

});

function getProvincesChange(){
	console.log('Hola Mundo');
	//creamos variable local depid para almacenar el valor obtenido
	var department_id = $(this).val();
	//Si no existe el depid
	if (!department_id) {
		//Entonces el combo estara vacio
		$('#select-province').html('<option value="">Seleccione Pronvincia</option>');
		return;
	}
	//De existir el depid aplicamos AJAX
	$.get('/api/customer/' + department_id + '/department', function(data){
		//Creamos una variable que construira el combo
		var html_select = '<option value="">Seleccione Provincia</option>';
		//Con un foreach rellenamos la informacion obtenida desde el controlador por byDeoartment en data
		for (var i = 0; i < data.length; ++i) {
			//mostramos los datos
			html_select += '<option value="'+data[i].id+'">'+data[i].name+'</option>';
		}
		//Finalizamos mostrando el combo construido dirijiendo al id del combo original
		$('#select-province').html(html_select);
	});
}

function getDistrictChange(){
	console.log('Hola Mundo');
	//creamos variable local provid para almacenar el valor obtenido
	var province_id = $(this).val();
	//Si no existe el provid
	if (!province_id) {
		//Entonces el combo estara vacio
		$('#select-district').html('<option value="">Seleccione Distrito</option>');
		return;
	}
	//De existir el provid aplicamos AJAX
	$.get('/api/customer/' + province_id + '/province', function(data){
		//Creamos una variable que construira el combo
		var html_select = '<option value="">Seleccione Distrito</option>';
		//Con un foreach rellenamos la informacion obtenida desde el controlador por byProvince en data
		for (var i = 0; i < data.length; ++i) {
			//mostramos los datos
			html_select += '<option value="'+data[i].id+'">'+data[i].name+'</option>';
		}
		//Finalizamos mostrando el combo construido dirijiendo al id del combo original
		$('#select-district').html(html_select);
	});
}