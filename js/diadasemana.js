
// Script - Ao selecionar a data desejada, indicará o dia da semana também.
// Prato Principal
$(function(){
   
    $("#data_principal").on("change", function(){
       
       var d = this.value.split("-");
       var data = new Date(d[0], d[1]-1, d[2]).getDay();
       var dia_semana_principal = ['DOMINGO', 'SEGUNDA', 'TERÇA', 'QUARTA', 'QUINTA', 'SEXTA', 'SÁBADO'][data];
       $("#dia_semana_principal").val(dia_semana_principal);
       
    }).change();
    
 });

 
// Script - Ao selecionar a data desejada, indicará o dia da semana também.
// Prato Opicional
$(function(){
   
    $("#DataOpicional").on("change", function(){
       
       var d = this.value.split("-");
       var data = new Date(d[0], d[1]-1, d[2]).getDay();
       var dia_opicional = ['DOMINGO', 'SEGUNDA', 'TERÇA', 'QUARTA', 'QUINTA', 'SEXTA', 'SÁBADO'][data];
       $("#DiaOpicional").val(dia_opicional);
       
    }).change();
    
 });

 // Script - Ao selecionar a data desejada, indicará o dia da semana também.
// Prato Light
$(function(){
   
    $("#DataLight").on("change", function(){
       
       var d = this.value.split("-");
       var data = new Date(d[0], d[1]-1, d[2]).getDay();
       var dia_light = ['DOMINGO', 'SEGUNDA', 'TERÇA', 'QUARTA', 'QUINTA', 'SEXTA', 'SÁBADO'][data];
       $("#DiaLight").val(dia_light);
       
    }).change();
    
 });


  // Script - Ao selecionar a data desejada, indicará o dia da semana também.
// Prato Light Opicional
$(function(){
   
    $("#DataLightOpicional").on("change", function(){
       
       var d = this.value.split("-");
       var data = new Date(d[0], d[1]-1, d[2]).getDay();
       var dia_light_Opicional = ['DOMINGO', 'SEGUNDA', 'TERÇA', 'QUARTA', 'QUINTA', 'SEXTA', 'SÁBADO'][data];
       $("#DiaLightOpicional").val(dia_light_Opicional);
       
    }).change();
    
 });

 

  // Script - Ao selecionar a data desejada, indicará o dia da semana também.
// Prato Ovo
$(function(){
   
    $("#DataOvo").on("change", function(){
       
       var d = this.value.split("-");
       var data = new Date(d[0], d[1]-1, d[2]).getDay();
       var dia_Ovo = ['DOMINGO', 'SEGUNDA', 'TERÇA', 'QUARTA', 'QUINTA', 'SEXTA', 'SÁBADO'][data];
       $("#DiaOvo").val(dia_Ovo);
       
    }).change();
    
 });


 
  // Script - Ao selecionar a data desejada, indicará o dia da semana também.
// Guarnição
$(function(){
   
    $("#DataGuarnicao").on("change", function(){
       
       var d = this.value.split("-");
       var data = new Date(d[0], d[1]-1, d[2]).getDay();
       var dia_Guarnicao = ['DOMINGO', 'SEGUNDA', 'TERÇA', 'QUARTA', 'QUINTA', 'SEXTA', 'SÁBADO'][data];
       $("#DiaGuarnicao").val(dia_Guarnicao);
       
    }).change();
    
 });

 
 
  // Script - Ao selecionar a data desejada, indicará o dia da semana também.
// Sobremesa
$(function(){
   
    $("#DataSobremesa").on("change", function(){
       
       var d = this.value.split("-");
       var data = new Date(d[0], d[1]-1, d[2]).getDay();
       var dia_Sobremesa = ['DOMINGO', 'SEGUNDA', 'TERÇA', 'QUARTA', 'QUINTA', 'SEXTA', 'SÁBADO'][data];
       $("#DiaSobremesa").val(dia_Sobremesa);
       
    }).change();
    
 });

   // Script - Ao selecionar a data desejada, indicará o dia da semana também.
// Salada
$(function(){
   
    $("#DataSalada").on("change", function(){
       
       var d = this.value.split("-");
       var data = new Date(d[0], d[1]-1, d[2]).getDay();
       var dia_Salada = ['DOMINGO', 'SEGUNDA', 'TERÇA', 'QUARTA', 'QUINTA', 'SEXTA', 'SÁBADO'][data];
       $("#DiaSalada").val(dia_Salada);
       
    }).change();
    
 });


    // Script - Ao selecionar a data desejada, indicará o dia da semana também.
// Suco
$(function(){
   
    $("#DataSuco").on("change", function(){
       
       var d = this.value.split("-");
       var data = new Date(d[0], d[1]-1, d[2]).getDay();
       var dia_Suco = ['DOMINGO', 'SEGUNDA', 'TERÇA', 'QUARTA', 'QUINTA', 'SEXTA', 'SÁBADO'][data];
       $("#DiaSuco").val(dia_Suco);
       
    }).change();
    
 });