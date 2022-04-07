  
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    
      <script type="text/javascript">
          for (var nk = window.location,
      o = $(".app-menu a").filter(function() {
        return this.href == nk;
      })
      .addClass("active")
      .parent()
      .addClass("active");;) {
    // console.log(o)
    if (!o.is("li")) break;
    o = o.parent()
      .addClass("mm-show")
      .parent()
      .addClass("active");
    }
    </script>