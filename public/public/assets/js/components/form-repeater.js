/*var $repeater = $('.repeater').repeater({
    repeaters: [{
        selector: '.inner-repeater'
    }]
});*/

$('.select_2').select2();


var $repeater = $('.repeater').repeater({

    repeaters: [{
        selector: '.inner-repeater'
    }],

    show: function() {
        $(this).slideDown();
        $(this).find('.select_2').removeClass('select2-hidden-accessible');
        $(this).find('.select2-container').remove();
        $(this).find('.select_2').select2();
        $('.refresh').on('click', function(event){

            var self = $(this).closest('[data-repeater-item]').get(0);


           // $('.refreshCategory').load("{{($admin_path == 'admin')?route('refresh_category', $place_id):route('refresh-category')}}");

           // $('#deleted_addons').val($('#deleted_addons').val()+'-'+self.getElementsByTagName("input")[0].value);
           console.log(self.getElementsByTagName("input")[0].name)
           //console.log(self)
        });
    }

    /*,hide: function(deleteElement) {
        if(confirm('Are you sure you want to delete this element?')) {
            $(this).slideUp(deleteElement);
        }
    }*/

});




