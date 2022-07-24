
<?php 
include('../ro-includes/head-ppdb.php');
include('../ro-includes/css-ppdb.php');
?>

<body>

    <div class="container">
    <br>
     <br>
	<title>SMK BINA INSAN SIAK HULU</title>
   <div width="10px" align="center">
           <a href="/aplikasi_ppdb/ro-index/">  <img  width="150px" src="/aplikasi_ppdb/ro-index/images/smklogo.jpg">  </a> 
   </div>
         
              
            <!-- /.row -->
<div class="row" style="margin-top: 20px;">
            <div class="col-md-4 col-md-offset-4">
            <div class="col-md-4"></div>
             <div class="login-panel panel panel-primary">
               


                     <div class="panel-heading">
                        <h3 class="panel-title">Login Akun Peserta Didik Baru 2022</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="<?php echo htmlspecialchars("proses") ?>" method="post" autocomplete="off">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="username" autofocus required="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" autofocus required="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-success btn-block" name="login" id="login">LOGIN</button>
                                
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        </div>


<?php 
//footer
include('../ro-includes/footer-ppdb.php');
?>

<script type="text/javascript">
    $(document).ready(function(){

    $('.userName').on('focus',function(){
    var placeHolder = $(this).val();
        if(placeHolder == ""){
            $(this).val("");
        }
    });
    $('.userName').on('blur',function(){
    var placeHolder = $(this).val();
        if(placeHolder == ""){
            $(this).val("");
        }
    });

});
</script>