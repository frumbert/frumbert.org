
function tPageLoad() {
	this.Name = "tPageLoad"+(tPageLoad.count++)
	this.obj = this.Name+"tPageLoad"
	eval(this.obj+"=this")

	this.Left = 5;
	this.Top = 5;
	this.Width = 500;
	this.Height = 400;
	this.URL = null
	this.Active = false
	this.setH = false
	this.History = new Array()
	this.HistoryLoc = -1
	this.HistoryLen = -1
	this.Visibility = null
	this.ContentRef = null
	this.Usebuffer = true;

	this.Activate = tPageLoadActivate
	this.Back = tPageLoadBack
	this.Build = tPageLoadBuild
	this.BugItOut = tPageLoadBugItOut
	this.Forward = tPageLoadForward
	this.Load = tPageLoadLoad
	this.WriteContent = tPageLoadWriteContent
	this.Reload = tPageLoadReload
	this.SetHeight = tPageLoadSetHeight
}
function tPageLoadBuild() {
	
	this.css = css(this.Name,this.Left,this.Top,this.Width,this.Height,this.Visibility);
	this.css += css(this.Name+'DaText',0,0,this.Width,this.Height);
	this.css += css(this.Name+'TextC',0,0,this.Width-8,this.Height);
	this.css += css(this.Name+'TextT',0,0,this.Width-8);

	this.div ='';
	if (is.ie && this.Usebuffer) 
	{
		this.div += '<IFRAME NAME="'+this.Name+'Frame" WIDTH=0 HEIGHT=0 STYLE="display:none"></IFRAME>'
	}
	this.div += '<DIV ID="'+this.Name+'"><body background="console/toolbar.gif">';
	this.div += '<DIV ID="'+this.Name+'DaText">';
	this.div += '<DIV ID="'+this.Name+'TextC">';

	if (is.ie && !this.Usebuffer) 
	{
		this.div += '<IFRAME NAME="'+this.Name+'Frame" WIDTH='+(this.Width)+' HEIGHT='+(this.Height)+' MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING="NO" FRAMEBORDER="NO"></IFRAME>'
	}
	else 
	{
		this.div += '<DIV ID="'+this.Name+'TextT">'
	}
	this.div +='</div>';
	if (is.ns || this.Usebuffer) 
	{
		this.div += '</DIV>\n'
	}
	this.div +='</div>';
	this.div +='</body></div>';

}
function tPageLoadActivate() {
	if (is.ie && this.Usebuffer && parent.frames[this.Name+'Frame'].document.body.innerHTML) 
	{
		document.all[this.Name+'TextT'].innerHTML = parent.frames[this.Name+'Frame'].document.body.innerHTML
	}
	this.lyr = new DynLayer(this.Name);
	this.lyrDaText = new DynLayer(this.Name+'DaText');
	this.lyr.slideInit();
	this.lyrDaText.slideInit();
	if (is.ie && !this.Usebuffer) {
		this.textlyr = new DynLayer('content',null,this.Name+'Frame')
		this.textlyr.slideInit();
		this.ContentRef = this.Name+'content'
	}
	else {
		this.textlyr = new DynLayer(this.Name+'TextT')
		this.textlyr.slideInit();
		this.ContentRef = this.Name+'.document.'+this.Name+'TextC.document.'+this.Name+'TextT'
		if (this.lyrDaText.nestref) this.ContentRef = this.lyrDaText.nestref+'.document.'+this.VontentRef
	}
	if (!this.setH) this.textHeight = (is.ns)? this.textlyr.doc.height : this.textlyr.elm.scrollHeight
	this.setH = false
//	if (is.ns) {
//		this.textlyr.css.clip.bottom = Math.max(this.textHeight,this.Height)
//		this.textlyr.css.clip.right = this.Width
//	}
}
function tPageLoadLoad(url) {
	if (url != this.URL) {
		this.HistoryLoc += 1
		this.HistoryLen = this.HistoryLoc
		this.History[this.HistoryLen] = url
		this.Reload()
	}
}
function tPageLoadBack() {
	if (this.HistoryLoc > 0) {
		this.HistoryLoc -= 1
		this.Reload()
	}
}
function tPageLoadForward() {
	if (this.HistoryLoc < this.HistoryLen) {
		this.HistoryLoc += 1
		this.Reload()
	}
}
function tPageLoadReload() {
	this.URL = this.History[this.HistoryLoc]
	this.Refresh = true
	if (is.ns) 
	{
		this.textlyr = new DynLayer(this.Name+'TextT')
		this.textlyr.slideInit();
		this.textlyr.elm.src = this.URL
	}
	else 
	{
		if (is.ie) 
		{
			parent.frames[this.Name+'Frame'].document.location = this.URL;
		}
	}
}
function tPageLoadSetHeight(h) {
	this.textHeight = h
	this.setH = true
	this.Activate()
}
function tPageLoadWriteContent(doc) {
	if (!this.Usebuffer && is.ie) {
		var str = '<STYLE TYPE="text/css">'+
		css('content',0,0,this.Width)
		str += '</STYLE>'
		doc.write(str)
	}
}
//--------------------------------------
// Function    : tPageLoadBugItOut()
// Description : Stupid IE bug
//--------------------------------------
function tPageLoadBugItOut()
{
	document.all[this.Name+'TextT'].innerHTML = parent.frames[this.Name+'Frame'].document.body.innerHTML;
}



tPageLoad.count = 0
