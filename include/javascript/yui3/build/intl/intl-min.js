/*
Copyright (c) 2010, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.com/yui/license.html
version: 3.3.0
build: 3167
*/
YUI.add("intl",function(d){var b={},a="yuiRootLang",e="yuiActiveLang",c=[];d.mix(d.namespace("Intl"),{_mod:function(f){if(!b[f]){b[f]={};}return b[f];},setLang:function(g,j){var i=this._mod(g),f=i[e],h=!!i[j];if(h&&j!==f){i[e]=j;this.fire("intl:langChange",{module:g,prevVal:f,newVal:(j===a)?"":j});}return h;},getLang:function(f){var g=this._mod(f)[e];return(g===a)?"":g;},add:function(g,h,f){h=h||a;this._mod(g)[h]=f;this.setLang(g,h);},get:function(h,g,j){var f=this._mod(h),i;j=j||f[e];i=f[j]||{};return(g)?i[g]:d.merge(i);},getAvailableLangs:function(h){var f=d.Env._loader,g=f&&f.moduleInfo[h],i=g&&g.lang;return(i)?i.concat():c;}});d.augment(d.Intl,d.EventTarget);d.Intl.publish("intl:langChange",{emitFacade:true});},"3.3.0",{requires:["event-custom"]});