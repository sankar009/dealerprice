<div id="adminDashboard">
<?php if(Yii::app()->user->hasFlash('crawler')){ ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('crawler'); ?>
</div>

<?php } ?>
       <!-- <div id="orderStats">
            <div class="stats">
                <h2>Orders</h2>
                <div class="statsContents">
                    <p>Pending Orders <span>20</span></p>
                    <p>Cancelled Orders <span>20</span></p>
                    <p>Packed and Shipped <span>20</span></p>
                    <p>Completed Orders <span>20</span></p>
                    <p class="totalNo">Total Orders <span>80</span></p>
                </div>
            </div>
            <div class="stats">
                <h2>Payments</h2>
                <div class="statsContents">
                    <p>Credit/Debit Card <span>20</span></p>
                    <p>Netbanking <span>20</span></p>
                    <p>Cash On Delivery <span>20</span></p>
                    <p>Failed <span>20</span></p>
                    <p class="totalNo">Total Amount <span>Rs. 20</span></p>
                </div>    
            </div>
            <div class="stats">
                <h2>Products</h2>
                <div class="statsContents">

                </div>    
            </div>
            <div class="stats">
                <h2>Low on Stock</h2>
                <div class="statsContents">

                </div>    
            </div>
            <div style="clear:both;"></div>
        </div> -->
    				<div id="dashboardIcons">
                        <div class="adminIcon" id="categories">
                            <a href="<?=$this->createUrl('/admin/categories/admin')?>">Categories</a>
                        </div>
                        <div class="adminIcon" id="subcategories">
                            <a href="<?=$this->createUrl('/admin/subcategories/admin')?>">Sub-Categories</a>
                        </div>
                         <div class="adminIcon" id="products">
                            <a href="<?=$this->createUrl('/admin/products/admin')?>">Products</a>
                        </div>
                        <div class="adminIcon" id="users">
                            <a href="<?=$this->createUrl('/admin/users/admin')?>">Users</a>
                        </div>
						 <div class="adminIcon" id="systemUsers">
                            <a href="<?=$this->createUrl('/admin/users/systemusers')?>">System Users</a>
                        </div>
						 <div class="adminIcon" id="crawler">
                            <a href="<?=$this->createUrl('/admin/default/crawler')?>">Crawler Data</a>
                        </div>
                        <div style="clear:both;"></div>
    				</div>
</div>
