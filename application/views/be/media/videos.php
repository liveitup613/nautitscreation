<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->    
    <head>
        <meta charset="utf-8" />
        <title>Nauti T's Creation Admin | Media</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <!-- BEGIN GLOBAL STYLES -->
        <?php $this->load->view('be/layout/styles'); ?>
        <!-- END GLOBAL STYLES -->

        <link href="<?php echo base_url('assets/css/pages/be/what-we-do.css');?>" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="<?php echo base_url('favicon.svg');?>" />
     </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-boxed">     
        <!-- BEGIN HEADER -->           
        <?php 
            $menu['parent'] = 'Media';            
            $menu['current'] = 'Videos';
            $this->load->view('be/layout/header', $menu);
            ?>
        <!-- END HEADER -->

        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <!-- BEGIN PAGE HEAD-->
                <div class="page-head">
                    <div class="container">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Videos</h1>
                        </div>
                        <!-- END PAGE TITLE -->                       
                    </div>
                </div>
                <!-- END PAGE HEAD-->
                <!-- BEGIN PAGE CONTENT BODY -->
                <div class="page-content">
                    <div class="container">
                        <!-- BEGIN PAGE BREADCRUMBS -->
                        <ul class="page-breadcrumb breadcrumb">
                            <li>
                                <a href="index.html">Media</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span href="#">Videos</span>  
                            </li>                            
                        </ul>
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- BEGIN PORTLET-->
                                    <div class="portlet light form-fit ">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="icon-social-dribbble font-green"></i>
                                                <span class="caption-subject font-green bold uppercase">Videos Content</span>
                                            </div>                                         
                                        </div>
                                        <div class="portlet-body">
                                            <div class='row'>
                                                <?php 
                                                    foreach($resources as $resource) {
                                                        ?>
                                                        <div class='col-md-4 col-sm-6 col-xs-12'>
                                                            <!-- PORTLET MAIN -->
                                                            <div class="portlet light profile-portlet">
                                                                <!-- SIDEBAR USERPIC -->
                                                                <div class="profile-pic">
                                                                    <?php
                                                                        if ($resource['Thumbnail'] == '')
                                                                            echo '<img src="https://i.ytimg.com/vi/' .$resource['Attach'].'/hqdefault.jpg" class="img-responsive" alt="">';
                                                                        else
                                                                            echo '<img src="' .base_url('assets/images/thumbnails/' . $resource['Thumbnail']).'" class="img-responsive" alt="">';
                                                                    ?>                                                                    
                                                                </div>
                                                                <div class="profile-title">
                                                                    <p>
                                                                    <?php 
                                                                        switch ($resource['Title']) {
                                                                            case 'championship':
                                                                                echo 'World Food Championships';
                                                                                break;
                                                                            case 'appetizer':
                                                                                echo 'Appetizers';
                                                                                break;
                                                                            case 'sweet_treat':
                                                                                echo 'Sweet Treats';
                                                                                break;
                                                                            case 'meat':
                                                                                echo 'Meats';
                                                                                break;
                                                                            case 'cocktail':
                                                                                echo 'Cocktails';
                                                                                break;
                                                                            case 'side_dish':
                                                                                echo 'Side Dishes';
                                                                                break;
                                                                            case '':
                                                                                echo 'None';
                                                                        }                                                                        
                                                                    ?>
                                                                    </p>
                                                                </div>   
                                                                <!-- END SIDEBAR USERPIC -->
                                                                <!-- SIDEBAR BUTTONS -->
                                                                <div class="profile-buttons">         
                                                                    <button type="button" class="btn btn-circle green btn-sm" onclick='editService(<?php echo $resource["ID"];?>)'>EDIT</button>                                                           
                                                                    <button type="button" class="btn btn-circle red btn-sm" onclick="deleteService(<?php echo $resource['ID'];?>)">DELETE</button>
                                                                </div>
                                                                <!-- END SIDEBAR BUTTONS -->
                                                            </div>
                                                            <!-- END PORTLET MAIN -->  
                                                        </div>
                                                    <?php
                                                    }
                                                    ?>
                                                
 
                                                <div class='col-md-4 col-sm-6 col-xs-12'>
                                                    <!-- PORTLET MAIN -->
                                                    <div class="portlet light profile-portlet-new">
                                                        <button type="button" class="btn green" id='btnAddNewModal'><i class='icon-plus'></i> &nbsp;Add new</button>                                                        
                                                    </div>
                                                    <!-- END PORTLET MAIN -->  
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END PORTLET-->
                                </div>
                            </div>
                        </div>
                        <!-- END PAGE CONTENT INNER -->
                    </div>
                </div>
                <!-- END PAGE CONTENT BODY -->

                <!-- BEGIN MODAL CONTENT BODY -->
                <!-- BEGIN ADD MODAL CONTENT BODY -->
                <div class="modal fade" id="AddNewModal" tabindex="-1" role="basic" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" id="addVideoModalContent">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Add New</h4>
                            </div>
                            <div class="modal-body">
                                <form action="" class="form-horizontal form-bordered" id='newPortfolioForm' enctype="multipart/form-data">
                                    <div class="form-body">
                                        <div class='form-group'>
                                            <label class="col-md-3 control-label">Type</label>
                                            <div class="col-md-9">
                                                <div class="radio-list">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="VideoType" id="Youtube" value="Youtube" checked> Youtube </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="VideoType" id="FromPC" value="FromPC"> From PC </label>
                                                </div>
                                            </div>                                                                                     
                                        </div>
                                        <div class='form-group'>
                                            <label class='control-label col-md-3'>Category</label>
                                            <div class='col-md-9'>
                                                <select class='form-control' id='Category' name='Title'>
                                                    <option value='championship'>World Food Championship</option>
                                                    <option value='appetizer'>Appetizers</option>
                                                    <option value='sweet_treat'>Sweet Treats</option>
                                                    <option value='meat'>Meats</option>
                                                    <option value='cocktail'>Cocktails</option>
                                                    <option value='side_dish'>Side Dishes</option>
                                                    <option value=''>None</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class='form-group' id='YoutubeElement'>
                                            <label class='control-label col-md-3'>Youtube ID</label>
                                            <div class='col-md-9'>
                                                <input type='text' class='form-control' name="YoutubeID" id="YoutubeID" required>
                                            </div>
                                        </div>
                                        <div class="form-group" id='VideoElement' style='display:none'>
                                            <label class="control-label col-md-3">Video</label>
                                            <div class='col-md-9'>
                                                <input type='hidden' name='Type' value='Photo'>
                                                <input type='file' name='resource' id='resource' accept="video/*">
                                            </div>
                                        </div>                                                                                               
                                    </div>                                    
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                                <button type="button" class="btn green" id='btnAddNew'>Add</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- END ADD MODAL CONTENT BODY -->

                <!-- BEGIN EDIT MODAL CONTENT BODY -->
                <div class="modal fade" id="editModal" tabindex="-1" role="basic" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" id='editPhotoModalContent'>
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Edit</h4>
                            </div>
                            <div class="modal-body">
                                <form action="" class="form-horizontal form-bordered" id='updateServiceForm' enctype="multipart/form-data">
                                    <div class="form-body">                                        
                                        <div class="form-group">
                                            <input type='hidden' id='ID_Edit' name='ID'>
                                        </div>  
                                        <div class='form-group'>
                                            <label class='control-label col-md-3'>Category</label>
                                            <div class='col-md-9'>
                                                <select class='form-control' id='Category_Edit' name='Title'>
                                                    <option value='championship'>World Food Championship</option>
                                                    <option value='appetizer'>Appetizers</option>
                                                    <option value='sweet_treat'>Sweet Treats</option>
                                                    <option value='meat'>Meats</option>
                                                    <option value='cocktail'>Cocktails</option>
                                                    <option value='side_dish'>Side Dishes</option>
                                                    <option value=''>None</option>
                                                </select>
                                            </div>
                                        </div>                                                                                             
                                    </div>                                    
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                                <button type="button" class="btn green" id='btnUpdate'>Update</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- END EDIT MODAL CONTENT BODY -->

                <!-- BEGIN DEELTE MODAL CONTENT BODY -->
                <div class="modal fade" id="deleteModal" tabindex="-1" role="basic" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Delete</h4>
                            </div>
                            <div class="modal-body">
                                Are  you really going to delete this?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn dark btn-outline" data-dismiss="modal">NO</button>
                                <button type="button" class="btn green" id='btnDelete'>YES</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- END DELETE MODAL CONTETN BODY -->
                <!-- END MODAL CONTENT BODY -->
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <?php $this->load->view('be/layout/footer'); ?>
        <!-- END FOOTER -->
        <!-- BEGIN GLOBAL SCRIPTS -->
        <?php $this->load->view('be/layout/scripts'); ?>
        <!-- END GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url('assets/layouts/layout3/scripts/pages/media/videos.js');?>" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
    </body>

</html>