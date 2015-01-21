
    <!--
<script src="js/prefixfree.min.js"></script>
       
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <script src="<?php echo base_url()?>asset/js/jquery.js"></script>        
  <script src="<?php echo base_url()?>asset/js/bootstrap.js"></script>

      <!--
  <script src="js/prefixfree.min.js"></script>
         
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

  <script src="<?php echo base_url()?>/asset/pagedown/jquery.pagedown-bootstrap.combined.min.js"></script>
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
  
    <script type="text/javascript">
    (function () {

      $("textarea#pagedownMe").pagedownBootstrap();

      $("textarea#pagedownMeDangerously").pagedownBootstrap({
        'sanitize': false,
        'help': function () { alert("Do you need help?"); },
        'hooks': [
          {
            'event': 'preConversion',
            'callback': function (text) {
              return text.replace(/\b(a\w*)/gi, "*$1*");
            }
          },
          {
            'event': 'plainLinkText',
            'callback': function (url) {
              return "This is a link to " + url.replace(/^https?:\/\//, "");
            }
          }
        ]
      });

      $('.wmd-preview').addClass('well');

    })();
  </script>

<script src="<?php echo base_url();?>asset/js/html5shiv.js"></script>
<script src="<?php echo base_url();?>asset/js/respond.min.js"></script>
      
</body>
</html>