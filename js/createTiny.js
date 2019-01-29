new TINY.editor.edit('editor',{
  id:'input',
  width:1363,
  height:398,
  cssclass:'te',
  controlclass:'tecontrol',
  rowclass:'teheader',
  dividerclass:'tedivider',
  controls:['bold','italic','underline','strikethrough','|','subscript','superscript','|',
      'orderedlist','unorderedlist','|','outdent','indent','|','leftalign',
      'centeralign','rightalign','blockjustify','|','unformat','|','undo','redo','n',
      'todoc','font','size','style','|','image','hr','link','unlink','|','cut','copy','paste','print'],
  footer:true,
  fonts:['Verdana','Arial','Courier New','Times New Roman','Impact'],
  xhtml:true,
  cssfile:'style.css',
  bodyid:'editor',
  footerclass:'tefooter',
  toggle:{text:'show source',activetext:'show wysiwyg',cssclass:'toggle'},
  resize:{cssclass:'resize'}
});
