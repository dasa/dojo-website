//>>built
define("dojox/mobile/Button","dojo/_base/array dojo/_base/declare dojo/_base/window dojo/dom dojo/dom-class dojo/dom-construct dojo/touch dojo/on ./common dijit/_WidgetBase dijit/form/_ButtonMixin dijit/form/_FormWidgetMixin dojo/has dojo/has!dojo-bidi?dojox/mobile/bidi/Button".split(" "),function(k,e,f,l,m,n,d,g,p,b,q,r,h,s){b=e(h("dojo-bidi")?"dojox.mobile.NonBidiButton":"dojox.mobile.Button",[b,r,q],{baseClass:"mblButton",_setTypeAttr:null,isFocusable:function(){return!1},buildRendering:function(){if(this.srcNodeRef){if(this._cv){var a=
this.srcNodeRef.firstChild;a&&3===a.nodeType&&(a.nodeValue=this._cv(a.nodeValue))}}else this.srcNodeRef=n.create("button",{type:this.type});this.inherited(arguments);this.focusNode=this.domNode},postCreate:function(){this.inherited(arguments);this.domNode.dojoClick="useTarget";var a=this;this.on(d.press,function(b){b.preventDefault();if(!a.domNode.disabled){a._press(!0);var c=!1;a._moveh=g(f.doc,d.move,function(b){c||(b.preventDefault(),c=!0);a._press(l.isDescendant(b.target,a.domNode))});a._endh=
g(f.doc,d.release,function(b){a._press(!1);a._moveh.remove();a._endh.remove()})}});p.setSelectable(this.focusNode,!1);this.connect(this.domNode,"onclick","_onClick")},_press:function(a){if(a!=this._pressed){this._pressed=a;var b=this.focusNode||this.domNode,c=(this.baseClass+" "+this["class"]).split(" "),c=k.map(c,function(a){return a+"Selected"});m.toggle(b,c,a)}},_setLabelAttr:function(a){this.inherited(arguments,[this._cv?this._cv(a):a])}});return h("dojo-bidi")?e("dojox.mobile.Button",[b,s]):
b});
//# sourceMappingURL=Button.js.map