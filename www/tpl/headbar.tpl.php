  <?php // Protection to avoid direct call of template
if (empty($conf) || ! is_object($conf))
{
	print "Error, template page can't be called as URL";
	exit;
}
?>
	<header class="commonhead text-center text-white">
      <div class="container">
          <?php if(!empty($context->title)){ ?>
            <h1 class="text-uppercase">
              <strong><?php echo $context->title; ?></strong>
            </h1>
            <hr>
          <?php } ?>
          <?php if(!empty($context->desc)) { ?>
          	<p class="text-faded"><?php echo $context->desc; ?></p>
          <?php } ?>


		  <?php echo $context->hook('header_more'); ?>

<!--			<div class="clearfix" ></div>-->
<!--			<a class="btn btn-primary btn-strong pull-left" href="http://localhost/atm/dolibarr/htdocs/custom/externalaccess/www/?controller=stockreplenishmentlist&amp;ctoken=fed168eaeebe227c37fe6fd10bcf4aa0">-->
<!--				<i class="fa fa-chevron-left"></i> Retour liste-->
<!--			</a>-->
<!--			<div class="clearfix" ></div>-->

	  </div>
    </header>
