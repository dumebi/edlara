<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ Config::get('system.adminsitename') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">
    <style type="text/css">      
    </style>
    @stylesheets('dashboard')

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
        
</head>

<body>
        {{$topmenu}}
        {{$sidebar}}
        <div class="container-fluid">
        <div class="row-fluid">                
           {{$noscript}}

                 <!-- content starts -->
            <div id="content" class="span10"> 

            <div>
        {{$breadcrumbs}}
            </div>
            <div class="box span12">
                    <div class="box-header well">
                        <h2><i class="icon-info-sign"></i>Settings</h2>
                    </div>
                    <div class="box-content" style="display: block;">
                        <div class="container-fluid">
                        <div class="row-fluid">
                            <div class="span6">
                <?php
                echo Form::open(array('url' => '/settings', 'method' => 'POST','class'=>'form-horizontal'));

                            echo "<fieldset>";
                echo Form::label('schoolname','School Name',array('class'=>'pull-left','style'=>'clear:left;padding:15px;'));
                echo Form::text('schoolname',Config::get('system.schoolname'),array('class'=>'pull-right','style'=>'clear:right;margin:15px;'));
                echo Form::label('schoolnameabbr','School Name Abbreviation',array('class'=>'pull-left','style'=>'clear:left;padding:15px;'));
                echo Form::text('schoolnameabbr',Config::get('system.schoolnameabbr'),array('class'=>'pull-right','style'=>'clear:right;margin:15px;'));
                echo Form::label('schooladdress','School Address',array('class'=>'pull-left','style'=>'padding:15px;'));
                echo Form::textarea('schooladdress',Config::get('system.schooladdress'),array('class'=>'pull-right','style'=>'clear:right;margin:15px;','rows'=>'2'));
                echo Form::label('logo','Logo Path',array('class'=>'pull-left','style'=>'clear:both;padding:15px;position:relative;'));
                echo Form::text('logo',Config::get('system.logo_src'),array('class'=>'pull-right','style'=>'clear:right;margin:15px;'));
                echo Form::label('adminsitename','Admin Site Name',array('class'=>'pull-left','style'=>'clear:left;padding:15px;'));
                echo Form::text('adminsitename',Config::get('system.adminsitename'),array('class'=>'pull-right','style'=>'clear:right;margin:15px;'));

                            echo "</fieldset>";
                echo Form::submit('Save Changes',array('class'=>'btn btn-success','value'=>'submit','style'=>'position:relative;'));
                echo Form::close();
                ?>
            </div>
             </div>
             </div>
             </div>
             </div>          
            <!-- content ends -->
            </div><!--/#content.span10-->
        </div><!--/fluid-row-->
                
        <hr>
        
        <footer>
            <p class="pull-left">&copy; Gnanakeethan Balasubramaniam 2013</p>
        </footer>
        
    </div><!--/.fluid-container-->

    <!-- external javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <!-- jQuery -->
    <script src="js/jquery-1.7.2.min.js"></script>
    <!-- jQuery UI -->
    <script src="js/jquery-ui-1.8.21.custom.min.js"></script>
    <!-- transition / effect library -->
    <script src="js/bootstrap-transition.js"></script>
    <!-- alert enhancer library -->
    <script src="js/bootstrap-alert.js"></script>
    <!-- modal / dialog library -->
    <script src="js/bootstrap-modal.js"></script>
    <!-- custom dropdown library -->
    <script src="js/bootstrap-dropdown.js"></script>
    <!-- scrolspy library -->
    <script src="js/bootstrap-scrollspy.js"></script>
    <!-- library for creating tabs -->
    <script src="js/bootstrap-tab.js"></script>
    <!-- library for advanced tooltip -->
    <script src="js/bootstrap-tooltip.js"></script>
    <!-- popover effect library -->
    <script src="js/bootstrap-popover.js"></script>
    <!-- button enhancer library -->
    <script src="js/bootstrap-button.js"></script>
    <!-- accordion library (optional, not used in demo) -->
    <script src="js/bootstrap-collapse.js"></script>
    <!-- carousel slideshow library (optional, not used in demo) -->
    <script src="js/bootstrap-carousel.js"></script>
    <!-- autocomplete library -->
    <script src="js/bootstrap-typeahead.js"></script>
    <!-- tour library -->
    <script src="js/bootstrap-tour.js"></script>
    <!-- library for cookie management -->
    <script src="js/jquery.cookie.js"></script>
    <!-- calander plugin -->
    <script src='js/fullcalendar.min.js'></script>
    <!-- data table plugin -->
    <script src='js/jquery.dataTables.min.js'></script>

    <!-- chart libraries start -->
    <script src="js/excanvas.js"></script>
    <script src="js/jquery.flot.min.js"></script>
    <script src="js/jquery.flot.pie.min.js"></script>
    <script src="js/jquery.flot.stack.js"></script>
    <script src="js/jquery.flot.resize.min.js"></script>
    <!-- chart libraries end -->

    <!-- select or dropdown enhancer -->
    <script src="js/jquery.chosen.min.js"></script>
    <!-- checkbox, radio, and file input styler -->
    <script src="js/jquery.uniform.min.js"></script>
    <!-- plugin for gallery image view -->
    <script src="js/jquery.colorbox.min.js"></script>
    <!-- rich text editor library -->
    <script src="js/jquery.cleditor.min.js"></script>
    <!-- notification plugin -->
    <script src="js/jquery.noty.js"></script>
    <!-- file manager library -->
    <script src="js/jquery.elfinder.min.js"></script>
    <!-- star rating plugin -->
    <script src="js/jquery.raty.min.js"></script>
    <!-- for iOS style toggle switch -->
    <script src="js/jquery.iphone.toggle.js"></script>
    <!-- autogrowing textarea plugin -->
    <script src="js/jquery.autogrow-textarea.js"></script>
    <!-- multiple file upload plugin -->
    <script src="js/jquery.uploadify-3.1.min.js"></script>
    <!-- history.js for cross-browser state change on ajax -->
    <script src="js/jquery.history.js"></script>
    <!-- application script for Charisma demo -->
    <script src="js/charisma.js"></script>
    
        
</body>
</html>
