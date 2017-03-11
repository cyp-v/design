'use strict';

$(document).ready(function()
{

/*
===== Ouvrir une fenêtre modale =====
*/

	$('.modal').modal();
	
/*
===== Publier une news en attente de publication en cochant sa checkbox "publication" (admin) =====
*/

	$("form.checkable").each(function()
	{

		var checkableForm = $(this);

		$("input:checkbox").change(function(){
			if( $(this).is(":checked") )
       		{
            	$(checkableForm).submit();
        	}
		});

	});

/*
===== Mise en forme des formulaires =====
*/
	//initialisation des input "select" 
	$('select').material_select();

	$('.datepicker').pickadate({
		selectMonths: true, // Creates a dropdown to control month
		selectYears: 15, // Creates a dropdown of 15 years to control year
		monthsFull: ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'],
  		monthsShort: ['jan', 'fev', 'mars', 'avr', 'mai', 'juin', 'juil', 'août', 'sept', 'oct', 'nov', 'dec'],
  		weekdaysFull: ['dimanche', 'lundi', 'mardi', 'mercreci', 'jeudi', 'vendredi', 'samedi'],
  		weekdaysShort: ['dim', 'lun', 'mar', 'mer', 'jeu', 'ven', 'sam'],
  		today: 'aujourd\'hui',
  		clear: 'effacer',
  		close: 'fermer',
  		format: 'dd/mm/yyyy', 
  		formatSubmit: 'yyyy/mm/dd'
	});

}); //end document.ready