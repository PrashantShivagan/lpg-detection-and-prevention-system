<?php

require_once 'header.php';

?>
           
              <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Register new Connection</h4>
                                    <p class="category"></p>
                                </div>
                                <div class="card-content">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Username</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Email address</label>
                                                    <input type="email" class="form-control">
                                                </div>
                                            </div>

                                                 <div class="col-md-3">
                
                                                    </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Fist Name</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Last Name</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Adress</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">City</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Country</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Postal Code</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                               <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Mobile No</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                        <div class="col-md-4">

                                            <tr>
                                            <td><label>Company Of Cylinder</label></td>
                                            <select name="name">
                                                <option value="HP">HP</option>
                                                <option value="BP">BP</option>
                                                <option value="Others">Others</option>
                                            </select>

                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                         <div class="content">
                            <div class="container-fluid">
                
                                <br>
                                <br>
                                <div class="places-buttons">
                                        <div class="row">
                                            <div class="col-md-6 col-md-offset-3 text-center">
                                                <h5>
                                                    <p class="category"></p>
                                                </h5>
                                            </div>
                                        </div>
                                    <div class="row">
                                        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-2">
                                            <div class="col-md-4">
                                                <button class="btn btn-primary btn-block" onclick="demo.showNotification('top','center')">Register</button>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>



    <script type="text/javascript">

        $().ready(function(){
            materialKit.initSliders();
            window_width = $(window).width();

            if (window_width >= 992){
                big_image = $('.wrapper > .header');

                $(window).on('scroll', materialKitDemo.checkScrollForParallax);
            }

        });
    </script>




<?php

require_once 'footer.php';

?>
  