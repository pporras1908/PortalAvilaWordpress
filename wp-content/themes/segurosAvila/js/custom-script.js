function mapMenu(region) {
  switch(region) {
  case 1:
    window.location.replace("http://www.segurosavila.com/region-occidental/");
    break;
  case 2:
		window.location.replace("http://www.segurosavila.com/region-central/");
    break;
  case 3:
    window.location.replace("http://www.segurosavila.com/region-oriental/");
   
    break;
  default:
    // code block
}
  
}
/*
$('#fileAttach').change(function(){

  var filename = $(this).val().split('\\').pop();
   var idname = $(this).attr('id');

   $('#archivo').text(filename);
   
  });
*/