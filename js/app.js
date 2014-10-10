(function(){
	var app = angular.module('project_calculator',[]);

	var developers = [
		{id:1, name:"Mariana"},
		{id:2, name:"Franco"},	
	];

	var projects = [{
		name: "test",
		amount: 300,
		hours_total: 8,
		hours_developers: [
			{ 
				id: 1,
				name: "Mariana",
				hours: 5
			},
			{ 
				id: 2,
				name: "Franco",
				hours: 3
			}
		],
	}];

	app.controller('ProjectCalculatorController',function(){
		this.projects = projects;
		this.developers = developers;
	});

})();