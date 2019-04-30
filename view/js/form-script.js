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

    $('#valider').click(function(){
      $('#update_modal').css('display','inline-block')
      $('#assure-infos,#hidden-caracteristiques').css('display','none')
    })

    $('#close_modal').click(function() {
        $('#update_modal').css('display','none')
        $('#assure-infos,#hidden-caracteristiques').css('display','inline-block')
    })
  
    // $('#add_new_intermediaire').click(function(){
    //   alert("ok")
    //   $('#addUserModal').fadeIn()
    // })
   
    function divider() {
      $('.divide').divide({
          delimiter:' ',
          divideThousand:true
      }); 
    }
    divider()
     // setInterval(divider, 10);




  })