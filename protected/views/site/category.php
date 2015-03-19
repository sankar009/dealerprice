<?php //print_r($products) 
$allbrands = array();
$alltypes = array();
if(isset($products))
foreach($products as $p){
	if(isset($p->brands->id) && !in_array($p->brands, $allbrands))
	array_push($allbrands, $p->brands);
	if(isset($p->types->id) && !in_array($p->types, $alltypes))
	array_push($alltypes, $p->types);
}
?>
            <!-- End of Header -->
            <div id="pageHeader">
                <div id="innerPageHeader">
                    <div id="mainMenuBtn">
                        <span id="allCatBtn">
                            <i class="fa fa-th-large"></i><a href="#">All Categories</a>
                        </span>
                    </div>
                    <!-- End of Main Menu Button -->
                    <div id="breadcrumb">
						<?php if(isset($category)){ ?>
                        <div id="breadcrumbItm">
						<?php $totalProducts = count($products); ?>
                            <span id="bcPnt"><?=CHtml::link($category->name, array('site/category', 'url'=>$category->url)); ?></span> <span id="bcItmCount">(<?=$totalProducts==1 ? $totalProducts.' Item': $totalProducts.' Items' ?>)</span>
                        </div>
						<?php } else  if(isset($subcategory)) { ?>
						<div id="breadcrumbItm">
						<?php $totalProducts = count($products); ?>
                            <span id="bcPnt"><?=CHtml::link($subcategory->category->name, array('site/category', 'url'=>$subcategory->category->url)); ?></span> <span class="nextItm">&gt;</span> <span class="bcItm lastItm"><?=CHtml::link($subcategory->name, array('site/subcategory', 'url'=>$subcategory->url)); ?></span><span id="bcItmCount">(<?=$totalProducts==1 ? $totalProducts.' Item': $totalProducts.' Items' ?>)</span>
                        </div>
						<?php } else  if(isset($brands)) { ?>
						<div id="breadcrumbItm">
						<?php $totalProducts = count($products); ?>
                            <span id="bcPnt"><?=CHtml::link($brands->subCategory->name, array('site/subcategory', 'url'=>$brands->subCategory->url)); ?></span> <span class="nextItm">&gt;</span> <span class="bcItm lastItm"><?=CHtml::link($brands->name, array('site/brands', 'url'=>$brands->url)); ?></span><span id="bcItmCount">(<?=$totalProducts==1 ? $totalProducts.' Item': $totalProducts.' Items' ?>)</span>
                        </div>
						<?php } else  if(isset($mtypes)) { ?>
						<div id="breadcrumbItm">
						<?php $totalProducts = count($products); ?>
                            <span id="bcPnt"><?=CHtml::link($mtypes->subCategory->name, array('site/subcategory', 'url'=>$mtypes->subCategory->url)); ?></span> <span class="nextItm">&gt;</span> <span class="bcItm lastItm"><?=CHtml::link($mtypes->name, array('site/types', 'url'=>$mtypes->url)); ?></span><span id="bcItmCount">(<?=$totalProducts==1 ? $totalProducts.' Item': $totalProducts.' Items' ?>)</span>
                        </div>
						<?php } else  if(isset($search)) { ?>
						<div id="breadcrumbItm">
						<?php $totalProducts = count($products); ?>
                            <span id="bcPnt"><?=$search?></span> <span id="bcItmCount">(<?=$totalProducts==1 ? $totalProducts.' Item': $totalProducts.' Items' ?>)</span>
                        </div>
						<?php } ?>
                    </div>
                    <!-- End of Breadcrumb -->
					<div id="sorting">
                        <div id="sortMenu">
                    	<span id="sortPnt">Sort by:</span> <span class="sItm <?=isset($_GET['sort']) && $_GET['sort']=='Popularity' ? 'activeS': ''?>">Popularity</span>|<span class="sItm <?=isset($_GET['sort']) && $_GET['sort']=='New' ? 'activeS': ''?>">New</span>|<span class="sItm <?=isset($_GET['sort']) && $_GET['sort']=='Discount' ? 'activeS': ''?>">Discount</span>|<span id="priceHd">Price:</span> <span class="sPItm <?=isset($_GET['sort']) && $_GET['sort']=='Low' ? 'activeS': ''?>">Low</span>|<span class="sPItm <?=isset($_GET['sort']) && $_GET['sort']=='High' ? 'activeS': ''?>">High</span>
						</div>
                    </div>
                    <!-- End of Sorting -->
                </div>    
            </div>
            <div id="pageMegaMenu">
                <div id="megaMenu" class="pageMenu">
               		<?php $this->beginContent('//layouts/mega-menu'); $this->endContent(); ?>
                </div>  
                <!-- End of Mega Menu -->
            </div>
			
            <!-- End of Menu and Slider -->
			<div id="pageContents">
			<?php if(isset($products) && !empty($products)){ ?>
                <div id="filterPanel">
                    <div id="filterTitle">
                		<span class="fltSubTitle">Refine your search</span>
                    </div>
					<?php if(isset($allbrands) && !empty($allbrands)) {?>
                    <div class="filterCat brandBox">
                    	<span class="fltSubTitle">Mobile Brands</span>
                        <ul>
                           	<!--<li class="activeF"><input type="checkbox" value="" checked="checked"> Samsung</li>
                            <li><input type="checkbox" value=""> Apple</li>-->
							<?php
							$brandHistory =array();
							if(isset($_GET['brand']))
							$brandHistory = explode('-', $_GET['brand']);
							foreach($allbrands as $brand)
							if(in_array($brand->id, $brandHistory))
							echo '<li class="activeF"><input checked="checked" type="checkbox" value="'.$brand->id.'" class="brandFlr"> '.$brand->name.'</li>';
							else
							echo '<li><input type="checkbox" value="'.$brand->id.'" class="brandFlr"> '.$brand->name.'</li>';
							?>
							
							<?php
							if(isset($_GET['brand']) && $_GET['brand']=='all')
							echo '<li class="activeF"><input checked="checked" type="checkbox" value="all" class="brandFlrAll"> All</li>';
							else
							echo '<li><input type="checkbox" value="all" class="brandFlrAll"> All</li>';
							?>
							
						</ul>
                    </div>
                    <?php } ?>
					<?php if(isset($alltypes) && !empty($alltypes)) {?>
                    <div class="filterCat typeBox">
                    	<span class="fltSubTitle">Mobile Type</span>
                        <ul>
                           	<?php 
							$typeHistory =array();
							if(isset($_GET['types']))
							$typeHistory = explode('-', $_GET['types']);
							foreach($alltypes as $type)
							if(in_array($type->id, $typeHistory))
							echo '<li  class="activeF"><input checked="checked" type="checkbox" value="'.$type->id.'" class="typeFlr"> '.$type->name.'</li>';
							else
							echo '<li><input type="checkbox" value="'.$type->id.'" class="typeFlr"> '.$type->name.'</li>';
							?>
							<?php
							if(isset($_GET['types']) && $_GET['types']=='all')
							echo '<li class="activeF"><input checked="checked" type="checkbox" value="all" class="typeFlrAll"> All</li>';
							else
							echo '<li><input type="checkbox" value="all" class="typeFlrAll"> All</li>';
							?>
                        </ul>
                    </div>
                     <?php } ?>
                    <div class="filterCat">
                        <span class="fltSubTitle">Discount</span>
                        <ul class="discout-list" style="list-style: none;">
                            <li><input type="radio" class="discount-apply" value="0-10" name="discount"> 0-10%</li>
                            <li><input type="radio" class="discount-apply" value="11-20" name="discount"> 10-20%</li>
                            <li><input type="radio" class="discount-apply" value="21-30" name="discount"> 20-30%</li>
                            <li><input type="radio" class="discount-apply" value="31-40" name="discount"> 30-40%</li>
                            <li><input type="radio" class="discount-apply" value="41-50" name="discount"> 40-50%</li>
                            <li><input type="radio" class="discount-apply" value="51-100" name="discount"> More than 50%</li>
                        </ul>
                    </div>    
                </div>
                <div id="products">
                </div>
                <div style="clear:both;"></div>
                <!-- End of Featured Products -->
			<?php } ?>
			</div>
<script type="text/javascript">
$(document).ready(function(){
	var furl=window.location.href;
    $.get(furl,{ajax:true}, function(d){ $('#products').append(d); });
    var limit=12;
    $(window).scroll(function() {
        if($(window).scrollTop() + $(window).height() == $(document).height()) {
            var url = updateURLParameter(window.location.href, 'limit', limit);
            $.get(url, {ajax:true}, function(d){ $('#products').append(d); });
            limit=limit+12;
        }
    });
	$('.brandFlrAll').click(function(){
        if($(this).is(':checked'))
        {
            $('.brandFlr').each(function(i, v){
                    $(v).removeAttr('checked');
                    $(v).parent().removeClass('activeF');
            });
            var u = updateURLParameter(window.location.href, 'brand', 'all');
			limit=12;
			updateURL(u);
            $(this).parent().addClass('activeF');
        }
		else
			$(this).parent().removeClass('activeF');
    });
	$('.brandFlr').click(function(){
        if($(this).is(':checked'))
        {
			$(this).parent().addClass('activeF');
			$('.brandFlrAll').removeAttr('checked');
        }
        else
			$(this).parent().removeClass('activeF');
        $('.brandFlrAll').parent().removeClass('activeF');
        limit=12;
        var com=$( ".brandFlr:checked" ).map(function() {return this.value;}).get().join('-');
        if(com=='')
        {
            var u = removeURLParameter(window.location.href, 'brand');
			updateURL(u);
        }
        else
        {
            var u = updateURLParameter(window.location.href, 'brand', com);
			updateURL(u);
        }
    });
	$('.typeFlrAll').click(function(){
        if($(this).is(':checked'))
        {
            $.each($('.typeFlr'), function(i, v){
                    $(v).removeAttr('checked');
                    $(v).parent().removeClass('activeF');
            });
            var u = updateURLParameter(window.location.href, 'types', 'all');
            limit=12;
            updateURL(u);
            $(this).parent().addClass('activeF');
        }
		else
			$(this).parent().removeClass('activeF');
    });
    $('.typeFlr').click(function(){
        if($(this).is(':checked'))
        {
			$(this).parent().addClass('activeF');
			$('.typeFlrAll').removeAttr('checked');
        }
        else
			$(this).parent().removeClass('activeF');

        $('.typeFlrAll').parent().removeClass('activeF');
        limit=12;
        var com=$( ".typeFlr:checked" ).map(function() {return this.value;}).get().join('-');
        if(com=='')
        {
            var u = removeURLParameter(window.location.href, 'types');
            updateURL(u);
        }
        else
        {
            var u = updateURLParameter(window.location.href, 'types', com);
            updateURL(u);
        }
    });

    $('.discount-apply').click(function(){
      limit=12;
      $.each($('.discount-apply'), function(i, v){
         $(v).parent().removeClass('activeF');
      });
      if($(this).is(':checked'))
      {
        $(this).parent().addClass('activeF');
        var u = updateURLParameter(window.location.href, 'discount', $(this).val());
        updateURL(u, $(this).parent().text(), 'discount');
      }
    });
	$('.sItm, .sPItm').click(function(){
        $.each($('.sItm'), function(i, v){ $(v).removeClass('activeS');});
        $.each($('.sPItm'), function(i, v){ $(v).removeClass('activeS');});
        $(this).addClass('activeS');
        var sort=$.trim($(this).text());
        var url = updateURLParameter(window.location.href, 'sort', sort);
        updateURL(url);
        limit=6;
    });
	$(document).on('click', '.new_item_wishlist', function(){
		var url = "<?=$this->createUrl('/site/addwishlist')?>";
		var obj = $(this);
		$.post(url,{pid: $(obj).attr('data-pid')}, function(d){ d = $.parseJSON(d); if(d.status == "success") { $(obj).find("span").text("Remove from Wishlist"); $( obj ).switchClass( "new_item_wishlist", "remove_item_wishlist"); } });
		return false;
	});
	$(document).on('click', '.remove_item_wishlist', function(){
		var url = "<?=$this->createUrl('/site/removewishlist')?>";
		var obj = $(this);
		$.post(url,{pid: $(obj).attr('data-pid')}, function(d){ d = $.parseJSON(d); if(d.status == "success"){ $(obj).find("span").text("Add to Wishlist"); $( obj ).switchClass( "remove_item_wishlist", "new_item_wishlist"); }});
		return false;
	});
});
function updateURLParameter(url, param, paramVal){
    var newAdditionalURL = "";
    var tempArray = url.split("?");
    var baseURL = tempArray[0];
    var additionalURL = tempArray[1];
    var temp = "";
    if (additionalURL) {
        tempArray = additionalURL.split("&");
        for (i=0; i<tempArray.length; i++){
            if(tempArray[i].split('=')[0] != param){
                newAdditionalURL += temp + tempArray[i];
                temp = "&";
            }
        }
    }

    var rows_txt = temp + "" + param + "=" + paramVal;
    return baseURL + "?" + newAdditionalURL + rows_txt;
}
function removeURLParameter(url, parameter) {
    //prefer to use l.search if you have a location/link object
    var urlparts= url.split('?');   
    if (urlparts.length>=2) {

        var prefix= encodeURIComponent(parameter)+'=';
        var pars= urlparts[1].split(/[&;]/g);

        //reverse iteration as may be destructive
        for (var i= pars.length; i-- > 0;) {    
            //idiom for string.startsWith
            if (pars[i].lastIndexOf(prefix, 0) !== -1) {  
                pars.splice(i, 1);
            }
        }

        url= urlparts[0]+'?'+pars.join('&');
        return url;
    } else {
        return url;
    }
}
function updateURL(url)
{
        var state = {"canBeAnything": true};
        history.pushState(state, "Product Page", url);
        $.get(url, {ajax:true}, function(d){ $('#products').html(d); });
}
</script>