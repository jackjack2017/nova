export let amount = {
	init: function(el, btnDec, btnInc) {
		let	min = $(el).data('min') || false,
			max = $(el).data('max') || false;
		if(!$(el).attr('disabled')){
			$('body').on('click', btnDec, function(event){
				event.preventDefault();
				let inp = $(this).parent().find(el);
				amount.decrement(inp, min);
				amount.checkedDisabled(inp, $(this), min, btnInc, max);
			});
			$('body').on('click', btnInc, function(event){
				event.preventDefault();
				let inp = $(this).parent().find(el);
				amount.increment(inp, max);
				amount.checkedDisabled(inp, btnDec, min, $(this), max);
			});

		}
	},

	// count reduction
	decrement: function(el, min) {
		let value = parseInt(el.val());
		value--;
		if(value >= min) {
			el.val(value--);
		}
	},
	//count increase
	increment: function(el, max) {
		let value = parseInt(el.val());
		value++;
		if(value <= max) {
			el.val(value++);
		}
	},
	//check the button on the activity
	checkedDisabled: function(el, btnDec, min, btnInc, max) {
		$(el).each(function(index, el) {
			let value = parseInt($(el).val());
			$(el).parent().find(btnDec).removeClass('__disabled');
			$(el).parent().find(btnInc).removeClass('__disabled');
			if(value <= min){
				$(el).parent().find(btnDec).addClass('__disabled');
			}
			if(value >= max) {
				$(el).parent().find(btnInc).addClass('__disabled');
			}
			
		});
	}
	
	

};