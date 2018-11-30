if(self.parent.frames.length>0)self.parent.location="http://thoraot.com";function submenu(show){var t=document.getElementById("menu_more");if(show==1){t.style.display="block";}
else
t.style.display="none";}
var cmenu="summary";function servMenuActive(id)
{servMenuUnActive(cmenu);cmenu=id;document.getElementById('sm-'+id).className="current";document.getElementById('sc-'+id).style.display="block";}
function servMenuUnActive(id)
{document.getElementById('sm-'+id).className="normal";document.getElementById('sc-'+id).style.display="none";}

function getStartTime(now,later,ticks,id)
{
handler = document.getElementById(id);

ticks = ticks + 1;
diff = (later - now - ticks);
days = diff /  60 / 60 / 24;
daysRound = Math.floor(days);
hours = diff /  60 / 60;
hoursRound = Math.floor(hours);
hours2 = diff /  60 / 60 - (24 * daysRound);
hoursRound2 = Math.floor(hours2);
minutes = diff / 60 - (24 * 60 * daysRound) - (60 * hoursRound2);
minutesRound = Math.floor(minutes);
seconds = diff - (24 * 60 * 60 * daysRound) - (60 * 60 * hoursRound2) - (60 * minutesRound);
secondsRound = Math.round(seconds);
if(hoursRound < 0 || minutesRound < 0 || secondsRound < 0)
{ buffer = "already started!"; }
else
{
 buffer = "";
if( days > 0 )
    buffer = daysRound +"<font color='#C8C8C8'> days</font> ";
buffer = buffer + hoursRound2 + "<font color='#C8C8C8'> hours</font> "
if( minutesRound > 0 || hoursRound > 0 ) buffer = buffer + minutesRound +"<font color='#C8C8C8'> minutes</font> ";
if ( secondsRound < 10 ) secondsRound = "0"+secondsRound;
buffer = buffer + secondsRound +"<font color='#C8C8C8'> seconds</font> ";
window.setTimeout("getStartTime("+now+","+later+", "+ticks+", '"+id+"');", 1000);
}
handler.innerHTML = buffer;
}