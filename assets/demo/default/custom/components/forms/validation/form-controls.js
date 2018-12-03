//== Class definition

var FormControls = function () {
    //== Private functions
    
    var demo1 = function () {
        $( "#m_form_1" ).validate({
            // define validation rules
            rules: {
                userid:{
                    required: true
                },
                password:{
                    required: true
                },

                password_again: {
                    required: true,
                    equalto: "#password"
                },
                email: {
                    required: true,
                    email: true,
                    minlength: 10 
                },
                url: {
                    required: true 
                },
                digits: {
                    required: true,
                    digits: true
                },
                creditcard: {
                    required: true,
                    creditcard: true 
                },
                phone: {
                    required: true,
                    phoneUS: true 
                },
                option: {
                    required: true
                },
                options: {
                    required: true,
                    minlength: 2,
                    maxlength: 4
                },
                memo: {
                    required: true,
                    minlength: 10,
                    maxlength: 100
                },

                checkbox: {
                    required: true
                },
                checkboxes: {
                    required: true,
                    minlength: 1,
                    maxlength: 2
                },
                radio: {
                    required: true
                }
            },
            
            //display error alert on form submit  
            invalidHandler: function(event, validator) {     
                var alert = $('#m_form_1_msg');
                alert.removeClass('m--hide').show();
                mApp.scrollTo(alert, -200);
            },
        });       
    }

    var demo2 = function () {
        $( "#m_form_2" ).validate({
            // define validation rules
            rules: {
                nama_lengkap:{
                    required: true,

                },
                password:{
                    required: true,
                    minlength: 6
                },

                password_again: {
                    required: true,
                    equalTo: "#password"
                },
                email: {
                    required: true,
                    email: true 
                },
                url: {
                    required: true 
                },
                digits: {
                    required: true,
                    digits: true
                },
                creditcard: {
                    required: true,
                    creditcard: true 
                },
                phone: {
                    required: true,
                    phoneUS: true 
                },
                option: {
                    required: true
                },
                options: {
                    required: true,
                    minlength: 2,
                    maxlength: 4
                },
                memo: {
                    required: true,
                    minlength: 10,
                    maxlength: 100
                },

                checkbox: {
                    required: true
                },
                checkboxes: {
                    required: true,
                    minlength: 1,
                    maxlength: 2
                },
                radio: {
                    required: true
                }
            },
            
            //display error alert on form submit  
            invalidHandler: function(event, validator) {     
                var alert = $('#m_form_2_msg');
                alert.removeClass('m--hide').show();
                mApp.scrollTo(alert, -200);
            }

        });       
    }

    return {
        // public functions
        init: function() {
            demo1(); 
            demo2(); 
        }
    };
}();

jQuery(document).ready(function() {    
    FormControls.init();
});