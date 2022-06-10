let textArea = document.getElementById("postContent");

sceditor.create(textArea, {
	format: 'xhtml',
	style: 'minified/themes/default.min.css',
    width: '100%',
    fonts: "Arial,Arial Black,Comic Sans MS,Courier New,Georgia,Impact,Sans-serif,Serif,Times New Roman,Trebuchet MS,Verdana",
    resizeEnabled: "false"
});