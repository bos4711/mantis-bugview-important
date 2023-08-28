const element = $("td.bug-priority");
const orgText = element.text();
const newText = '<i class="fa fa-exclamation-triangle fa-lg red " title="immediate"></i>';
const strText = '<strong style="font-size: 14px">' + orgText + "</strong>";

// For important tickets, emphase the text. For other ticket priorities,
// do nothing.
if (orgText === "immediate")
    element.html(newText + strText + newText); 
