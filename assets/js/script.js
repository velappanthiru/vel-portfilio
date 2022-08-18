var TxtRotate = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 300 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
    }

    setTimeout(function() {
        that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName('txt-rotate');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-rotate');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
        new TxtRotate(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".txt-rotate > .wrap { border-right: 0.1em solid #666 }";
    document.body.appendChild(css);
};

$(document).ready(function(){
    scrollShadow();
    $(window).scroll(function() {
        scrollShadow();
    });


    function scrollShadow(){
        if (window.scrollY > 50) {
            $('header nav').addClass('scroll-shadow').addClass('py-3');
        }else{
            $('header nav').removeClass('scroll-shadow').removeClass('py-3');
        }
    }


    

    $(window).scroll(function() {
		var scrollDistance = $(window).scrollTop();
		// Assign active class to nav links while scolling
		$('.content-wrapper .scrollto').each(function(i) {
            if ($(this).offset().top <= scrollDistance) {
                $('#resume-navbar ul li.active').removeClass('active');
                
                $('#resume-navbar ul li').eq(i).addClass('active');
            }
		});
    }).scroll();

    $('#resume-navbar ul li').on('click',function(e){

        let move = $(this).attr('data-move');

        $('#resume-navbar ul li.active').removeClass('active');
        
        $(this).addClass('active');
        let scrollTo = $('#'+move+'-resume').offset().top - $('#'+move+'-resume').height();
        console.log(scrollTo);
        window.scrollTo({
            top: scrollTo,
            behavior: 'smooth'
        })
    })

    $('#contant-us').on('click',function(e){
        e.preventDefault();

        
        var error = 0;
        var name = $('#name').val();
        var email =  $('#email').val();
        var phone = $('#phone').val();
        var message = $('#message').val();
        
        error += validation();   

        if(error == 0) {
            $.ajax({
                url : `${window.location.origin}/portfolio/supports/auth.sup.php`,
                method:"POST",
                data : 'name='+name+'&email='+email+'&phone='+phone+'&message='+message,
    
                success:function(response){
                    var response = JSON.parse(response);
                    
                    if(response.statusCode == 200){
                        toastr.success(response.message);
                        resetFromValue();
                    }else{
                        toastr.error(response.message)
                    }
                },
                error: function(response){
                    toastr.error('Something is wrong, Please try again later.')
                }
            })
        }
       

    })


    function validation(){

        
        var email_rejex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var phone_rejex = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
        
        var error = 0;

        $('.validation').each(function(){

            var _self = $(this);

            var required_field = _self.attr('data-required-name');
            var type = _self.attr('data-type');

            if(type === 'text'){
                if(_self.val() == ''){
                    _self.addClass('is-invalid');
                    _self.parent().find('.err-mge').text(required_field+' field is required.');
                    error += 1;
                } else{
                    _self.removeClass('is-invalid').addClass('is-valid');
                    _self.parent().find('.err-mge').text('');
                    error += 0;
                }
            }else if(type == 'email'){
                if(_self.val() == ''){
                    _self.addClass('is-invalid');
                    _self.parent().find('.err-mge').text(required_field+' field is required.');
                    error += 1;
                } else if(!(email_rejex.test(_self.val()))){
                    _self.addClass('is-invalid');
                    _self.parent().find('.err-mge').text(required_field+' is invalid.');
                    error += 1;
                }
                else{
                    _self.removeClass('is-invalid').addClass('is-valid');
                    _self.parent().find('.err-mge').text('');
                    error += 0;
                }
            }else{
                if(_self.val() == ''){
                    _self.addClass('is-invalid');
                    _self.parent().find('.err-mge').text(required_field+' field is required.');
                    error += 1;
                } else if(!(phone_rejex.test(_self.val()))){
                    _self.addClass('is-invalid');
                    _self.parent().find('.err-mge').text(required_field+' is invalid.');
                    error += 1;
                }
                else{
                    _self.removeClass('is-invalid').addClass('is-valid');
                    _self.parent().find('.err-mge').text('');
                    error += 0;
                }
            }
            
        })

        return error;
    }
   

    function resetFromValue(){
        $('contact-form imput').val('')
    }
})