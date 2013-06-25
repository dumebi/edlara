<!DOCTYPE html>
<html>
    <head>
        <title>Edlara -Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       {{-- @stylesheets('bootstrap') --}}
      {{-- @stylesheets('grans') --}}
      
      {{  HTML::style('css/bootstrap.min.css') }}
      {{  HTML::style('css/bootstrap-responsive.min.css') }}
      {{  HTML::style('css/system/main.css') }}
    </head>
    <body>         
        <div class='container-fluid'>
            <div class='row-fluid'>                
                <div id="login-form" class="span-4 offset4">                    
                   <?php      
                   
                   if ($error !== 'OK'){
                       echo "<div class='alert alert-error error-loginpage-alert'>$error</div>";
                   }
                    //setting a Variable NULL to be used in FORM elements
                    $val=NULL;
                    //Opening the FORM
                    echo Form::open(array('url' => 'login',
                        'method' => 'post'));
                    
                    //Echo FORM Label for Email address
                    echo Form::label('email', 'E-Mail Address', array(
                        'class' => 'lbl-email-addr-login'));


                    //Echo FORM Element for Email address
                    echo Form::text('email', $val,array(
                        'class' => 'email-addr-login',
                        'placeholder' => 'johndoe@example.com',
                        'autocomplete' => 'off'));
                        
                    //Echo FORM Label for Password address
                    echo Form::label('password', 'Password', array(
                        'class' => 'lbl-pwd-login'));
                    
                    //Echo FORM Element for Password
                    echo Form::password('password',$val,
                            array('class' => 'pwd-login',
                                'placeholder' => 'Password',
                                'autocomplete' => 'off'));
                    echo "<br>";
                    //Echo FORM Element for Submit
                    echo Form::submit('Login',
                            array('class'=>'btn btn-large btn-info'));

                    echo Form::token();
                    echo Form::close();
                    ?>
                    <a class="btn btn-large btn-danger" href="https://laravel.dev">Return to HomePage</a>
                </div>
            </div>
        </div>
        
        {{-- Bootstrap JS Compiled --}}
        
         @javascripts('bootstrap')
         @javascripts('grans') 
        
    </body>

</html>