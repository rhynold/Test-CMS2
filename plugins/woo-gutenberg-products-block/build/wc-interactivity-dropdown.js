(()=>{"use strict";var e={};(e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})})(e);const t=window.wc.__experimentalInteractivity;(0,t.store)("woocommerce/interactivity-dropdown",{state:{get placeholderText(){const e=(0,t.getContext)(),{selectedItem:l}=e;return l.label||"Select an option"},get isSelected(){const e=(0,t.getContext)(),{currentItem:{value:l}}=e;return e.selectedItem.value===l||e.hoveredItem.value===l}},actions:{toggleIsOpen:()=>{const e=(0,t.getContext)();e.isOpen=!e.isOpen},selectDropdownItem:e=>{const l=(0,t.getContext)(),{currentItem:{label:o,value:n}}=l,{selectedItem:a}=l;a.value===n&&a.label===o?l.selectedItem={label:null,value:null}:l.selectedItem={label:o,value:n},l.isOpen=!1,e.stopPropagation()},addHoverClass:()=>{const e=(0,t.getContext)(),{currentItem:{label:l,value:o}}=e;e.hoveredItem={label:l,value:o}},removeHoverClass:()=>{(0,t.getContext)().hoveredItem={label:null,value:null}}}}),(this.wc=this.wc||{})["wc-interactivity-dropdown"]=e})();