<?php 
    include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
echo "Olá, " . $_SESSION['usuarioNome'];
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="templates/style/bootstrap.min.css" type="text/css"/>
	</head>
	<body>

<?php 
  include ("include.php");

?>

<div class="container">
<ol class="breadcrumb">
  <li><a href="index.php">Painel de Controle</a></li>
  <li class="active">Produtos</li>
</ol>

		<div class="pull-right">
    		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#categoryModal">
        	<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Categoria
    		</button>
    		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#productModal">
        	<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Produto
    		</button>
		</div>
		<br/>
		<br/>
      					<div class="panel panel-default">
   					<div class="panel-heading">Items as Blocks<a href=products.php?id=2&name=Items as Blocks class="btn btn-danger btn-sm pull-right" role="button"><span class="glyphicon glyphicon-trash"></span></a></div>
   					<div class="panel-body">
      					<div class="row">
         					<div class="col-md-4">This is an example category where items are displayed as blocks with pictures.<br/><br/>Products displayed in category as Blocks with pictures</div>
         					<div class="col-md-8"><table class="table table-bordered"><tr><th>Product Code</th><th>Product Name</th><th>Price</th><th>Category</th><th>Action</th></tr><tr><td>PROD1</td><td>Diamond Sword</td><td>2.0000</td><td>Items as Blocks</td>
        		<td>
        		<div class="btn-group">
        		<a href=view_product.php?id=1 class="btn btn-info btn-sm" role="button"><span class="glyphicon glyphicon-eye-open"></span></a>
        		<a href=products.php?prodID=1 class="btn btn-danger btn-sm" role="button"><span class="glyphicon glyphicon-trash"></span></a>
        		<a href=edit_product.php?id=1 class="btn btn-success btn-sm" role="button"><span class="glyphicon glyphicon-pencil"></span></a>
        		</div>
       		 	</td></tr><tr><td>PROD2</td><td>Diamond Pickaxe</td><td>2.0000</td><td>Items as Blocks</td>
        		<td>
        		<div class="btn-group">
        		<a href=view_product.php?id=3 class="btn btn-info btn-sm" role="button"><span class="glyphicon glyphicon-eye-open"></span></a>
        		<a href=products.php?prodID=3 class="btn btn-danger btn-sm" role="button"><span class="glyphicon glyphicon-trash"></span></a>
        		<a href=edit_product.php?id=3 class="btn btn-success btn-sm" role="button"><span class="glyphicon glyphicon-pencil"></span></a>
        		</div>
       		 	</td></tr></table></div>
      					</div>
   					</div>
				</div>
  								<div class="panel panel-default">
   					<div class="panel-heading">Items as List<a href=products.php?id=3&name=Items as List class="btn btn-danger btn-sm pull-right" role="button"><span class="glyphicon glyphicon-trash"></span></a></div>
   					<div class="panel-body">
      					<div class="row">
         					<div class="col-md-4">This is an example category where the items are listed as a list without pictures.<br/><br/>Products displayed in category as List without pictures</div>
         					<div class="col-md-8"><table class="table table-bordered"><tr><th>Product Code</th><th>Product Name</th><th>Price</th><th>Category</th><th>Action</th></tr><tr><td>PROD3</td><td>Diamond Sword</td><td>2.0000</td><td>Items as List</td>
        		<td>
        		<div class="btn-group">
        		<a href=view_product.php?id=4 class="btn btn-info btn-sm" role="button"><span class="glyphicon glyphicon-eye-open"></span></a>
        		<a href=products.php?prodID=4 class="btn btn-danger btn-sm" role="button"><span class="glyphicon glyphicon-trash"></span></a>
        		<a href=edit_product.php?id=4 class="btn btn-success btn-sm" role="button"><span class="glyphicon glyphicon-pencil"></span></a>
        		</div>
       		 	</td></tr><tr><td>PROD4</td><td>Diamond Pickaxe</td><td>2.0000</td><td>Items as List</td>
        		<td>
        		<div class="btn-group">
        		<a href=view_product.php?id=6 class="btn btn-info btn-sm" role="button"><span class="glyphicon glyphicon-eye-open"></span></a>
        		<a href=products.php?prodID=6 class="btn btn-danger btn-sm" role="button"><span class="glyphicon glyphicon-trash"></span></a>
        		<a href=edit_product.php?id=6 class="btn btn-success btn-sm" role="button"><span class="glyphicon glyphicon-pencil"></span></a>
        		</div>
       		 	</td></tr></table></div>
      					</div>
   					</div>
				</div>
  						<div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   			<div class="modal-dialog" role="document">
      			<div class="modal-content">
         			<div class="modal-header">
            			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            			<h4 class="modal-title" id="myModalLabel">Add a New Category</h4>
         			</div>
         			<div class="modal-body">
            			<form name="addCategory" action="" method="POST">
               				<fieldset>
                  				<div class="form-group">
                     				<label for="name">Name:</label>
                     				<input class="form-control" placeholder="Name" name="name" type="text" required="required" id="name">
                  				</div>
                  				<div class="form-group">
                     				<label for="description">Description:</label>
                     				<textarea class="form-control" placeholder="Description" name="description" required="required" rows="5" id="description"></textarea>
                  				</div>
                  				<label for="displayAs">Display products in category as:</label>
                  				<select name="displayAs" id="displayAs" class="form-control">
                     				<option>Product blocks with pictures</option>
                     				<option>Products in list without pictures</option>
                  				</select>
         			</div>
         			<div class="modal-footer">
         			<input type="hidden" name="token" value="372b666954633965726b74527a6d4e4a3061732f2f6741356a62796e2b394c5756313976784d67547666673d">
         			<input type="reset" class="btn btn-default" value="Reset">
         			<input type="submit" class="btn btn-success" value="Add Category">
         			</div>
         			</fieldset>
         			</form>
      			</div>
   			</div>
		</div>
				<!-- Add Product Modal --> 
		<div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		   <div class="modal-admin" role="document">
		      <div class="modal-content">
		         <div class="modal-header">
		            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		            <h4 class="modal-title" id="myModalLabel">Add a New Product</h4>
		         </div>
		         <div class="modal-body">
		            <form class="addProduct" name="addNewProduct" action="" method="POST" enctype="multipart/form-data">
		               <fieldset>
		                  <div class="row">
		                     <div class="col-md-2">
		                        <div class="form-group">
		                           <label for="code">Product Code:</label>
		                           <input class="form-control" placeholder="Product's Code" name="code" type="text" autofocus="autofocus" required="required" id="code">
		                        </div>
		                     </div>
		                     <div class="col-md-6">
		                        <div class="form-group">
		                           <label for="name">Product Name:</label>
		                           <input class="form-control" placeholder="Product's Name" name="name" type="text" required="required" id="name">
		                        </div>
		                     </div>
		                     <div class="col-md-4">
		                        <div class="form-group">
		                           <label for="price">Product Price:</label>
		                           <input class="form-control" placeholder="Product's Price" name="price" type="text" required="required" id="price">
		                        </div>
		                     </div>
		                  </div>
		                  <div class="row">
		                     <div class="col-md-8">
		                        <div class="form-group">
		                           <label for="description">Product Description:</label>
		                           <textarea class="form-control" placeholder="Product's Description" name="description" required="required" rows="5" id="description"></textarea>
		                        </div>
		                     </div>
		                     <div class="col-md-4">
		                        <div class="form-group">
		                           <label for="image">Image:</label>
		                           <input type="file" id="image" name="image">
		                           <p class="help-block">This will be re-sized</p>
		                        </div>
		                        <strong>Disable the option for customers to enter a quantity:</strong>
		                        <label class="checkbox-inline">
		                        <input type="checkbox" name="disableQuantity" value="1"/>
		                        Disable Quantity</label>
		                     </div>
		                  </div>
		                  <div class="row">
		                     <div class="col-md-4">
		                        <div class="form-group">
		                           <label for="category">Product Category:</label>
		                           <select name="category" id="category" class="form-control">
		                           <option>Items as Blocks</option><option>Items as List</option></select>
		                        </div>
		                     </div>
		                     <div class="col-md-4"></div>
		                     <div class="col-md-4"></div>
		                  </div>
		                  <div class="row">
		                     <div class="col-md-8">
		                        <div class="form-group">
		                           <label for="commands">Commands:</label>
		                           <textarea class="form-control" placeholder="Enter the commands to be executed on your Minecraft Server when the customer purchases this product. Leave blank if you are not using the DonationStore plugin." name="commands" rows="5" id="commnds"></textarea>
		                        </div>
		                     </div>
		                     <div class="col-md-4">
		                        <div class="form-group">
		                           <p><strong>Command Info:</strong><br/>
		                              <strong>DO NOT ENTER FORWARD SLASH</strong><br/>
		                              1 Command per line e.g:<br/>
		                              <code>give user diamond 64</code><br/><br/>
		                              [minecraftIGN] = use in command to get users name, e.g:
		                              <code>give [minecraftIGN] diamond 64</code>
		                           </p>
		                        </div>
		                     </div>
		                  </div>
		                  <input type="hidden" name="token" value="686b68794d7a724a63724a504f6d666f463837795342317559772b387465466e3876385a48556959452f383d">
		                  <div class="modal-footer">
		                     <input type="reset" class="btn btn-default" value="Reset">
		                     <input type="submit" class="btn btn-success" value="Add Product">
		                  </div>
		               </fieldset>
		            </form>
		         </div>
		      </div>
		   </div>
		</div>
    
    <?php

    include("footer.php");

    ?>
    </body>
</html>
    <!--
    </div>
<div class="container">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!--
<script src="templates/js/bootstrap.min.js"></script>
<p class="text-right"><a href="http://donationstore.net/documentation.html">Documentation </a>| <a href="mailto:support@donationstore.net">Contact Support</a><br/>
Powered by Donation Store</p>
</div>
</body>
</html>