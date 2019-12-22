var controller = new ScrollMagic.Controller();

var screenHt = window.innerHeight;

// build tween
var s1_bg_blur_tween = TweenMax.to("#apps-hero-blur-bg", 1, { opacity: 0 });

var s1_bg_tween = TweenMax.to("#apps-hero-bg", 1, { opacity: 1 });
var s2_bg_tween = TweenMax.to("#sec2-bg", 1, { scale: 1 });
var s2_iPhone_tween = TweenMax.to("#sec2-iPhone", 1, { scale: 1 });
var s2_fade_tween = TweenMax.to("#sec2-txt", 1, { opacity: 0.3 });
var s3_fade_tween = TweenMax.to("#sec3-hero", 1, { opacity: 1,top:'0rem' });
var s0_fade_tween = TweenMax.to("#sec0-hero", 1, { opacity: 0.3,scale:0.7 });
var s4_light_tween = TweenMax.to("#dark", 1, { backgroundColor: 'white' });
var s5_hero_tween = TweenMax.to("#sec5-hero", 1, { top: '0px' });

// build scene
var s1_bg_blur_scene = new ScrollMagic.Scene({ triggerElement: "#sec1", triggerHook: 0, duration: screenHt, offset: 0 })
	.setTween(s1_bg_blur_tween)
	.setPin('#apps-hero-bg')
	//.addIndicators({ name: "sec1 bg blur" }) // add indicators (requires plugin)
	.addTo(controller);

var s1_bg_scene = new ScrollMagic.Scene({ triggerElement: "#sec1", triggerHook: 0, duration: screenHt, offset: 0 })
	.setTween(s1_bg_tween)
	.setPin('#apps-hero-blur-bg')
	//.addIndicators({ name: "sec1 bg" }) // add indicators (requires plugin)
	.addTo(controller);

var s2_bg_scene = new ScrollMagic.Scene({ triggerElement: "#sec2-init-space", triggerHook: 0, duration: screenHt, offset: 0 })
	.setTween(s2_bg_tween)
	.setPin('#sec2-bg')
	//.addIndicators({ name: "sec2 bg" }) // add indicators (requires plugin)
	.addTo(controller);

var s2_iPhone_scene = new ScrollMagic.Scene({ triggerElement: "#sec2-init-space", triggerHook: 0, duration: screenHt, offset: 80 })
	.setTween(s2_iPhone_tween)
	//.addIndicators({ name: "sec2 iPhone" }) // add indicators (requires plugin)
	.addTo(controller);

	var s2_fade_scene = new ScrollMagic.Scene({ triggerElement: "#sec2-iPhone-space", triggerHook: 0, duration: 100, offset: screenHt-100 })
	.setTween(s2_fade_tween)
	//.addIndicators({ name: "sec2 fade" }) // add indicators (requires plugin)
	.addTo(controller);

	var s3_fade_scene = new ScrollMagic.Scene({ triggerElement: "#sec2-txt2-container", triggerHook: 0, duration: 400, offset: -100 })
	.setTween(s3_fade_tween)
	//.addIndicators({ name: "sec3 fade" }) // add indicators (requires plugin)
	.addTo(controller);

	var s0_fade_scene = new ScrollMagic.Scene({ triggerElement: "#sec0-init", triggerHook: 0, duration: screenHt/2, offset: 0 })
	.setTween(s0_fade_tween)
	.setPin('#sec0-hero')
	//.addIndicators({ name: "sec0 fade" }) // add indicators (requires plugin)
	.addTo(controller);

	var s4_light_scene = new ScrollMagic.Scene({ triggerElement: "#sec4", triggerHook: 0.8, duration: 300, offset: -screenHt/2 })
	.setTween(s4_light_tween)
	//.addIndicators({ name: "sec4 lights" }) // add indicators (requires plugin)
	.addTo(controller);

	var s5_hero_scene = new ScrollMagic.Scene({ triggerElement: "#sec5", triggerHook: 0.6, duration: 300, offset: 200 })
	.setTween(s5_hero_tween)
	//.addIndicators({ name: "sec5 hero" }) // add indicators (requires plugin)
	.addTo(controller);
