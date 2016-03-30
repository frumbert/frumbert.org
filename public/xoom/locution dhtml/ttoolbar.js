//--------------------------------------
// Function    : tToolbar()
// Description : Main creator
//--------------------------------------
function tToolbar()
{
	// private
	this.Name = "tToolbar"+(tToolbar.Count++);
	this.obj = this.Name + "tToolbar"
        eval(this.obj + "=this")

	// properties
	this.Height = 38;
	this.Left = 0;
	this.Top = 362;
	this.Width = 500;
	this.HTML = '';

	// methods
        this.Activate = tToolbarActivate;
	this.Build = tToolbarBuild;
	this.Hide = tToolbarHide;
	this.Refresh = tToolbarRefresh;
	this.Show = tToolbarShow;
}
tToolbar.Count = 0;

//--------------------------------------
// Function    : tToolbarBuild
// Description : Build CSS and DOC
//--------------------------------------
function tToolbarBuild()
{
	this.css = css(this.Name,this.Left,this.Top,this.Width,this.Height,null,this.Visible);
	this.css += css('NewsTextT',0,0,this.Width,this.Height);

	this.div = '<DIV ID="'+this.Name+'">';

	this.div +=this.HTML;

	this.div += '</div>';
}

//--------------------------------------
// Function    : tToolbarActivate
// Description : Activate the component
//--------------------------------------
function tToolbarActivate()
{
	this.lyr = new DynLayer(this.Name);
	this.lyr.slideInit();
}

//-------------------------------------------
// Function    : tRefresh
// Description : Refreshes the component
//-------------------------------------------
function tToolbarRefresh()
{

}


//--------------------------------------
// Function    : tToolbarHide()
// Description : Hides the component
//--------------------------------------
function tToolbarHide()
{
	this.lyr.hide();
}


//--------------------------------------
// Function    : tToolbarShow()
// Description : Shows the component
//--------------------------------------
function tToolbarShow()
{
	this.lyr.show();
	this.Refresh();
}



