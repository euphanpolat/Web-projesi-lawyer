$(document).ready(function(){
    
    (function($) {
        "use strict";

    
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "type the correct answer -_-");

    // validate contactForm form
    $(function() {
        $('#contactForm').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                subject: {
                    required: true,
                    minlength: 4
                },
                number: {
                    required: true,
                    minlength: 5
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true,
                    minlength: 20
                }
            },
            messages: {
                name: {
                    required: "Hadi ama, bir ismin vardır herhalde?",
                    minlength: "İsmin en az 2 harf olmalı, lakap sayılmaz!"
                },
                subject: {
                    required: "Bir konun yoksa neden yazıyorsun ki?",
                    minlength: "Konu en az 4 karakter olmalı, 'Merhaba' bile yetiyor!"
                },
                number: {
                    required: "Bir numara ver, casus değiliz ki!",
                    minlength: "Numara dediğin en az 5 haneli olur, değil mi?"
                },
                email: {
                    required: "E-posta olmadan mesaj yollayamam... teknolojiye aykırı!"
                },
                message: {
                    required: "Yani... bir şeyler yazmalısın ki gönderebileyim!",
                    minlength: "Bu kadar mı? Daha fazlasını bekliyordum açıkçası!"
                }
            },
            submitHandler: function(form) {
                $(form).ajaxSubmit({
                    type:"POST",
                    data: $(form).serialize(),
                    url:"contact_process.php",
                    success: function() {
                        $('#contactForm :input').attr('disabled', 'disabled');
                        $('#contactForm').fadeTo( "slow", 1, function() {
                            $(this).find(':input').attr('disabled', 'disabled');
                            $(this).find('label').css('cursor','default');
                            $('#success').fadeIn()
                            $('.modal').modal('hide');
		                	$('#success').modal('show');
                        })
                    },
                    error: function() {
                        $('#contactForm').fadeTo( "slow", 1, function() {
                            $('#error').fadeIn()
                            $('.modal').modal('hide');
		                	$('#error').modal('show');
                        })
                    }
                })
            }
        })
    })
        
 })(jQuery)
})