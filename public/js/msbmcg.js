function voltar() {
	history.back();
}

function popupSimNao(){
	varWindow = window.open (
	'popups/popupErro.jsp',
	'Confirmar',
	"width=400, height=280, top=100, left=110, scrollbars=no ");
}

function fecharAba() {
  var aba = window.open("","_self");
  aba.close();
}

jQuery(function($){
	$(".telefone").mask("(99) 9999-9999");
	$(".celular").mask("(99) 99999-9999");
	$(".data").mask("99/99/9999");
	$(".datahora").mask("99/99/9999 99:99");
	$(".datahoraseg").mask("99/99/9999 99:99:99");
	$(".datahoract").mask("99/99/9999 - 99:99");
	$(".datahorasegct").mask("99/99/9999 - 99:99:99");
	$(".cpf").mask("999.999.999-99");
	$(".rg").mask("9.999.999");
	$(".cep").mask("99999-999");
	$(".inteiro").mask("999999999999999");
	$(".moeda").maskMoney({prefix:'', allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
});
