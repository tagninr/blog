@extends('frontend.layouts.master')
@section('content')
<div class='clear'></div>
<div id='main-wrapper'>
	<div class='posts-title'>
		<h2 class='title'><a href='/search'>Recent Posts</a></h2>
	</div>
	<div class='main section' id='main' name='Main Posts'>
		<div class='widget Blog' data-version='1' id='Blog1'>
			<div class='blog-posts hfeed'>
				<!--Can't find substitution for tag [defaultAdStart]-->
				@foreach($post as $p)
				<div class='post-outer'>				
					<div class='post'>					
						<div class='block-image'>
							<div class='thumb'><a href="" style='background:url("image/{{$p -> image}}") no-repeat center center;background-size:cover'><span class='thumb-overlay'/></a></div>
							<div class='postags'><a class='Beauty' href="" rel='tag'>{{$p -> category_id}}</a></div>
						</div>
						<div class='post-header'></div>
						<article>
							<font class='retitle'>
								<h2 class='post-title entry-title'>
									<a href="{{-- {{route('post-details', $p -> id)}} --}}">{{$p -> title}}</a>
								</h2>
							</font>
							<div class='date-header'>
								<div id='meta-post'>
									<a class='timestamp-link' href="" rel='bookmark' title='permanent link'><abbr class='published' itemprop='datePublished dateModified' title="{{$p -> created_at}}">{{date("F d, Y"{{-- , $p -> created_at --}})}}</abbr></a>
								</div>
								<div class='resumo'>
									<span>Lorem Ipsum is simply dummy text of the printing and typesetting  industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever...</span>
									<a class="read-more" href="">Read More</a>
								</div>
								<div style='clear: both;'></div>
							</div>
						</article>
						<div style='clear:both'></div>
						<div class='post-footer'>
						</div>					
					</div>				
				</div>
				@endforeach			
				<!--Can't find substitution for tag [adEnd]-->
			</div>
			<div class="blog-pager" id="blog-pager">				
				<span class="showpageNum"><a href="#" onclick="redirectpage();return false"><i class="fa fa-angle-double-left"></i></a></span>
				<span class="showpageOf">Page 1 of 4</span>
				<span class="showpagePoint">1</span>
				<span class="showpageNum"><a href="#" onclick="redirectpage(2);return false">2</a></span>
				<span class="showpagePoint">3</span>
				<span class="showpageNum"><a href="#" onclick="redirectpage(4);return false">4</a></span>
				<span class="showpageNum"><a href="#" onclick="redirectpage(2);return false"><i class="fa fa-angle-double-right"></i></a></span>
			</div>	
			<div class="">
				{{$post -> links()}}	
			</div>
			<!-- <div class='blog-pager' id='blog-pager'>
				<span id='blog-pager-older-link'>
					<a class='blog-pager-older-link' href='https://magtimate-soratemplates.blogspot.in/search?updated-max=2016-03-17T00:46:00-07:00&amp;max-results=7' id='Blog1_blog-pager-older-link' title='Older Posts'>Older Posts</a>
				</span>
				<a class='home-link' href='https://magtimate-soratemplates.blogspot.in/'>Home</a>
			</div> -->
			<div class='clear'></div>
			<!-- <div class='blog-feeds'>
				<div class='feed-links'>
					Subscribe to:
					<a class='feed-link' href='https://magtimate-soratemplates.blogspot.com/feeds/posts/default' target='_blank' type='application/atom+xml'>
						Posts(Atom)
					</a>
				</div>
			</div> -->
			<script type="text/javascript">window.___gcfg = {'lang': 'en'};</script>
		</div>
		<div class='widget HTML' data-version='1' id='HTML300'></div>
		<div class='widget HTML' data-version='1' id='HTML301'></div>
	</div>
	<!-- <div class='recent-boxes' id='recent-boxes2'>
		<div class='box-sec section' id='box-sec2' name='Box Layout 2'>
			<div class='widget HTML' data-version='1' id='HTML4'>
				<h2 class='title'>Business</h2>
				<div class='widget-content'>
					<div id="sbox" data-label="Business"></div>
				</div>
				<div class='clear'></div>
				<span class='widget-item-control'>
					<span class='item-control blog-admin'>
						<a class='quickedit' href='//www.blogger.com/rearrange?blogID=217984890454310999&widgetType=HTML&widgetId=HTML4&action=editWidget&sectionId=box-sec2' onclick='return _WidgetManager._PopupConfig(document.getElementById("HTML4"));' target='configHTML4' title='Edit'>
							<img alt='' height='18' src='https://resources.blogblog.com/img/icon18_wrench_allbkg.png' width='18'/>
						</a>
					</span>
				</span>
				<div class='clear'></div>
			</div>
		</div>
	</div> -->
</div>
@include('frontend.layouts.sidebar')
@endsection

{{-- 			<div class="blog-pager" id="blog-pager">
				<span class="showpageOf">Page 1 of 4</span>
				<span class="showpagePoint">1</span>
				<span class="showpageNum"><a href="#" onclick="redirectpage(2);return false">2</a></span>
				<span class="showpageNum"><a href="#" onclick="redirectpage(3);return false">3</a></span>
				<span class="showpageNum"><a href="#" onclick="redirectpage(4);return false">4</a></span>
				<span class="showpageNum"><a href="#" onclick="redirectpage(2);return false"><i class="fa fa-angle-double-right"></i></a></span>
			</div>

			<div class="blog-pager" id="blog-pager">
				<span class="showpageOf">Page 2 of 4</span>
				<span class="showpage"><a href="/"><i class="fa fa-angle-double-left"></i></a></span>
				<span class="showpageNum"><a href="/">1</a></span>
				<span class="showpagePoint">2</span>
				<span class="showpageNum"><a href="#" onclick="redirectpage(3);return false">3</a></span>
				<span class="showpageNum"><a href="#" onclick="redirectpage(4);return false">4</a></span>
				<span class="showpageNum"><a href="#" onclick="redirectpage(3);return false"><i class="fa fa-angle-double-right"></i></a></span>
			</div> --}}