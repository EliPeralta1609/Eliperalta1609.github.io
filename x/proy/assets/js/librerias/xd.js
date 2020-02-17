$(()=>{

$('#btnsum').click(()=>{

let num1 = parseFloat($('#num1').val())
let num2 = parseFloat($('#num2').val())
let result = num1 + num2;

if (num1 == "" || num2 == "") {
alert("No es un numero")
}else if (Number.isNaN(num1) == true || Number.isNaN(num2) == true) {
alert("Campo vacio")

}else{
	$('#resul').val(result)
}	
})
})
 $('.input-number').on('input', function () { 
   this.value = this.value.replace(/[^0-9.]/g,'');

});