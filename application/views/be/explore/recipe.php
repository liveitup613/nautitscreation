<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Nauti T's Creation Admin | Recipe</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- BEGIN GLOBAL STYLES -->
    <?php $this->load->view('be/layout/styles'); ?>
    <!-- END GLOBAL STYLES -->

    <link href="<?php echo base_url('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css');?>"
        rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css');?>"
        rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/global/plugins/bootstrap-summernote/summernote.css');?>" rel="stylesheet"
        type="text/css" />

    <link href="<?php echo base_url('assets/css/pages/be/blog.css');?>?<?php echo time(); ?>" rel="stylesheet"
        type="text/css" />
    <link rel="shortcut icon" href="<?php echo base_url('favicon.svg');?>" />
</head>
<!-- END HEAD -->

<body class="page-container-bg-solid page-boxed">
    <!-- BEGIN HEADER -->
    <?php 
            $menu['parent'] = 'Explore';
            $menu['current'] = 'Recipe';
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
                        <h1>Recipes
                        </h1>
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
                            <a href="#">Explore</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span href="#">Recipes</span>
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
                                            <span class="caption-subject font-green bold uppercase">Recipes
                                                Content</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class='blog-new'>
                                            <a type='button' class='btn green' id="btnAddNewModal"><i
                                                    class='icon-plus'></i>&nbsp;&nbsp;Add New</a>
                                        </div>
                                        <div class="table-scrollable">
                                            <table class="table table-striped table-bordered table-advance table-hover">
                                                <thead>
                                                    <tr>
                                                        <th class='blog-title'>
                                                            <i class="fa fa-quote-right"></i> Title
                                                        </th>
                                                        <th class='blog-date'>
                                                            <i class="fa fa-calendar-check-o"></i> Created Date
                                                        </th>
                                                        <th> </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                            foreach ($resources as $recipe) {
                                                                ?>
                                                    <tr>
                                                        <td class="highlight">
                                                            <div class="success">
                                                                <span
                                                                    class='blog-title'><?php echo $recipe['Title'];?></span>
                                                            </div>
                                                        </td>
                                                        <td class='blog-date'>
                                                            <?php echo date('j F, Y', $recipe['DateAdded']);?> </td>
                                                        <td>
                                                            <button
                                                                onclick="editRecipeImages(<?php echo $recipe['ID'];?>);"
                                                                class="btn btn-circle btn-sm purple">
                                                                <i class="fa fa-image"></i> Images </button>
                                                            <button
                                                                onclick="editRecipeContent(<?php echo $recipe['ID'];?>);"
                                                                class="btn btn-circle btn-sm purple">
                                                                <i class="fa fa-edit"></i> Content </button>
                                                            <button onclick="deleteRecipe(<?php echo $recipe['ID'];?>);"
                                                                class="btn btn-circle dark btn-sm black">
                                                                <i class="fa fa-trash-o"></i> Delete </button>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                            }
                                                        ?>
                                                </tbody>
                                            </table>
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
            <!-- BEGIN DEELTE MODAL CONTENT BODY -->
            <div class="modal fade" id="deleteModal" tabindex="-1" role="basic" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">Delete</h4>
                        </div>
                        <div class="modal-body">
                            Are you really going to delete this?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn dark btn-outline" data-dismiss="modal">NO</button>
                            <button type="button" class="btn green" id='btnDeleteModalYes'>YES</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- END DELETE MODAL CONTETN BODY -->

            <!-- BEGIN ADD MODAL CONTENT-->
            <div class="modal fade bs-modal-large" id="AddNewModal" tabindex="-1" role="basic" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content" id="newRecipeContent">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">Add New</h4>
                        </div>
                        <div class="modal-body">
                            <form action="#" class="form-horizontal form-bordered " id='newRecipeForm' enctype="multipart/form-data">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="control-label col-md-2">Title</label>
                                        <div class="col-md-10">
                                            <input type="text" class='form-control' id='Title' name='Title' required>
                                        </div>
                                    </div>
                                    <div class='form-group'>
                                        <label class='control-label col-md-2'>Portfolios</label>
                                        <div class='col-md-10'>
                                            <div class='portfolio-box'>
                                                <input type='file' name='resource[]' id='resource' accept="image/*"
                                                    multiple required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group last">
                                        <label class="control-label col-md-2">Ingredients</label>
                                        <div class="col-md-10">
                                            <div id="sumnoteIngredients"></div>
                                            <input type='hidden' id='inputIngredients' name='Ingredients'>
                                        </div>
                                    </div>

                                    <div class="form-group last">
                                        <label class="control-label col-md-2">Process</label>
                                        <div class="col-md-10">
                                            <div id="sumnoteProcess"></div>
                                            <input type='hidden' id='inputProcess' name='Progress'>
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
            <!-- END ADD MODAL CONTENT -->

            <!-- BEGIN EDIT IMAGES MODAL CONTENT -->
            <div class="modal fade" id="editImagesModal" tabindex="-1" role="basic" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content" id="editImageModalContent">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">Edit Images</h4>
                        </div>
                        <div class="modal-body">
                            <form action="#" class="form-horizontal form-bordered " id='updateImagesForm' enctype="multipart/form-data">
                                <input type='hidden' name='ID' id='inputRecipeID'>
                                <input type='file' name='resource[]' id='inputResource' accept="image/*" multiple
                                    required style='display:none'>
                            </form>

                            <div class='row'>
                                <div class='col-12 portlet' style='text-align: center;'>
                                    <button class='btn btn-primary btn-circle' id='btnInsertImages'><i class='fa fa-image'></i>&nbsp;Insert Images</button>
                                </div>
                            </div>

                            <div class='row' id='imageContent'>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- END EDIT IMAGES MODAL CONTENT -->

            <!-- BEGIN EDIT CONTENT MODAL CONTENT -->

            <div class="modal fade" id="editModal" tabindex="-1" role="basic" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content" id="editContentModalContent">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">Edit Content</h4>
                        </div>
                        <div class="modal-body">
                            <form action="#" class="form-horizontal form-bordered " id='updateRecipeForm'>
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="control-label col-md-2">Title</label>
                                        <div class="col-md-10">
                                            <input type="text" class='form-control' id='inputTitleEdit' name='Title'
                                                required>
                                        </div>
                                    </div>

                                    <div class="form-group last">
                                        <label class="control-label col-md-2">Ingredients</label>
                                        <div class="col-md-10">
                                            <div id="sumnoteIngredientsEdit"></div>
                                        </div>
                                    </div>

                                    <div class="form-group last">
                                        <label class="control-label col-md-2">Process</label>
                                        <div class="col-md-10">
                                            <div id="sumnoteProcessEdit"></div>
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
            <!-- END EDIT CONTENT MODAL CONTENT -->

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
    <script src="<?php echo base_url('assets/layouts/layout3/scripts/pages/explore/recipe.js');?>?<?php echo time(); ?>"
        type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
</body>

</html>