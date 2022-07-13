var app = angular.module('myApp',["pascalprecht.translate"]);

app.config(function($translateProvider){
	    $translateProvider.translations('en', {
		
		HOME:'Home',
		PAR:'Welcome Money Hunters!',
		EN_BTN:'Language',
		ES_BTN: 'Spanish',	
		PT_BTN: 'Language',
		JP_BTN:'Japanese',
		LANG:'Language'
});
		$translateProvider.translations('es', {
		
		HOME:'Inicio',
		PAR:'Bienvenido Cazadores de dinero',
		EN_BTN:'Ingles',
		ES_BTN: 'español',
		PT_BTN: 'Idioma',
		JP_BTN: 'Japonés' 

});	

		$translateProvider.translations('pt', {
		
		HOME:'Início',
		PAR:'Bem vindo caçadores de dinheiro!',
		EN_BTN:'Inglês',
		ES_BTN: 'espanhol',
		PT_BTN: 'Idioma',
		JP_BTN: 'Japonês',
		LANG:'Idioma'
});
});		


		$translateProvider.translations('de', {
		
		HOME:'もしもし',
		PAR:'お金のハンターを歓迎します！',
		EN_BTN:'英語',
		ES_BTN: 'スペイン語'	,
		PT_BTN: 'ポルトガル語',
		JP_BTN: '日本語'
});	
		
		$translateProvider.preferredLanguage('en');
		$translateProvider.useSanitizeValueStrategy('escapeParameters');
		
});

	app.controller('crtl', function($scope, $translate){
		$scope.lang = function (trans){
			$translate.use(trans);
		};
});