              </div>
            </div>
        <!-- end #wrapper -->
        </div>
  </div>
  <!-- /#page-content-wrapper -->
  <!-- .end container-fluid -->
<!-- </div> -->
<!-- end #wrapper -->
</div>
<script>

  $(document).ready(function(e) {
        $("#hide").click(function(e) {
            $("#option").css("position","static");
        });
        });
    
     $("#menu-toggle-2").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled-2");
        $('#menu ul').hide();
    });
 
     function initMenu() {
      $('#menu ul').hide();
      $('#menu ul').children('.current').parent().show();
      //$('#menu ul:first').show();

      $('#menu li a').click(
        function() {
          var checkElement = $(this).next();
          if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
            return false;
            }
          if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
            $('#menu ul:visible').slideUp('normal');
            checkElement.slideDown('normal');
            return false;
            }
          }
        );
      }
      $(document).ready(function() {initMenu();});
       $(document).ready(function(){
        $('[data-toggle="popover"]').popover(); 
      });

</script>

<div class="footer">
  <center>
    <h5 style="color:#999; padding-top:1em;padding-bottom:1em;"><b>&copy; 2016 All Right Reserved Zulham azwar achmad </b></h5>
  </center>
</div>

</body>

</html>