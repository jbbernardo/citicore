<section class="hm-frame1 frame1">
	<div class="hm1__sliderCon">
		<% loop FrameSliders %>
		<div class="hm1__sliderListCon">
			<div class="frm-cntnr align-c">
				<h1 class="bold">$H1Title</h1>
				<p class="width--50 ma-auto">$H1Desc<p>
				<div class="m-margin-t dis-inline-b">
					<a href="$H1BtnLink"><button class="btn align-c type-yellow">$H1BtnText</button></a>
				</div>
			</div>
			<div class="hm1__sliderBGCon" style="background-image: url('$H1SliderImg.URL')"></div>
		</div>
		<% end_loop %>
	</div>
	<div class="progressBarContainer inlineBlock-parent">
		<% loop FrameSliders %>
		<div class="item">
			<span class="progressBar"></span>
		</div>
		<% end_loop %>
	</div>
	<div class="hm1__bgWhite"></div>
	<div class="hm1__bgRed"></div>
</section>
<section class="hm-frame2 frm-padding">
	<div class="frm-cntnr width--85 inlineBlock-parent">
		<div class="width--50">
			<h6 class="type-1">$Fr2FrameTitle</h6>
			<h4 class="m-margin-b bold lh-15">$Fr2Title</h4>
			<p>$Fr2Desc</p>
			<div class="m-margin-t">
				<a href="$Fr2BtnLink"><button class="btn type-yellow">$Fr2BtnText</button></a>
			</div>
		</div
		><div class="width--50">
			<div id="map" class="mapouter"></div>
		</div>
	</div>
</section>
<section class="hm-frame3">
	<div class="frm-cntnr width--85">
		<div class="hm3__titleCon l-margin-b align-c">
			<h4 class="m-margin-b bold lh-15 type-white">$Fr3Title</h4>
			<p class="width--60 ma-auto type-white">$Fr3Desc</p>
		</div>
		<div class="hm3__contentCon page-grid grid-3">
			<div class="page__gridChild">
				<div class="hm3__imgCon" style="background-image: url('$Fr3Img1.URL')"></div>
				<div class="hm3__textCon">
					<h3 class="bold">01</h3>
					<div class="hm3__textInner">
						<h6 class="type-white bold">$Fr3Title1</h6>
						<div class="hm3__arrow"></div>
					</div>
				</div>
				<div class="hm3__textPrev">
					<div class="hm3__arrow"></div>
					<div>
						<h6 class="type-white bold">$Fr3Title1</h6>
						<p>$Fr3Decs1</p>
						<p><a href="$Fr3LinkTo1" class="type-yellow bold uppercase">$Fr3LinkText1</a></p>
					</div>
				</div>
			</div>
			<div class="page__gridChild">
				<div class="hm3__imgCon" style="background-image: url('$Fr3Img2.URL')"></div>
				<div class="hm3__textCon">
					<h3 class="bold">02</h3>
					<div class="hm3__textInner">
						<h6 class="type-white bold">$Fr3Title2</h6>
						<div class="hm3__arrow"></div>
					</div>
				</div>
				<div class="hm3__textPrev">
					<div class="hm3__arrow"></div>
					<div>
						<h6 class="type-white bold">$Fr3Title2</h6>
						<p>$Fr3Decs2</p>
						<p><a href="$Fr3LinkTo2" class="type-yellow bold uppercase">$Fr3LinkText2</a></p>
					</div>
				</div>
			</div>
			<div class="page__gridChild">
				<div class="hm3__imgCon" style="background-image: url('$Fr3Img3.URL')"></div>
				<div class="hm3__textCon">
					<h3 class="bold">03</h3>
					<div class="hm3__textInner">
						<h6 class="type-white bold">$Fr3Title3</h6>
						<div class="hm3__arrow"></div>
					</div>
				</div>
				<div class="hm3__textPrev">
					<div class="hm3__arrow"></div>
					<div>
						<h6 class="type-white bold">$Fr3Title3</h6>
						<p>$Fr3Decs3</p>
						<p><a href="$Fr3LinkTo3" class="type-yellow bold uppercase">$Fr3LinkText3</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="hm3__BGHolder">
		<div class="hm3__BGCon" style="background-image: url('$Fr3BG.URL')"></div>
		<div class="hm3__bgOrange"></div>
	</div>
	<div class="hm3__bgGray"></div>
</section>
<section class="hm-frame4 frm-padding">
	<div class="frm-cntnr width--85">
		<h4 class="m-margin-b bold lh-15 align-c">$Fr4Title</h4>
		<% loop InvestorCenterPage %>
		<div class="hm4__contentCon width--85 ma-auto">
			<% loop Children %>
			<div class="hm4__listCon">
				<h6 class="type-1 bold align-c s-margin-b">$Title</h6>
				<div class="hm4__listInnerCon">
					<% loop Children.Limit(1) %>
					<a href="#"><div class="hm4__newsImgCon" style="background-image: url('$ArticleImage.URL')"></div></a>
					<% end_loop %>
					<ul>
						<% loop Children.Limit(3) %>
						<li><p><a href="#">$ArticleTitle</a> <span>$ArticleYear</span></p></li>
						<% end_loop %>
					</ul>
					<p class="align-r type-red"><a href="#">See More >></a></p>
				</div>
			</div>
			<% end_loop %>
		</div>
		<% end_loop %>
	</div>
</section>
<section class="hm-frame5">
	<div class="frm-cntnr width--80 inlineBlock-parent">
		<div class="width--45">
			<h6 class="type-white">$Fr5FrameTitle</h6>
			<h4 class="m-margin-b bold lh-15 type-white">$Fr5Title</h4>
			<p class="type-white">$Fr5Desc</p>
			<a href="$Fr5BtnLink"><button class="btn type-white m-margin-t">$Fr5BtnText</button></a>
		</div
		><div class="width--55">
			<div class="hm5__sliderCon">
				<% loop FrameFiveSliders %>
				<div class="hm5__sliderListCon">
					<div class="hm5__imgCon" style="background-image: url('$H5SliderImg.URL')"></div>
					<div class="hm5__textCon">
						<h6 class="bold type-white">$H5Title</h6>
						<p class="type-white">$H5Desc</p>
					</div>
				</div>
				<% end_loop %>
			</div>
		</div>
	</div>
	<div class="hm5__BGHolder">
		<div class="hm5__BGCon" style="background-image: url('$Fr5BG.URL')"></div>
		<div class="hm5__bgYellow"></div>
	</div>
	<div class="hm5__bgGray"></div>
</section>
<section class="hm-frame6 frm-padding">
	<div class="frm-cntnr width--80 inlineBlock-parent">
		<div class="width--55">
			<div class="hm6__contentList" style="background-image: url('$Fr6Img1.URL')">
				<h6>$Fr6Title1</h6>
			</div>
			<div class="hm6__contentList" style="background-image: url('$Fr6Img2.URL')">
				<h6>$Fr6Title2</h6>
			</div>
			<div class="hm6__contentList" style="background-image: url('$Fr6Img3.URL')">
				<h6>$Fr6Title3</h6>
			</div>
		</div
		><div class="width--45">
			<img src="$themeDir/images/logo.png">
			<div class="hm6__contactList">
				<h6 class="bold">$Fr6CntTitle1</h6>
				<p><span><i class="fas fa-user-alt"></i></span>$Fr6CntName1</p>
				<p><span><i class="fas fa-phone"></i></span><a href="tel:$Fr6CntNum2" target="_blank">$Fr6CntNum1</a></p>
				<p><span><i class="fas fa-envelope"></i></i></span><a href="tel:$Fr6CntMail1" target="_blank">$Fr6CntMail1</a></p>
			</div>
			<div class="hm6__contactList">
				<h6 class="bold">$Fr6CntTitle2</h6>
				<p><span><i class="fas fa-user-alt"></i></span>$Fr6CntName2</p>
				<p><span><i class="fas fa-phone"></i></span><a href="tel:$Fr6CntNum2" target="_blank">$Fr6CntNum2</a></p>
				<p><span><i class="fas fa-envelope"></i></i></span><a href="tel:$Fr6CntMail2" target="_blank">$Fr6CntMail2</a></p>
			</div>
			<div class="hm6__contactList">
				<h6 class="bold">$Fr6CntTitle3</h6>
				<p><span><i class="fas fa-user-alt"></i></span>$Fr6CntName3</p>
				<p><span><i class="fas fa-phone"></i></span><a href="tel:$Fr6CntNum3" target="_blank">$Fr6CntNum3</a></p>
				<p><span><i class="fas fa-envelope"></i></i></span><a href="tel:$Fr6CntMail3" target="_blank">$Fr6CntMail3</a></p>
			</div>
		</div>
	</div>
</section>