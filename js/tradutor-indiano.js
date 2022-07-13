var arrLang = {
'en':{
   'home': 'Home',
   'btfamous': 'Backing tracks from famous guitars',
   'languagebutton':'Language',
   'paypalinsc': 'Subscribe for $0.99',
   'freepresets': 'Free Presets',
    'btimproviso': 'Backing tracks for improvisation',
    'guitarrist':'Guitarrist or Banda',

  },

'pt':{
   'home': 'Início',
    'btfamous': 'Backing tracks de guitarristas famosos',
    'languagebutton':'Idioma',
    'paypalinsc': 'Se inscreva por $0.99',
    'freepresets': 'Presets Grátis',
    'btimproviso': 'Backing tracks para improvisação',
     'guitarrist':'Guitarrista ou Banda',

  }

};

$(function(){
  $('.translate').click(function(){
     var lang = $(this).attr('id');
	 
	 $('.lang').each(function(index,element){
	 $(this).text(arrLang[lang][$(this).attr('key')]);﻿
    });
  });
});