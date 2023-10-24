<script type="text/javascript">

    var recordselector_control_functions = {

        // 非表示をコントロールする関数
        selectorTargetRemove: function (input_name) {
            let display = 'none';
            let nones = document.querySelectorAll(
                "input[name='" + input_name + "'][type='text']"
            );
            for (var i = 0; i < nones.length; i++) {
                nones[i].style = 'display: none;';
                nones[i].style.cssText = 'display: none;';
            }
        },

        // イベントハンドラを設定する関数
        setSelectTag: function (input_name, options, error_class) {

            let child = document.querySelectorAll(
                "input[name='" + input_name + "'][type='text']"
            );

            if (child.length == 0) {
                return '';
            }

            let dl_elements = document.getElementsByTagName("dl");
            let element = child[0].parentElement.parentElement;
            dl_elements = []
                .slice
                .call(dl_elements);
            let index = dl_elements.indexOf(element);

            let inputElement = document.createElement('input');
            inputElement.name = 'Exmod_' + input_name;
            inputElement.id = 'Exmod_' + input_name;
            inputElement.type = 'hidden';
            inputElement.value = index;
            child[0]
                .parentNode
                .insertBefore(inputElement, child[0]);

            let selectElement = document.createElement('select');
            selectElement.name = input_name;
            selectElement.id = input_name;
            selectElement.classList = error_class;

            for (let num = 0; num < options.length; num++) {
                optionElement = document.createElement('option');
                optionElement.value = options[num].value;
                optionElement.innerText = options[num].label;
                optionElement.selected = options[num].selected;
                selectElement.appendChild(optionElement);
            }
            child[0]
                .parentNode
                .insertBefore(selectElement, child[0]);
            return '';
        },

        pasteLabelText: function (input_name, text ,chkval) {

            let confirm = document.querySelectorAll("input[name='confirm'][type='hidden']");
            if (confirm.length == 0) {
                return '';
            }

            let index = document
                .querySelectorAll(
                    "input[name='Exmod_" + input_name + "'][type='hidden']"
                )[0]
                .value;
            let target_elements = document
                .getElementsByTagName("dl")[index]
                .getElementsByClassName('data')[0];
			if(target_elements.innerText.trim() == chkval.trim()){
				target_elements.innerText = text;
			}
            return '';
        }
    }
</script>