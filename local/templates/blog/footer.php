<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

</div>
<div class="sidebar">
    <?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "cats", Array(
	"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"COUNT_ELEMENTS" => "Y",	// Показывать количество элементов в разделе
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",	// Показывать количество
		"FILTER_NAME" => "sectionsFilter",	// Имя массива со значениями фильтра разделов
		"IBLOCK_ID" => "3",	// Инфоблок
		"IBLOCK_TYPE" => "blog",	// Тип инфоблока
		"SECTION_CODE" => "",	// Код раздела
		"SECTION_FIELDS" => array(	// Поля разделов
			0 => "",
			1 => "",
		),
		"SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
		"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
		"SECTION_USER_FIELDS" => array(	// Свойства разделов
			0 => "",
			1 => "",
		),
		"SHOW_PARENT_NAME" => "Y",	// Показывать название раздела
		"TOP_DEPTH" => "2",	// Максимальная отображаемая глубина разделов
		"VIEW_MODE" => "TEXT",	// Вид списка подразделов
	),
	false
);?>
    <div class="popular-post">
        <h3>popular-posts</h3>
        <div class="post-grid">
            <img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/latest-post-img1.jpg" title="post1" alt=""/>
            <p>Lorem ipsum dolor sit amet consectetur dolor more normal of letters,<a href="#">[...]</a></p>
            <div class="clear"></div>
        </div>
        <div class="post-grid">
            <img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/latest-post-img2.jpg" title="post1" alt=""/>
            <p>Lorem ipsum dolor sit dolor more normal consectetur of letters,<a href="#">[...]</a></p>
            <div class="clear"></div>
        </div>
        <div class="post-grid">
            <img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/latest-post-img3.jpg" title="post1" alt=""/>
            <p>Lorem ipsum dolor sit dolor more normal consectetur of letters sit amet,<a href="#">[...]</a>
            </p>
            <div class="clear"></div>
        </div>
        <div class="view-all"><a href="#">
            </a><a href="#">ViewAll</a>
        </div>
        <div class="clear"></div>
    </div>
    <div class="latest_comments">
        <h3>Latest Comments</h3>
        <div class="comments">
            <p><span>admin</span> commented on</p>
            <h4><a href="#">Lorem ipsum dolor sit dolor more normal!</a></h4>
            <p>June 25th, 2013</p>
        </div>
        <div class="comments">
            <p><span>admin</span> commented on</p>
            <h4><a href="#">Lorem ipsum dolor sit dolor more normal!</a></h4>
            <p>June 20th, 2013</p>
        </div>
        <div class="comments">
            <p><span>admin</span> commented on</p>
            <h4><a href="#">Lorem ipsum dolor sit dolor more normal!</a></h4>
            <p>June 15th, 2013</p>
        </div>
    </div>
    <div class="latest_photos">
        <h3>Latest Photos</h3>
        <link rel="stylesheet" href="<?=DEFAULT_TEMPLATE_PATH;?>/css/swipebox.css">
        <script src="<?=DEFAULT_TEMPLATE_PATH;?>/js/jquery.swipebox.min.js"></script>
        <script type="text/javascript">
            jQuery(function ($) {
                $(".swipebox").swipebox();
            });
        </script>
        <div class="gallery-bottom">
            <div class="section group">
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="../.default/images/latest-post-img1.jpg" class="b-link-stripe b-animate-go  swipebox"
                       title="Image Title">
                        <img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/latest-post-img1.jpg" alt="" class="img-responsive">
                    </a>
                </div>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="../.default/images/latest-post-img2.jpg" class="b-link-stripe b-animate-go  swipebox"
                       title="Image Title">
                        <img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/latest-post-img2.jpg" alt="" class="img-responsive">
                    </a>
                </div>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="../.default/images/latest-post-img3.jpg" class="b-link-stripe b-animate-go  swipebox"
                       title="Image Title">
                        <img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/latest-post-img3.jpg" alt="" class="img-responsive">
                    </a>
                </div>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="../.default/images/latest-post-img1.jpg" class="b-link-stripe b-animate-go  swipebox"
                       title="Image Title">
                        <img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/latest-post-img1.jpg" alt="" class="img-responsive">
                    </a>
                </div>
            </div>
            <div class="section group">
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="../.default/images/latest-post-img2.jpg" class="b-link-stripe b-animate-go  swipebox"
                       title="Image Title">
                        <img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/latest-post-img2.jpg" alt="" class="img-responsive">
                    </a>
                </div>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="../.default/images/latest-post-img3.jpg" class="b-link-stripe b-animate-go  swipebox"
                       title="Image Title">
                        <img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/latest-post-img3.jpg" alt="" class="img-responsive">
                    </a>
                </div>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="../.default/images/latest-post-img1.jpg" class="b-link-stripe b-animate-go  swipebox"
                       title="Image Title">
                        <img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/latest-post-img1.jpg" alt="" class="img-responsive">
                    </a>
                </div>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="../.default/images/latest-post-img2.jpg" class="b-link-stripe b-animate-go  swipebox"
                       title="Image Title">
                        <img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/latest-post-img2.jpg" alt="" class="img-responsive">
                    </a>
                </div>
            </div>
            <div class="section group">
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="../.default/images/latest-post-img3.jpg" class="b-link-stripe b-animate-go  swipebox"
                       title="Image Title">
                        <img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/latest-post-img3.jpg" alt="" class="img-responsive">
                    </a>
                </div>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="../.default/images/latest-post-img1.jpg" class="b-link-stripe b-animate-go  swipebox"
                       title="Image Title">
                        <img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/latest-post-img1.jpg" alt="" class="img-responsive">
                    </a>
                </div>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="../.default/images/latest-post-img2.jpg" class="b-link-stripe b-animate-go  swipebox"
                       title="Image Title">
                        <img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/latest-post-img2.jpg" alt="" class="img-responsive">
                    </a>
                </div>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="../.default/images/latest-post-img3.jpg" class="b-link-stripe b-animate-go  swipebox"
                       title="Image Title">
                        <img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/latest-post-img3.jpg" alt="" class="img-responsive">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div>
<!--------------------- End Main Content ----------------------------------->
<div class="footer">
    <div class="footer_grides">
        <div class="wrap">
            <div class="footer_grid1">
                <h3>Popular Tweets</h3>
                <div class="tweet_data">
                    <div class="tweet_img">
                        <img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/tweet-img1.jpg" alt=""/>
                    </div>
                    <div class="tweet_desc">
                        <h4>June 24th, 2013</h4>
                        <p>Integer eget tortor et elit venenatis auctor morbi turpis nulla</p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="tweet_data">
                    <div class="tweet_img">
                        <img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/tweet-img2.jpg" alt=""/>
                    </div>
                    <div class="tweet_desc">
                        <h4>June 04th, 2013</h4>
                        <p>Integer eget tortor et elit venenatis auctor morbi turpis nulla</p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="tweet_data">
                    <div class="tweet_img">
                        <img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/tweet-img3.jpg" alt=""/>
                    </div>
                    <div class="tweet_desc">
                        <h4>May 4th, 2013</h4>
                        <p>Integer eget tortor et elit venenatis auctor morbi turpis nulla</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="footer_grid2">
                <h3>Page Layout</h3>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="single.html">About</a></li>
                    <li><a href="404.html">Support</a></li>
                    <li><a href="single.html">Services</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
                <div class="grid2_bottom">
                    <h3>Newsletters Signup</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.......</p>
                    <div class="signup">
                        <form>
                            <input type="text" value="Enter your e-mail here" onfocus="this.value = '';"
                                   onblur="if (this.value == '') {this.value = 'Enter your e-mail here';"><input
                                type="submit" value="Sign up">
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer_grid3">
                <h3>Follow</h3>
                <div class="social_icons">
                    <div class="img_list">
                        <ul>
                            <li><img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/facebook.png" alt=""/><a href="#">Facebook</a></li>
                            <li><img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/google+.png" alt=""/><a href="#">Google Plus</a></li>
                            <li><img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/twitter.png" alt=""/><a href="#">Twitter</a></li>
                            <li><img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/linkedin.png" alt=""/><a href="#">Likedin</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="copy_right">
        <p> © 2013 Share_Blog. All Rights Reserved | Design by <a href="http://w3layouts.com">W3Layouts</a></p>
    </div>
</div>
</body>
</html>