$(".slider").owlCarousel({
    margin: 20,
    loop: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive: {
      0:{
        items:1,
        nav: false
      },
      600:{
        items:2,
        nav: false
      },
      1000:{
        items:3,
        nav: false
      }
    }
  });
  
  $('.brand-carousel').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout: 2000,
    responsive:{
      0:{
        items:3
      },
      600:{
        items:4
      },
      1000:{
        items:5
      }
    }
  });
  
  $('#click').on('click',function(){
    Swal.fire({
      title : 'Masukkan kode pemilihan',
      input : 'text'
    }).then(function(text) {
      Swal.fire({
      title:  'Voting anda telah masuk',
      icon :  'success'
      })
    })
  }); 
  
  $("form").on("change", ".file-upload-field", function(){
    $(this).parent(".file-upload-wrapper").attr("data-text",$(this).val().replace(/.*(\/|\\)/,''));
});

$(document).ready(function () {
  $('select').selectize({
      sortField: 'text'
  });
});