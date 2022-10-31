
jQuery(document).ready(function ($) {
    if($(".coming-soon-body>h1").text() == "Bientôt en ligne"){
		$(".coming-soon-form>input[type=submit]").val("Me prévenir");
		$(".coming-soon-form>input[type=text]").attr('placeholder','Adresse email');
    

  }


  /* Animated Grid Component */


	var slideshows = Array.from(document.querySelectorAll('.grid-box'));
  
  // Apply to all slideshows that you define with the markup wrote
  slideshows.forEach(initSlideShow);

  function initSlideShow(slideshow) {

    var slides = slideshow.querySelectorAll('.slide'); // Get an array of slides

	if(slides.length > 1){

    var index = 0, time = 500;
    slides[index].classList.add('active');  
    
    setInterval( () => {
      slides[index].classList.remove('active');
      
      //Go over each slide incrementing the index
      index++;
      
      // If you go over all slides, restart the index to show the first slide and start again
      if (index === slides.length) index = 0; 
      
      slides[index].classList.add('active');

    }, time);

	}else{
		slides.forEach(slide => {
			slide.style.display = 'block';
		})
	}

}
if(document.querySelector('.reviews_slider')){
  var flkty = new Flickity( document.querySelector('.reviews_slider'), {
    // options
    cellAlign: 'left',
    contain: true,
    prevNextButtons: false,
    wrapAround: true,
    autoPlay: 2500,
    draggable: '>1'
  });
}




if ($(window).width() <= 1050) {
  $('.gallery-wrap .item').each(function(){
    $(this).addClass('carousel-cell');
  })
  var flkty2 = new Flickity( document.querySelector('.gallery-wrap'), {
    // options
    cellAlign: 'left',
    contain: true,
    prevNextButtons: false,
    draggable: '>1'
  });
  
}



AOS.init();

/* Show/Hide Review form */
$('#review_form').hide();

$('.reviews_stats_container .ck_button').click(function(){
  $('#review_form').toggle();
})





function get_tinymce_content(id) {
  var content;
  var inputid = id;
  var editor = tinyMCE.get(inputid);
  var textArea = jQuery('textarea#' + inputid);    
  if (textArea.length>0 && textArea.is(':visible')) {
      content = textArea.val();        
  } else {
      content = editor.getContent();
  }    
  return content;
}

if(document.querySelector('.comment-form-rating')){
  document.querySelector('.comment-form-rating').after(document.querySelector('#wp-test_id-wrap'));
}
if(document.querySelector('#submit')){
  document.querySelector('#submit').addEventListener('click',(event)=>{
    let content = get_tinymce_content('test_id');
    document.querySelector('#comment').value = content;
    if(content.trim() == '' || content == null){
      event.preventDefault();
      $('.review_text_error').html('Ce champs est requis');
    }
  })
}


/* Create account checkbox input checked automatically */

$("[name='createaccount']").click();


$('.burger_menu_btn').click(function(){
  $('.fullpage_menu').addClass('active_menu');
})
$('.close_menu_btn').click(function(){
  $('.fullpage_menu').removeClass('active_menu');
})


/* Search orders dashboard */

$("#order_search").on("keyup", function() {
  var value = $(this).val().toLowerCase();
  
  $("#orders_table tbody tr.filtred").filter(function() {
    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
  });
  var trSel =  $("#orders_table tbody tr:visible")
  // Check for number of rows & append no records found row
  if(trSel.length == 0){
    $("#orders_table tbody").append('<tr class="no-records"><td colspan="5" align="center">Aucun résultat n\'a été trouvé</td></tr>')
  } else { $('.no-records').remove() }
  
});


// orders status tabs in dashboard
$('.filter-handle').click(function(e) {
  // retrieve the clicked tabs
  var statut = $(this).attr('tab-target');
  $('.filter-handle').removeClass("active_filter");
  $(this).addClass('active_filter');
  var ordertable = $('#orders_table');
  // if a location is selected
  if (statut!="all") {
  // hide all not matching
  ordertable.find('tbody tr:not(.woocommerce-orders-table__row--status-'+statut+')').hide();
  ordertable.find('tbody tr:not(.woocommerce-orders-table__row--status-'+statut+')').removeClass("filtred");
  // display all matching
  ordertable.find('tbody tr.woocommerce-orders-table__row--status-'+statut).show('slow');
  ordertable.find('tbody tr.woocommerce-orders-table__row--status-'+statut).addClass("filtred");
  } else {
  // location is not selected,
  // display all
  ordertable.find('tbody tr').show('slow');
  ordertable.find('tbody tr').removeClass("filtred");
  ordertable.find('tbody tr').addClass("filtred");
  }
});


/* Dashboard sidenav show/hide */

$( window ).resize(function() {
  if ($(window).width() >= 720) {
    $('.woocommerce-MyAccount-navigation').css({
      "transform":"translateX(0%)"
    })
 }
});

$('.show_sideNav').click(function(){
  $('.woocommerce-MyAccount-navigation').css({
    "transform":"translateX(0%)"
  })
});

$('.close_sideNav').click(function(){
  $('.woocommerce-MyAccount-navigation').css({
    "transform":"translateX(-100%)"
  })
})
    

let paths = Array.from(document.querySelectorAll('.animation_container svg path'));

  const animation_container = document.querySelector('.animation_container');
  gsap.registerPlugin(ScrollTrigger);

if(document.querySelector('.animation_container')){
  paths.forEach(path => {
    gsap.to('.svg_container',{
      scrollTrigger: {
        trigger:path,
        toggleActions:'restart none none none',
        start:"top 80%",
        // markers:true,
        scrub:true,
        onEnter:function(){
          anime({
              targets: path,
              strokeDashoffset: [anime.setDashoffset, 0],
              easing: 'easeInOutSine',
              duration: 800,
          });
        },
        onLeave:function(){
          anime({
            targets: path,
            strokeDashoffset: [anime.setDashoffset, 1000],
            easing: 'easeInOutSine',
            duration: 1000,
        });
        }
      },
    })
  })
}
 
  
  /* Balloon on scroll animation */
  if(document.querySelector('.ballons')){
    gsap.to('.ballons',{
      scrollTrigger: {
        trigger:'.ballons',
        toggleActions:'restart none none none',
        start:"top bottom",
        // markers:true,
        scrub:true,
      },
      y:-300,
      duration:3
    })
  }
  

  /* Review form validation */

  $('#commentform').on('submit', function(e){}).validate({
    rules:{
      test_id:{
          required:true,
          maxlength:1000
        },
        rating:{
          required:true
        },
        review_title:{
          required:true
        }
    },
    errorElement: 'span',
    messages:{
      test_id:{
        required:"Veuillez entrez un commentaire !",
        maxlength:"Votre commentaire est trop long !"
      },
      review_title:{
        required:"Ce champs est requis !"
      }
    }
  })

  /* Inserting underline svg in menu links */

  $('#primary-menu li.menu-item').each(function(){
      
      let el_width = $(this).width();
      let svg = `
                <svg width="122" height="7"  class='curved_line_svg'  viewBox="0 0 122 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.34556 5.17982C23.6447 3.31535 76.9484 0.300466 119.77 3.15666" stroke="url(#paint0_linear_35_29395)" stroke-width="3.5" stroke-linecap="round"/>
                <defs>
                <linearGradient id="paint0_linear_35_29395" x1="-1.01588" y1="3.71888" x2="119.851" y2="2.93038" gradientUnits="userSpaceOnUse">
                <stop stop-color="#FF4A4A"/>
                <stop offset="1" stop-color="#FFC231"/>
                </linearGradient>
                </defs>
                </svg>
      `;
      $(this).append(svg);
  });


  /* Preloader */

  // const tl = gsap.timeline({ defaults: { ease: "power1.out" } });

  // tl.to(".text", { y: "0%", duration: 1, stagger: 0.25 });
  // tl.to(".slider", { y: "-100%", duration: 1.5, delay: 0.5 });
  // tl.to(".intro", { y: "-100%", duration: 1 }, "-=1");
  // tl.fromTo("nav", { opacity: 0 }, { opacity: 1, duration: 1 });
  // tl.fromTo(".big-text", { opacity: 0 }, { opacity: 1, duration: 1 }, "-=1");



  let email_input = document.querySelector('.comment-form-email');
  let name_input = document.querySelector('.comment-form-author');
  let form_row_container = document.querySelector('.email_and_name_container');
  let comment_form_cookies_consent = document.querySelector('.comment-form-cookies-consent');

  if(email_input && name_input){
  
    form_row_container.appendChild(email_input);
    form_row_container.appendChild(name_input);

    // inserting cookies consent after text editor
    
    document.querySelector('.comment-form-rating').after(form_row_container);
    
    form_row_container.before(document.querySelector('#wp-test_id-wrap'))
    
    document.querySelector('#review_title').after(form_row_container);

  }


// sticky cart scripts

let qte_sticky = document.getElementById('qte_sticky');
let product_id = document.querySelector('#product_id_sticky');
let addToCartBtn = document.querySelector('.add_to_cart_sticky');
let sticky_add_to_cart_element = document.querySelector('.sticky_add_to_cart');

if(qte_sticky !== null){
qte_sticky.addEventListener('change',(event)=>{
  let qte_cart = qte_sticky.value;
  let add_to_cart_url = window.location.href.split('?')[0]  + "?" + `add-to-cart=${product_id.value}&quantity=${qte_cart}`;
  addToCartBtn.setAttribute('href', add_to_cart_url);
  console.log(add_to_cart_url);
})

if(document.querySelector('.wc-tabs')){
  let tl2 = gsap.timeline({
    // yes, we can add it to an entire timeline!
    scrollTrigger: {
      trigger: ".wc-tabs",
      start: "top top", // when the top of the trigger hits the bottom of the viewport
      scrub: 1, // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
      onEnter:function(){
        sticky_add_to_cart_element.classList.add('active-sticky-cart');
      }
    }
  });
}

// when user scrolls to the top of the page
window.addEventListener('scroll',()=>{
  if(window.scrollY <= 700){
    sticky_add_to_cart_element.classList.remove('active-sticky-cart');
  }
})
}


/* Contact form submit using AJAX */

// contact form validation
	
$('#contact_form').on('submit',function(e){}).validate({
  rules:{
    full_name:{required:true},
    contact_email:{
      required:true,
      email:true
       },
      sujet:{
      required:true,
      maxlength:255
    },
    message: {
      required:true,
      maxlength:400
    }
  },
  errorElement: "span",
  messages:{
    full_name:{required:'This field is required ! '},
    contact_email:{
      required:'This field is required ! ',
      email:'Please enter a valid email address'
    },
    sujet:{
      required:'This field is required ! ',
      maxlength:'Subject too long',
    },
    message:{
      required:"This field is required !",
      maxlength:"Message is too long !"
    },
  },
  submitHandler:function(form){
        jQuery.ajax({
          type: "post",
          dataType: "json",
          url: childrens_kingdom_js_object.ajax_url,
          data: {
            action: 'ck_contact',
            message: $(form).find('input[name=message]').val(),
            full_name: $(form).find('input[name=full_name]').val(),
            sujet: $(form).find('input[name=sujet]').val(),
            contact_email: $(form).find('input[name=contact_email]').val(),

          },
          success: function(response){
            $('html, body').animate({ scrollTop: $(".contact_form_container").offset().top }, 'slow');
            
            // auto reload
            setTimeout(function(){
                location.reload();
            }, 4000) 
            
            
            if(response.error){
              $('#msg').addClass('error')
            }else{
              $('#msg').addClass('success')
            }
            
            $('#msg').text(response.message)
            
          }
        });
  }
})


});