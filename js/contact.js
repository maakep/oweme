$(document).ready(function(){
	$(".panel").hide();
	$("#contactFormBox").hide();

	//left
	$("#cvBtn").click(function(){
		$('#cvBox').stop().slideToggle("slow");
		$('#meBox').stop().slideUp("slow");
	});

	$("#meBtn").click(function(){
		$('#meBox').stop().slideToggle("slow");
		$('#cvBox').stop().slideUp("slow");
	});


	//right
	$("#pbBtn").click(function(){
		$('#pbBox').stop().slideToggle("slow");
		$('#faqBox').stop().slideUp("slow");
	});

	$("#faqBtn").click(function(){
		$('#faqBox').stop().slideToggle("slow");
		$('#pbBox').stop().slideUp("slow");
	});


	//all
	$("#contactBtn").click(function(){
		$('#contentBox').stop().slideToggle("slow");
		$('#contactFormBox').stop().slideToggle("slow");
	});


	//send mail view
	$("#upArrow").click(function(){
		$('#contentBox').stop().slideToggle("slow");
		$('#contactFormBox').stop().slideToggle("slow");
	});
});
