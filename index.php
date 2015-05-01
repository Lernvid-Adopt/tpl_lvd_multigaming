<?php
defined( '_JEXEC' ) or die( 'Access to this location is RESTRICTED.' );
echo '<?xml version="1.0" encoding="utf-8"?'.'>'; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
<?php
	// inserting mootools
		JHTML::_('behavior.mootools');
?>
<meta name="designer" content="Juergen Koller - http://www.lernvid.com" />
<meta name="licence" content="Copywright LernVid.com" />
<link href="templates/<?php echo $this->template ?>/css/reset.css" rel="stylesheet" type="text/css" media="all" />
<link href="templates/<?php echo $this->template ?>/css/template.css" rel="stylesheet" type="text/css" media="all" />
	  <!--[if IE 7]>
	  <link href="templates/<?php echo $this->template ?>/css/ie7.css" rel="stylesheet" type="text/css" media="all" />
   <![endif]-->
   <!--[if lt IE 7]>
	  <link href="templates/<?php echo $this->template ?>/css/ie5x6x.css" rel="stylesheet" type="text/css" media="all" />
   <![endif]-->
	<?php
		if($this->countModules("left")&&!$this->countModules("right")){ $contentwidth="left";}
		if($this->countModules("right")&&!$this->countModules("left")){ $contentwidth="right";}
		if($this->countModules("left")&&$this->countModules("right")) {$contentwidth="middle"; }
	?>
<?php if (($this->params->get('useJavascript')) !=0) : ?>
	<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/hover.js"></script>
<?php endif;?>
<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/fontsizer.js"></script>
</head>

<body>
<div id="wrapper">
	<div id="bg_up">
		<div id="masthead_container">
			<div id="masthead">
				<?php if (($this->params->get('showFontsizer')) !=0) : ?>
					<div id="fontsizer">
					    <a href="index.php" title="Font Larger" onclick="changeFontSize(1);return false;"> <img onmouseout="this.src='templates/<?php echo $this->template ?>/images/plus.png';" onmouseover="this.src='templates/<?php echo $this->template ?>/images/plus_hover.png';" src="templates/<?php echo $this->template ?>/images/plus.png" alt="plus" title="Font Larger" style="width:20px;height:30px;" height="20" width="30" border="none" /></a> <a href="index.php" title="Font Smaller" onclick="changeFontSize(-1);return false;"><img onmouseout="this.src='templates/<?php echo $this->template ?>/images/minus.png';" onmouseover="this.src='templates/<?php echo $this->template ?>/images/minus_hover.png';" src="templates/<?php echo $this->template ?>/images/minus.png" alt="minus" title="Font Smaller" style="width:20px;height:30px;" height="20" width="30" border="none" /></a> <a href="index.php" title="Font Standard" onclick="revertStyles(); return false;"><img onmouseout="this.src='templates/<?php echo $this->template ?>/images/reset.png';" onmouseover="this.src='templates/<?php echo $this->template ?>/images/reset_hover.png';" src="templates/<?php echo $this->template ?>/images/reset.png" alt="gleich" title="Font Standard" style="width:20px;height:30px;" height="20" width="30" border="none" /></a>
					</div>
				<?php endif; ?>
				<div id="sitetitle"><?php echo $mainframe->getCfg('sitename');?></div>
			</div>
		</div>
		<div id="container">
		<!-- Begin Container -->
			<?php if($this->countModules('user4')) : ?>
				<div id="searchbox">
					<div id="search">
						<div id="search_inner">
				             <jdoc:include type="modules" name="user4" style="xhtml" />
						</div>
					</div>
				</div>	
			<?php endif; ?>		
			<?php if($this->countModules('user3')) : ?>
				<div id="navigation">
		             <jdoc:include type="modules" name="user3" style="xhtml" />
				</div>
			<?php endif; ?>
			<div id="top">
					<?php if($this->countModules('top')) : ?>
			             <jdoc:include type="modules" name="top" style="xhtml" />
					<?php endif; ?>		
			</div>
			<!-- Begin Page Content -->
			<div id="page_content">
				<!-- Begin Content Upside -->
				<div id="content_up">
					<div id="content_up_left">
							<div id="breadcrumbs">
				            	<jdoc:include type="module" name="breadcrumbs" />
						    </div>
						<div id="content_up_right">
						</div>
					</div>
				</div>
				<!-- End Content Upside -->
					<?php if($this->countModules('left')) : ?>
						<div id="sidebar_left">
				             <jdoc:include type="modules" name="left" style="xhtml" />
						</div>
					<?php endif; ?>		
					<?php if($this->countModules('right')) : ?>
						<div id="sidebar_right">
				             <jdoc:include type="modules" name="right" style="xhtml" />
						</div>
					<?php endif; ?>		
				    <div id="content_out<?php echo $contentwidth; ?>">
						<div class="content">
							 <jdoc:include type="component" />
						</div>
					</div>
				</div>	
				<!-- Begin Content Downside -->
				<div id="content_down">
					<div id="content_down_left">
						<div id="content_down_right">
						</div>
					</div>
				</div>	
				<!-- End Content Downside -->
			<div id="container2">
				<!-- End Page Content -->
				<div id="user_modules1">
							<?php if($this->countModules('user1')) : ?>
								<div id="user1">
							           <jdoc:include type="modules" name="user1" style="xhtml" />
								</div>
							<?php endif; ?>			
							<?php if($this->countModules('user2')) : ?>
								<div id="user2">
								           <jdoc:include type="modules" name="user2" style="xhtml" />
								</div>
							<?php endif; ?>			
				</div>					
				<div id="user_modules2">
						<?php if($this->countModules('user5')) : ?>
							<div id="user5">
								<jdoc:include type="modules" name="user5" style="xhtml" />
							</div>
						<?php endif; ?>				
						<?php if($this->countModules('user6')) : ?>
							<div id="user6">
								<jdoc:include type="modules" name="user6" style="xhtml" />
							</div>
						<?php endif; ?>				
				</div>
				<div id="footer">
					<jdoc:include type="modules" name="footer" />
				</div>
				<div id="bottom">
					<div id="date"><?php echo JHTML::Date($this->date_field, "%A, %d. %B %Y"); ?></div>
					<div id="go_top"><p><a href="#">Top</a></p></div>
					<div id="syndicate">
						<?php if($this->countModules('syndicate')) : ?>
							<jdoc:include type="modules" name="syndicate" />
						<?php endif; ?>				
					</div>
				</div>
				<div id="copyright_info">
					<p><?php echo  $this->params->get('CopyrightInfo');  ?></p>
					<p>Valid <a href="http://validator.w3.org/check?uri=referer" target="_blank">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check?uri=templates/<?php echo $this->template ?>/css/template.css" target="_blank">CSS</a></p>
				</div>
			</div>
		</div>
		<div class="clr"></div>
		<div id="designed_by">
			<p>Design by: <a href="http://www.lernvid.com" target="_blank">LernVid.com</a></p>
		</div>
	</div>
</div>
<jdoc:include type="modules" name="debug" style="xhtml" />
</body>
</html>