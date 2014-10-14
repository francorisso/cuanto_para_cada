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
				hours: 5,
				cash: 0,
			},
			{ 
				id: 2,
				name: "Franco",
				hours: 3,
				cash: 0,
			}
		],
	}];

	app.controller('ProjectCalculatorController',function(){
		this.projects = projects;
		this.developers = developers;

		this.changeHours = function(project){
			var hours_total = 0;
			for(var i=0; i<project.hours_developers.length; i++){
				hours_total += parseInt( project.hours_developers[i].hours );
			}
			project.hours_total = hours_total;
			console.log(project);
		}
	});

	app.directive('projects',function(){
		return {
			restrict: "E",
			templateUrl: "project.html"
		};
	});

})();