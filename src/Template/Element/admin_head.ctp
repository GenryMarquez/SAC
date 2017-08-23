     <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Open4Lab
    </title>
    <?= $this->Html->meta('icon') ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?= $this->Html->script([
              'jQuery/jQuery-2.2.0.min.js',
              'jQueryUI/jquery-ui.min.js',
              'bootstrap.js',
              'acordeon.js'
    ]) ?>  
    <script src='http://hashids.org/public/js/lib/hashids.min.js'></script>
    <script src="<?= $this->Url->build('/', true)?>LTE/plugins/footable/js/footable.js?v=2-0-1" type="text/javascript"></script>
    <script src="<?= $this->Url->build('/', true)?>LTE/plugins/footable/js/footable.sort.js?v=2-0-1" type="text/javascript"></script>
    <script src="<?= $this->Url->build('/', true)?>LTE/plugins/footable/js/footable.filter.js?v=2-0-1" type="text/javascript"></script>
    <script src="<?= $this->Url->build('/', true)?>LTE/plugins/footable/js/footable.paginate.js?v=2-0-1" type="text/javascript"></script>

     <!-- Sparkline -->
    <script src="<?= $this->Url->build('/', true)?>LTE/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="<?= $this->Url->build('/', true)?>LTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?= $this->Url->build('/', true)?>LTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?= $this->Url->build('/', true)?>LTE/plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="<?= $this->Url->build('/', true)?>LTE/plugins/daterangepicker/daterangepicker.js"></script>
   
    <!-- datepicker -->
    <script src="<?= $this->Url->build('/', true)?>LTE/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?= $this->Url->build('/', true)?>LTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="<?= $this->Url->build('/', true)?>LTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?= $this->Url->build('/', true)?>LTE/plugins/fastclick/fastclick.js"></script>
     <script src="<?= $this->Url->build('/', true)?>LTE/plugins/bootstrap-validator/validator.min"></script>
    <!-- LTE App -->
    <script src="<?= $this->Url->build('/', true)?>LTE/dist/js/app.min.js" type="text/javascript"></script>
    <!-- LTE dashboard demo (This is only for demo purposes) -->
    <!--<script src="<?= $this->Url->build('/', true)?>LTE/dist/js/pages/dashboard.js"></script>-->
    
    <?= $this->Html->script(['app.js']) ?> 



    <?= $this->Html->css([
        'bootstrap-theme.min.css',
        'bootstrap.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'

    ]) ?>
    
    <link href="<?= $this->Url->build('/', true)?>LTE/plugins/footable/css/footable.core.css?v=2-0-1" rel="stylesheet" type="text/css"/>
    
    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" href="<?= $this->Url->build('/', true)?>LTE/dist/css/AdminLTE.min.css" media="screen, projection">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" type="text/css" href="<?= $this->Url->build('/', true)?>LTE/dist/css/skins/_all-skins.min.css" media="screen, projection">
    <!-- iCheck -->
    <link rel="stylesheet" type="text/css" href="<?= $this->Url->build('/', true)?>LTE/plugins/iCheck/flat/blue.css" media="screen, projection">
    <!-- Morris chart -->
    <link rel="stylesheet" type="text/css" href="<?= $this->Url->build('/', true)?>LTE/plugins/morris/morris.css" media="screen, projection">
    <!-- jvectormap -->
    <link rel="stylesheet" type="text/css" href="<?= $this->Url->build('/', true)?>LTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css" media="screen, projection">
    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="<?= $this->Url->build('/', true)?>LTE/plugins/datepicker/datepicker3.css" media="screen, projection">
    <!-- Daterange picker -->
    <link rel="stylesheet" type="text/css" href="<?= $this->Url->build('/', true)?>LTE/plugins/daterangepicker/daterangepicker-bs3.css" media="screen, projection">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" type="text/css" href="<?= $this->Url->build('/', true)?>LTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" media="screen, projection">

    <?= $this->Html->css('css_app.css') ?>

