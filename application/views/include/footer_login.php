

    <!-- jQuery 2.1.4 -->
    <script src="<?=site_url()?>/public/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?=site_url()?>/public/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?=site_url()?>/public/plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
