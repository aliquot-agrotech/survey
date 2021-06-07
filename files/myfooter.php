<style>

#container {
    width: 100%;
    height: 330px
}

#part1 {
    width: 100%;
    height: 280px;
    margin-top: 5px;
    background-image: url("images/images.jpg");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

#part2 {
    width: 100%;
    
    height: 50px;
    background-color: black;
    position: relative;
    top: 0px
}

#companyinfo {
    width: 14%;
    height: 280px;
    position: relative;
    left: 8%;
    top: 30px
}

#sitelink {
    font-size: 35px;
    color: #f44336
}

#sitelink:hover {
    color: #e65100
}

#title {
    color: gray;
    position: relative;
    top: 0px;
    font-size: 14.1px
}

#detail {
    color: #000;
    font-size: 16px
}

#explore {
    width: 14%;
    height: 280px;
    position: relative;
    top: -235px;
    left: 29%
}

#txt1,
#txt2,
#txt3,
#txt4,
#txt5 {
    color: #713636;
    font-size: 20px
}

.link {
    display: flex;
    width: 90px;
    height: 40px;
    color: #000;
    background-color: transparent;
    border-top: 2px solid white;
    position: relative;
    top: -10px
}

.link:hover,
.link1:hover {
    color: #e65100
}

#visit {
    width: 14%;
    height: 280px;
    position: relative;
    top: -515px;
    left: 42%
}

.text {
    color: #000;
    font-size: 14px;
    margin-top: -10px
}

#legal {
    width: 14%;
    height: 280px;
    position: relative;
    top: -800px;
    left: 59.5%
}

.link1 {
    display: flex;
    width: 150px;
    height: 40px;
    color: #000;
    background-color: transparent;
    border-top: 2px solid white;
    position: relative;
    top: -10px;
    margin-top: 7px
}

#subscribe {
    position: relative;
    top: -1080px;
    left: 78%;
    width: 14%;
    height: 280px
}

#email {
    color: #000;
    position: relative;
    top: -20px
}

.btn {
    position: relative;
    top: -10px
}

#txt5 {
    position: relative;
    top: 0px
}

.social {
    position: relative;
    top: -5px;
    margin-right: 10px;
    color: #3f5a98db;
    cursor: pointer
}

.fa-facebook-square:hover {
    color: #3B579D
}

.fa-linkedin:hover {
    color: #007BB6
}

.fa-twitter-square:hover {
    color: #2CAAE1
}

#txt6 {
    color: white;
    position: relative;
    top: 13px;
    left: 8%;
    width: 80%;
    color: #aaa7a7
}

.material-icons {
    position: relative;
    top: 3px
}

@media only screen and (max-width:1000px) {
    #companyinfo {
        width: 20%
    }

    #sitelink {
        font-size: 30px
    }

    #txt5,
    #txt4 {
        font-size: 17px
    }

    #txt5,
    .social {
        position: relative;
        top: -5px
    }
}

@media only screen and (max-width:850px) {
    #companyinfo {
        position: relative;
        left: 3%
    }

    #txt6 {
        position: relative;
        left: 3%
    }

    #txt1,
    #txt2,
    #txt3,
    #txt4,
    #txt5 {
        font-size: 15px
    }

    #explore {
        position: relative;
        top: -240px;
        left: 26%
    }

    #sitelink {
        font-size: 25px
    }

    #detail {
        font-size: 13px
    }

    .link {
        width: 60px
    }

    #visit {
        position: relative;
        top: -520px;
        left: 37%
    }

    .text {
        font-size: 13px
    }

    #legal {
        position: relative;
        top: -800px;
        left: 54%
    }

    #subscribe {
        position: relative;
        top: -1080px;
        left: 76%;
        width: 20%
    }

    #txt5,
    .social {
        position: relative;
        left: -110%;
        top: px
    }

    #email,
    .btn {
        position: relative;
        top: 0px
    }

    #part1 {
        height: 250px;
        
    }
}
.footer {
  flex-shrink: 0;
}
</style>
     <div id="container" class="footer">
         <div id="part1">
             <div id="companyinfo"> 
             <a id="sitelink" href="#">About Us</a>
                 <!-- <p id="title">About Us</p> -->
                 <p id="detail">We believe our clients need more than a data supplier, they need a partner who can produce accurate and relevant information and turn it into actionable truth. </p>
             </div>
             <div id="explore">
                 <p id="txt1">Explore</p> <a class="link" href="#">Home</a> <a class="link" href="#">About</a> 
             </div>
             <div id="visit">
                 <p id="txt2">Visit</p>
                 <p class="text">info@aliquot-ltd.com </p>
                 <!-- <p class="text">78 Bhulabhai Desai Road </p>
                 <p class="text">Mumbai 400 026 </p> -->
                 <p class="text">Phone: +254-795057553 </p>
                 <!-- <p class="text">Fax: (22) 2363-0350 </p> -->
             </div>
             <div id="legal">
                 <p id="txt3">Legal</p> <a class="link1" href="#">Terms and Conditions</a> <a class="link1" href="#">Private Policy</a>
             </div>
             <div id="subscribe">
                 <p id="txt4">Subscribe to US</p>
                 <form> <input id="email" type="email" placeholder="Email"> </form> <a class="waves-effect waves-light btn" style="background-color: #fff">Subscribe</a>
                 <p id="txt5">Connect With US</p> <i class="fab fa-facebook-square social fa-2x"></i> <i class="fab fa-linkedin social fa-2x"></i> <i class="fab fa-twitter-square social fa-2x"></i>
             </div>
         </div>
         <div id="part2">
         <strong style="margin-left: 45%; margin-bottom: 0%; color: white">Copyright &copy; <?php echo date("Y");?>.</strong>         </div>
     </div>

<!-- SweetAlert2 -->
<script src="assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="assets/plugins/toastr/toastr.min.js"></script>
<!-- Select2 -->
<script src="assets/plugins/select2/js/select2.full.min.js"></script>
<!-- Summernote -->
<script src="assets/plugins/summernote/summernote-bs4.min.js"></script>
<script>
	$(document).ready(function(){
	  // $('.datetimepicker').datetimepicker({
	  //     format:'Y/m/d H:i',
	  //     startDate: '+3d'
	  // })

	  $('.select2').select2({
	    placeholder:"Please select here",
	    width: "100%"
	  });
  })
	 window.////start_load() = function(){
	    $('body').prepend('<div id="preloader2"></div>')
	  }
	  window.end_load = function(){
	    $('#preloader2').fadeOut('fast', function() {
	        $(this).remove();
	      })
	  }
	 window.viewer_modal = function($src = ''){
	    //start_load()
	    var t = $src.split('.')
	    t = t[1]
	    if(t =='mp4'){
	      var view = $("<video src='"+$src+"' controls autoplay></video>")
	    }else{
	      var view = $("<img src='"+$src+"' />")
	    }
	    $('#viewer_modal .modal-content video,#viewer_modal .modal-content img').remove()
	    $('#viewer_modal .modal-content').append(view)
	    $('#viewer_modal').modal({
	            show:true,
	            backdrop:'static',
	            keyboard:false,
	            focus:true
	          })
	          end_load()  

	}
	  window.uni_modal = function($title = '' , $url='',$size=""){
	      //start_load()
	      $.ajax({
	          url:$url,
	          error:err=>{
	              console.log()
	              alert("An error occured")
	          },
	          success:function(resp){
	              if(resp){
	                  $('#uni_modal .modal-title').html($title)
	                  $('#uni_modal .modal-body').html(resp)
	                  if($size != ''){
	                      $('#uni_modal .modal-dialog').addClass($size)
	                  }else{
	                      $('#uni_modal .modal-dialog').removeAttr("class").addClass("modal-dialog modal-md")
	                  }
	                  $('#uni_modal').modal({
	                    show:true,
	                    backdrop:'static',
	                    keyboard:false,
	                    focus:true
	                  })
	                  end_load()
	              }
	          }
	      })
	  }
	  window._conf = function($msg='',$func='',$params = []){
	     $('#confirm_modal #confirm').attr('onclick',$func+"("+$params.join(',')+")")
	     $('#confirm_modal .modal-body').html($msg)
	     $('#confirm_modal').modal('show')
	  }
	   var Toast = Swal.mixin({
	      toast: true,
	      position: 'top-end',
	      showConfirmButton: false,
	      timer: 5000
	    });
	   window.alert_toast= function($msg = 'TEST',$bg = 'success'){

	    //   $('#alert_toast').removeClass('bg-success')
	    //   $('#alert_toast').removeClass('bg-danger')
	    //   $('#alert_toast').removeClass('bg-info')
	    //   $('#alert_toast').removeClass('bg-warning')
	    //   if($bg == 'success')
	    //   $('#alert_toast').addClass('bg-success')
	    //   if($bg == 'danger')
	    //   $('#alert_toast').addClass('bg-danger')
	    // if($bg == 'info')
	    //   $('#alert_toast').addClass('bg-info')
	    // if($bg == 'warning')
	    //   $('#alert_toast').addClass('bg-warning')
	    // $('#alert_toast .toast-body').html($msg)
	    // $('#alert_toast').toast({delay:3000}).toast('show');

	    console.log('TEST')
	      Toast.fire({
	        icon: $bg,
	        title: $msg
	      })
	  }
$(function () {
    $('.summernote').summernote({
        height: 300,
        toolbar: [
            [ 'style', [ 'style' ] ],
            [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
            [ 'fontname', [ 'fontname' ] ],
            [ 'fontsize', [ 'fontsize' ] ],
            [ 'color', [ 'color' ] ],
            [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
            [ 'table', [ 'table' ] ],
            [ 'view', [ 'undo', 'redo', 'fullscreen', 'codeview', 'help' ] ]
        ]
    })

  })
</script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.js"></script>

<!-- PAGE assets/plugins -->
<!-- jQuery Mapael -->
<script src="assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="assets/plugins/raphael/raphael.min.js"></script>
<script src="assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="assets/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="assets/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="assets/dist/js/pages/dashboard2.js"></script>
<!-- DataTables  & Plugins -->
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="assets/plugins/jszip/jszip.min.js"></script>
<script src="assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>