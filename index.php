<?php
/**
	* Yakumo 八云酱出品
	* @package Yakumo
	* @author 八云酱
	* @version 1.0.0
	* @link https://www.bayun.org
	*/
	$this->need('header.php');
?>

<body class="home-template">

	<header id="header" data-url="<?php $this->options->themeUrl('img/yasuko.jpg'); ?>" class="home-header blog-background banner-mask lazy no-cover" style="display: table; background-image: url(<?php $this->options->themeUrl('img/yasuko.jpg'); ?>)">
	        <div class="nav-header-container">
	            <a href="<?php $this->options->siteUrl(); ?>" class="svg-logo" target="_blank">
	                <span class="svg-logo"> 
	                    <img src="<?php $this->options->themeUrl('img/logo.png'); ?>" style="width: 50px;height: 50px;">       
	                </span>
	            </a>
	        </div>
	        <div class="header-wrap">
	        <div class="home-info-container">
	            <a href="<?php $this->options->siteUrl(); ?>"><h2>Stay before every beautiful thoughts</h2></a>
	            <h4>
                    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                    <?php while($pages->next()): ?>

                    <a style="color:#fff" <?php if($this->is('page', $pages->slug)): ?><?php endif; ?> href="<?php $pages->permalink(); ?>">
                    	<?php $pages->title(); ?>
                    </a>
                    <?php endwhile; ?>
                    <a style="color:#fff" href="https://www.bayun.org" target="_blank">八云酱</a>
                    <a style="color:#fff" href="https://zhuanlan.zhihu.com/bayun" target="_blank">知乎专栏</a>
				</h4>
	        </div>
	        <div class="arrow_down" data-offset="-45">
	               <a href="javascript:;"></a>
	        </div>
	    </div>
	</header>

	<main id="main" class="content homepage" role="main">
		<?php while($this->next()): ?>
			<article class="post-in-list post">

			    <section class="post-excerpt">
				    <a href="<?php $this->permalink() ?>">
				        <p>
				        <img class="lazy" data-url="<?php if(isset($this->fields->cover)){$this->fields->cover();}else{$this->options->themeUrl('img/yasuko.jpg');} ?>" src="<?php if(isset($this->fields->cover)){$this->fields->cover();}else{$this->options->themeUrl('img/yasuko.jpg');} ?>" style="display: block;">
				        </p>
				    </a>
				    <div class="info-mask">
						<div class="mask-wrapper">
							<h2 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
							<div class="post-meta">
								<span class="post-time"><time datetime="{{date format='YYYY-MM-DD'}}"><?php $this->date('d M Y'); ?></time></span>
								<span class="post-tags">
									<?php $this->tags(' ', true, '博主太懒'); ?>
								</span>
							</div>
						</div>
					</div>
			    </section>

			    <div class="post-excerpt-mirror">
			    	<div class="post-excerpt-mirror-mask">
			    	<a href="<?php $this->permalink() ?>"><p></p></a>
			    		<div class="excert-detail-container">
					        <div class="post-meta">
					            <span class="post-time"><time><?php $this->date('d M Y'); ?></time></span>
					            <h2 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
					            <p class="post-short-intro"><?php $this->description(); ?></p>
					            <span class="post-tags">
					           		<?php $this->tags(' ', true, '博主太懒'); ?>
					            </span>
					            <a href="<?php $this->permalink() ?>" class="btn-post-excerpt">阅读原文</a>
					        </div>
			    		</div>
			    	</div>
			    </div>


			</article>

		<?php endwhile; ?>

		<nav class="pagination" role="navigation">			
			<?php $this->pageNav('上一页','下一页',10,'...');?>  					       		
		</nav>


		<?php $this->widget('Widget_Metas_Tag_Cloud', 'ignoreZeroCount=1&limit=50')->to($tags); ?>
		<div class="widget widget-tag-cloud">
			<div class="all-tags-block">				
				<?php while($tags->next()): ?>
					<a href="<?php $tags->permalink(); ?>" class="all-tags"><?php $tags->name(); ?></a>
				<?php endwhile; ?>
			</div>
		</div>

	</main>

	<?php $this->need('footer.php'); ?>
