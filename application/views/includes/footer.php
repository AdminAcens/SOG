<!-- estrutura do footer -->
<footer class="well-footer">
	<h5>2013 - Sistema Online de Gestão</h5>	
	Desenvolvido por <strong>Acens</strong>.
</footer>

<!-- import dos javascripts -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/js/jquery.dataTables.js"></script>

<script type="text/javascript">
     cont=0;
	$(document).ready(function(){
	    $('.table-filter').dataTable(
	    	
	    );
	});




	 $(".mostrar_sprint").toggle(
            function () {
                $(this).closest('.todo').closest('.thumbnail').closest('.thumbnail-hover').animate({"width":"100%"},700);
                $(this).closest('.todo').animate({"width":"22.5%"},450);
                $(this).closest('.aparecer').fadeIN({"display":"block"},450);
                
            },
            function () {
                $(this).closest('.thumbnail').closest('.thumbnail-hover').animate({"width":"22.5%"},700);
                $(this).closest('.todo').animate({"width":"100%"},450);
                $(this).closest('.aparecer').fadeIN({"display":"block"},450);
            } 
        );  

	$(function ()  
	{ $("#infoCompeten, #infoQualific").popover({trigger: 'hover'});  
	});  

	$.extend( $.fn.dataTableExt.oStdClasses, {
    "sSortAsc": "header headerSortDown",
    "sSortDesc": "header headerSortUp",
    "sSortable": "header"
	} );
</script>