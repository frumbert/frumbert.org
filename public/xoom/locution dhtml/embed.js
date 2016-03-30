function init() {
	myscroll.activate()
}

myscroll = new Scroll(0, 0, 660, 480)
myscroll.clipImages = false
myscroll.setImages('scroll-img-box0.gif','scroll-img-box1.gif','scroll-img-up0.gif','scroll-img-up1.gif','scroll-img-dn0.gif','scroll-img-dn1.gif','scroll-img-bar.gif')
myscroll.build()

writeCSS (
myscroll.css
)
