/////CKEditor
  /*  tinyMCE.init({
// General options
    mode : "exact",
    elements : "txt1, txt2",
    theme : "advanced",
    language : "ru",
    plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
// Theme options
    theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,formatselect,fontselect,fontsizeselect",
    theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,media,help,code,|,insertdate,inserttime,|,forecolor,backcolor",
    theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,|,sub,sup,|,charmap,emotions,|,print,|,ltr,rtl,|,fullscreen",
    theme_advanced_buttons4 : "",
    theme_advanced_toolbar_location : "top",
    theme_advanced_toolbar_align : "left",
    theme_advanced_statusbar_location : "none",
    theme_advanced_resizing : true,
    theme_advanced_path : false,

// Example content CSS (should be your site CSS)
    content_css : "/styles/mystyle.css",
});*/
/////CKEditor


function Selected(a) {
    var label = a.value;
    if (label == 1) {
        document.getElementById("Label1").style.display = 'block';
        document.getElementById("Label2").style.display = 'block';
        document.getElementById("Label3").style.display = 'block';
        document.getElementById("Label4").style.display = 'block';
        document.getElementById("Label5").style.display = 'block';
    } else if (label == 2) {
        document.getElementById("Label1").style.display = 'none';
        document.getElementById("Label2").style.display = 'none';
        document.getElementById("Label3").style.display = 'none';
        document.getElementById("Label4").style.display = 'none';
        document.getElementById("Label5").style.display = 'block';
    } else {
        document.getElementById("Label1").style.display = 'none';
        document.getElementById("Label2").style.display = 'none';
        document.getElementById("Label3").style.display = 'none';
        document.getElementById("Label4").style.display = 'none';
        document.getElementById("Label5").style.display = 'none';

    }
}


$('select option[value=2]').hide();