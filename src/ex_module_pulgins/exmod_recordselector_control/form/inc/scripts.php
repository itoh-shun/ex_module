<script type="text/javascript">

	(function(){set_input_from_param()})();
	
	function set_input_from_param(){
		var param = JSON.parse(document.getElementsByName('settingParam1')[0].value + document.getElementsByName('settingParam2')[0].value);
		document.getElementsByName('setting_name')[0].value = param['name'];
		document.getElementsByName('database')[0].value = param['database'];
		document.getElementsByName('label_value')[0].value = param['label_value'];
		document.getElementsByName('label_name')[0].value = param['label_name'];
		document.getElementsByName('select_name')[0].value = param['select_name'];
		document.getElementsByName('sort_name')[0].value = param['sort_name'];
		document.getElementsByName('sort_type')[0].value = param['sort_type'];
	}
	function set_param_from_input(){
		var param = {
			"name":document.getElementsByName('setting_name')[0].value,
			"database":document.getElementsByName('database')[0].value,
			"select_name": document.getElementsByName('select_name')[0].value,
			"label_value":document.getElementsByName('label_value')[0].value,
			"label_name":document.getElementsByName('label_name')[0].value,
			"sort_name":document.getElementsByName('sort_name')[0].value,
			"sort_type":document.getElementsByName('sort_type')[0].value
		};
		document.getElementsByName('settingParam1')[0].value = JSON.stringify(param).substr(0,8000);
		document.getElementsByName('settingParam2')[0].value = JSON.stringify(param).substr(8000,12000);
	}
	function split_comma_to_array(str){
		console.log(str);
		return str?str.trim().split(','):[];
	}
</script>
