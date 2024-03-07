(()=>{"use strict";const e=window.wp.element,t=window.wp.blocks,r=(window.wp.i18n,window.wp.blockEditor),o=JSON.parse('{"$schema":"https://schemas.wp.org/trunk/block.json","apiVersion":2,"name":"gutena/form-error-msg","version":"1.0.0","title":"Error Message","parent":["gutena/forms"],"category":"gutena","icon":"feedback","description":"Form Error Message. It will show after form submission.","attributes":{"description":{"type":"string","default":""},"settings":{"type":"object","default":{}}},"supports":{"__experimentalSettings":true,"align":["wide","full"],"html":false,"spacing":{"margin":true,"padding":true},"__experimentalLayout":true},"textdomain":"gutena-forms","editorScript":"file:./index.js","editorStyle":"file:./index.css","style":"file:./style-index.css"}'),s=window.wp.components;(0,t.registerBlockType)(o,{icon:()=>(0,e.createElement)(s.Icon,{icon:()=>(0,e.createElement)("svg",{width:"16",height:"16",viewBox:"0 0 16 16",fill:"none",xmlns:"http://www.w3.org/2000/svg"},(0,e.createElement)("path",{d:"M8 16C3.5816 16 0 12.4184 0 8C0 3.5816 3.5816 0 8 0C12.4184 0 16 3.5816 16 8C16 12.4184 12.4184 16 8 16ZM8 14.4C9.69739 14.4 11.3253 13.7257 12.5255 12.5255C13.7257 11.3253 14.4 9.69739 14.4 8C14.4 6.30261 13.7257 4.67475 12.5255 3.47452C11.3253 2.27428 9.69739 1.6 8 1.6C6.30261 1.6 4.67475 2.27428 3.47452 3.47452C2.27428 4.67475 1.6 6.30261 1.6 8C1.6 9.69739 2.27428 11.3253 3.47452 12.5255C4.67475 13.7257 6.30261 14.4 8 14.4ZM7.2 10.4H8.8V12H7.2V10.4ZM7.2 4H8.8V8.8H7.2V4Z",fill:"#C51919"}))}),edit:function({className:t,attributes:o,setAttributes:s,isSelected:n,clientId:i}){const l=(0,r.useBlockProps)();return(0,e.createElement)("div",l,(0,e.createElement)(r.InnerBlocks,{template:[["core/group",{},[["core/paragraph",{placeholder:"Error message goes here..."}]]]],allowedBlocks:["core/columns","core/group","core/image","core/paragraph","core/social-links","core/embed"]}))},save:function(t){const o=r.useBlockProps.save();return(0,e.createElement)("div",o,(0,e.createElement)(r.InnerBlocks.Content,null))}})})();