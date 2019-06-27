

$(window, document, undefined).ready(function() {

    $('input').blur(function() {
      var $this = $(this);
      if ($this.val())
        $this.addClass('used');
      else
        $this.removeClass('used');
    });

    var $ripples = $('.ripples');
    $ripples.on('click.Ripples', function(e) {
  
      var $this   = $(this);
      var $offset = $this.parent().offset();
      var $circle = $this.find('.ripplesCircle');
  
      var x = e.pageX - $offset.left;
      var y = e.pageY - $offset.top;
  
      $circle.css({
        top: y + 'px',
        left: x + 'px'
      });
  
      $this.addClass('is-active');
  
    });
  
    $ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
        $(this).removeClass('is-active');
    });
  });

  $(document).ready(function(){
    $('#number_j').prop('disabled',true)
    $('#number_v').prop('disabled',true)


    $('#check1').click(function(){
      if($(this).is(":checked")){
        $('#number_j').prop('disabled',false)
      }else{
        $('#number_j').prop('disabled',true)
      }
    })
    $('#check2').click(function(){
      if($(this).is(":checked")){
        $('#number_v').prop('disabled',false)
      }else{
        $('#number_v').prop('disabled',true)
      }
    })
    $(this).click(function(){
      if($('#check3').is(":checked")){
        $('#number_c').prop('disabled',false)
      }else{
        $('#number_c').prop('disabled',true)
      }
    })

    $('#close_modal').click(function() {
        $('#update_modal').css('display','none')
        $('#assure-infos,#hidden-caracteristiques').css('display','inline-block')
    })
    $("#jaune").click(function(){
      $('#attestation-verte').fadeOut()
      $('#attestation-jaune').fadeIn()
    })
    $("#verte").click(function(){
      $('#attestation-jaune').fadeOut()
      $('#attestation-verte').fadeIn()

    })
  
    function divider() {
      $('.divide').divide({
          delimiter:' ',
          divideThousand:true
      }); 
    }
    divider()

  // setInterval(function() {
  //   divider()
  // }, 1000);

    var input = document.querySelector("#tel");
    window.intlTelInput(input, {
      nationalMode: false,
      initialCountry: "sn",
      separateDialCode: false,
      preferredCountries: ["fr", "ml", "us"],
      geoIpLookup: function (callback) {
          $.get('https://ipinfo.io', function () {
          }, "jsonp").always(function (resp) {
              var countryCode = (resp && resp.country) ? resp.country : "";
              callback(countryCode);
          });
      },
      utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.14/js/utils.js"
    });






  })